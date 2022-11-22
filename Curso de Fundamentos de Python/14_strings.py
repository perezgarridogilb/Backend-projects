text = 'Ella sabe programar en Python'
print('JavaScript' in text)
print('Python' in text)

'''
if 'Python' in text:
    print('Elegiste bien!!')
else:
    print('También elegiste bien')   
'''
size = len(text)
print(size) 

print(text)
print(text.upper())
print(text.lower())
print(text.count('a'))

print(text.swapcase())
# INICIO
print(text.startswith('Ella'))
# FINAL
print(text.endswith('Rust'))

print(text.replace('Python', 'Go'))

text_2 = 'este es un título'

print(text_2)
# Primer en Mayus
print(text_2.capitalize())
# Poner el inicio en mayúscula
print(text_2.title())
# Pregunta si es un dígito
print(text_2.isdigit())
print("398".isdigit())


