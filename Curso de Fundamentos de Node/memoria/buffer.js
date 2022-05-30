
/**
 * bytes
 */
// let buffer = Buffer.alloc(1);
// let buffer = Buffer.from([1, 2, 3]);
let buffer = Buffer.from('Hola');

// console.log(buffer.toString());
console.log(buffer);

/**
 * Creando abecedario con Buffers
 */
let abc = Buffer.alloc(26);
console.log(abc)

/**
 * Bucle para recorrer todo lo que tenemos dentro del buffer
 */
for(let i = 0; i < 25; i++) {
    // Darle a cada posición del buffer un númbero
    abc[i] = i + 97;
}

console.log(abc.toString());

