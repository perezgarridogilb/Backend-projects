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