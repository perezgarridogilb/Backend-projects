const express = require('express');
const routerApi = require('./routes');
/**
 * Constructor/ Método que nos va a crear esta aplicación
 */
const app = express();

const port = 3000;

app.get('/', (req, res) => {
  res.send('Hola, mi server en express');
})

app.get('/nueva-ruta', (req, res) => {
  res.send('Hola, soy una nueva ruta');
});

routerApi(app);

// app.get('/users', (req, res) => {
//   /**
//    * Parámetros tipo query
//    */
//   const { limit, offset } = req.query;
//   if (limit && offset) {
//     res.json({
//       limit,
//       offset
//     })
//   } else {
//     res.send('No hay parámetros');
//   }
// });

// app.get('/categories/:categoryId/products/:productId', (req, res) => {
//   const { categoryId, productId } = req.params;
//   res.json({
//     categoryId,
//     productId,
//   })
// });

app.listen(port, () => {
  console.log('Mi port' + port);
})
