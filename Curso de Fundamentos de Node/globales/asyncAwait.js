async function hola(nombre) {
    return new Promise(function (resolve, reject) {
        setTimeout(function () {
            console.log('Hola ' + nombre);
            resolve(nombre);
        }, 1500);
    });
}

async function hablar(nombre) {
    return new Promise(function (resolve, reject) {
        setTimeout(function () {
            console.log('Bla bla bla...');
            resolve(nombre);
            reject('Hay un error');
        }, 1000)
    });
}

async function adios(nombre) {
    return new Promise(function (resolve, reject) {
        setTimeout(function () {
            console.log('Adios ', nombre);
            resolve();
        }, 1000);
    });
}

/* De sincrono a asincrono */
async function main() {
    let nombre = await hola('Carlos');
    // hablar();
    await hablar();
    await adios(nombre); 
}    

console.log('Empezamos el proceso');
main();
console.log('Va a ser la segunda instrucción'); 

/* 
[nodemon] starting `node asyncAwait.js`
Empezamos el proceso
Va a ser la segunda instrucción
Hola Carlos
Bla bla bla...
Adios  Carlos
[nodemon] clean exit - waiting for changes before restart
*/
