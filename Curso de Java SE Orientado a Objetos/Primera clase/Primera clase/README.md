## Orientación a Objetos

Surge a partir de los problemas que tenemos y necesitamos plasmar en código.
- Observar los problemas en forma de objetos.

## Curso Java SE Orientado a Objetos

**Paradigma**: Teoría que suministra la base y modelo para resolver problemas

### Se compone de estos 4 elementos:

- Clases
- Propiedades
- Métodos
- Objetos

### Tiene estos pilares:

- Encapsulamiento
- Abstracción
- Herencia
- Polimorfismo

UML: Unidied Modeling Language / Lenguaje de Modelado Unificado.

- Clases
- Casos de Uso
- Objetos
- Actividades
- Iteración
- Estados
- Implementación

## ¿Qué es un objeto?

Pueden ser Físicos o Conceptuales
- Usuario
- Sesión

Propiesdades: 
También pueden llamarse **atributos**, serán sustantivos
También pueden llamarse atributos, serán sustantivos
- Nombre
- Tamaño
- Forma
- Estado

Comportamientos
Serán todas las operaciones del objeto, suelen ser verbos o sustantivo y verbo
- login(), logout(), makeReport()
- Siempre los comportamientos serán verbos
- Los verbos van a describir las acciones del objeto.
- Las propiedades de los objetos siembre serán atributos / sustantivos

## Abstracción: ¿Qué es una Clase?

### Clase
- Es el modelo sobre el cual se construirá nuestro objeto.
- Las clases me permitirán generar más objetos.

Analizar Objetos para crear Clases (Para abstraer su composición, y entonces generar un molde)

- Abstraer su composición para generar un molde que tengan las mismas carácteristicas, y comportamientos. Parte de la filosofía de la programación orientada a objetos es la reutilización del código.

**Clases**: Son los modelos sobre los cuales construiremos Objetos.

### UML 
<img width="683" alt="Captura de Pantalla 2023-01-16 a la(s) 1 48 44 a m" src="https://user-images.githubusercontent.com/56992179/212624707-5fdea26f-d070-4571-8ef1-1a994939bbe3.png">

### 
**Famosa clase persona (Open CamelCase)**
<img width="668" alt="Captura de Pantalla 2023-01-16 a la(s) 1 50 16 a m" src="https://user-images.githubusercontent.com/56992179/212624999-7528a062-cb28-4671-8618-bf8165ec4319.png">

## Método constructor
- Crea nuevas instancias de una clase.
- Tiene el mismo nombre que la clase que inicializa.
- Usa la palabra reservada new para invocarlo.
- Usa cero o más argumentos contenidos dentro de los paréntesis que siguen al nombre.
- No regresa un valor.

## Static: Variables y Métodos Estáticos

### Métodos static
Utilizamos static para llamar una varible sin utilizar un objeto. En el otro caso utilizaremos los objetos para llamar métodos.
- Se pueden usar en toda la clase.
- Está definido por la palabra reservada **static**.
- Puede ser accesado indicando el nombre de la clase, la notación punto, y el nombre del método.
- Se invoca en una clase que no tiene instancias de la clase.

