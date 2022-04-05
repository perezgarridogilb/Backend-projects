# Estructuras de Datos Lineales con Python
Curso de Estructuras de Datos Lineales con Python

# Elementos de la programación en Python
## Programa que adivina numeros
```
"""
Code used during the class 'Elementos de la programación en Python'
Guess a number game with the user.
"""

import random

def main():
    """Input the upper and lower limit of a range of numbers
    and lets the user guess the random number until correct.
    """
    lower_limit = int(input("Enter the smaller number of the range: "))
    upper_limit = int(input("Enter the larger number of the range: "))
    secret_number = random.randint(lower_limit, upper_limit)
    tries = 0

    while True:
        tries += 1
        user_number = int(input("Enter a number to try to guess: "))

        if user_number < secret_number:
            print("Try with a higher number.")
        elif user_number > secret_number:
            print("Try with a lower number.")
        else:
            print(f"You won! It took you {tries} tries")
            break

if __name__ == "__main__":
    main()
```

## A tomar en cuenta
- Elementos léxicos
    - if, while, break, def, etc
- Convenciones
    - Variables
    - CONSTANTES
    - nombre_funcion
    - nombreClase
    - Docstrean

## A tomar en cuenta a grandez razgos
- Sintaxis
- Literales
- Operadores
- Import
- Condicionales
- Loops

## Estructuras propias
<img width="631" alt="Estructuras propias" src="https://user-images.githubusercontent.com/56992179/161651914-3be4b1f8-d97a-47b5-b3ec-84bf69a76135.png">

**Python tiene sus propias estructuras:**

Listas -> []
Tuplas -> ()
Conjuntos (sets) -> {}
Diccionarios -> {key: value}

## Operaciones esenciales
<img width="631" alt="Operaciones esenciales" src="https://user-images.githubusercontent.com/56992179/161651945-c5053208-7e7d-4e70-82df-6f02842c0e16.png">

## Funciones
- Declaración y llamada
- Recursivas
- Anidadas
- High order functions
- Lambdas

## Además
- Manejo de excepciones y errores
- Manipulación de archivos

# Tipos de colecciones

- **Colección**: Grupo de cero o más elementos que pueden tratarse como una unidad conceptual
Tipos de datos.

- Non-zeo Value
- Cero
- null
- undefined

## Dinámicas
Son aquelas que pueden variar su tamaño

## Inmutables
Que no cambian su tamaño

## Lineales
<img width="628" alt="Lineales" src="https://user-images.githubusercontent.com/56992179/161653404-fe573a95-6eb6-4662-8e67-22c19b403a5d.png">

- Ordenadas por posición
- Sólo el primer elemento no tiene predecesor

Ejemplos:

- Fila de personas
- Pila de cosas
- Cheklist

## Jerárquicas
<img width="631" alt="Captura de Pantalla 2022-04-04 a la(s) 7 14 22 p m" src="https://user-images.githubusercontent.com/56992179/161653892-51e87d8d-06f8-4050-a0ae-3d4e15eb1894.png">
- Ordenadas como arbol invertido
- Sólo el primer elemento no tiene predecesor
- Padres e hijos

Ejemplos:

- Sistema de directorios
- Índices de libros

## Grafos
<img width="629" alt="Captura de Pantalla 2022-04-04 a la(s) 7 16 21 p m" src="https://user-images.githubusercontent.com/56992179/161654193-5fa3cc7f-8eb3-4606-a8e7-fa56c788e41b.png">

- Cada dato puede tener varios predecesores y sucesores
- Estos se llaman vecinos

Ejemplos:
- Vuelos aéreos


## Desordenadas
<img width="627" alt="Captura de Pantalla 2022-04-04 a la(s) 7 17 14 p m" src="https://user-images.githubusercontent.com/56992179/161654201-a3ffc5c3-900c-472f-9ed9-14b0197df2ee.png">

Ejemplo:

- Bolsa de cosas
- Lotería

## Ordenadas
- Importa un orden con una regla
>item(i) <= item(i+1)'

Ejemplo:

- Catalógo
- Directorio

## Taxonomía
<img width="628" alt="Captura de Pantalla 2022-04-04 a la(s) 7 22 47 p m" src="https://user-images.githubusercontent.com/56992179/161654551-bd2e8107-4937-4331-8652-90f65f5e49d3.png">

## Eterno dilema
- Good
- Cheap
- Fast


