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


# Colecciones incorporadas en Python
## Operaciones
- Tamaño
- Pertenencia
- String
- Igualdad

- Concatenación
- Conversión de tipo
- Insertar
- Remover
- Reemplazar
- Acceder

## Listas/Lists
- Propósito general
- Estructura más utilizada
- Tamaño dinámico
- De tipo secuencial
    - Definidos por un indice y aumentando de uno en uno
- Ordenable

<img width="629" alt="Listas" src="https://user-images.githubusercontent.com/56992179/162027684-0bac3a0c-c4d8-4807-8960-ce765ad1c1d0.png">

## Tuplas/Tuples
- Inmutable (no se pueden añadir o cambiar)
    - No podemos añadir más elementos de los que tiene
- Útiles para datos constantes
- Más rápidas que las listas
- Tipo secuencial
    - Ordenados por un índice

<img width="628" alt="Tuplas" src="https://user-images.githubusercontent.com/56992179/162027703-188520cf-ddbb-40e6-907c-90336400f949.png">    

# Conjuntos/Sets 
- Almacenan objetos no-duplicados
 - Si añadimos un elemento más de una vez, no se va a repetir
- De acceso rápido
- Aceptan operaciones lógicas
    - Conjunción, disyunción y más
- Son desordenadas
    - Puede ser una receta de cocina

<img width="629" alt="Conjuntos" src="https://user-images.githubusercontent.com/56992179/162027717-91989d4d-d2fd-459e-bc4e-11063d601282.png">

# Diccionarios/Dictionaries
- Pares de llave/valor
 - Elementos que referencian a otros datos
- Arrays asociativos (hash maps)
    - Nombres de personas y edades
- Son desordenados
    - Rápidos para realizar consultas

<img width="628" alt="Diccionarios" src="https://user-images.githubusercontent.com/56992179/162027732-d5ff5960-2300-4fcc-bbe0-e67f964d6992.png">    

# Arrays
## ¿Qué es una estructura de datos?
- Representación interna de una colección de información

## Conceptos clave
- **Elemento**: Valor almacenado en las posiciones del array
- **Índice**: Referencia a la posición del elemento

**Representación**
<img width="631" alt="Memoria" src="https://user-images.githubusercontent.com/56992179/162032237-041aabb8-22fe-40ca-9691-5e96e050db22.png">

**Ocupando cierto número de bits (1 byte)**
<img width="628" alt="Byte" src="https://user-images.githubusercontent.com/56992179/162032426-d34f442b-91b2-4898-aa12-c3252402014f.png">

<img width="628" alt="Hola" src="https://user-images.githubusercontent.com/56992179/162032462-2568fc6b-789b-4954-be2d-2e474c3c364d.png">

**Esquema de arrays**
<img width="629" alt="Arrays" src="https://user-images.githubusercontent.com/56992179/162028730-7e3ee773-812f-4fff-a139-5e64e92bda9c.png">

- En Python se recomienda que no trabajemos con estructuras de datos de más de dos dimenciones, debido que aumenta la complejidad de computo para acceder a los datos y el código se vuelve más difícil de leer

- ¿Los array son listas?
**Si, sin embargo las listas no son arrays**

## Los array son restrictivos
- No pueden
    - Agregar posiciones
    - Remover posiciones
    - Modificar su tamaño
    - Su capacidad se define al crearse
    
- Cubo: Altura, longitud y profundidad

### ¿Dónde se utilizan?
- Un videojuego con sprites 100*100 px
- Opciones en un menú

## Módulo 'array'
- Sólo almacena números y caracteres
- Basado en listas

# Crear un array

## Nuestro propio array
- Métodos:
    - Crearse
    - Longitud
    - Representación string
    - Pertenencia
    - Índice
    - Remmplazo
