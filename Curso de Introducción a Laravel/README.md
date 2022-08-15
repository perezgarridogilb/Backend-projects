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

`composer create-project --prefer-dist laravel/laravel name "7.*"`

- **Podemos con un comando crear un controlador con diferentes rutas**

## Middleware

Filtro de peticiones HTTP en un sistema

- Capa de lógica adicional de filtrado

## Validación (Request)

- Filtro de peticiones HTTP en un sistema

*Diferentes enfoques para nuestra capa de validación*

## Paquete Laravel/UI

Registro y autenticación de un sistema Web en Laravel

`$ composer require laravel/ui:^2.4 --dev`

## Eloquent: trabajando con este ORM

Model, migrate y factory

`php artisan make:model Post -m -f`

Se crea en plural

```
# Creando datos falsos

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence
    ];
});

# tinker

>>> factory(App\Post::class, 30)->create()
```

## Relaciones de tablas

### Eloquent

**Relaciones de Tablas**
*Unir datos.*
**Colecciones y Serialización**
*Manipular la información*
**Formatos de datos y presentación**
*Formato de datos.*

- Siempre que se ejecutaba borraba los datos
`php artisan migrate:refresh`

- semilla
`php artisan migrate:refresh --seed`

## Proyecto Blog: Presentación y configuración inicial

### Migración, Factory, y el Controlador

`php artisan make:model Post -mfc`

### cviebrock/eloquent-sluggable

`composer require cviebrock/eloquent-sluggable 7.00`

Referencias: https://packagist.org/packages/cviebrock/eloquent-sluggable

- Refrescar y usar nuestros datos semilla

`php artisan migrate:refresh --seed`

## Introducción al testing

- Funcional (Por clase)

`php artisan make:test UserTest`

- Unitario (Sección de código)

`php artisan make:test UserTest --unit`

- Ejecutar Tests

`vendor/bin/phpunit`

## Metodología TDD y testing HTTP

### Testing
- **Testing HTTP**
- **Metodología TDD**

Paso 1: Crear prueba, para obtener rojo
Paso 2: Crear código para cumplir con esa prueba, para obtener verde
Paso 3: Refactorización es una revisión posterior de revisar, organizar, crear métodos, para seguir consiguiendo verde sin alterar la prueba.


- Nombres personalizados `test_home()`

### Factory y migración

`php artisan make:model Post -fm`

### Controlador

Ordenando archivos
`php artisan make:controller Api/Post`


`php artisan make:test Http/Controllers/Api/PostControllerTest`
