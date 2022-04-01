# AWS Cloud
Curso de Introducción a AWS: Fundamentos de Cloud Computing

# Visión general de las TI tradicionales

## ¿Cómo funciona un sitio web?

<img width="633" alt="Captura de Pantalla 2022-03-28 a la(s) 6 44 33 p m" src="https://user-images.githubusercontent.com/56992179/160510237-66148b0c-5ccd-4ee7-b4b0-be4a9e94f0bd.png">

- Así mismo cuando usamos un correo postal

## ¿De qué está compuesto un servidor?

### Un servidor está compuesto de un
- **Cómputo**: CPU
- **Memoria**: RAM
- **Almadenamiento**: datos
- **Base de datos**: información almacenada de forma estructurada
- **Redes**: routers, switch, servidor DNS

### Terminología de IT
- **Redes**: cables, routers y servidores conectados unos a otros.
- **Router**: un dispositivo de red que reenvía paquetes de datos entre redes - informáticas.
- **Switch**: toma un paquete y lo envía al servidor/cliente correcto en la red.

### Diseño de infraestructura tradicional (en orden)
1. Garage, con un servidor, dos servidores 
2. Oficinas
3. Data centers

### Problemas del enfoque de IT Tradicional
Renta
Mantenimiento
Reemplazar y agregar hardware
Escalamiento limitado
Contratar 24/7 para monitorear
Desastres naturales

# ¿Qué es la computacion en la nube?
> La computación en la nube es la entrega bajo demanda de computación, almacenamiento de bases de datos, aplicaciones y otros recursos de TI a través de una plataforma de servicios en la nube por medio de Internet con precios de pago por uso.

- **Piensa en ello como simplemente alquilar la computadora de otra persona**

- Suministras el **tipo y tamaño exactamente correctos** de
los recursos informáticos que necesitas.
- Puedes acceder **al instante** a todos los recursos que necesitas.
- Una **forma sencilla de acceder** a servidores, almacenamiento, bases de datos y un conjunto de servicios de aplicaciones: poder de computo, almacenamiento y bases de datos.

## Servicios que ya has usado en la nube
- **Gmail** Servicio de email en la nube. Pagas solo por tus emails almacenados (no infraestructura)
- **Dropbox** Servicio de almacenamiento en la nube. Originalmente se construyó en AWS
- **Netflix** Servicio de video en demanda. Construido en AWS.

## Tipos de modelos de computación en la nube
### Nube Privada
- Servicios de nube usados por una organización (no está expuesta al público).
Control total.
- Seguridad para aplicaciones sensibles.
- Satisface necesidades comerciales específicas.
### Nube Pública
- Recursos propios en la nube y operados por proveedores de nube de terceros a través de internet.
- Seis ventajas del cómputo en la nube.
- Google Cloud Platform (GCP), Azure, AWS
### Nube Híbrida
- Mantener algunos servidores en las instalaciones y extender otras capacidades en la nube.
- Control sobre activos sensibles en tu infraestructura privada
- Flexibilidad y rentabilidad de la nube pública.

### 5 características de la computación en la nube
- Autoservicio en demanda
- Amplio acceso a la red
- Múltiples inquilinos y agrupación de recursos
- Elasticidad y escalabilidad
- Servicio medido
### 6 ventajas de la computación en la nube
- Gastos de capital comercial (**capex**) sobre gastos operativos (**opex**)
- Economías de escala (reduce los precios a medida que AWS es más eficiente debido a la gran escala)
- Dejar de adivinar la capacidad (escalar sobre el uso medido real)
- Incrementar la velocidad y la agilidad
- Dejar de gastar dinero en la ejecución y mantenimiento de cretro de datos
- Globalizar en minutos

### Problemas resueltos por la nuble
- Flexibilidad: cambia los tipos de recursos cuando sea necesario
- Rentabilidad: pagar sobre la marcha por lo que se usa
- Escalabilidad: acomodar cargas grandes al hacer que el hardware sea más fuerte o agregando nodos adicionales
- Elasticidad: capacidad de escalar cuando sea necesario
Alta disponibilidad y tolerancia a fallos, crecer en todos los centros de datos
- Agilidad: desarrollar, probar y ejecutar rápidamente aplicaciones de software en la nube

