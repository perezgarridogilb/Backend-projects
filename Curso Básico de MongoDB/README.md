# AWS Cloud
Curso Básico de MongoDB

# Qué aprenderás sobre MongoDB

Presentación:

*¡Bienvenidas y Bienvenidos al Curso de Mongo DB!*

*Con nuestro profesor, Albert Ramírez, vamos a aprender sobre bases de datos NoSQL como MongoDB, cómo realizar operaciones CRUD desde la consola con MongoDB Compass o con tu lenguaje de programación favorito y cómo pasar nuestros clusters al entorno de producción.*

*El proyecto del curso es PlatziMongo, una API que responde las clases que hemos subido a la plataforma y esta hecha en Python con Flask. No te preocupes si no manejas muy bien estos temas, gran parte del código ya esta hecho para que nosotros solo nos preocupemos por crear los métodos necesarios para integrar el proyecto con MongoDB.*

<img width="680" alt="Captura de Pantalla 2022-04-25 a la(s) 12 37 15 a m" src="https://user-images.githubusercontent.com/56992179/165661060-1a4b8e17-be5d-455d-a041-86606b91d64f.png">

# Visión general de las TI tradicionales

## ¿Cómo funciona un sitio web?

Las bases de datos NoSQL tienen 4 grandes familias: Key Value Stores, basadas en grafos, columnares y basadas en documentos.

- **Key Value Stores**: Guardan la información en formato de llaves y valores. **Las usamos para guardar cache, información de sesión de los usuarios o cosas muy sencillas**. Son muy rápidas de consultar pero no podemos usarlas en casos más complejos donde necesitamos estructuras más especiales. El mejor ejemplo de estas bases de datos es Redis.

<img width="748" alt="Captura de Pantalla 2022-04-27 a la(s) 9 00 01 p m" src="https://user-images.githubusercontent.com/56992179/165661320-0d9539b2-d4be-4abe-bcbf-c91464d58f37.png">

- **Graph Databases**: Bases de datos basadas en Grafos. Nos permiten establecer conexiones entre nuestras entidades para realizar consultas de una forma más eficiente que en bases de datos relacionales (así como Twitter o Medium donde cada publicación tiene diferentes relaciones entre sus usuarios, likes, etc). Por ejemplo: Neo4j o JanusGraph.

- **Wide-column Stores**: Bases de datos columnares. Tienen una llave de fila y otra de columnas para hacer consultas muy rápidas y guardar grandes cantidades de información pero modelar los datos se puede volver un poco complicado. Las usamos en Big Data, IoT, sistemas de recomendaciones, entre otras. Por ejemplo: Cassandra o HBase.

- **Document Databases**: Bases de datos basadas en documentos. Nos permiten guardar documentos dentro de colecciones, tiene muy buena performance y flexibilidad que nos permite modelar casos de la vida real de forma sencilla y efectiva. Por ejemplo: MongoDB o CouchBase.

# Definición de MongoDB y su ecosistema (herramientas de uso)

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

# Relaciones entre documentos
Las documentos embebidos nos ayudan a guardar la información en un solo documento y nos ahorra el tiempo que tardamos en consultar diferentes documentos a partir de referencias. Sin embargo, las referencias siguen siendo muy importantes cuando debemos actualizar información en diferentes lugares de forma continua.

- **One to one**: Documentos embebidos
- **One to many**: Documentos embebidos cuando la información no va a cambiar muy frecuentemente y referencias cuando si.
