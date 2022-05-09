# AWS Cloud
Curso Básico de MongoDB

# Qué es el backend

- Tomando como base un modelo cliente servidor. Se suele usar el término "backend" para referirse a software ejecutado en el servidor

- Una aplicación podría ser únicamente la "entrada" al Backend

- El Backend de un sistema puede expandirse mucho más allá de una arquitectura cliente-servidor

<img width="636" alt="Captura de Pantalla 2022-05-07 a la(s) 3 11 49 p m" src="https://user-images.githubusercontent.com/56992179/167270372-bcccebed-ed3f-4fe2-961f-a8c2420517d3.png">

# Visión general de las TI tradicionales

## Qué son los sistemas distribuidos

- **Sistema monolítico**: Es un sistema conformado por una sola "pieza"

- **Sistema Distribuido**: Compuesto de múltiples componentes que se comunican entre sí usando redes.

### Ejemplo sistema monolítico

Un único servidor que hospeda uno o más sitios web con LAMP stack

- Linux
- APACHE
- MySQL
- PHP

# Significado de "Distribuido" en la práctica

Aunque sabemos que es un sistema conformado por muchos conectados por medio de redes, puede manifestarse en diferentes escalas e implementar múltiples patrones de arquitectura.

<img width="636" alt="Captura de Pantalla 2022-05-07 a la(s) 3 11 49 p m" src="https://user-images.githubusercontent.com/56992179/167278885-d451cebb-6a96-4128-b572-0f94a95e09bb.png">>

# Elementos de un sistema distribuido en la nube

- Load Balancers
- Máquinas Virtuales
- Bases de Datos (Relacionales y No Relacionales)
- Servicios de Colas (ej. SQS)
- Servicios de Storage (ej. S3)
- Servicios Publisher-Subscriber (ej. SNS)
- Pipelines
- etc

*¿Hasta dónde puede llegar a crecer un sistema distribuido?*

### Backend Sistema 2

Observar el frontend donde tenemos una aplicación, navegador web, que se comunican a través de internet utilizando la nube para acceder a servicios como red social, otro sistema de página de ventas, puede tener servicios múltiples para implementar toda esa funcionalidad repartidos en diferentes regiones a través del planeta (servidores en varias partes del mundo), podemos tener servicios repartidos en continentes, países, etc. Idealmente sería conectarse a una región cercana (podemos globalizar, escalar nuestro sistema a que esté repartido en diferentes partes del mundo)

<img width="639" alt="Captura de Pantalla 2022-05-07 a la(s) 11 19 33 p m" src="https://user-images.githubusercontent.com/56992179/167281574-337411e4-a601-41b0-983a-ae159942be48.png">

# ¿Cómo se conecta todo en el backend?

El backend de un sistema puede estar conformado por múltiples componentes para su funcionamiento.

Sin embargo, independientemente de la implementación, generalmente de la implementación, generalmente debe exponer una **API (Interfaz de Programación de Aplicaciones.**)

<img width="637" alt="Captura de Pantalla 2022-05-08 a la(s) 12 01 18 a m" src="https://user-images.githubusercontent.com/56992179/167282581-7a7b330c-b172-4616-ad59-f9737e7fcd7f.png">

## Recordemos

- Diferencias entre Frontend y Backend
- Sistemas Monolíticos
- Sistemas Distribuidos
- Elementos que encontramos en estos sistemas
- Qué es un API

## Proyecto del curso

Dados ciertos requerimientos de negocio, diseñar e implementar un sistema sobre el que ejecutaremos una suite de tests confirmando el correcto funcionamiento por medio de su API.

## Definición y requerimientos del sistema desde la perspectiva de negocio

# Proyecto de curso de Arquitectura de Backend

## Objetivo

La meta del estudiante consiste en aprender a desarrollar un sistema de Backend desde 0, llevando a cabo la interpretacion de "requerimientos de negocio" hasta la implementacion del mismo, y debera realizarse tomando en cuenta la planificacion de una arquitectura que detalle en alto nivel como el sistema propuesto cumple con los casos de uso derivados de los requerimientos.

## Requerimientos del cliente

