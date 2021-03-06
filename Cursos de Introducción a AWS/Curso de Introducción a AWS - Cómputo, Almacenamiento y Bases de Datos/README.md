# AWS Cloud
Curso de Introducción a AWS: Cómputo, Almacenamiento y Bases de Datos

# Cómputo dentro de AWS

## Instancias (o máquinas virtuales)
**Elastic Computed Cloud (EC2)**
- **Amazon EC2**: Maquinas virtuales seguras y redimensionables
- **Amazon EC2 Spot**: Cargas de trabajo tolerante a fallas, por hasta el 90% del precio normal de una EC2
- **Amazon EC2 AutoScallin**: Agregar o eliminar (automáticamente) la capacidad informática para satisfacer tus necesidades en demanda
- **Amazon EC2 LightSail**: Plataforma en la nube para crear una aplicación o un sitio web

### Contenedores
- **Amazon Elastic Container Services (ECS)**: Servicio para correr contenedores, confiables y escalables
- **Amazon Elastic Container Registry (ECR)**: Servicio para almacenar, administrar, e implementar imágenes de contenedores
- **Amazon Elastic Kubernetes Service (EKS)**: Servicio de kubernetes (totalmente administrado por Amazon)

### Serverless
- **Amazon Lambda**: Servicio que nos permite ejecutar código sin servidores

### Edge
Servicios de borde

- **Amazon Outposts**: Ejecutar los servicios de AWS en nuestros propios servidores en lugar de Amazon
- **Amazon Snow Family**: Servicio que te permite tener una gran cantidad de datos (se pueden ordenar para colorcar archivos en ellos y luego se envían de regreso a Amazon y se cargan en nuestra cuenta de AWS), tiene discos desde el tamaño de un disco duro portátil hasta un semirremolque completo lleno de discos de almacenamiento. La familia de Snow tiene una solución útil que tenga que pasar a la nube
- **AWS Wavelength**: Servicio que permite acceder a los servicios AWS desde dispositivos 5G sin tener que acceder por internet (muy rápido)
- **VMWare AWS**: Migrar carga de trabajo de VMWare
- **AWS Local Zones**: Ejecutar las aplicaciones a una latencia más cerca de los usuarios finales

## Explorando EC2
**EC2 Elastic Compute Cloud**
- Permite alquilar computadoras virtuales.
- Diferentes tipos de EC2 con diferente CPU (para alto rendimiento), RAM y almacenamiento (para grandes cargas de trabajo).
- Instancias optimizadas en computación (para la una lectura y escritura rápida)
- El sistema de pago más común: paga por hora o segundo, dependiendo el tipo de instancia

## Ejemplo de precios
>24 hours * 0.10 instances = $2.40

## 

>24 instances * 0.10 tasks of one hour = $2.40

**Pagas lo mismo por**
- 24 tareas de 1h en una instancia o 24 instancias de 1h

## Opciones y precios bajo demanda
Algunas de las muchas opciones de instancias a escoger (se apaga y se enciende en caso de ser modificada)

<img width="637" alt="Opciones y precios bajo demanda" src="https://user-images.githubusercontent.com/56992179/161367823-83193235-5eba-449f-b0d6-20db4f61c1fe.png">

### Aporte de la comunidad

- **Precios de Amazon EC2**: Amazon EC2 ofrece diversas opciones de precios para distintos casos de uso. Por ejemplo, si tu caso de uso puede soportar interrupciones, puedes ahorrar con las instancias tipo spot. También puedes ahorrar si te comprometes de forma anticipada y bloqueas un nivel mínimo de uso con las instancias reservadas.

- **On Demand**: Las instancias bajo demanda son ideales para cargas de trabajo irregulares a corto plazo que no se pueden interrumpir. No se aplican costos iniciales ni contratos mínimos. Las instancias se ejecutan de forma continua hasta que las detengas y solo pagas por el tiempo de cómputo que utilizas.

