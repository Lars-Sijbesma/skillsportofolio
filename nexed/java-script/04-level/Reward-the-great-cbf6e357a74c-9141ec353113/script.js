let rating = parseInt(process.argv[2]);
let natuur = parseInt(process.argv[3]);
let autowegdek = parseInt(process.argv[4]);

console.log(`rating: ${rating} sterren, natuurgebied: ${natuur}%, autowegdek: ${autowegdek} km`);
if (rating >= 3) {
    if (natuur > 25) {
        console.log("belastingkorting voor de inwoners");
    } else {
        console.log("subsidie voor aanleg van meer natuur");
    }
} else if (autowegdek > 200) {
    console.log("subsidie voor ombouwen autoweg naar fietsstraat");
} else {
    console.log("subsidie voor afvalinzameling");
}
