const user = { username: 'gndx', age: 33, country: 'CO' };
const { username, ...value } = user;
console.log(value);
console.log({ username });
