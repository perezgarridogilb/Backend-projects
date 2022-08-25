# Curso Básico de Tailwind 2 y 3

## Framework CSS
- Conjunto de herramientas para construir una interfaz web con CSS, que nos permite agilizar el desarrollo

## Características
- Representado mediante clases
- Orientado a utilidades
- Personalizable

### Bootstrap
- Basado en componentes
- Abstracción en la creación de los componentes
- Poco personalizable

### Material UI (Inspirado en Google)
- Componentes pre-construidos
- Basado en el tema de Material
- Design System

### Bulma
- Modular
- Personalizable
- Basado en Flexbox

## Mobile First y Utility First

### Mobile First
- Mobile first está pensado principalmente para mejorar la experiencia de usuario.

- Este principio nos permite identificar las partes más importantes de nuestro proyecto.

### Utility First
- Los frameworks basados en utilidades nos permiten tener una estructura más limpia de nuestros estilos.

- Además el desarrollo es más rápido, ya que se trabaja dentro del mismo archivo.

## Creación del proyecto e instalación de Tailwind

Iniciar proyecto npm: npm init

Instalar Tailwind como un plugin de PostCSS: npm install -D tailwindcss postcss autoprefixer

 npm init -y
Crear las carpetas

    mkdir src public src/css public/css
Crear los archivos ***este comando no funciona en la consola de windows

    touch src/css/index.css public/index.html public/css/index.css
Instalar las dependencias

    npm install -D tailwindcss
Inicializar un proyecto tailwind

    npx tailwindcss init
Reemplazar en el archivo tailwind.config.js

    module.exports = {
        content: [],
        theme: {
            extend: {},
        },
        plugins: [],
    };
Por esto…

    module.exports = {
        content: ['./public/index.html', './src/**/*.{html,js}'],
        theme: {
            extend: {},
        },
        plugins: [],
    };
Agregar al archivo src/css/index.css

    @tailwind base;
    @tailwind components;
    @tailwind utilities;
Agregar contenido al archivo public/index.html

    <!doctype html>
    <html>
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="./css/index.css" rel="stylesheet">
    </head>
    <body>
      <h1 class="text-3xl font-bold underline">
        Hello world!
      </h1>
      <div class="w-64 h-64 bg-red-200">
      </div>
    </body>
    </html>
Ejecutar este comando…

    npx tailwindcss -i ./src/css/index.css -o ./public/css/index.css --watch

## Directivas de Tailwind
### Base y Component
- **@tailwind base**
Inicializa todos los elementos de nuestro HTML sin estilo

- **@tailwind component**
Nos permite acceder a todas las clases de tailwind

- **@tailwind utilities**
Agrega todas las utilidades al proyecto y nos permite acceder a ellas