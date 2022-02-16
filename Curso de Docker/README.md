# Proyect
Curso de Docker

# Information
```
# print version
docker --version
# print number of us containers, client, linux kernel version
docker info
```

# Conteiners
Un contenedor es uno o más procesos (es una agrupación de procesos), que corren nativamente en la máquina, pero que están aislados del resto de elementos del sistema. Un contenedor es una unidad lógica, no como una máquina virtual que es una agrupación física, aunque virtualizada, que tiene las abstracciones de memoria CPU, etc.
- Un contenedor es simplemente una agrupación lógica
- Por eso puede correr de manera nativa en la máquina anfitriona, está limitada a qué cosas puede ver o acceder de la computadora anfitriona.
- Puede correr como cualquier otro programa de la máquina anfitriona de acuerdo a las límitaciones que le hayamos dado.
- Usando el mismo kernel y mismos recursos específicados.
```
# Corriendo nuestro primer contenedor
# Crea un contenedor y lo ejecuta
docker run hello-world

# Muestra los contenedores activos
docker ps

# Muestra todos los contenedores
docker ps -a

# Ejemplo de todos los contenedores, donde NAMES es la referencia "amigable"
CONTAINER ID   IMAGE            COMMAND                  CREATED          STATUS                      PORTS     NAMES
91604965a97c   hello-world      "/hello"                 23 minutes ago   Exited (0) 23 minutes ago             blissful_curie
cc833220a9b4   dpage/pgadmin4   "/entrypoint.sh"         10 days ago      Exited (0) 25 hours ago               premiosplatziapp_pgadmin_1
6303f0b11310   postgres:14      "docker-entrypoint.s…"   10 days ago      Exited (0) 25 hours ago               premiosplatziapp_postgres_1

# Muestra el detalle completo de un contenedor
docker inspect 91604965a97c

# Le asigno un nombre custom “hello-platzi”
# No permite dos cotenedores con el mismo nombre en la instalación, es decir, parece que el comando sólo se ejecuta una vez
# Así que usamos rename
docker run --name hello-platzi hello-world

# Cambio el nombre de hello-platzi a hola-platzi
docker rename hello-platzi hola-platzi

# Ahora si lo permite
docker run --name hello-platzi hello-world

# Ejemplo de todos los contenedores una vez más
CONTAINER ID   IMAGE            COMMAND                  CREATED          STATUS                      PORTS     NAMES
4800b148a841   hello-world      "/hello"                 20 seconds ago   Exited (0) 19 seconds ago             hello-platzi
bdf92f8635f1   hello-world      "/hello"                 17 minutes ago   Exited (0) 17 minutes ago             hola-platzi
91604965a97c   hello-world      "/hello"                 53 minutes ago   Exited (0) 53 minutes ago             blissful_curie
cc833220a9b4   dpage/pgadmin4   "/entrypoint.sh"         10 days ago      Exited (0) 26 hours ago               premiosplatziapp_pgadmin_1
6303f0b11310   postgres:14      "docker-entrypoint.s…"   10 days ago      Exited (0) 26 hours ago               premiosplatziapp_postgres_1

# Borro un contenedor
docker rm hello-platzi

# Ejemplo del borrado anterior
docker ps -a
CONTAINER ID   IMAGE            COMMAND                  CREATED          STATUS                      PORTS     NAMES
bdf92f8635f1   hello-world      "/hello"                 21 minutes ago   Exited (0) 21 minutes ago             hola-platzi
91604965a97c   hello-world      "/hello"                 57 minutes ago   Exited (0) 57 minutes ago             blissful_curie
cc833220a9b4   dpage/pgadmin4   "/entrypoint.sh"         10 days ago      Exited (0) 26 hours ago               premiosplatziapp_pgadmin_1
6303f0b11310   postgres:14      "docker-entrypoint.s…"   10 days ago      Exited (0) 26 hours ago               premiosplatziapp_postgres_1

# Borro todos lo contenedores que esten parados de un sarpazo
docker container prune
```