### Tipos de cómputo en la nube

- **laaS**: Infraestructura como Servicio. Proporciona componentes básicos para las tecnologías de información en la nube: redes, computadores, espacio de almacenamiento de datos, con un máximo nivel de flexibilidad y fácil paralelo de las tecnologías de la información tradicional en las instalaciones.
- **PaaS**: Plataforma como Servicio. Elimina la necesidad de que nuestra organización administre la infraestructura y nos vamos a centrar en la implementación y la gestión de las aplicaciones.
- **SaaS**: Software como Servicio. Producto terminado y que es ejecutado y administrado por el proveedor del servicio.

<img width="632" alt="AWS Control" src="https://user-images.githubusercontent.com/56992179/160515525-180b562b-451b-4991-ae0b-b562256e2c2d.png">

## Ejemplos de los tipos de computación de la nube
### Infraestructura como servicio (IaaS)
- Azure
- Linode
- Digital ocean
- S2 AWS
### Plataforma como servicio (PaaS)
- Heroku
- Google App Engine
- AWS Elastic Beanstalk
### Software como servicio (SaaS)
- Amazon Rekognition
- Dropbox
- Zoom
- Gmail

### Precio de la nube
#### AWS tiene 3 precios fundamentales:
- Computo, por el tiempo de computación, el tiempo que estamos usando los servicios
- Almacenamiento, pagar por la información almacenada en la nube
- Información transferida fuera de la nube.
La información que entra en la nube es gratis

- Resuelve muchos de los problemas de IT tradicional relacionados con el costo

# Una pequeña historia de AWS
Autores de AWS:
- Benjamin Black
- Chris Pinkham

## Linea de tiempo
Acontecimientos importantes
<img width="634" alt="Tiempo" src="https://user-images.githubusercontent.com/56992179/160715931-e7b4777d-0153-4104-8aad-a22a6551ec2a.png">

## Mercado
Posición en el mercado
<img width="634" alt="Mercado" src="https://user-images.githubusercontent.com/56992179/160715968-0c883283-6378-4a4b-b411-409d2f7acd6c.png">

# Una visión global: regiones y zonas de disponibilidad

## Regiones
<img width="633" alt="Regiones" src="https://user-images.githubusercontent.com/56992179/160716566-93e1ddd7-d123-4932-ac7f-b78b5710da2f.png">
Los características varían según la región

## Escogiendo regiones
<img width="633" alt="Escogiendo regiones" src="https://user-images.githubusercontent.com/56992179/160716819-8fb24fb9-5439-4d2b-9936-f6272768c5d7.png">
Características a tomar en cuenta

## Una zona de disponibilidad es un data center
- Un data center está lleno de servidores
- Una zona de disponibilidad puede ser de varios data center.
- Cada zona de disponibilidad es uno o mas centro de datos discretos con energía, redes y conectividad redundante, están separados de unos a otros y están conectados entre sí con un gran ancho de banda, redes de latencia ultrabaja

### Infraestructura global
- AWS Regiones
- AWS Zonas de disponibilidad
- AWS Centro de datos
- Ubicaciones de AWS Edge / puntos de presencia


### Servicios Globales
- IAM
- Route 53
- Cloudfront
- WAF

### Servicios Regionales
- EC2
- Beanstalk
- Lambda
- Rekognition

## Diagrama del modelo de responsabilidad compartida
<img width="633" alt="Diagrama del modelo de responsabilidad compartida" src="https://user-images.githubusercontent.com/56992179/160718003-19e79f29-a43e-4800-ad82-1e824b4b4f6f.png">

