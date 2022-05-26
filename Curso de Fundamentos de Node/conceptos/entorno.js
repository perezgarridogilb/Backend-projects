let nombre = process.env.NOMBRE || 'Sin nombre';
let web = process.env.WEB || 'Sin web';

console.log('Hola ' + nombre);
console.log('Mi web es ' + web);

/*
MacBook@MacBook-Pro ~/D/P/Curso de Fundamentos de Node (master) [1]> NOMBRE=Carlns node entorno.js
Hola Carlns
MacBook@MacBook-Pro ~/D/P/Curso de Fundamentos de Node (master)> NOMBRE=Carlns node entorno.js js
Hola Carlns
MacBook@MacBook-Pro ~/D/P/Curso de Fundamentos de Node (master)> NOMBRE=Felipe node entorno.js
Hola Felipe
MacBook@MacBook-Pro ~/D/P/Curso de Fundamentos de Node (master)> node entorno.js js
Hola Sin nombre
MacBook@MacBook-Pro ~/D/P/Curso de Fundamentos de Node (master)> node entorno.js js
Hola Sin nombre
Mi web es:Sin web
MacBook@MacBook-Pro ~/D/P/Curso de Fundamentos de Node (master)> NOMBRE=Carlos WEB=loquesea.com node entorno.js
Hola Carlos
Mi web es loquesea.com
MacBook@MacBook-Pro ~/D/P/Curso de Fundamentos de Node (master)>
*/