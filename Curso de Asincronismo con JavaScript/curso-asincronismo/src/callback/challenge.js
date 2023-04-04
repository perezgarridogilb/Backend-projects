/**
 * Biblioteca que previamente instalamos
 */
const XMLHttpRequest = require('xmlhttprequest');
/**
 * Root de nuestra API
 */
const API = 'https://api.escuelajs.co/api/v1';

function fetchData(urlApi, callback){
    let xhttp = new XMLHttpRequest();

    /**
     * Abrir un primer recurso con GET
     */
    xhttp.open('GET', urlApi, true);
    xhttp.onreadystatechange = function (event) {
        if (xhttp.readyState === 4) {
            /**
             * 0 → Se ha inicializado.
             * 1 → Loading (cargando).
             * 2 → Se ha cargado.
             * 3 → Procesamiento si existe alguna descarga.
             * 4 → Completado.
             */
            if(xhttp.status === 200) {
                callback(null, JSON.parse(xhttp.responseText));
            }
        } else {
            const error = new Error('Error' + urlApi);
            return callback(error, null);
        }
    }
    xhttp.send();
}

fetchData(`${API}/products`, function (error1, data1) {
    if (error1) return console.error(error1)
})


