# Fundamentos de Node.js
Curso de Fundamentos de Node.js

# Node: orígenes y filosofía

## ¿Qué es NodeJS?

- Un entorno de ejecución de JavaScript fuera del navegador.

- Se crea en 2009, orientado a servidores.

## ¿Fuera del navegador?

- Servidores

- Herramientas 
    - Transpiladores, scraping, automatización...

## Características de NodeJS

- **Concurrencia**
    - Monohilo, con entradas asíncronas.
    - Un proceso por cada núcleo del procesador.

## Motor V8

- Entorno de ejecución de JavaScript creado por Google y libre desde 2008.

- Escrito en C++.

- Convierte JavaScript en código máquina en lugar de interpretarlo en tiempo real.

## Módulos

- Todo lo que no sea sintaxis de programación, son módulos.

- Muchos módulos vienen por defecto en el paquete de Node.

- Puedes crear tus propios módulos.

## Orientado a eventos

- Hay un bucle de eventos que se ejecuta constantemente.

- Puedes orientar tu código de forma reactiva.

# EventLoop: asíncrona por diseño

## ¿Qué es el Event Loop?

- Un proceso con un bucle que gestiona, de forma asíncrona, todos los eventos de tu aplicación.

### Event Loop

<img width="570" alt="Captura de Pantalla 2022-05-03 a la(s) 9 17 47 p m" src="https://user-images.githubusercontent.com/56992179/170213487-02f785b2-6c43-4d22-b103-542b89dd8edc.png">

# Monohilo: implicaciones en diseño y seguridad

# Herramientas para ser más felices: Nodemon y PM2

## Nodemon

Para desarrollo (demonio).

```
npm install -g nodemon

nodemon archivo.js
```

## PM2

Para producción (más complejo)

```
npm install -g pm2

pm2 start archivo.js

pm2 monitor
pm2 status
pm2 logs
pm2 stop 0
pm2 start 0
```

# Módulos nativos en C++

Se ejecutaron módulos nativos de C++ en JavaScript

```
npm i -g node-gyp
node-gyp configure
node-gyp build
```