
function otraFuncion() {
    return serompe();
}

function serompe() {
    return 3 + z;
}

function seRompeAsincrona(cb) {
    setTimeout(function () {
       try {
        return 3 + z; 
    } catch (err) {
        console.error('Error en mi función asíncrona');
        cb(err); 
    }
    })
}

try { 
    // otraFuncion();
    seRompeAsincrona(function(err) {
        console.log (err.message);
    })
} catch(err) {
    console.error('Vaya, algo se ha roto...');
    console.error(err.message);
    console.error('Pero no pasa nada, lo hemos capturado');
}

console.log('esto de aquí está al final');
