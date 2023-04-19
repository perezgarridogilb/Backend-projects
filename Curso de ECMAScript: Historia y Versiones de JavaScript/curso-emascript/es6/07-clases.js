class user {
    constructor(name) {
        this.name = name;
    }

    speak() {
        return 'Hello';
    }

    greeting() {
        return `${this.speak()} ${this.name}`;
    }
}

const ana = new user('Ana');
console.log(ana.greeting());

class user {
    constructor(name, age) {
        this.name = name;
        this.age = age;
    }

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
