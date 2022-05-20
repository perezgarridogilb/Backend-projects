# Redes
*Es como estamos conectados las computadoras y la tecnología, y los servicios que permiten que esto suceda*

- Conectar computadoras entre sí es utilizar tecnología de redes
- Wifi es tecnología que permite la interconexión inalámbrica de dispositivos electrónicos (802.11n).
- Internet es cuando conectamos todas las computadoras entre sí (una red de computadoras), la cual es abierta a cualquier persona.

## Redes en la nube
- Amazon Virtual Private Cloud (Amazon VPC): Permite definir y aprovisionar una red aislada para nuestros recursos de AWS.
- AWS Transit Gateway: Permite conectar VPC's y los recursos locales. 
- AWS PrivateLink: Permite poporcionar conectividad privada entre las VPC's y las aplicaciones locales.
- Amazon Route 53: Permite alojar nuestro propio DNS administrado.

## Redes a escala
- Elastic Load Balancing: Permite distribuir automáticamente el tráfico de red a través de un grupo de recursos.
- AWS Global Accelerator: Permite redirigir el tráfico a través de la red global de AWS para mejorar el rendimiento de las aplicaciones globales.
- Amazon CloudFront: Permite entregar de forma segura datos, videos y aplicaciones a clientes de todo el mundo con baja latencia y altas velocidades de tranferencia.

# Qué es una VPC

## Redes

<img width="603" alt="Captura de Pantalla 2022-05-18 a la(s) 9 00 31 p m" src="https://user-images.githubusercontent.com/56992179/169187793-13c7e7fb-c03c-45bb-9dfa-d436827add6b.png">

Una computadora conectada a otra computadora, sea cual sea el método de conexión requiere de una **interfaz de red** (puente entre la tecnología utilizada para conectarse a la otra computadora).

- En medio tiene un conmmutador

## Rango de direcciones

*Es como una comunidad cerrada local*

