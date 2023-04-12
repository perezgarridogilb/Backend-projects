const fnAsync = () =>  {
    return new Promise((resolve, reject) => {
        (true)
        ? setTimeout(() => resolve('Async!!'), 2000)
        : reject(new Error('Error!'));
    });
}

const anotherFn = async () => {
    /** Recurso en el concepto de asincronismo, lo cual nos va a permitir
     * trabajar con múltiples elementos que queramos llamar sin detener el flujo
     * de nuestra aplicación
     */
    const somethig = await fnAsync();
    /** Espera a la inicialización anterior */
    console.log(somethig);
    console.log('Hello!');

}

console.log('Before');
anotherFn();
console.log('After');