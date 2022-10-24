name = "Gilberto"
last_name = 'Pérez'
print(name)
print(last_name)

full_name = name + " " + last_name
print(full_name)

quote = "I'm Gilberto"
print(quote)

quote2 = ' She said "Hello"  '
print(quote2)

# format
template = "\nHola, mi nombre es " + name + " y mi apellido es " + last_name
print('v1 ', template)

template = "\nHola, mi nombre es {} y mi apellido es {}".format(name, last_name)

print('v2', template)

# f de format (la mejor)

template = f"\nHola, mi nombre es {name} y mi apellido es {last_name}"
print('v3', template)
