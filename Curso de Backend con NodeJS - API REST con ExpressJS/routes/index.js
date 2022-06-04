
const productsRouter = require('./products.router');
// const router = require('./users.router');

function router(app) {
    app.use('/products', productsRouter);
    // app.use('/users', productsRouter);
    // app.use('/categories', productsRouter);
}


module.exports = routerApi;