- **Instancias Reservadas**: Las instancias reservadas son un descuento de facturación que se aplica al uso de instancias bajo demanda en tu cuenta. Puedes adquirir instancias reservadas por un periodo de 1 o 3 años reduciendo así los costos comparado con las instancias on-demand.

- **Instancias Spot**: Las instancias tipo spot son ideales para cargas de trabajo con horarios de inicio y finalización flexibles o que pueden soportar interrupciones. Las instancias tipo spot utilizan capacidad de cómputo de Amazon EC2 no utilizada y ofrecen ahorros de costos con un descuento de hasta el 90 % de los precios bajo demanda.

- **Hosts Dedicados**: Los hosts dedicados son servidores físicos con capacidad de instancias de Amazon EC2 totalmente dedicados al uso que desee. No son compartidos por otros clientes.

## Blogs de Platzi

**Amazon Web Services (AWS)**: es el servicio en la nube más usado hoy en día debido a la gran cantidad de herramientas que te proporciona con un bajo costo y varias opciones de almacenamiento, las cuales son:

### AWS S3
Es un servicio para almacenar objetos desde PDFs e imágenes hasta hojas de cálculo. Es similar al almacenamiento que podemos realizar en Google Drive o Dropbox. De hecho, Dropbox está construido en base a S3.

La principal característica de S3 es que brinda una alta disponibilidad y durabilidad de almacenamiento.

Dentro del mismo S3 contamos con distintas categorías:

**S3 Estándar**: Es la categoría de mayor precio por cada GB almacenado, pero también brinda los precios más bajos por cada solicitud que se haga.

**S3 Infrequent Access**: En comparación a S3 estándar, el precio de almacenaje por cada GB disminuye y aumenta el precio de cada solicitud realizada.

**S3 One Zone**: Los precios por solicitud realizada son los mismos a S3 IA, pero su precio de almacenamiento disminuye debido a que solamente proporciona una zona de disponibilidad.

**Glacier**: Solamente debe ser usado para backups y data histórica, el precio de almacenamiento por GB es el más económico. Está información tendrá una disponibilidad menor, siendo la frecuencia de acceso cada 6 meses o cada año.
Storage Gateway
Storage Gateway es un servicio híbrido que permite aprovechar todas las ventajas de la nube para arquitecturas on premise. Podremos transferir los datos que tengamos almacenados en nuestros datacenters e irlos integrando con S3, EBS y Glacier.

Storage Gateway utiliza protocolos NFS, SMB e iSCSI. Además, brinda todas las ventajas de seguridad y durabilidad que ya provee la nube de AWS.

### Elastic Block Storage (EBS)
Como su nombre lo indica, este sistema de almacenamiento es basado en bloques. Nos permite instalar sistemas operativos y aplicaciones, puede verse como el disco duro de nuestros servidores EC2.

Su precio va a ser por GB aprovisionado teniendo como límite bloques de 16TB.

Solamente podemos asociar un EBS a una instancia EC2.

### Elastic File System (EFS)
Supongamos que tenemos diferentes servidores dentro de AWS que quieren conectar a un mismo sistema de almacenamiento, aquí es donde nos vamos a beneficiar de EFS.

Este servicio nos brinda un endpoint para conectar de manera interna los servidores que tengamos en AWS.

Su precio es por cada GB consumido, no por GB aprovisionado.

Su principal funcionalidad es conceder un acceso compartido a múltiples instancias de EC2 basadas en sistemas operativos Linux.

### Conclusiones
En resumen, dentro de AWS contamos con varios tipos de almacenamiento que usaremos dependiendo del caso que tengamos:

Dentro de S3 es recomendable guardar backups, logs, archivos o contenido estático.
EBS es el disco duro que asociamos a una instancia de EC2, puede ser usado para Big Data, procesamiento de logs, bases de datos no relacionales, servidores con contenido dinámico, entre otros.
En EFS vamos a cargar información que múltiples instancias de EC2 tengan que compartir, pueden ser sitios web con escalamiento automático y almacenamiento centralizado.

