# Curso Avanzado de Laravel

## Controladores en Laravel


- Crear controlador

```
php artisan make:controller NameController
```

- Levantar servidor

```
php artisan serve
```

- Crear tabla

```
php artisan make:migration create_table_expense_reports --create

# Other

php artisan make:migration create_expense_reports_table
```

- Crear modelo

```
php artisan make:model ExpenseReport
```

- Consola interactiva

```
php artisan tinker

Psy Shell v0.11.5 (PHP 7.3.33 — cli) by Justin Hileman
>>> $report = new App\Models\ExpenseReport();
=> App\Models\ExpenseReport {#3561}

>>> $report->save();

>>> App\Models\ExpenseReport::all();
```

## CSRF

CSRF (Cross-site request forgery) es un tipo de ataque que consiste en que un usuario puede intentar hacer muchas peticiones en nombre de otro. Para esto Laravel genera con cada sesión un token que se usará para validar que exista el usuario en el sistema y que sea él quien está haciendo la petición. Esto también implica que no se pueden hacer peticiones desde otra app hacia el post, debe manejarse de manera interna.

Si queremos que un form pueda pasar la seguridad CSRF de Laravel, debemos agregar el helper @csrf el cual nos agrega un token.

Cuando estamos guardando nuevas entradas en la base de datos podemos redireccionar adonde queramos en nuestra aplicación con una respuesta especial de Laravel llamada redirect.
Estamos trabajando con Middlewares los cuales son muy usados en aplicaciones web que consisten en capas que contienen el request. Cuando llega un request, éste deberá pasar por diferentes capas o filtros (middlewares) quienes al final regresarán una respuesta. Cada uno de los filtros puede detener las peticiones en caso de que algo no cumpla.

Si no se desea usar la protección CSRF se puede directamente quitar el middleware desde el archivo kernel.php. De la misma manera se pueden crear middleware propios y agregarlos aquí.

## Relaciones con eloquent

- Si estamos hablando de un blogpost, es posible que éste esté relacionado con múltiples comentarios y a su vez con un solo creador. Existen muchas maneras para relacionar bases de datos y esto nos ayudará a tener una integridad y una referencia hacia lo que necesitamos.
-m o –migration son exactamente lo mismo y se pueden usar indistintamente.
- Haremos una relación de muchos a uno, es decir que un reporte puede tener muchos detalles.
- PHP en sus últimas versiones nos ofrece que todas las clases contienen la propiedad estática que es el nombre de la clase y la regresa directamente.

## 

- Crear modelo

```
php artisan make:model ExpenseReport
```

- Consola interactiva

```
php artisan tinker

Psy Shell v0.11.5 (PHP 7.3.33 — cli) by Justin Hileman
>>> $report = new App\Models\ExpenseReport();
=> App\Models\ExpenseReport {#3561}

>>> $report->save();

>>> App\Models\ExpenseReport::all();

php artisan make:model -m Expense
```

## 

- Crear modelo y migrar
 
```
php artisan make:model -m Expense
```

- Crear objeto Mail
 
```
php artisan make:mail SummaryReport
```

## Seeders

- Me permiten insertar registros en mi Base de Datos, pueden ser o no productivos.

- Normalmente usan los Factories.