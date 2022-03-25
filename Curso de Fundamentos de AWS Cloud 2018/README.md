# AWS Cloud 
Curso de Fundamentos de AWS Cloud 

# Ejemplo de arquitectura con Elastic Beanstalk
Hay muchas formas de desarrollar un sistema en AWS, una de ellas es la arquitectura Elastic Beanstalk.

Esta arquitectura tiene como ventaja la alta disponibilidad y la eficiencia para atender una gran cantidad de usuarios. 

![Arquitectura con Elastic Beanstalk](https://user-images.githubusercontent.com/56992179/159625178-2feb8bbb-cf32-4212-9ac6-07ea3b59d603.jpg)

Conceptos importantes vistos en la clase:

- AWS Elastic Beanstalk: es un servicio de ASW que se utiliza para implementar y escalar servicios y aplicaciones web desarrolladas en JAVA, .NET, PHP, Node.js, Python, Go, entre otros, en servidores familiares como Apache y Nginx. Además se encargará de administar de manera automática la implementación, el aprovisionamiento de la capacidad, el equilibrio de la carga y el escalado de nuestra aplicación.

- CloudWatch: es un servicio de monitorieo y administración creado para desarrolladores, operadores de sistemas, entre otros. El servicio ofrece datos e información procesable para monitorear las aplicaciones, comprender cambios de rendimiento que afectan al sistema, optimizar recursos y lograr una vida unificada del estado de las operaciones. 

## EC2
EC2 es un conjunto de máquinas virtuales en AWS (Amazon Web Services) que puedes utilizar para ejecutar tus propias aplicaciones, tanto de calidad como desarrollo o incluso producción.

### Características de EC2 en AWS
- Instancias. Máquinas virtuales con diversas opciones de Sistema Operativo, vCPU, RAM y Disco Duro, entre otros.

- Seguridad. Generación de llaves únicas para conectarte a tu máquina Linux o Windows de forma segura. Es posible generar diferentes llaves o claves para diversas máquinas.

- Espacio. Diversas opciones de espacio en disco duro y es virtualmente infinito. Puedes anexar recursos en cualquier momento, si lo necesitas.

- Redundancia. Es posible tener diversas copias de la misma máquina en diversas regiones geográficas.

- Firewall. Puedes controlar desde dónde te puedes conectar a la máquina y a través de qué puertos. Además, es posible hacer modificaciones en términos de servicios y es muy fácil crear las reglas del firewall.

- Direcciones IP estáticas. Puedes optar por comprar una IP pública estática para que siempre puedas poner la última versión o la última máquina en esa IP.

- Respaldos. Puedes respaldar toda la máquina (ambiente, sistema operativo) cada vez que lo necesites. Además, los respaldos los puedes mover a diferentes regiones y tener múltiples copias disponibles.

- Escalable. Es posible incrementar o disminuir los recursos de la máquina (más vCPUs, más RAM, entre otros) cuando lo necesites.

- Migración de snapshot. Puedes copiar un snapshot a otras regiones, en caso de que algo suceda en la que estás trabajando o para agilizar la conexión desde otros lugares.

Recuerda que puedes consultar la documentación oficial de EC2 AWS en: https://docs.aws.amazon.com/es_es/AWSEC2/latest/UserGuide/concepts.html


*Aporte de la comunidad: *
Para ambientes de desarrollo y pruebas es recomendable utilizar los servidores de Amazon lightsail, y EC2 para el ambiente de producción

*Cálculo de costos: *
https://calculator.s3.amazonaws.com/index.html

### Connecting to our instance

Sistemas UNIX como Mac y Linux traen por defecto una terminal predeterminada que funciona perfecto para conectarte por SSH (secure shell) a nuestras instancias en AWS. Sin embargo, en Windows no hay alternativas nativas que funcionen tan bien, así que puedes usar MobaXterm, un software que te ayudara a conectarnos a nuestras instancias, ademas de muchos otros beneficios.

Recuerda que eres tienes las siguientes responsabilidades:

- Updates: Con las instancias, nosotros somos totalmente responsables de la actualización de OS
- Respaldos: Nuestra instancia no se respaldará sola, tendremos que hacerlo nosotros.
- Restauración snapshot: Podemos hacer respaldos antes de hacer grandes cambios para poder hacer rollback del Sistema en caso necesario.


```
chmod 600 platzi-prueba-llave.pem
``` 

```
ssh -i platzi-prueba-llave.pem ec2-user@35.175.175.122
```

# ¿Qué es Lambda y Serverless?

Lambda es un proyecto de AWS muy relacionado con el concepto de Serverless, dejar la administración de tus servidores en manos de Amazon para solo encargarte de las funciones de código que ejecutara tu aplicación.

## ¿Qué son?
Imagina lambda como un lugar donde puedes ejecutar funciones de tu código.

## Serverless
No existe un servidor como vimos en EC2, es decir, solo está el código en lamba y AWS se encarga de ejecutarlo cuando necesites.

## Lenguajes soportados
Puedes programar funciones lamba en Nodejs (JavaScript), Python, Java (8), C# (.Net Core) y Go.

Recuerda tener en cuenta los siguientes puntos:

- Memoria: Mínima de 128MB, máxima 3000MB con incrementos de 64MB.
- Límites de ejecución y espacio: Puedes correr tu aplicación hasta 300 segundos y tienes un /tmp limitado a 512MB.
- Ejecución paralela: Esta limitada a 1000 ejecuciones concurrentes (a un mismo tiempo), no tiene límite en ejecuciones secuenciales (una detrás de otra).
Ventajas de Lambda:

- Seguridad: Al ser una infraestructura compartida, no tienes que preocuparte de seguridad: AWS maneja todo.
- Performance: AWS está monitoreando constantemente la ejecución de tus funciones y se encarga de que siempre tenga el mejor performance.
- Código aislado: Tu código, aún estando en una infraestructura compartida, corre en un ambiente virtual exclusivo, aislado de las demás ejecuciones lamba.
Recuerda que AWS te regala 1 millón de peticiones lamba gratis el primer año.

# Creating Lambda functions
1. Configuración de las variables de entorno.
2. Configuración de etiquetas.
3. Dar un test o probar en código. (Antes de dar test, darle clic al botón color naranja que dice DEPLOY)

- No había creado un rol por lo que seleccioné “Creación de un nuevo rol con permisos básicos de Lambda” y funcionó perfecto.

<img width="1392" alt="Lmabda functions" src="https://user-images.githubusercontent.com/56992179/160213615-127c793f-b7d5-4443-9962-c004abcfe148.png">

- AWS: AWS Lambda
- Microsoft Azure: Azure Functions
- Google Cloud: Cloud Functions 

# Learning Elastic Beanstalk
Elastic Beanstalk es una plataforma donde en pocos pasos, obtienes un balanceador de cargas y tantas instancias EC2 como tu quieras.

Este ambiente puede escalar de manera dinámica de acuerdo al tiempo de respuesta a los usuarios, uso de CPU, uso de RAM, etc.

Esta herramienta soporta los siguientes ambientes:

Docker Image
Go
Java SE
Java con Tomcat
.NET + Windows Server + IIS
Nodejs
PHP
Python
Ruby

- EC2: Son Maquinas virtuales.
- Elastic Beanstalk: Es un arquitectura elástica de infraestructura.