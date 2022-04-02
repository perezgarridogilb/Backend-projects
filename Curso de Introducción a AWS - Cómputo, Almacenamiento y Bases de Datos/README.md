# AWS Cloud
Curso de Introducción a AWS: Cómputo, Almacenamiento y Bases de Datos

# Cómputo dentro de AWS

## Instancias (o máquinas virtuales)
**Elastic Computed Cloud (EC2)**
- **Amazon EC2**: Maquinas virtuales seguras y redimensionables
- **Amazon EC2 Spot**: Cargas de trabajo tolerante a fallas, por hasta el 90% del precio normal
- **Amazon EC2 AutoScallin**: Agregar o eliminar la capacidad informática para satisfacer tus necesidades en demanda
- **Amazon EC2 LightSail**: (Plataforma en la nube para crear una aplicación o un sitio web)

### Contenedores
- **Amazon Elastic Container Services (ECS)**: Servicio para correr contenedores, confiables y escalables
- **Amazon Elastic Container Registry (ECR)**: Servicio para almacenar, administrar, e implementar imágenes de contenedores
- **Amazon Elastic Kubernetes Service (EKS)**: Servicio de kubernetes

### Edge
Servicios de borde

- **Amazon Outposts**: Ejecutar los servicios de AWS en nuestros propios servidores en lugar de Amazon
- **Amazon Snow Family**: Servicio que te permite tener una gran cantidad de datos, tiene discos desde el tamaño de un disco duro portátil hasta un semirremolque completo lleno de discos de almacenamiento. La familia de Snow tiene una solución útil que tenga que pasar a la nube
- **AWS Wavelength**: Servicio que permite acceder a los servicios AWS desde dispositivos 5G sin tener que acceder por internet (muy rápido)
- **VMWare AWS**: Migrar carga de trabajo de VMWare
- **AWS Local Zones**: Ejecutar las aplicaciones a una latencia más cerca de los usuarios finales

## Explorando EC2
- EC2 Elastic Compute Cloud
- Permite alquilar computadoras virtuales.
- Diferentes tipos de EC2 con diferente CPU (para alto rendimiento), RAM y almacenamiento (para grandes cargas de trabajo).
- Instancias optimizadas en computación (para la una lectura y escritura rápido)
- El sistema de pago más común: paga por hora o segundo, dependiendo el tipo de instancia

## Ejemplo de precios
>24 hours * 0.10 instances = $2.40

## 

>24 instances * 0.10 tasks of one hour = $2.40

**Pagas lo mismo por**
- 24 tareas de 1h en una instancia o 24 instancias de 1h

## Opciones y precios bajo demanda
Algunas de las muchas opciones a escoger

<img width="637" alt="Opciones y precios bajo demanda" src="https://user-images.githubusercontent.com/56992179/161367823-83193235-5eba-449f-b0d6-20db4f61c1fe.png">

# Contenedores
Cotenedores
Programador Común, escribe un fragmento de código

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

```
express --version
4.16.1
```

Los lenguajes de programación también pueden tener diferentes versiones (node.js, python, java, etc) y esto puede complicarse si cada programador utiliza una versión diferente

**Docker**
El propósito de un contenedor es crear un paquete de tu programa y todas sus librerías y dependencias que utiliza con las versiones especificadas con las que has estado desarrollando. Para producir una imagen que pueda ser ejecutada en cualquier ordenador alrededor del mundo.

<img width="699" alt="Docker" src="https://user-images.githubusercontent.com/56992179/161367545-03bbae15-2d98-486d-8bbb-9e41a0bf5fd6.png">

## Amazon Elastic Container Service
Amazon ECS es el servidor de contenedor de contenidos, donde puedes implementar tus imágenes en contenedores de AWS

<img width="636" alt="Amazon Elastic Container Service" src="https://user-images.githubusercontent.com/56992179/161367539-573f3826-bf68-4be8-96c6-086dac0d36bb.png">

# Aprendiendo sobre Lambda
Supongamos que queremos tener una aplicacion que diariamente envia un mensaje en twitter.

## Requisitos
API twitter, EC2, SO Linux, lenguajde de programación Python
Network, Hard drive, Actualizaciones
## AWS Lambda
Servicio informático sin servidor
Ejecuta su código en respuesta a eventos.
## Caso de uso
Subes una imagen y el lamba crea varias resoluciones

## Facturacion por milisegundos
El precio depende del uso de RAM
128MB RAM x 30M eventos por mes.
$11.63 al mes

<img width="638" alt="Lambda" src="https://user-images.githubusercontent.com/56992179/161367650-365e49b8-621f-43aa-936f-00c98e076c4c.png">