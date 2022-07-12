# Curso de Introducción a Laravel

## Lógica de controladores y vistas con datos de prueba

- Creando doce usuarios de manera aleatoria al modelo según el modelo User
```
php artisan tinker
>>> factory(App\User::class, 12)->create();

# Laravel 8.X
>>> User::factory()->count(12)->create();
```

## Routes & Controllers

- **Route**: Capa encargada de manejar el flujo

- **Controller**: Nos permite agrupar lógia

composer create-project --prefer-dist laravel/laravel routes "7.*

- **Podemos con un comando crear un controlador con diferentes rutas**

## Middleware

Filtro de peticiones HTTP en un sistema

- Capa de lógica adicional de filtrado

## Validación (Request)

- Filtro de peticiones HTTP en un sistema

*Diferentes enfoques para nuestra capa de validación*

## Paquete Laravel/UI

Registro y autenticación de un sistema Web en Laravel

`$ composer require laravel/ui`
