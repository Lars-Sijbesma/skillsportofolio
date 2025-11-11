let versheid = parseInt(process.argv[2]);
let brood = parseInt(process.argv[3]);
let vloer = parseInt(process.argv[4]);

let opening = 8;
let sluiting = 20;

let untilVersheid = 0;
let untilBrood = 0;
let untilVloer = 0;

let taken = {};

for (let i = opening; i <= sluiting; i++) {
    if (untilVersheid === 0) {
        if (taken[i] === null || taken[i] === undefined) {
            taken[i] = [];
        }
        taken[i].push("versheid groenten en fruit checken");
        untilVersheid = versheid;
    }
    if (untilBrood === 0) {
        if (taken[i] === null || taken[i] === undefined) {
            taken[i] = [];
        }
        taken[i].push("nieuw brood bakken");
        untilBrood = brood;
    }
    if (untilVloer === 0) {
        if (taken[i] === null || taken[i] === undefined) {
            taken[i] = [];
        }
        taken[i].push("vloer schoonmaken");
        untilVloer = vloer;
    }
    untilVersheid--;
    untilBrood--;
    untilVloer--;
}

console.log("Dagrooster taken");
console.log("=====================");

let vrij = 0;

for (let i = opening; i < sluiting; i++) {
    if (taken[i] === null || taken[i] === undefined) {
        vrij++;
        console.log(`${i}:00 - vrij`);
    } else {
        let taakString = taken[i].join(", ");
        console.log(`${i}:00 - ${taakString}`);
    }
}

console.log("=====================");
console.log(`Uren vrij: ${vrij}`);
