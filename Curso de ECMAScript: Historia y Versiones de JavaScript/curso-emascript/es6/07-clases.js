
// declarando
class User {};
// instancia de una clase
// const newUser = new User();

class user {
    // métodos
    greeting() {
        return 'Hello';
    }
}

const gndx = new user();
console.log(gndx.greeting());
const bebedeoscar = new user();
console.log(bebedeoscar.greeting());

// constructor

class user {
    constructor() {
        console.log('Nuevo Usuario');
    }
    greeting() {
        return 'Hello';
    }
}

const david = new user();

// this

class user {
    constructor(name) {
        this.name = name;
    }
    // métodos
    speak() {
        return 'Hello';
    }
    greeting() {
        return `${this.speak()} ${this.name}`;
    }
}

const ana1 = new user('Ana');
console.log(ana1.greeting());

// setters and getters

const ana = new user('Ana');
console.log(ana.greeting());


class user {
    // constructor
    constructor(name, age) {
        this.name = name;
        this.age = age;
    }
    // metodos
    speak() {
        return 'Hello';
    }
    greeting() {
        return `${this.speak()} ${this.name}`;
    }
    
    get uAge() {
        return this.age;
    }

    set uAge(u) {
        this.age = n;
    }
}

const bebeloper1 = new user('David', 15);
console.log(bebeloper1.uAge);
console.log(bebeloper1.uAge = 20);


