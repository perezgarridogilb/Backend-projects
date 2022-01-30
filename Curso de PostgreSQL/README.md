# Proyect
Curso de PostgreSQL

# docker-compose.yml
```
version: "3.8"

services: 
  postgres:
    image: postgres:14
    restart: always
    environment: 
      - DATABASE_HOST=127.0.0.1
      - POSTGRES_USER=root
      - POSTGRES_PASSWORD=root
      - POSTGRES_DB=postgres
    ports: 
      - 5432:5432

  pgadmin:
    image: dpage/pgadmin4
    environment: 
      PGADMIN_DEFAULT_EMAIL: "admin@admin.com"
      PGADMIN_DEFAULT_PASSWORD: "admin"
    ports:
      - "80:80"
    depends_on: 
      - postgres 
```

# Instalation
```
docker-compose up

```

# Shell
The names is in automatic
```
docker ps
CONTAINER ID   IMAGE            COMMAND                  CREATED       STATUS       PORTS                         NAMES
cc833220a9b4   dpage/pgadmin4   "/entrypoint.sh"         3 hours ago   Up 3 hours   0.0.0.0:80->80/tcp, 443/tcp   premiosplatziapp_pgadmin_1
6303f0b11310   postgres:14      "docker-entrypoint.s…"   3 hours ago   Up 3 hours   0.0.0.0:5432->5432/tcp        premiosplatziapp_postgres_1
docker exec -it premiosplatziapp_postgres_1 createuser postgres -s
docker exec -it premiosplatziapp_postgres_1 psql -U postgres
psql (14.1 (Debian 14.1-1.pgdg110+1))
Type "help" for help.

postgres=#
```
