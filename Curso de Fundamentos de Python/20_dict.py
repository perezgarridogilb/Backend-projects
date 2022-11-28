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

del person['las_name']
print(person)
