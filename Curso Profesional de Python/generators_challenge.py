import time

def fibo_gen(limit=None):
    n1 = 0
    n2 = 1
    
    if not limit:
        while True:
            yield n1
            n1, n2 = n2, n1+n2
    else:
        while n1 <= limit:
            yield n1
            n1, n2 = n2, n1 + n2            

if __name__ == '__main__':
    fibonacci = fibo_gen(21)
    for element in fibonacci:
        print(element)
        time.sleep(.05)