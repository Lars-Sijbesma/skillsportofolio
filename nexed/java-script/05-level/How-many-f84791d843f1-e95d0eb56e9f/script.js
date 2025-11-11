let boodschapppen = process.argv;

boodschapppen.shift();

let havermelk = 0;

for (let boodscap of boodschapppen) {
    if (boodscap.toLowerCase() === "havermelk") {
        havermelk++;
    }
}

console.log(`Aantal havermelk: ${havermelk}`);
