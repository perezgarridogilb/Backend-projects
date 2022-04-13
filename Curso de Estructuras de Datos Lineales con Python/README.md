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

### Representación

<img width="631" alt="Memoria" src="https://user-images.githubusercontent.com/56992179/162032237-041aabb8-22fe-40ca-9691-5e96e050db22.png">

### Ocupando cierto número de bits (1 byte)

<img width="628" alt="Byte" src="https://user-images.githubusercontent.com/56992179/162032426-d34f442b-91b2-4898-aa12-c3252402014f.png">

### Ocupando cierto número de bits para el string de un hola
<img width="628" alt="Hola" src="https://user-images.githubusercontent.com/56992179/162032462-2568fc6b-789b-4954-be2d-2e474c3c364d.png">

### Esquema de arrays

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

# Arrays de dos dimensiones
## Estructura
- Bi-dimensional array
- Two-dimensional array
- Grid
- Rejilla
- Malla
- Tabla

<img width="627" alt="ArrayDimention1" src="https://user-images.githubusercontent.com/56992179/162330816-601a217d-4f11-4953-9a07-9d9fb9f131d8.png">

**¿Qué hicimos?**
Crear array de dos dimensiones sin reinventar la rueda, sino que utilizamos la clase array desarrollada anteriormente y la anidamos dentro de otro array incorporando nuevos métodos

## Clase grid
- Retomaba elementos de la clase array y creamos sus elementos propios de la clase grid
<img width="627" alt="Array1" src="https://user-images.githubusercontent.com/56992179/162330761-7989a0e6-18d7-452c-902f-49ecfb3e17a5.png">

- Referencia a cada uno de los datos en sus filas y columnas: usando loops anidados
<img width="627" alt="Array2" src="https://user-images.githubusercontent.com/56992179/162330742-1d8f11c6-d2fe-4818-a512-b8488336906c.png">

# Nodos y singly linked list
- Consiste de nodos conectados a otros
- Los más comunes son sencillos o dobles
- No se accede por índice, sino por recorrido

## Conceptos clave
- **Data**: Valor almacenado en nodos.
- **Next**: Referencia al siguiente nodo
- **Previus**: Referencia al nodo anterior 
- **Head**: Referencia al primer nodo
- **Tail**: Referencia al último nodo

### Los nodos están repartidos en la memoria
<img width="629" alt="Captura de Pantalla 2022-04-07 a la(s) 5 55 58 p m" src="https://user-images.githubusercontent.com/56992179/162334246-31d02eb8-9bc8-4543-adf3-a27c749dc958.png">

## Implementación
- Implementar otras estructuras
- Optimización

<img width="629" alt="Captura de Pantalla 2022-04-07 a la(s) 5 57 52 p m" src="https://user-images.githubusercontent.com/56992179/162334515-5beeaaf5-a863-40eb-a23a-3b6c920c5c88.png">
<img width="628" alt="Captura de Pantalla 2022-04-07 a la(s) 6 02 16 p m" src="https://user-images.githubusercontent.com/56992179/162334508-2bd2487f-4f66-4799-ac3d-38c28194f0ab.png">

## Linked lists
- Hacer/rehacer operaciones en un editor de texto
- Historial de un navegador

# Crear nodos
## Singly linked list con nodos
- Creamos una clase Node
- Referimos valores
- Unimos nodos iterando

## ¿Qué hicimos?
- Declaramos 3 variables n1(none), n2 y n3
<img width="632" alt="Captura de Pantalla 2022-04-07 a la(s) 6 25 34 p m" src="https://user-images.githubusercontent.com/56992179/162335602-d7cec337-dda8-4e67-bce7-3d335cee0fe3.png">

```
# Creating 3 differents nodes 
node1 = None
node2 = Node("A", None)
node3 = Node("B", node2)

# This causes an Atribute Error
# node1.next = node3

node1 = Node("C", node3)
```

<img width="630" alt="Captura de Pantalla 2022-04-07 a la(s) 6 27 43 p m" src="https://user-images.githubusercontent.com/56992179/162335610-08102341-8702-4c7f-b3b5-4fd351b80b3b.png">
<img width="630" alt="Captura de Pantalla 2022-04-07 a la(s) 6 28 05 p m" src="https://user-images.githubusercontent.com/56992179/162335624-f691ad09-84a7-4b76-b72b-1cabb3531ea1.png">

## ¿Qué hicimos?
<img width="631" alt="Captura de Pantalla 2022-04-07 a la(s) 6 28 26 p m" src="https://user-images.githubusercontent.com/56992179/162335676-dccdb703-2adc-4e70-878c-90c96cff7f5c.png">