# Interactive mode
```
# Corre un ubuntu pero lo deja apagado
docker run ubuntu
# Lo corre y entro al shell de ubuntu
# -i: interactivo
# -t: abre la consola
docker -it ubuntu
# Veo la versión de Linux
cat /etc/lsb-release 
```

# Container life cycle
/dev/null: Es conocido como un agujero negro es decir "ese archivo es la nada".
```
# Mantiene el contenedor activo
docker --name alwaysup -d ubuntu tail -f /dev/null

# Entro al bash del contenedor
docker exec -it alwaysup bash

# Veo el main process del ubuntu
docker inspect --format ‘{{.State.Pid}}’ alwaysup

# Detener proceso en MacOS
docker kill alwaysup

# Detener proceso en Linux
kill -9 <PID>

# Output(s)
CONTAINER ID   IMAGE     COMMAND   CREATED   STATUS    PORTS     NAMES
```

# Exposing containers
```
# Ejecuto un nginx del repositorio público de imágenes de Docker
docker run -d --name proxy nginx

# Apago el contenedor
docker stop proxy

# Borrando el contenedor
docker rm proxy

# Lo para y lo borra
docker rm -f *

# Ejecuto un nginx y expongo el puerto 80 del contenedor en el puerto 8080 de mi máquina
docker run -d --name proxy -p 8080:80 nginx

# Veo los logs
docker logs proxy

# Sigo los log (Ctrl + C ya no detiene el proceso)
docker logs -f proxy

# Veo y sigo solo las 10 últimas entradas del log
docker logs --tail 10 -f proxy
```

# Exposing containers
```
# Creamos un directorio en la máquina anfitriona
mkdir dockerdata

# Ejecuto un mongodb del repositorio público de imágenes de Docker
docker run -d --name db mongo

# Activos
docker ps

# Se ingresa al bash del contenedor
docker exec -it db bash

```

# Clients
```
# Cliente de la base de datos
> mongo

# Listo las Bases de Datos
> show dbs
admin   0.000GB
config  0.000GB
local   0.000GB

# Se crea la Base de Datos
> use platzi
switched to db platzi

# A users le entregamos un JSON como parámetros
> db.users.insert({"nombre":"guido"})
WriteResult({ "nInserted" : 1 })

# Output(s) de los parámetros
> db.users.find()
{ "_id" : ObjectId("62056745d665732dcd9dc167"), "nombre" : "guido" }

> exit
 exit

# Iniciamos otra vez
docker rm -f db
```

# Bind mounts
```
# Asociamos el directorio del anfitrión, ":" y el directorio mongodb
docker run -d --name db -v ~/mongodata:/data/db mongo

docker exec -it db bash
mongo
> use platzi
> db.users.insert({"nombre":"guido"})
> db.users.find()
{ "_id" : ObjectId("62056745d665732dcd9dc167"), "nombre" : "guido" }
> exit
exit

# Aquí ya no está
docker rm -f db

docker run -d --name db -v ~/mongodata:/data/db mongo
docker exec -it db bash
mongo
> use platzi

# Ahí sigue
> db.users.find()
{ "_id" : ObjectId("62056f13ea20b8ce2c54f420"), "nombre" : "guido" }
```

# Volumns
```
# Listo los volumes
docker volume ls 

# Creo un volume
docker volume create dbdata

# Ejecuto la Base de Datos y monto el volumen
docker run -d --name db --mount src=dbdata,dst=/data/db mongo

# Veo la información detallada del contenedor
docker inspect db

# Entramos a mongo
docker exec -it db mongo

> use platzi
> db.users.insert({"nombre":"guido"})
> db.users.find()
{ "_id" : ObjectId("62056745d665732dcd9dc167"), "nombre" : "guido" }
> exit
exit

# Aquí ya no está
docker rm -f db

# Ejecuto la Base de Datos y monto el volumen
docker run -d --name db --mount src=dbdata,dst=/data/db mongo

# Entramos a mongo
docker exec -it db mongo

# Ahí sigue
> use platzi
> db.users.find()
{ "_id" : ObjectId("62056745d665732dcd9dc167"), "nombre" : "guido" }
```