- IPv4 (Conjunto del 0 al 254 separados por un punto (255 IP's)): `X.X.X.X`

- Para redes privadas ya se tienen especifados los rangos de IP’s:

- Los equipos dentro que se pueden comunicar con otros equipos dentro van desde:

    - 10.0.0.1
    - 172.16.0.1
    - 192.168.0.1

Una red local:

<img width="603" alt="Captura de Pantalla 2022-05-18 a la(s) 9 03 47 p m" src="https://user-images.githubusercontent.com/56992179/169188070-309f5e5a-2bae-4884-98f7-42a8daad4277.png">

## Amazon VPC

Nos va a permitir crear una red virtual para poder conectarnos a todos los servicios de AWS que existan en este rango de direcciones IP locales.

*Es como una pequeña red privada para nuestras máquinas virtuales*

<img width="600" alt="Captura de Pantalla 2022-05-19 a la(s) 12 19 49 a m" src="https://user-images.githubusercontent.com/56992179/169457010-64bb6eef-4b98-425b-8a76-e4240c23ce4b.png">

## Ejemplo de una VPC

<img width="600" alt="Captura de Pantalla 2022-05-19 a la(s) 12 19 49 a m" src="https://user-images.githubusercontent.com/56992179/169461609-d090e973-0e95-4241-b36f-04307f735233.png">

- Cuando creamos una EC2, AWS nos pregunta a qué VPC va a tener acceso y a cuál desea unirse

## Componentes en la VPC

- Nat Gateway: Para que las máquinas virtuales puedan acceder a internet.
- Internet Gateway: Para que internet pueda acceder a nuestras instancias de EC2.
- ACL Control List: Para controlar qué tráfico se permite, dentro y fuera de la red VPC y todos tienen la opción de configuración también

<img width="600" alt="Captura de Pantalla 2022-05-19 a la(s) 12 19 49 a m" src="https://user-images.githubusercontent.com/56992179/169374606-501ef702-6899-4e64-a530-61c52cb4d0df.png">

# Escogiendo CloudFront

## CloudFront

Amazon ElasticCache:

<img width="603" alt="Captura de Pantalla 2022-05-20 a la(s) 2 21 23 a m" src="https://user-images.githubusercontent.com/56992179/169642134-9f003222-4f21-40e5-ac4f-7f24915cc879.png">

- Seguridad muy grande (objetivo de ataque).
- Protegido contra picos de tráfico (maneja las solicitudes).
- Lambda@Edge (reduce la latencia).
- Métricas en tiempo real (ver todo lo que se está utilizando).
- Rentable (pagamos por lo que utilizamos).

## CloudFront
<img width="600" alt="Captura de Pantalla 2022-05-20 a la(s) 2 21 40 a m" src="https://user-images.githubusercontent.com/56992179/169642145-5f387d5b-60ed-46f5-8dc0-3e45b2ef1d7b.png">

- Baja latencia 
- Alta transferencia de datos


## Servicios de borde

*El tráfico de internet no tendrá que viajar por toda la mitad del mundo y regresar, para que nuestros usuarios puedan acceder a nuestro sitio web.*

*CloudFront servirá la mayor parte posible desde su sitio web, desde las ubicaciones del borde desde la Ciudad del cabo y Ojales Burgo.*

<img width="602" alt="Captura de Pantalla 2022-05-20 a la(s) 2 22 10 a m" src="https://user-images.githubusercontent.com/56992179/169642150-1bfc467e-d0c0-4d00-a94a-a986a0339152.png">

## Caso de uso

1. Accede a CloudFront
2. CloudFront redirigue automáticamente la solicitud de archivo desde la ubicación del borde más cercana
3. Los archivos se almacenan en la ubicación de borde, en su caché primero durante un periodo de tiempo límitado que nosotros necesitemos.
4. Si un visitante solicita el contenido que está almacenado en caché por más tiempo que el vencimiento específicado: CloudFront verifica que en el servidor de origen (servidor web) primeramente para ver si hay una nueva versión del archivo disponible.
5. Si hay una versión del archivo disponible: Regresa una copia de la versión en la ubicación del borde.
6. Cualquier cambio que realizemos en los archivos se replicará en las ubicaciones de borde a medida que sus visitantes están entrando y solicitando el contenido, y luego el cliente recibe el archivo (es lo que mantiene a los sitios web rápidos sin importar la ubicación del usuario).

Simulando conexión:

<img width="603" alt="Captura de Pantalla 2022-05-20 a la(s) 2 22 35 a m" src="https://user-images.githubusercontent.com/56992179/169642158-c0636664-2ed6-4e1d-8651-80fc09c3e27d.png">

Conexión simulada:

<img width="601" alt="Captura de Pantalla 2022-05-20 a la(s) 2 22 54 a m" src="https://user-images.githubusercontent.com/56992179/169642166-98d31597-d709-40ed-85a1-5cce69d9b379.png">

# Route 53

Servicio de DNS de AWS

## DNS

- Visitar: platzi.com

- Convierte (DNS: Servicio de tipo de Base de Datos): 104.17.175.85

- Excelente servicio de alojamiento de DNS's por $50 centavos de dominio al mes



<img width="604" alt="Captura de Pantalla 2022-05-20 a la(s) 2 28 23 a m" src="https://user-images.githubusercontent.com/56992179/169642175-b4afb600-f8e3-4f13-b280-cc7c1d498fe5.png">

<img width="603" alt="Captura de Pantalla 2022-05-20 a la(s) 2 29 02 a m" src="https://user-images.githubusercontent.com/56992179/169642184-2c3dcc01-f870-413e-bf20-ebd83f117246.png">

<img width="602" alt="Captura de Pantalla 2022-05-20 a la(s) 2 29 31 a m" src="https://user-images.githubusercontent.com/56992179/169642187-a3955862-aad0-4421-b923-1236c7a3c9c3.png">

<img width="602" alt="Captura de Pantalla 2022-05-20 a la(s) 2 30 27 a m" src="https://user-images.githubusercontent.com/56992179/169642189-eac6f22a-f470-402d-9004-1e50aa2cc4e7.png">

<img width="604" alt="Captura de Pantalla 2022-05-20 a la(s) 2 31 05 a m" src="https://user-images.githubusercontent.com/56992179/169642196-5d07c592-79c4-4772-b421-d7725e800cec.png">

<img width="603" alt="Captura de Pantalla 2022-05-20 a la(s) 2 31 44 a m" src="https://user-images.githubusercontent.com/56992179/169642203-d6f7f8bd-656c-4681-9ffc-99bfa0f0bac4.png">


