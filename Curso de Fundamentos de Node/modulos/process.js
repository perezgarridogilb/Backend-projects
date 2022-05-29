// const p = require('process'); 

process.on('beforeExit', () => {
    console.log('El proceso va a terminar');
})

process.on('exit', () => {
    console.log('Ale, el proceso acabó');
})

process.on('uncaughtException', (err, origen) => {
    console.error('Vaya, se nos ha olvidado capturar un error')
    console.error(err)
})

/**
 * Para promesas que se han rechazado
 */
