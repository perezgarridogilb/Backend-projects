""" 
for element in range(20):
    print(element) 
"""

my_list = [23, 45, 67, 89, 43]
for element in my_list:
    print(element)

my_tuple = ('nico', 'juli', 'santi') 
for element in my_tuple:
    print(element)       

product = {
    'name': 'Camisa',
    'price': 100,
    'stock': 89
}

# Sólo imprime las llaves
for element in product:
    print(element)    

# Imprime los valores
for key in product:
    print(key, '=>', product[element])    

# Items genera un array que lo vuelve tuplas
for key, value in product.items():
    print(key, '=>', value)    

# Lista de diccionarios
people = [
    {
        'name': 'nico',
        'age': 34
    },
    {
        'name': 'zule',
        'age': 45
    },
    {
        'name': 'santi',
        'age': 4
    }
]  

for person in people:
    print('name =>', person['name'])