# Seguridad e identidad
## Protección a Datos
- Amazon Macie: para descubrir y proteger sus datos sensibles
- AWS Key Management Service: almacenar y administrar claves de cifrado
- AWS CloudHSM: almacenamiento de claves basado en hardware y el cumplimiento normativo
- AWS Certificate Manager: provisionar, administrar e implementar certificados de - seguridad TSL y TLS
- AWS Secrets Manager: rotar, gestionar y recuperar secretos como contraseñas
## Protección de la infraestructura
- AWS Shield: para la protección de denegación de servicio
- AWS Web Aplication Firewall (WAF): filtra el tráfico de sitios web maliciosos
- AWS Firewall Manager: administra las reglas del firewall de forma centralizada
## Detección de amenazas
- Amazon GuarDuty: detecta amenazas automáticamente
- Amazon Inspector: ayuda a analizar la seguridad de la aplicación
- Amazon config: registra y evalúa configuraciones de nuestros recursos
- Amazon CloudTrail: rastrea la actividad del usuario y el uso de las API
## Gestión de identidades
- AWS Identity and Access Management (IAM): administra de forma segura el acceso a una cuenta, servicios y recursos
- AWS Inicio de sesión único: Implemente el acceso de sesión único (single sign on)
- Amazon Cognito: administra la identidad dentro de las aplicaciones, se puede hacer el inicio de sesiones web o móviles
- AWS Servicio de Directorio: implementa y administra un Active Directory Service (que regularmente encontramos en servicios de microsoft)
- AWS Organizaciones: para gobernar y administrar de forma centralizada varias cuentas de AWS en un mismo lugar

# IAM ilustrado
## IAM
- Nos ayuda a administrar **quién puede acceder a qué** en los servicios y recursos de tu cuenta en AWS

- Puedes crear usuarios y grupos

- Establecer permisos **permitir o denegar el acceso** a los recursos de AWS mediante el uso de políticas

## Usuarios IAM
### Creando diferentes usuarios (propietario de la empresa)
<img width="635" alt="Usuarios IAM" src="https://user-images.githubusercontent.com/56992179/161195017-5652a0b9-b1df-42ab-bca8-43064f074ce9.png">

### Equipo de la empresa y su acceso
<img width="634" alt="Equipo y accesos" src="https://user-images.githubusercontent.com/56992179/161195272-ff1af7e6-4e33-4196-a7d3-5aa55a70854e.png">

### Ejemplo de política de IAM: Usuario Administrador
- Usuario Administrador con acceso a los servidores de desarrollo
```
{
    "Version": "2012-10-17",
    "Statement": [
        {
            "Effect": "Allow",
            "Action": "*", 
            "Resource": "*"
        }
    ]
}
```

### Ejemplo de política de IAM: Acceso a un bucket de S3
- Permitir a usuarios almacenar archivos en servicio S3
```
{
    "Version": "2012-10-17",
    "Statement": [
        {
            "Effect": "Allow",
            "Action": [
                "s3:ListBucket"
            ],
            "Resource": "arn:aws:53 ::: bucket-name"
        },
        {
            "Effect": "Allow",
            "Action": [
                "s3: GetObject",
                "s3: PutObject",
            ],
            "Resource": "arn:aws:53 ::: bucket-name/*"
        }
    ]
}
```

## IAM Roles
<img width="636" alt="IAM" src="https://user-images.githubusercontent.com/56992179/161195635-40871a00-7ad1-4691-8b88-a8d45ae98088.png">

## 

- Permite delegar permisos a un usuario o servicio
- Un usuario puede asumir un rol
- Un servicio puede asumir un rol

# Secrets Manager
## Ejemplo de una conexión de MySQL hardcodeada
- Problemas
```
import mysql.connector

connection = mysql.connector.connect( 
    host="localhost", 
    database="mydb", 
    user="root", 
    password="root" 
)
```
## Acerca del servicio
- Protege los secretos que son necesarios para acceder a sus aplicaciones, servicios y recursos.

- Rotarlos autimáticaticamente

- Los secretos pueden ser contraseñas, claves y tokens

## Ejemplo de una conexión de MySQL hardcodeada
- Soluciones
```
import mysql.connector

connection = mysql.connector.connect( 
    host="localhost", 
    database="mydb", 
    user="root", 
    password=get_secret_value['SecretString']
)
```
# Demostración del servicio de directorio
## Windows como principal S.O
- Servicio Directorio Activo: Administrar el inicio de sesión de los usuarios dentro de las compañías
## AWS Directory Service
- Directorio Activo administrado (sin ejecutar servidores)
- Opción de directorio activo simple
- Conector AD (iniciar sesión con credenciales de usuario de directorio activo)
- Servicio distribuido con error automático
- Compatible con otros servicios de AWS (Chime, Connect, EC2)