# Contenedores
Cotenedores
Programador Común, escribe un fragmento de código
Bibliotecas: Fragmentos de código reutilizables (en cuanto a lo que se centra el curso)

**Código que usa una librería (http)**
```
// create a web server
const http = require( 'http');
const requestListener = function (request, response) {
  response.writeHead( 200, { "Content-Type': 'text/plain' });
  response.end('Hello World\n');
};
const server = http.createServer(requestListener);
server.listen(8080);
```
Un problema puede ser que hay diferentes versiones de la misma librería
```
{
	"name": "my-awesome-package",
	dependencies: {
		"axis": "0.21.0",
		"express" : "4.17.1",
          }
}
```

Aveces es un nombre sin una versión específicada
```
express --version
4.16.1
```

Los lenguajes de programación también pueden tener diferentes versiones (node.js, python, java, etc) y esto puede complicarse si cada programador utiliza una versión diferente

**Docker**
El propósito de un contenedor es crear un paquete de tu programa y todas sus librerías y dependencias que utiliza con las versiones especificadas con las que has estado desarrollando. Para producir una imagen que pueda ser ejecutada en cualquier ordenador alrededor del mundo.

<img width="699" alt="Docker" src="https://user-images.githubusercontent.com/56992179/161367545-03bbae15-2d98-486d-8bbb-9e41a0bf5fd6.png">

## Amazon Elastic Container Service
Amazon ECS es el servidor de contenedor de contenidos, donde puedes implementar tus imágenes de los contenedores de AWS

<img width="636" alt="Amazon Elastic Container Service" src="https://user-images.githubusercontent.com/56992179/161367539-573f3826-bf68-4be8-96c6-086dac0d36bb.png">

# Aprendiendo sobre Lambda
Supongamos que queremos tener una aplicación que diariamente envia un mensaje en twitter.

## Requisitos
API twitter, EC2, SO Linux, lenguaje de de programación Python
Network, Hard drive, Actualizaciones
## AWS Lambda
- Servicio informático sin servidor
- Ejecuta su código en respuesta a eventos.
- AWS Lambda ejecuta el código en alguna parte
## Caso de uso
Subes una imagen y el lamba crea varias resoluciones de la misma

## Facturacion por milisegundos
El precio depende del uso de RAM
128MB RAM x 30M eventos por mes.
$11.63 al mes

<img width="638" alt="Lambda" src="https://user-images.githubusercontent.com/56992179/161367650-365e49b8-621f-43aa-936f-00c98e076c4c.png">

# Almacenamiento en AWS
El se refiere al uso de servicios de la nube para poner tus datos a la nube, luego se le brinda herramientas para que se pueda acceder a todos los datos de diferentes maneras

## Almacenamiento
+ **Amazon Elastic File System (EFS) / Amazon FSx for Window File Server**: Archivo (basado en archivos), organizado por carpetas y subcarpetas (sistema de ficheros)
+ **Amazon Elastic Block Store (EBS)**: Bloque (almancenamiento por bloques), los archivos se divididen en fragmentos de datos de igual tamaño para ser almacenados en volúmenes de almacenamiento sin procesar
    * Bases de datos
    * Servidor de correo electrónico
+ **Amazon Simple Storage Service (S3)**: Objetos (almacenamiento como objeto), la información almacenada recibe un identificador único y se almacenan en un modelo de memoria plana (fácil de encontrar)

<img width="636" alt="Almacenamientos" src="https://user-images.githubusercontent.com/56992179/161400746-e762bb59-951e-4363-9b76-610efc7b16d8.png">

## Respaldo
- Amazon Backup

