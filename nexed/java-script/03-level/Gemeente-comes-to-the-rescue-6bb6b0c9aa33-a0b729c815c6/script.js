let totaal = parseInt(process.argv[2]);

let stad = totaal % 3;

let gemeente = totaal - stad;

console.log("In totaal is er " + (totaal) + " miljoen uitgegeven");
console.log("De stad betaalt " + stad + " miljoen");
console.log("De gemeente betaalt " + gemeente + " miljoen");