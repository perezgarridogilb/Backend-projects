const fs = require('fs');

function leer(ruta, cb) {
    fs.readFile(ruta, (err, data) => {
        console.log(data.toString()); 
    })
}

function escribir(ruta, contenido, cb) {
    fs.writeFile(ruta, contenido, function (err) {
        if(err) {
            console.error('No he podido escribirlo', err);
        } else {
            console.log('Se ha escrito correctamente');
        }
    });
}

function borrar(ruta, cb) {
    // Deslinkar los nodos del archivo
    fs.unlink(ruta, cb);
}

// escribir(__dirname + '/archivo.txt', 'Soy un archivo nuevo', console.log)
// leer(__dirname + '/archivo.txt', console.log);
// borrar(__dirname + '/archivo.txt', console.log);
