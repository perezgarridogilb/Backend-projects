name = "Mesio"
print(type(name))
name = 12
print(type(name))
name = True
print(type(name))

print("Mesio" + " Fierro")
print(10 + 20)
print("Mesio" + "12")

age = 12
print("Mi edad es: " + str(age))
"""
Aquí automáticamente hace la conversión 
"""
print(f"Mi edad es {age}")

"""
Con string da error
"""

age = int(input('Escribe tu edad =>'))
print(type(age))
age += 10
print(f'Tu edad en 10 años será {age}')
