const fs = require('fs');
const stream = require('stream');
const util = require('util');

let data = '';

// entrada
let readableStream = fs.createReadStream(__dirname + '/input.txt');

readableStream.setEncoding('UTF8');
/** 
readableStream.on('data', function (chunk){
    // console.log(chunk);
    // console.log(chunk.toString());
    data += chunk;
});

readableStream.on('end', function (chunk){
    console.log(data);
});*/

/**
 * Escribiendo en la salida estandar del sistema
 */

process.stdout.write('hola')
process.stdout.write('que')
process.stdout.write('tal')

/**
 * Lo recibe, edita y transforma
 */

const Transform = stream.Transform;

function Mayus() {
    Transform.call(this);
}
util.inherits(Mayus, Transform);

Mayus.prototype._transform = function(chunk, codif, cb) {
    chunkMayus = chunk.toString().toUpperCase();
    this.push(chunkMayus);
    // callback vacío
    cb();
}

let mayus = new Mayus();

readableStream
    .pipe(mayus)
    .pipe(process.stdout);
