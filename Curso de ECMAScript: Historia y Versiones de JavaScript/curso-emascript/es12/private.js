class user {
    // constructor
    constructor(name, age) {
        this.name = name;
        this.age = age;
    }
    // métodos
    // privado, accedido desde primera clase
    #speak() {
        return 'Hello';
    }
    greeting() {
        return `${this.speak()} ${this.name}`;
    }
    
    // privado, accedido desde primera clase
    get #uAge() {
        return this.age;
    }

    set #uAge(u) {
        this.age = n;
    }
}

const bebeloper1 = new user('David', 15);
console.log(bebeloper1.uAge);
console.log(bebeloper1.uAge = 20);
