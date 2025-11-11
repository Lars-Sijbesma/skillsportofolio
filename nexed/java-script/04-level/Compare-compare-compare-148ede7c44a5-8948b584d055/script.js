let NL = parseInt(process.argv[2]);
let DE = parseInt(process.argv[3]);
let FR = parseInt(process.argv[4]);

console.log(`Nederland heeft minder inwoners dan Duitsland en Frankrijk: ${NL < DE && NL < FR}`);
console.log(`Nederland of Frankrijk heeft meer inwoners dan Duitsland: ${NL > DE || FR > DE}`);
console.log(`Het is niet waar dat Nederland meer inwoners heeft dan Duitsland: ${!(NL > DE)}`);