La empresa "RandomCameraReviews" necesita un sistema que permita que fotografos profesionales suban "reviews" de Camaras fotograficas, para que cualquier persona desde cualquier parte del mundo pueda buscar los los reviews y comprarlas a travez de su portal.
La empresa cuenta con un equipo de developers especializado en frontEnd que realizara un portal para que los editores suban los "reviews" y los usuarios puedan verlos, y han solicitado que tu como especista en Backend, les proporciones un sistema, incluyendo API que permita  realizar lo siguiente:

- Subir reviews de Camaras fotograficas
- Obtener el contenido de los reviews para mostrarlo en vistas del portal en sus versiones web y mobile.
- Manejo de usuarios para editores (no incluye visitantes que leen los reviews)

Tambien se sabe que la empresa "RandomCameraReviews" planea distribuir mayormente en America del Sur donde esta su mercado mas grande, pero tambien tienen ventas en norte america, Europa, y muy pocas en Asia.

<img width="1280" alt="Captura de Pantalla 2022-05-08 a la(s) 1 17 12 a m" src="https://user-images.githubusercontent.com/56992179/167284426-0f42ad29-1e30-4abf-9230-cebb5e8e184f.png">

## Documento de diseño

Eplicando el diseño:

## Revisión de diseño

Cosas importantes a tener en cuenta:

**¿Por qué?** Especifica por qué una alternativa es mejor que otra o por qué puede beneficiar más.
**¿Cómo afecta la infraestructura?** Especifica cómo va a beneficiar en cuanto a infraestructura se refiere (recuerda que la infraestructura es toda esa distribución que tenemos planeada, desde las localizaciones de los sistemas, etc.)
**¿Cómo ligarlo con los requerimientos originales del negocio?** Verifica si tus propuestas realmente satisfacen los requerimientos que tienes que resolver
**¿Cómo mejoran los costos?** Mira si tus propuestas ayudan a disminuir costos en infraestructura

Esto permite:

- Iterar hasta llegar a la solución final
- Tener alternativas
- Mejorar en general (como en costos)

<img width="1280" alt="Captura de Pantalla 2022-05-08 a la(s) 11 39 51 p m" src="https://user-images.githubusercontent.com/56992179/167341827-1de0c56a-f3f9-49c3-b6ae-0e7114316ea5.png">

# Elaboración de la arquitectura del sistema

1. Entender el problema resolver.
2. Realizar las preguntar pertinentes.
3. Evaluar los escenarios o casos de uso del problema.
4. Bosquejar soluciones posibles.
5. Pedir feedback.

MongoDB es una base de datos gratis y de código abierto No Relacional basada en documentos que nos permite guardar una gran cantidad de documentos de forma distribuida. Mongo también es el nombre de la compañía que desarrolla el código de esta base de datos.

Una de sus principales características es que nos permite guardar nuestras estructuras o documentos en formato JSON (no exactamente JSON, pero si algo muy parecido, lo veremos más adelante) para tener una gran flexibilidad a la hora de modelar situaciones de la vida real.

Por ser una base de datos distribuida podemos hablar no de uno sino de varios servidores, lo que conocemos como el Cluster de MongoDB. Gracias a esto obtenemos una gran escalabilidad de forma horizontal (escalabilidad en cantidad de servidores).

MongoDB es “Schema Less” lo que permite que nuestros documentos tengan estructuras diferentes sin afectar su funcionamiento, algo que no podemos hacer con las tablas de las bases de datos relacionales. Su lenguaje para realizar queries, índices y agregaciones es muy expresivo.

## Características de MongoDB

- Los documentos son almacenados en una estructura parecida a un JSON (BSON)
    - BSON: Representación binaria de JSON
- Es una Base de Datos distribuida (podremos escalar de forma horizontal)
Escalamientos:
<img width="680" alt="i1" src="https://www.oscarblancarteblog.com/wp-content/uploads/2017/03/escalamiento-vertical.png">

<img width="680" alt="i2" src="https://www.oscarblancarteblog.com/wp-content/uploads/2017/03/escalamiento-horizontal.png">

- Schema less: Dentro de las colecciones (similar tablas) podremos guardar documentos donde no necesariamente tengan la misma estructura, esto nos ayuda a que la base de datos crezca con nuestra aplicación a medida que **vamos agregando nuevas funcionalidades**. Podremos cambiar la estructura de los documentos sin tener que intercambiar de conexión o ejecutar querys de balanceo como sucede en las Bases de Datos relacionales.
- Queries (es prácticamente JavaScript), índices y agregaciones (extraer información)
- Código abierto
- Gratis

