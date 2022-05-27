/* Si puedes no usar variables globales, no uses variables globales, porque eso crea un foco de problemas */

console.log(global);

console.log(setInterval);

/**
 * Uno de sus usos podrían ser la conexión al servidor
 */
let i = 0;
let intervalo = setInterval(function () { 
    console.log('Hola');
    if (i === 3) {
       clearInterval(intervalo); 
    }
    i++;
}, 1000);

/**
 * Lo ejecuta inmedia
 */
setImmediate(function () {
    console.log('Hola');
}); 

/**
 * Información del proceso
 */
console.log(process);

/**
 * Directorio donde estamos
 */
console.log(__dirname);

/**
 * Archivo donde estamos
 */
console.log(__filename);

/**
 * "Si puedes no usar variables globales, no uses variables globales, porque eso crea un foco de problemas".
 */
global.miVariable = 'elValor';

console.log(miVariable);
