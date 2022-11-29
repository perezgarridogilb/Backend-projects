import json

person = {
    'name': "bla bla bla",
    'las_name': 'Nicolas',
    'langs': ['python', 'javascript'],
    'age': 87
}

print(json.dumps(person, indent=1))
# Actualizando llave
person['name'] = 'santi'
person['age'] -= 50
person['langs'].append('rust') 
print(person)

# eliminamos el par clave - valor del diccionario
del person['las_name']
person.pop('age')
print(person)

# Estructura en tuplas para ser recorrida
print('items')
print(person.items())

print('keys')
print(person.keys())

print('values')
print(person.values())
