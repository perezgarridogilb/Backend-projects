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

# Entity Relation Diagram

## Manual

![Entity Relation Diagram](https://user-images.githubusercontent.com/56992179/152597324-6e9f1525-6b78-420a-bc30-dc2ddce35d16.png)

## Digital

![diagrama_entidad_relacion_proyecto_styled](https://user-images.githubusercontent.com/56992179/152597517-70f1cb96-5545-423b-8795-1a85b8caf7b2.jpeg)

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

## CREATE ROL:
Secure roles
```
\h CREATE ROL
CREATE ROLE usuario_consulta;
ALTER ROLE usuario_consulta WITH LOGIN;
ALTER ROLE usuario_consulta WITH SUPERUSER;
ALTER ROLE usuario_consulta WITH PASSWORD 'password';
\dg
DROP ROLE usuario_consulta;
```

## Rol Access:
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

## Massive data:
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

## Avanced Special Functions: 
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

## Views: 
```
-- Creamos la vista
CREATE OR REPLACE VIEW public.rango_view
AS
    SELECT *,
        CASE
        WHEN fecha_nacimiento > '2015-01-01' THEN
            'Mayor'
        ELSE
            'Menor'
        END AS tipo
    FROM pasajero ORDER BY tipo;
ALTER TABLE public.range_view OWNER TO postgres;

-- Mostramos la vista
SELECT * FROM public.range_view;

-- Vistas Materializada, no se cambia a menos que queramos que se cambie
SELECT * FROM viaje WHERE inicio > '22:00:00';

CREATE MATERIALIZED VIEW public.despues_noche_mview
AS
    SELECT * FROM viaje WHERE inicio > '22:00:00';
WITH NO DATA;
ALTER TABLE public.despues_noche_mview OWNER TO postgres;

-- Mostramos la vista
SELECT * FROM despues_noche_mview;

-- Recomendada para consultar información que ya no va a cambiar
-- Consultada una vez para quitarle peso a la base de datos
-- Damos refresh
REFRESH MATERIALIZED VIEW despues_noche_mview;

-- Borramos una tupla de viaje cuando el id = 2, para observar que no se borro
DELETE FROM viaje WHERE id = 2;
```

## PL/SQL: 
```
DROP FUNCTION IF EXISTS importantepl()
CREATE OR REPLACE FUNCTION importantePL()
RETURNS integer
AS $$
	DECLARE
		rec record;
		contador integer:=0;
	BEGIN
		FOR rec IN SELECT * from pasajero LOOP
		RAISE NOTICE 'Un pasajero se llama %', rec.nombre;
		contador:= contador +1;
	END LOOP;
	RAISE NOTICE 'Conteo es %', contador;
	RETURN contador;
	END
$$
LANGUAGE PLPGSQL;

SELECT importantePL()
```

## PL/SQL Functions: 
Definition to create functions: Integer and PL/SQL
```
-- Funtion
DECLARE
	rec record;
	contador integer:=0;
	BEGIN
		FOR rec IN SELECT * from pasajero LOOP
		RAISE NOTICE 'Un pasajero se llama %', rec.nombre;
		contador:= contador +1;
	END LOOP;
	RAISE NOTICE 'Conteo es %', contador;
	RETURN contador;
END

--  If has uppercase, needs double quote
SELECT public."importantPL"()

--  If hasn't uppercase
SELECT impl()
```

## TRIGGER/PL: 
Trigger using PL when AFTER INSERT OR DELETE ON pasajero(s)
```
-- Trigger Functions->impl()->Create->Trigger function...
-- Esto se convirtio de FUNCTION a TRIGGER, según el orden que despliega pgAdmin

-- FUNCTION: public.impl()

DROP FUNCTION IF EXISTS public.impl();

CREATE OR REPLACE FUNCTION public.impl()
    RETURNS trigger
    LANGUAGE 'plpgsql'
    COST 100
    VOLATILE NOT LEAKPROOF
AS $BODY$
DECLARE
rec record;
contador integer:=0;
BEGIN
FOR rec IN SELECT * from pasajero LOOP
	contador:= contador +1;
END LOOP;
INSERT INTO cont_pasajero (total, tiempo)
VALUES (contador, now());
-- OLD: 
-- En este caso OLD no sería nada
-- NEW
-- En este caso NEW tendría toda la información

-- Yo: Parece que trabajan como si fueran los constructores de un objeto (OOP): 
-- OLD.id, OLD.fecha, OLD.nombre así como NEW.id, etc.

-- Profesor: Lo que aceptamos es lo que estamos insertando
 RETURN NEW;
 
-- Se hicieron estos cambios debido al error (RETURN NEW):
-- ERROR:  control reached end of trigger procedure without RETURN
-- CONTEXT:  PL/pgSQL function impl()
-- SQL state: 2F005

-- De insertar una instancia en la tabla pasajero(s)
END
$BODY$;

-- Integración de un TRIGGER a una TABLA usando un impl ("PL")
CREATE OR REPLACE TRIGGER mitrigger
-- Qué se va a ejecutar después de un insert
AFTER INSERT OR DELETE 
-- En la tabla pasajero
ON pasajero
-- Ejecutarlo por fila
FOR EACH ROW
EXECUTE PROCEDURE impl();

INSERT INTO pasajero (nombre, direccion_residencia, fecha_nacimiento) 
VALUES ('Nombre Trigger1', 'Dir acá1', '2000-01-01');
```

