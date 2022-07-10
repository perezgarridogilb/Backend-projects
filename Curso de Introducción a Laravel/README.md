# Curso de Introducción a Laravel

## Lógica de controladores y vistas con datos de prueba

- Creando doce usuarios de manera aleatoria al modelo según el modelo User
```
php artisan tinker
>>> factory(App\User::class, 12)->create();

# Laravel 8.X
>>> User::factory()->count(12)->create();
```

