const http = require('http');

http.createServer(router).listen(3000);

function router(req, res) {
    console.log('Nueva petición!');
    console.log(req.url);

    switch(req.url) {
        case '/hola':
            let saludo = hola();
            res.write('Hola, qué tal'); 
            res.end();
            break;

        default:
            res.write('Error 404: No sé lo que quieres');
            res.end();    
    }

    // Escribir respuesta al usuario
    // res.write('Hola, ya sé usar HTTP desde NodeJS')
    // res.writeHead(201, {'Content-Type': 'text/plain'}); 

    // res.end();
}
function hola() {
    return 'Hola, qué tal';
}

console.log("Escuchando http en el puerto 3000");