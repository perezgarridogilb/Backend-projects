from unittest import result


['isabel', 'mulan', 255, ['pucca', 'percy']]

fruits = []

fruits.append("Kiwi")
fruits.append("Berry")
fruits.append("Melon")
# Ordenando
fruits.sort()
fruits

# Pop Melon
fruits.pop()

# Inserta Apple al inicio
fruits.insert(0, "Apple")
fruits

# Pop Apple
fruits.pop(0)

# Remove un elemento que se encuentre dentro
fruits.remove("Berry")

def pyramid_sum(lower, upper, margin=0):
    blanks = " " * margin
    print(blanks, lower, upper)
    if lower > upper:
        print(blanks, 0)
        return 0
    else:
        result = lower + pyramid_sum(lower + 1, upper, margin + 4)
        print(blanks, result)
        return result
# if __name__ : "__main__"        
pyramid_sum(1, 4)        