# Insert and extract files from a container
- Host: Donde Docker esta instalado.
- Bind Mount: Guarda los archivos en la maquina local persistiendo y visualizando estos datos (No seguro).
- Volume: Guarda los archivos en el area de Docker donde Docker los administra (Seguro).
- TMPFS Mount: Guarda los archivos temporalmente y persiste los datos en la memoria del contenedor, cuando muera sus datos mueren con el contenedor. Según el curso sólo funcionan el linux.
```
# Se crea un archivo en mi máquina
touch prueba.txt

# Ejecuto a un ubuntu y le agrego el tail para que quede activo
docker run -d --name copytest ubuntu tail -f /dev/null
# Se encuentra en ejecución
docker ps
CONTAINER ID   IMAGE     COMMAND                  CREATED              STATUS              PORTS                  NAMES
0a4544e7d212   ubuntu    "tail -f /dev/null"      8 seconds ago        Up 7 seconds                               copytest

# Ingreso al contenedor
docker exec -it copytest bash

# Se crea un directorio en el contenedor
mkdir testing

# Salir
exit

# Se copia el archivo dentro del contenedor
# Con “docker cp” no hace falta que el contenedor esté corriendo
docker cp prueba.txt copytest:/testing/test.txt

# Ingreso al contenedor
docker exec -it copytest bash

# Observamos qué hay en el directorio testing y salimos
cd testing/
root@0a4544e7d212:/testing# ls -al
total 8
drwxr-xr-x 2 root root    4096 Feb 10 21:07 .
drwxr-xr-x 1 root root    4096 Feb 10 21:07 ..
-rw-r--r-- 1  501 dialout    0 Feb 10 21:02 test.txt
exit

# Se copia el directorio de un contenedor a mi máquina
docker cp copytest:/testing localtesting

# Observamos qué hay en el directorio localtesting
cd localtesting/
ls -al
total 0
drwxr-xr-x  3 MacBook  staff   96 Feb 10 15:07 .
drwxr-xr-x  5 MacBook  staff  160 Feb 10 15:10 ..
-rw-r--r--  1 MacBook  staff    0 Feb 10 15:02 test.txt
```

# Building your own image
## Ubication
Todo lo que un contenedor necesita para ejecutarse está dentro de una imagen (para la construcción y distribución). Una imagen sirve para ejecutar contenedores.
Dockerfile: Describe lo que quiero que pase cuando se crea una imagen.
- La imagen es la platilla a partir de la que se pueden generar nuevos contenedores
- A partir de una imagen podemos generar infinitos contenedores
- Si un contenedor es un objeto o una instancia, una imagen es una clase
```
# Se crea un directorio en mi máquina
mkdir imagenes

# Se crea un Dockerfile
touch Dockerfile
```
## Dockerfile content
```
# Todo Dockerfile está basado en algo más
# Basado "ubuntu" de su versión "latest"
FROM ubuntu:latest

# Comando a ejecutar en tiempo de build
RUN touch /usr/src/hola-platzi.txt
```
## Building
```
# Se crea una imagen con el contexto de build en la raíz del directorio actual
docker build -t ubuntu:platzi .

# Outpu(s)
docker image ls
REPOSITORY       TAG       IMAGE ID       CREATED          SIZE
ubuntu           platzi    57dec09fba76   37 seconds ago   72.8MB
mongo            latest    5285cb69ea55   8 days ago       698MB
ubuntu           latest    54c9d81cbb44   8 days ago       72.8MB
postgres         14        da2cb49d7a8d   2 weeks ago      374MB
nginx            latest    c316d5a335a5   2 weeks ago      142MB
dpage/pgadmin4   latest    e52ca07eba62   4 weeks ago      272MB
hello-world      latest    feb5d9fea6a5   4 months ago     13.3kB

# Se ejecuta el contenedor con la nueva imagen
docker run -it ubuntu:platzi

# Ahí está
ll /usr/src/
total 12
drwxr-xr-x 1 root root 4096 Feb 11 00:07 ./
drwxr-xr-x 1 root root 4096 Jan 13 16:47 ../
-rw-r--r-- 1 root root    0 Feb 11 00:07 hola-platzi.txt

# me logueo en docker hub
docker login

# Se cambia el tag para poder subirla a mi docker hub
docker tag ubuntu:platzi perezgarridogilb/ubuntu:platzi

# Se publica la imagen a mi docker hub
docker push perezgarridogilb/ubuntu:platzi
```