## Transferencia de datos
- **AWS Storage Gateway**: Es un conjunto de servicios de almacenamiento en la nube híbrida que le brinda acceso en las instalaciones al almacenamiento en la nube prácticamente ilimitado (virtualmente ilimitado)
- **AWS DataSync**: Es un servicio seguro en línea que automatiza y acelera el traslado de datos (hasta diez veces más rápido) entre las instalaciones y los servicios de almacenamiento de AWS
- **AWS Transfer Family**: Escala de forma segura sus transferencias recurrentes de archivos de empresa a empresa a Amazon Simple Storage Service (S3) y Amazon Elastic File System (EFS) con los protocolos SFTP, FTPS y FTP

# S3 y S3 Glacier
- Almacenamiento de objetos
- Garantía de no perdida del 99.999999999% (11 9’s)

## Clases de almacenamiento
- **S3 Standard**: Ofrece almacenamiento de objetos de alta durabilidad, disponibilidad y rendimiento para datos a los que se obtiene acceso con frecuencia
- **S3 Standard-IA (acceso poco frecuente)**: Se utiliza con datos a los que se obtiene acceso con menos frecuencia, pero que requieren un acceso rápido cuando es necesario
- **S3 Zone-IA (acceso poco frecuente)**: Se usa con datos a los que se obtiene acceso con menos frecuencia, pero que requieren un acceso rápido cuando es necesario. A diferencia de las demás clases de almacenamiento de S3, que almacenan datos en un mínimo de tres zonas de disponibilidad (AZ)
+ **S3 Glacier (archivo a largo plazo)**: Clase de almacenamiento de archivos que ofrece el almacenamiento de menor costo para los datos de larga duración a los que rara vez se accede. Se tarde entre 12h y 48h para su recuperación. 
- Archivo de datos y copia de seguridad a largo plazo
- $1/TB/month
- Funcionalidad de consulta
- Accede rápidamente a los datos de respaldo

- **S3 Glacier Deep Archive (archivo a largo plazo)**: Es la clase de almacenamiento más económica de Amazon S3, y admite la retención a largo plazo y la conservación digital de datos a los que se accede una o dos veces al año
- **S3 Intelligent-Tiering (intentará ahorrale dinero automáticamente)**: Es un nuevo tipo de almacenamiento de Amazon S3 diseñado para los clientes que deseen optimizar los costos de almacenamiento automáticamente cuando los patrones de acceso a los datos cambian, sin afectar el rendimiento o la sobrecarga operativa
- Ahorrando dinero moviendo objetos entre los cuatro diferentes accesos que tenemos dependiendo los patrones de uso

# Explicando EFS
Amazon Elastic File System (EFS) brinda un sistema de archivos elástico sencillo, sin servidor y práctico.
Permite conectarnos al sistema de archivos a través de la red con nuestros servidores EC2 de linux

<img width="636" alt="EFS" src="https://user-images.githubusercontent.com/56992179/161477286-f165dad3-45af-4db5-b874-bad5315f4ca3.png">

- Altamente disponible y duradero.
- EFS ha incorporado protección contra una interrupción de la zona de disponibilidad
- Clases de almacenamiento:brinda un sistema de archivos elástico sencillo, sin servidor y práctico. Sin tarifa mínima ni cargo de contratación.
    - Standar
    - Standar Standard Infrequent Access (IA): Acceso poco frecuente
- Encriptación de forma predeterminada: Permite cifrar archivos almacenados en nuestros volúmenes, manteniéndolos todos seguros y lejos de miradas indiscretas. Haces un resumen bantante rápido y simple para un servicio bastante simple

# AWS Storage Gateway
Tres puertas de acceso diferentes:

1. File Gateway: Te brinda interfaces SMB y NFS para amazon S3, tanto en windows como en linux
2. Tape Gateway: Migrar copias de seguridad o respaldo
3. Volume Gateway: en bloque iSCSI , tanto almacenado como en caché. Con baja latencia.


# Bases de datos en AWS
Colección ordenada de datos. Los datos se almacenan eletrónicamente y se acceden a ellos desde un sistema informático. **AWS cuenta con más de quince motores de bases de datos diferentes de todos los tipos**
- Seguros
- Altamente disponibles

