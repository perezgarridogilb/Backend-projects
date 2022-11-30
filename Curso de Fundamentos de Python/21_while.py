""" if True:
    print('se ejecutó') """

counter = 0

while counter < 10:
    counter += 1
    print(counter)

counter = 0

while counter < 20:
    counter += 1
    if counter == 15:
        # romple el siclo, se sale
        break
    print(counter)    

counter = 0

while counter < 20:
    counter += 1
    if counter < 15:
        # lo que iba a continuación no lo hace y pasa al siguiente a iterar
        continue    
    print(counter)    
    