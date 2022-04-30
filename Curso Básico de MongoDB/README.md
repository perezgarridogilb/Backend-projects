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

<img width="681" alt="Captura de Pantalla 2022-04-29 a la(s) 7 40 54 p m" src="https://user-images.githubusercontent.com/56992179/166083765-85a569ee-f8d7-4f67-944b-54fcfb72eb6d.png">

<img width="678" alt="Captura de Pantalla 2022-04-29 a la(s) 7 44 07 p m" src="https://user-images.githubusercontent.com/56992179/166083898-ad599bc5-75d9-4ec9-b832-f2a2eff215db.png">

# Bases de datos, Colecciones y Documentos en MongoDB