## Bases de datos relacionales
- **Amazon Aurora**: Base de datos relacional compatible con MySQL y PostgreSQL creada para la nube.

- **Amazon Relational Database Service (Amazon RDS)**: Es un servicio de bases de datos relacionales administrado para MySQL, PostgreSQL, MariaDB, Oracle BYOL o SQL Server.
    - Facilita la configuración, el uso y el escalado de varios motores de bases de datos

- **Amazon Redshift**: Utiliza SQL para analizar datos estructurados y semiestructurados en almacenamientos de datos, bases de datos operativas y lagos de datos, con hardware y machine learning diseñado por AWS para ofrecer rendimiento al mejor precio a cualquier escala

## Bases de datos clave-valor
- **Amazon DynamoDB**: Amazon DynamoDB es una base de datos de documentos y valores clave que ofrece un rendimiento de milisegundos de un solo dígito a cualquier escala. Es una base de datos duradera, multiregión, multimaestro y totalmente administrada con seguridad integrada, copia de seguridad y restauración, y almacenamiento en caché en memoria para aplicaciones a escala de Internet
    - Dirigidas aplicaciones de web de alto tráfico, sistemas de comercio electrónico y aplicaciones de juego.
    - Muy rápida y flexible para cualquier escala (NoSQL)

## Bases de datos en memoria
- **Amazon ElastiCahce**: Amazon ElastiCache es un servicio de almacenamiento de caché en memoria completamente administrado que admite casos de uso flexibles y en tiempo real. Se usa para almacenar en caché administración de sesiones, tablas de clasificación de juegos y aplicaciones Geo-Espaciales
    - ElastiCache para Memcached
    - ElastiCache para Redis

## Bases de datos de documentos
- **Amazon DocumentDB (compatibilidad con MongoDB)**: Amazon DocumentDB es un servicio de base de datos de larga duración, de alta disponibilidad, rápida, escalable y completamente administrado para operar cargas de trabajo de MongoDB esenciales
- Gestión 
   - Contenidos
   - Catálogos
   - Perfiles de usuarios 

# Revisando RDS (Bases de datos relacionales)

## Ejemplo de base de datos relacional

<img width="634" alt="Captura de Pantalla 2022-04-17 a la(s) 6 18 14 p m" src="https://user-images.githubusercontent.com/56992179/163735818-c5c86364-9e74-4984-8fb8-75780d1a3856.png">

## Motores de base de datos en RDS
- MySQL
- MariaDB
- Microsoft SQL Server
- PostgreSQL
- Oracle
- Amazon Aurora

## Amazon RDS
- Facilita la configuración
- Servicio completamente administrado 
- Altamente escalable
- Copias de seguridad automáticas
- Realmente rentable

Nota: Similar a cómo funciona EC2

<img width="636" alt="Amazon Relational Database Service (Amazon RDS)" src="https://user-images.githubusercontent.com/56992179/162118197-217dc966-a1bf-46fa-b072-f125a2e953f0.png">

# Discutiendo sobre DynamoDB

- Base de datos de documentos clave-valor
- Rendimiento de milisegundos de un solo digito

<img width="636" alt="Captura de Pantalla 2022-04-17 a la(s) 6 29 00 p m" src="https://user-images.githubusercontent.com/56992179/163736073-bebd59cb-ffef-4e31-9ca2-9700c5b733a0.png">

- Completamente Administrado
- Funciona en múltiples regiones
- Seguridad, respaldo y restauración integrados
- Admite picos de 20,000,000 de solicitudes por segundo
- Realmente rentable

## Casos de uso
- Publicidad
- Juegos
- Comercio electrónico
- Banca
- Finanzas
- Medios
- Software
- Internet

<img width="634" alt="Casos de uso" src="https://user-images.githubusercontent.com/56992179/161893853-315c9df4-866a-48f9-b3f6-e6b6daba312e.png">

# Evaluando ElastiCache

## Motores
- ElastiCache para Redis
- ElastiCache para Memcached
