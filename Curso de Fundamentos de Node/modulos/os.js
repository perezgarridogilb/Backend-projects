
const os = require('os'); 
/**
 * Architecture
 */
// console.log(os.arch());
/**
 * Platform
 */
// console.log(os.platform());
/**
 * cpus
 */
// console.log(os.cpus().length); 

/**
 * Errores y señales
 */
console.log(os.constants); 

/**
 * 
 */


const SIZE = 1024;
function kb(bytes) { return bytes / SIZE }
function mb(bytes) { return bytes / SIZE }

// console.log(kb(os.freemem())); 
// console.log(mb(os.freemem())); 
// console.log(gb(os.freemem())); 
// console.log(gb(os.totalmem())); 

console.log(os.homedir())
console.log(os.tmpdir())

console.log(os.hostname())

console.log(os.networkInterfaces())
