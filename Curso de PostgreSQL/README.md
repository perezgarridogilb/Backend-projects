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

## Partitions in pgAdmin
Fast consults in the databases
```
INSERT INTO public.bitacora_viaje(
	 id_viaje, fecha)
	VALUES (1, '2022-02-10');
	
CREATE TABLE bitacora_viaje202202 PARTITION OF bitacora_viaje
FOR VALUES FROM ('2022-02-01') TO ('2023-02-01');

SELECT * FROM bitacora_viaje;
```

## CREATE ROL
Secure roles
```
\h CREATE ROL
CREATE ROLE usuario_consulta;
ALTER ROLE usuario_consulta WITH LOGIN;
ALTER ROLE usuario_consulta WITH SUPERUSER;
\dg
DROP ROLE usuario_consulta;
```

## ROL ACCESS
```
# docker exec -it <container_name> bash
# Before, to get in database, with the next command: 
# psql -U <role> -d <database_name>  -W
docker exec -it premiosplatziapp_postgres_1 bash
psql -U usuario_consulta -d postgres -W
```

## FK in Query Editor: 
```
ALTER TABLE public.viaje 
		ADD CONSTRAINT trayecto_pasajero_fkey FOREIGN KEY (id_pasajero)
        REFERENCES public.pasajero (id) MATCH SIMPLE
        ON UPDATE CASCADE
        ON DELETE CASCADE;
```

## Massive data
https://mockaroo.com/

## JOIN: 
```
SELECT * FROM pasajero JOIN viaje ON (viaje.id_pasajero = pasajero.id); 
SELECT * FROM pasajero LEFT JOIN viaje ON (viaje.id_pasajero = pasajero.id) WHERE viaje.id IS NULL;
```

## Special Functions: 
```
-- Insercion de un dato que ya existe, no pasa nada
INSERT INTO public.estacion(id, nombre, direccion)
VALUES (1, 'Nombre', 'Dire')
ON CONFLICT DO NOTHING;

-- Insercion de un dato que ya existe, te cambia los campos de nombre y direccion
INSERT INTO public.estacion(id, nombre, direccion)
VALUES (1, 'Nombre', 'Dire')
ON CONFLICT (id) DO UPDATE SET nombre = 'Nombre', direccion = 'Dire';

-- Insertara una tupla y mostrara la tupla
INSERT INTO public.estacion(nombre, direccion)
VALUES ('RETU', 'RETDIE')
RETURNING *;

-- %: Uno o cualquier valor
-- _: Un valor
SELECT nombre FROM public.pasajero
WHERE nombre LIKE 'o%';
-- buscamos sin importar mayusculas o minusculas
SELECT nombre FROM public.pasajero
WHERE nombre ILIKE 'o%';

-- si una estacion o tren tiene un valor nulo
SELECT * FROM public.tren
WHERE modelo IS NULL;
```

## Avanced special Functions: 
```
-- Consulta con WHERE
SELECT id, nombre, direccion_residencia, fecha_nacimiento
	FROM public.pasajero WHERE id = 1;

-- Retorna el primer elemento que NO es nulo, dentro de todos los parametros que le pasas.
-- (NULL, NULL , 1); // 1
-- (NULL, 2 , 1); // 2
-- Pueden haber mas parametros
SELECT id, COALESCE(nombre, 'No aplica') nombre, direccion_residencia, fecha_nacimiento
	FROM public.pasajero WHERE id = 1;

-- Retorna null si son iguales
SELECT NULLIF(0,0);

-- Compara un arreglo y retorna el mayor
SELECT GREATEST(1,2,4,1,7,2,4);

-- Compara un arreglo de valores y retorna el menor
SELECT LEAST(0,1,2,4,1,7,2,4);

-- Ingresa condicionales dentro de una consulta de la Base de Datos
SELECT id, nombre, direccion_residencia, fecha_nacimiento,
CASE 
WHEN fecha_nacimiento > '2015-01-01' THEN
'Niño'
ELSE
'Mayor'
END
	FROM public.pasajero;
```

## Challenge: 
```
SELECT id, nombre, fecha_nacimiento,
	CASE
	WHEN nombre ILIKE 'a%' THEN 'Comienza con A' 
	WHEN nombre ILIKE 'e%' THEN 'Comienza con E'
	WHEN nombre ILIKE 'i%' THEN 'Comienza con I'
	WHEN ( current_date - fecha_nacimiento) > 6570 Then 'Es mayor de 18 años'
	ELSE 'Su nombre no inicia con A, E o I y ademas es un niño'
	END
FROM pasajero ORDER BY fecha_nacimiento;
```