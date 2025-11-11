let nl = process.argv[2];
let de = process.argv[3];
let fr = process.argv[4];

console.log(`Nederland en Duitsland zijn om hetzelfde bekend: ${nl === de}`);
console.log(`Nederland en Frankrijk zijn om hetzelfde bekend: ${nl === fr}`);
console.log(`Frankrijk en Duitsland zijn niet om hetzelfde bekend: ${fr !== de}`);