# Operaciones en single linked structures
## El dilema
- Los arrays usan índices
- En linked structures debemos emularlos

## Variable auxiliar probe
- Puntero temporal
- Recorre la lista consultando datos

# Operaciones a detalle en single linked structures

## Operaciones
probe: Variable auxiliar para conocer qué había en cada uno de estos nodos
- Los fue recorriendo con while
- En una condición específica o bajo estas cincunstancias
    - Se detenía
    - Hacía modificaciones
    - Etcétera
    - En una sola vía
<img width="631" alt="Captura de Pantalla 2022-04-10 a la(s) 11 43 48 p m" src="https://user-images.githubusercontent.com/56992179/162667066-43933337-dd01-487f-be10-d1ea71752b2d.png">

## probe
<img width="627" alt="Captura de Pantalla 2022-04-10 a la(s) 11 49 50 p m" src="https://user-images.githubusercontent.com/56992179/162667031-c406345d-3e33-49c1-b0bc-809f90718f9a.png">

## Lista
<img width="631" alt="Captura de Pantalla 2022-04-10 a la(s) 11 59 27 p m" src="https://user-images.githubusercontent.com/56992179/162667877-85bb402e-ddc5-4f6e-a5f9-a22a5c6b7b96.png">

## Búsqueda
<img width="629" alt="Captura de Pantalla 2022-04-11 a la(s) 12 02 25 a m" src="https://user-images.githubusercontent.com/56992179/162668193-1648b8d1-787a-4691-b073-6f4a841ce1d0.png">

## Reemplazo
Busca tres y sobreescribe a la letra R

<img width="629" alt="Captura de Pantalla 2022-04-11 a la(s) 12 04 59 a m" src="https://user-images.githubusercontent.com/56992179/162668405-6f6a87ce-13ea-4a47-a7ae-76135eefd995.png">

## Insertar al final
<img width="628" alt="Captura de Pantalla 2022-04-11 a la(s) 12 09 57 a m" src="https://user-images.githubusercontent.com/56992179/162668918-af02b331-4a6d-4e5c-8172-407528a331de.png">

## Eliminar primer nodo

- Ubicar dónde esta ese nodo o mejor dicho, ese valor que queremos eliminar
    - Documentar para saber cuántos nodos vamos a tener
<img width="626" alt="Captura de Pantalla 2022-04-11 a la(s) 12 14 18 a m" src="https://user-images.githubusercontent.com/56992179/162669292-2bd70b75-048e-4127-bf27-318a3657a098.png">

## Eliminar útlimo nodo 

- Nota: Usar next/tail en caso de repetidos para ubicarlos

<img width="629" alt="Captura de Pantalla 2022-04-11 a la(s) 12 23 26 a m" src="https://user-images.githubusercontent.com/56992179/162670271-3f0b79a2-6e1b-4e5a-b769-5dce63bd362e.png">

- **Eliminando nodo en particular**:

<img width="632" alt="Captura de Pantalla 2022-04-11 a la(s) 5 47 05 p m" src="https://user-images.githubusercontent.com/56992179/162845703-8d2d13ee-59bf-4074-8551-f9da2dc94fce.png">

## Insertar nodo en cualquier posición

- Si ya no trabajamos con el principio head y tail: Aumenta la dificultad y complejidad de nuestras operaciones
- Trabajando con nodos intermedios: Si insertamos un nodo en N posición debemos saber donde lo vamos a ubicar
    - A traves del valor, contando los nodos o con una variable iteradora

<img width="629" alt="Captura de Pantalla 2022-04-11 a la(s) 5 55 51 p m" src="https://user-images.githubusercontent.com/56992179/162846526-baea61f3-6b5f-4471-aa63-54f6ece6b22b.png">

## Eliminar nodo en N posición (En este caso intermedia)

<img width="630" alt="Captura de Pantalla 2022-04-11 a la(s) 9 55 04 p m" src="https://user-images.githubusercontent.com/56992179/162870182-ac5340b6-1a13-4cc9-b417-b434921a98b0.png">

- **Resultado**:

<img width="629" alt="Captura de Pantalla 2022-04-11 a la(s) 9 56 46 p m" src="https://user-images.githubusercontent.com/56992179/162870343-4dc1d0ca-db50-4fbd-8aa9-f24da120d167.png">

