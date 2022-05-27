
var tabla = [
    {
        a: 1,
        b: 'Z'
    },
    {
        a: 2,
        b: 'Otra'
    }
]

// console.log('Algo')

// console.info('Algo')

// console.error('Algo')

// console.warn('Algo')

// console.log(tabla)
/**
 * Ver como tabla
 */
// console.table(tabla)

/**
 * Se puede anidar
 */
// console.group('Conversacion');
// console.log('Hola');
// console.log('Blablabla');
// console.log('Adios');
// funcion2()
// console.log('Hemos vuelto a la 1')
// console.groupEnd('Otra cosa')

function function1() {
    console.group('funcion 1');
    console.log('Esto es la funcion 1');
    console.log('Esto tambien');
    console.log('Esto tambien');
    funcion2();
    console.log('Hemos vuelto a la 1');
    console.groupEnd('funcion 1');
}

function funcion2() {
    console.group('funcion 2'); 
    console.log('Ahora estamos en la funcion 2')
    console.groupEnd('funcion 1');
}

console.log('empezamos');
function1();

console.count('veces'); 
console.count('veces'); 
console.count('veces'); 
console.count('veces');
console.countReset('veces');
console.count('veces');
