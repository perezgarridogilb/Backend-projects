const { callbackify } = require("util");

function asincrona(callback) {
    setTimeout(function() {
        try {
            let a = 3 + z;
            callback(null, a);
        } catch  (e) {
            callback(e, null);
        }
    }, 1000);
}
// try {
asincrona(function (err, dato) {
    // Lanzar una excepcion con Throw dentro de un callback asincrono no va a funcionar… 
    // Solo nos va a funcionar en n bloque de codigo sincrono
    // throw para fuera de funciones asincronas, pero dentro de funciones asincronas no va a funcionar
    if (err) {
        console.error('Tenemos un error'); 
        console.error(err);
        return false; 
        // throw err; // No va a FUNCIONAR: En funciones asíncronas
    }
    
    console.log('Todo ha ido bien, mi data es ', dato);
    
})
// } catch (e) {
//     console.error('Hemos capturado un error')
//     console.error(e);
// }
