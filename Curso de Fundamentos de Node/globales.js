/* Si puedes no usar variables globales, no uses variables globales, porque eso crea un foco de problemas */

console.log(global);

console.log(setInterval);

let i = 0;
let intervalo = setInterval(function () { 
    console.log('Hola');
    if (i === 3) {
       clearInterval(intervalo); 
    }
    i++;
}, 1000);

setImmediate(function () {
    console.log('Hola');
}); 

console.log(process);

/**
 * Directorio
 */
console.log(__dirname);
/**
 * Archivo
 */
console.log(__filename);

global.miVariable = 'elValor';

console.log(miVariable);
