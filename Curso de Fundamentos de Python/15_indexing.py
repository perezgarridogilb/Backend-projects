text = "Ella sabe Python"
print(text[0])
print(text[1])

size = len(text)
print('size =>', size)
print(text[size - 1])
# Por defecto entiende que es el último
print(text[-1])

# slicing 

print(text[0:5])
print(text[10:16])
print(text[:10])
print(text[5:-1])
print(text[5:])
print(text[:]) 
print(text[10:16:2])
