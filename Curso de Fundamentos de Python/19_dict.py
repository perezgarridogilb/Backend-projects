my_dict = {}
print(type(my_dict))

my_dict = {
    'avion': "bla bla bla",
    'name': 'Nicolas',
    'last_name': 'Molina Monroy',
    'age': 87
}

print(my_dict)
print(len(my_dict))

print(my_dict['age'])
# Directamente es mejor preguntar con get
print(my_dict.get('age'))

# También podemos prevenir así con un if, ya que es booleano
print('avion' in my_dict)
print('otroqueno' in my_dict)
