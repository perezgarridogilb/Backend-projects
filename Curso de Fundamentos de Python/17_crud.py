# CRUD Create, Read, Update & Delete

numbers = [1, 2, 3, 4, 5]
print(numbers[1])
numbers[-1] = 10
print(numbers)

numbers.append(700)
print(numbers)

# Agregar en posición
numbers.insert(0, 'hola')
print(numbers)

numbers.insert(3, 'change')
print(numbers)

# Fusionar
tasks = ['todo 1', 'todo 2', 'todo 3']
new_list = numbers + tasks
print(new_list)

# Saber posición en lista y agregar
index = new_list.index('todo 2')
new_list[index] = 'todo changed'
print(new_list)

new_list.remove('todo 1')
print(new_list)

new_list.pop()
print(new_list)

new_list.pop(0)
print(new_list)

# Invertir listas
new_list.reverse()
print(new_list)

numbers_a = [1, 4, 6, 3]
numbers.sort()
print(numbers_a)

# También en Strings

strings = ['re', 'ab', 'ed']
strings.sort()
print(strings)

# Deja atras los datos mezclados
new_list.sort()