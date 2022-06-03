const express = require('express');
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
})

app.get('/products', (req, res) => {
  res.json([{
    name: 'Product 1',
    price: 1000
  },
  {
    name: 'Product 2',
    price: 2000
  }
  ]);
});

app.listen(port, () => {
  console.log('Mi port' + port);
})