# The layer system

## Layer history
```
# Veo el detalle de como se construyó cada capa
docker history ubuntu:platzi
IMAGE          CREATED        CREATED BY                                      SIZE      COMMENT
57dec09fba76   25 hours ago   RUN /bin/sh -c touch /usr/src/hola-platzi.tx…   0B        buildkit.dockerfile.v0
<missing>      9 days ago     /bin/sh -c #(nop)  CMD ["bash"]                 0B
<missing>      9 days ago     /bin/sh -c #(nop) ADD file:3ccf747d646089ed7…   72.8MB
```

## Dockerfile
```
# Todo Dockerfile está basado en algo más
# Basado "ubuntu" de su versión "latest"
FROM ubuntu:latest

# Comandos a ejecutar en tiempo de build
RUN touch /usr/src/hola-platzi.txt

RUN rm /usr/src/hola-platzi.txt
```

## Build
```
# Se vuelve a ejecutar Build
docker build -t ubuntu:platzi .
[+] Building 1.7s (7/7) FINISHED
 => [internal] load build definition from Dockerfile                                                                0.1s
 => => transferring dockerfile: 129B                                                                                0.0s
 => [internal] load .dockerignore                                                                                   0.0s
 => => transferring context: 2B                                                                                     0.0s
 => [internal] load metadata for docker.io/library/ubuntu:latest                                                    0.0s
 => [1/3] FROM docker.io/library/ubuntu:latest                                                                      0.0s
 => CACHED [2/3] RUN touch /usr/src/hola-platzi.txt                                                                 0.0s
 => [3/3] RUN rm /usr/src/hola-platzi.txt                                                                           1.3s
 => exporting to image                                                                                              0.1s
 => => exporting layers                                                                                             0.1s
 => => writing image sha256:571c95d4f1e127339785dada3998cc07e166a92cdb29d683969536031e73b3c5                        0.0s
 => => naming to docker.io/library/ubuntu:platzi                                                                    0.0s

Use 'docker scan' to run Snyk tests against images to find vulnerabilities and learn how to fix them

# History actual
docker history ubuntu:platzi
IMAGE          CREATED         CREATED BY                                      SIZE      COMMENT
571c95d4f1e1   9 minutes ago   RUN /bin/sh -c rm /usr/src/hola-platzi.txt #…   0B        buildkit.dockerfile.v0
<missing>      25 hours ago    RUN /bin/sh -c touch /usr/src/hola-platzi.tx…   0B        buildkit.dockerfile.v0
<missing>      9 days ago      /bin/sh -c #(nop)  CMD ["bash"]                 0B
<missing>      9 days ago      /bin/sh -c #(nop) ADD file:3ccf747d646089ed7…   72.8MB

# Veo el detalle de la imagen con el programa dive (se instala aparte)
dive ubuntu:platzi
```

# Using Docker to develop applications
```
# Clonamos un proyecto
git clone https://github.com/platzi/docker
# Se crea la imagen local
docker build platziapp .
# Se listan las imagenes locales
docker image ls 
# Se crea el contenedor y cuando se detenga se borra, lo publica el puerto 3000 de los dos
docker run --rm -p 3000:3000 platziapp 
# Veo los contenedores activos
$ docker ps 
```
## Results
![Docker](https://user-images.githubusercontent.com/56992179/154339247-33f3f7ee-97dd-416e-9ce6-9bd09e90dceb.png)
