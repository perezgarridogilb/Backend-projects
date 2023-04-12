import fetch from 'node-fetch';
const API = 'https://api.escuelajs.co/api/v1';


/**
 *  Por debajo fetch utiliza el concepto de las promesas
 * 
 */
async function fetchData(urlApi) {
    /** Ir por los datos */
    const response = await fetch(urlApi);
    /** Esperar la transformación */
    const data = await response.json();
    /** Para después retornarlo */
    return data;
}

const anotherFunction = async (urlApi) => {
    try {
        const products = await fetchData(`${urlApi}/products`);
        const product = await fetchData(`${urlApi}/products/${products[0].id}`);
        const category = await fetchData(`${urlApi}/categories/${product.category.id}`);

        console.log(products);
        console.log(product.title);
        console.log(category.name);
    } catch (error) {
        console.error(error);
    }
}

anotherFunction(API);