# Circular linked list
<img width="630" alt="Captura de Pantalla 2022-04-11 a la(s) 4 19 27 p m" src="https://user-images.githubusercontent.com/56992179/162835648-c1088045-b13d-4fb6-a36f-210a1dc09c32.png">

## Nodo que se referencía a si mismo
Con varios nodos, siempre el último apunta al primero

<img width="630" alt="Captura de Pantalla 2022-04-11 a la(s) 5 29 40 p m" src="https://user-images.githubusercontent.com/56992179/162843847-9b95920d-6d6a-4f3e-8668-ddf287ff48fa.png">

# Double linked list
Clase con un nodo de doble vía que por defecto apunta a un nodo siguiente y a un valor anterior con el valor de none

<img width="629" alt="Captura de Pantalla 2022-04-12 a la(s) 6 40 34 a m" src="https://user-images.githubusercontent.com/56992179/162952863-a1d152e1-8105-4def-9e89-6a3a2141eff2.png">

# Stacks
El principio fundamental de los stacks es LIFO, es decir que el ÚLTIMO elemento en entrar será el primero en salir.

- Colección lineal
- Basados en arrays o linked lists
- LIFO (last-in-first-out)
- Añadir: push
- Top
- Bottom

<img width="630" alt="Captura de Pantalla 2022-04-12 a la(s) 7 24 42 a m" src="https://user-images.githubusercontent.com/56992179/162961872-a907f55e-9991-4220-abc7-c3da1512626b.png">

### Aplicaciones

<img width="631" alt="Captura de Pantalla 2022-04-12 a la(s) 8 31 29 a m" src="https://user-images.githubusercontent.com/56992179/162974118-5ab0cc98-79bf-424e-9d21-fb1cf585eb4b.png">

<img width="628" alt="Captura de Pantalla 2022-04-12 a la(s) 8 32 12 a m" src="https://user-images.githubusercontent.com/56992179/162974148-fb3e2a2b-659a-450b-af6d-299c6625b9d5.png">

<img width="629" alt="Captura de Pantalla 2022-04-12 a la(s) 8 35 12 a m" src="https://user-images.githubusercontent.com/56992179/162974658-ebcf4f63-f87e-4444-a913-af665829f623.png">

<img width="630" alt="Captura de Pantalla 2022-04-12 a la(s) 7 15 16 a m" src="https://user-images.githubusercontent.com/56992179/162974691-cfe0e066-37fd-43bd-beb2-14a3344e051c.png">

## ¿Qué hicimos?


<img width="630" alt="Captura de Pantalla 2022-04-12 a la(s) 9 39 21 a m" src="https://user-images.githubusercontent.com/56992179/162988872-a598728c-bef3-499c-a548-e6ccad3d10f7.png">

<img width="629" alt="Captura de Pantalla 2022-04-12 a la(s) 9 36 18 a m" src="https://user-images.githubusercontent.com/56992179/162987411-1cd414db-770e-419d-83d8-2091bcd5e183.png">

<img width="629" alt="Captura de Pantalla 2022-04-12 a la(s) 9 39 55 a m" src="https://user-images.githubusercontent.com/56992179/162988944-333a3149-b9ce-46a8-9360-8719b99e25e5.png">

# Queues

## Conceptos importantes

- **FIFO**: First-In, First-Out
- **Rear**: Último elemento
- **Front**: Primer elemento

## Queue basada en listas
<img width="632" alt="Captura de Pantalla 2022-04-12 a la(s) 8 22 48 p m" src="https://user-images.githubusercontent.com/56992179/163080688-1e354a19-7878-4ffb-8a5c-539f9718bc55.png">

<img width="629" alt="Captura de Pantalla 2022-04-12 a la(s) 8 23 32 p m" src="https://user-images.githubusercontent.com/56992179/163080706-988751af-fbc1-40d8-8f6d-a2876154b1df.png">

<img width="630" alt="Captura de Pantalla 2022-04-12 a la(s) 8 23 46 p m" src="https://user-images.githubusercontent.com/56992179/163080729-994f8433-1a2c-4952-ac52-581e9ef93283.png">

## Queue basada en dos stacks

<img width="629" alt="Captura de Pantalla 2022-04-12 a la(s) 11 17 25 p m" src="https://user-images.githubusercontent.com/56992179/163099696-dfca9e68-ee2f-4bd8-a543-8843c9565a4f.png">

<img width="630" alt="Captura de Pantalla 2022-04-12 a la(s) 11 17 47 p m" src="https://user-images.githubusercontent.com/56992179/163099706-c4c8b3c2-88be-4ac8-b12f-c75ed8c97aff.png">