<img width="745" alt="Captura de Pantalla 2022-04-28 a la(s) 12 08 10 a m" src="https://user-images.githubusercontent.com/56992179/165680949-a3180876-d4df-466b-b189-07cfc3c3c895.png">

Aporte de la comunidad:

Ecosistema:
🦚🦚Mongodb🦚🦚
- Mongodb Server
- Mobile
- Stich(server less)
------------------------------------------
- Community
- Enterprice (Necesitamos licencia)
- Atlas (Cloud)
------------------------------------------
Mongodb Shell -> Consola de comandos
Mongodb Compass -> Visor gráfico
Conectores -> librerias de comunicacion
Mongodb charts -> Herramientas de Bi

# MongoDB Atlas
Tenemos varios proveedores que nos permiten utilizar o alquilar MongoDB como servicio y en este caso vamos a usar MongoDB Atlas por ser desarrollado por las mismas personas que desarrollan MongoDB.

## MongoDB Atlas (características):

- Aprovisionamiento automático de clusters con MongoDB
- Alta disponibilidad
- Altamente escalable
- Seguro
- Disponible en AWS, GCP y Microsoft Azure
- Fácil monitoreo y optimización

Overview:

<img width="1392" alt="Captura de Pantalla 2022-04-28 a la(s) 10 59 18 p m" src="https://user-images.githubusercontent.com/56992179/165883623-cfb7b6f5-abb5-4d60-8ee0-3ea745355ae0.png">

## MongoDB y Docker

### Docker

```

docker run -d -p 27017:27017 --name=platzi mongo
docker exec -it platzi bash

```

### Mongo

```

# Ejecutar MongoDB
mongo

# ver nuestras bases de datos, por defecto hay dos:
# admin
# local
> show dbs
admin   0.000GB
config  0.000GB
local   0.000GB

# Crear colección: si la colección no exite la crea automagicamente
> use usuarios
switched to db usuarios
> db
usuarios

# Insertar nuestro primer registro dentro de la colección
> db.usuarios.insertOne({name: `John`, age: 31, city: `New York`})
{
	"acknowledged" : true,
	"insertedId" : ObjectId("626b8c336a04f60b5d3bc455")
}

# Vistar colecciones
> show collections
usuarios

# Listar los registros de una colección find()/findOne()
> db.usuarios.findOne()
{
	"_id" : ObjectId("626b8c336a04f60b5d3bc455"),
	"name" : "John",
	"age" : 31,
	"city" : "New York"
}

```

<img width="1392" alt="Captura de Pantalla 2022-04-29 a la(s) 7 37 35 p m" src="https://user-images.githubusercontent.com/56992179/166083760-dda1512e-59a6-477f-9ddb-f0d4a8d60365.png">

# MongoDB + Drivers

## Drivers
<img width="681" alt="Captura de Pantalla 2022-04-29 a la(s) 7 40 54 p m" src="https://user-images.githubusercontent.com/56992179/166083765-85a569ee-f8d7-4f67-944b-54fcfb72eb6d.png">

## Arquitectura
<img width="678" alt="Captura de Pantalla 2022-04-29 a la(s) 7 44 07 p m" src="https://user-images.githubusercontent.com/56992179/166083898-ad599bc5-75d9-4ec9-b832-f2a2eff215db.png">

## Agregar drivers
<img width="680" alt="Captura de Pantalla 2022-04-29 a la(s) 7 48 08 p m" src="https://user-images.githubusercontent.com/56992179/166084167-36b8785e-a3c3-42b3-b348-dc05b2880cf9.png">

## Lenguaje orientado a objetos
<img width="681" alt="Captura de Pantalla 2022-04-29 a la(s) 7 49 15 p m" src="https://user-images.githubusercontent.com/56992179/166084171-2a859f4c-5fc8-4b7b-966c-5747403a6815.png">

Aporte de la comunidad:

