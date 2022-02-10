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
# Ejecuto un nginx
docker --name alwaysup -d ubuntu tail -f /dev/null

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