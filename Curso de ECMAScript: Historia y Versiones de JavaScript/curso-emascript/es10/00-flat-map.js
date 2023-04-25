const array = [1,1,2,3,4, [1,2,5,6, [2,[4]]]];
console.log(array.flat(2));

const array2 = [1,2,3,4,5];
console.log(array2.flatMap(v => [v, v * 2]));
