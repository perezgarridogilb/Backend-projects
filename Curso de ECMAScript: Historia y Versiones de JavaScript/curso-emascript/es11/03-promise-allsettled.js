const promise1 = new Promise((resolve, reject) => reject("Reject"));
const promise2 = new Promise((resolve, reject) => resolve("resolve"));
const promise3 = new Promise((resolve, reject) => resolve("Resolve 2"));

Promise.allSettled([promise1, promise2, promise3])
    .then(response => console.log(response));


    const anotherFunction = () => {
    return new Promise((simon, nel ) => (true) ? simon("bien") : nel("no"))
    }

    anotherFunction()
    .then(respuesta => console.log(respuesta))
