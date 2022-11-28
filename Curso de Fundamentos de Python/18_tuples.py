# Inmutables (sin cambios)
numbers = (1, 2, 3, 5)
strings = ('nico', 'zule', 'santi', 'nico')
print(numbers)
print('0 =>', numbers[0])
# Final de mi tupla
print('-1 =>', numbers[-1])
print(type(numbers))

print(strings)
print(type(strings))

# CRUD
# numbers.append(10)
print(numbers)
# numbers[1] = 'changed'

print(strings)
print(strings.index('zule'))
print(f"Frecuencia de: ",strings.count('nico'))

my_list = list(strings)
print(my_list)
print(type(my_list))

my_list[1] = 'juli'
print(my_list)

my_tuple = tuple(my_list)
print(type(my_tuple))
