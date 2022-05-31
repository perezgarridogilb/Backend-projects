let suma = 0;
let suma2 = 0;
console.time('todo');
console.time('bucle');
for(let i = 0; i < 1000000; i++) {
    suma += 1;
}
console.timeEnd('bucle');

console.time('Tiempo bucle 2');
for (let j = 0; j < 1000; j++) {
    suma2 = suma2 + j;
}
console.timeEnd('Tiempo bucle 2')
console.time('asincrono');
console.log('Empieza el proceso async')
asincrona()
    .then(() => {
        console.timeEnd('asincrono');
    });
console.timeEnd('todo');

function asincrona() {
    return new Promise ( (resolve) => {
        setTimeout(function () {
            console.log('Termina el proceso asíncrono');
            resolve();
        })
    })
}