- **¿Qué son los drivers en MongoDB?**
Son las librerías que utilizamos para comunicar nuestra aplicación con nuestra base de datos.
Sin nuestros drivers no podemos trabajar con nuestros cluster de base de datos.
- **¿Cómo agregar los drivers dentro de nuestro proyecto?**
Usamos un gestor de dependencias. Lo agregamos en nuestro gestor de dependencia; si usamos NodeJS, utilizamos: `npm install mongodb --save`.

Python: `python -m pip install pymongo`

Java con maven:
```
# build.gradle
compile 'org.mongodb:mongo-java-driver:2.12.3'`
```

Dependencias:
```
<dependencies>
    <dependency>
        <groupId>org.mongodb</groupId>
        <artifactId>mongo-java-driver</artifactId>
        <version>2.12.3</version>
    </dependency>
</dependencies>
```

# Bases de datos, Colecciones y Documentos en MongoDB

Las Bases de Datos son los contenedores físicos para nuestras colecciones. Cada base de datos tiene un archivo propio en el sistema de archivos de nuestra computadora o servidor y un Cluster puede tener múltiples bases de datos.

- Contenedor físico de colecciones
- Cada base de datos tiene su archivo propio en el sistema de archivos
- Un cluster puede tener múltiples bases de datos

Las Colecciones son agrupaciones de documentos. Son equivalentes a las tablas en bases de datos relacionales pero NO nos imponen un esquema o estructura rígida para guardar información.

- Agrupación de documentos
- Equivalente a una tabla en las bases de datos relacionales
- No impone un esquema

Los Documentos son registros dentro de las colecciones. Son la unidad básica de MongoDB y son análogos a los objetos JSON pero en realidad son BSON.

- Un registro dentro de una colección
- Es análogo a un objeto JSON (BSON)
- La unidad básica dentro de MongoDB

## Base de Datos

- Dentro de una Base de Datos pueden haber múltiples colecciones y dentro de las múltiples colecciones pueden haber multiples documentos

<img width="681" alt="Captura de Pantalla 2022-04-30 a la(s) 7 50 17 p m" src="https://user-images.githubusercontent.com/56992179/166127490-9457c3f5-19a2-4e07-8cf8-87ea87cf8dd3.png">

### Conversión

<img width="682" alt="Captura de Pantalla 2022-04-30 a la(s) 7 53 35 p m" src="https://user-images.githubusercontent.com/56992179/166127561-0358e0b8-2214-4a14-81db-458c08524b6d.png">

# Operaciones CRUD desde Compass

<img width="1392" alt="Captura de Pantalla 2022-04-30 a la(s) 9 16 01 p m" src="https://user-images.githubusercontent.com/56992179/166129708-388b6652-8c3d-4c53-a067-9694fab10920.png">

# Tipos de datos
- **Strings**: Nos sirven para guardar textos.
- **Boolean**: Información cierta o falsa `(true y false)`.
- **ObjectId**: Utilizan el tiempo exacto en el que generamos la consulta para siempre generan IDs únicos. Existen en BSON pero no en JSON.
- **Date**: Nos sirven para guardar fechas y hacer operaciones de rangos entre ellas.
- **Números**: **Doubles, Integers, Integers 64 bits y Decimals**.

<img width="682" alt="Captura de Pantalla 2022-04-30 a la(s) 9 56 04 p m" src="https://user-images.githubusercontent.com/56992179/166130602-a2a03471-c7fc-43e9-b64f-68beb7678d81.png">

- **Documentos Embebidos**: Documentos dentro de otros documentos `({})`.

<img width="681" alt="Captura de Pantalla 2022-04-30 a la(s) 9 56 24 p m" src="https://user-images.githubusercontent.com/56992179/166130607-ef8430aa-c714-42a9-9baa-976489986029.png">

- **Arrays**: Arreglos o listas de cualquier otro tipo de datos, incluso, de otras listas.

<img width="679" alt="Captura de Pantalla 2022-04-30 a la(s) 9 57 19 p m" src="https://user-images.githubusercontent.com/56992179/166130614-5ea404b0-8bc9-44a9-be2e-df8d1dfff5e7.png">

# ¿Qué son los esquemas y las relaciones?

- Los esquemas son la forma en que organizamos nuestros documentos en nuestras colecciones. MongoDB no impone ningún esquema pero podemos seguir buenas prácticas y estructurar nuestros documentos de forma parecida (no igual) para aprovechar la flexibilidad y escalabilidad de la base de datos sin aumentar la complejidad de nuestras aplicaciones.

- Las relaciones son la forma en que nuestras entidades o documentos sen encuentran enlazados unos con otros. Por ejemplo: Una carrera tiene multiples cursos y cada curso tiene multiples clases.

Caso uno:
<img width="678" alt="Captura de Pantalla 2022-05-01 a la(s) 6 03 32 p m" src="https://user-images.githubusercontent.com/56992179/166168267-915d7643-a93c-406b-b8c6-7c81bd80c3b8.png">

Caso dos:
<img width="678" alt="Captura de Pantalla 2022-05-01 a la(s) 6 02 55 p m" src="https://user-images.githubusercontent.com/56992179/166168209-69f768e3-1a3c-4b4b-a504-787674effbc9.png">

Caso tres:
<img width="678" alt="Captura de Pantalla 2022-05-01 a la(s) 6 03 32 p m" src="https://user-images.githubusercontent.com/56992179/166168197-52922e5d-23cd-474c-be14-f70ea385506e.png">

Aporte de la comunidad:

## MongoDB vs SQL:

- MongoDB tiene mucha flexibilidad y no nos impone seguir una estructura o esquema bien definido.
- SQL nos impone una estructura bien definida a más no poder; es super no-flexible.
- Con MongoDB es más fácil empezar y añadir nuevas funcionalidades.
- Con SQL es más demorado de empezar porque debemos tener el orden super claro siempre. Todos los elementos deben tener los mismos elementos y todos deben ser del mismo tipo. Si queremos agregar un nuevo campo debemos añadirlo en todas partes con un valor pode defecto, aunque no lo necesitemos.
- Si no seguimos buenas prácticas en MongoDB, vamos a necesitar queries ultra-complejas, demoradas y una visita diaria al psicólogo 😱.
- El orden impuesto de SQL no es por nada. Las queries son fáciles de entender porque todo sigue su orden y tranquilidad. Aunque, implementar nuevas features toma su buen tiempo 🤔.
- Para mi el ganador es MongoDB siempre y cuando sigamos buenas prácticas desde el principio. Un gran poder conlleva a una gran responsabilidad

# Relaciones entre documentos
Las documentos embebidos nos ayudan a guardar la información en un solo documento y nos ahorra el tiempo que tardamos en consultar diferentes documentos a partir de referencias. Sin embargo, las referencias siguen siendo muy importantes cuando debemos actualizar información en diferentes lugares de forma continua.

- **One to one**: Documentos embebidos
- **One to many**: Documentos embebidos cuando la información no va a cambiar muy frecuentemente y referencias cuando si.

## Proyecto
<img width="679" alt="Captura de Pantalla 2022-05-01 a la(s) 6 08 56 p m" src="https://user-images.githubusercontent.com/56992179/166169188-c21f2b59-94cb-4069-9efe-cee3cef8b585.png">

Relaciones uno a muchos usando documendos embebidos

# Operadores para realizar queries y proyecciones

## Filtros
<img width="678" alt="Captura de Pantalla 2022-05-01 a la(s) 6 42 40 p m" src="https://user-images.githubusercontent.com/56992179/166169408-b621f6e8-4185-4a1b-9619-d9d24b3ecf04.png">

## Proyecciones
<img width="679" alt="Captura de Pantalla 2022-05-01 a la(s) 6 42 04 p m" src="https://user-images.githubusercontent.com/56992179/166169404-f8f5c774-2093-4937-84a1-0d93b79240e1.png">

## Operadores de comparación
<img width="678" alt="Captura de Pantalla 2022-05-01 a la(s) 6 27 11 p m" src="https://user-images.githubusercontent.com/56992179/166169004-d0631265-3b05-4db3-8690-7938b28b190a.png">

## Operadores lógicos
<img width="675" alt="Captura de Pantalla 2022-05-01 a la(s) 6 27 56 p m" src="https://user-images.githubusercontent.com/56992179/166169012-51aa4dde-dda1-49c9-8874-d044890fc474.png">

## Operadores por elemento
<img width="677" alt="Captura de Pantalla 2022-05-01 a la(s) 6 28 34 p m" src="https://user-images.githubusercontent.com/56992179/166169022-47b68085-7f4e-4d92-bf9c-217681e655f9.png">

## Operadores para arreglos
<img width="677" alt="Captura de Pantalla 2022-05-01 a la(s) 6 30 06 p m" src="https://user-images.githubusercontent.com/56992179/166169033-04024e09-0c80-4f7e-94f9-312882517843.png">

# Operaciones avanzadas con Agregaciones

En este enlace se encuentran la referencia a todos los operadores que se encuentran en MongoDb, antes de emplear lógica adicional para realizar una operación vale la pena echar una ojeada a la lista de operadores que en algunos casos pueden facilitar mucho las cosas.

Para realizar las relaciones entre carreras y cursos empleamos los operadores $addToSet y $pull estos operadores sirven para agregar $addToSet o retirar $pulldocumentos de un arreglo dependiendo del filtro que aplicamos.

Así cuando ejecutamos db.carreras.update_one({'_id': ObjectId(json['id_carrera'])}, {'$addToSet': {'cursos': curso}}) $addToSet lo que hace es agregar el objeto curso al arreglo cursos, si el arreglo cursos no existe lo crea.

Para retirar un curso de una carrera usamos $pull de la siguiente manera db.carreras.update_one({'_id': ObjectId(json['id_carrera'])}, {'$pull': {'cursos': {'_id': ObjectId(json['id_curso'])}}}) aquí $pull recibe un filtro y todos los elementos del arreglo cursos que cumplan con ese filtro serán borrados.

skip() y limit()

Si tenemos una consulta que retorna 100 documentos pero solamente necesitamos los documentos del número 20 al 30, la manera de hacerlo es usando skip() y limit().

Si tenemos 100 carreras y solamente queremos las primeras 10 podemos ejecutar db.carreras.find({}).limit(10) esta nos traerá las primeras 10 carreras.

Ahora si queremos las carreras ubicadas en los puestos 40 y 50 lo que debemos hacer es db.carreras.find({}).skip(40).limit(10)

Como vemos skip() y limit() son muy útiles para realizar paginaciones, cuando tenemos consultas que retornan muchos documentos y que en algunos casos la totalidad de los documentos no es utilizada es buena práctica limitar el número de documentos que hacemos viajar entre nuestro cluster de base de datos y el código de nuestra aplicación. Esto puede ayudar a mejorar la velocidad con que las consultas son procesadas por la aplicación.

## Ejercicios de práctica usando operadores

```
// Arreglo de ejemplo
use test
db.inventory.insertMany(

[{ _id: 1, item: { name: "ab", code: "123" }, qty: 15, tags: [ "A", "B", "C" ] },
{ _id: 2, item: { name: "cd", code: "123" }, qty: 20, tags: [ "B" ] },
{ _id: 3, item: { name: "ij", code: "456" }, qty: 25, tags: [ "A", "B" ] },
{ _id: 4, item: { name: "xy", code: "456" }, qty: 30, tags: [ "B", "A" ] },
{ _id: 5, item: { name: "mn", code: "000" }, qty: 20, tags: [ [ "A", "B" ], "C" ] }]

)

// $or
db.inventory.find({$or: [{qty: {$gt: 25}}, {qty: {$lte: 15}}]})

// $gte
db.inventory.find({qty: {$gte: 25}})

// $size
db.inventory.find({tags: {$size: 2}})

// Insertemos estos documentos de ejemplo en la colección survey
db.survey.insertMany([
{ _id: 1, results: [ { product: "abc", score: 10 }, { product: "xyz", score: 5 } ] }
{ _id: 2, results: [ { product: "abc", score: 8 }, { product: "xyz", score: 7 } ] }
{ _id: 3, results: [ { product: "abc", score: 7 }, { product: "xyz", score: 8 } ] }
])

// $elemMatch
db.survey.find(
   { results: { $elemMatch: { product: "xyz", score: { $gte: 8 } } } }
)

db.survey.find(
   { results: { $elemMatch: { product: "xyz" } } }
```

# Proyecto en Flask

<img width="1372" alt="Captura de Pantalla 2022-05-03 a la(s) 8 26 29 p m" src="https://user-images.githubusercontent.com/56992179/166615753-89850bc5-bd29-4f19-8067-7ab1a6b57fd4.png">
