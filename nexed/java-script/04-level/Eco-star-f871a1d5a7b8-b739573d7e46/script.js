let dieselVerboden = process.argv[2] === "ja";
let afvalscheiding = process.argv[3] === "ja";
let natuurgebied = parseInt(process.argv[4]) > 25;

let sterren = 0;

if (dieselVerboden) sterren++;
if (afvalscheiding) sterren++;
if (natuurgebied) sterren++;

if (sterren >= 3) {
    console.log("Het is een milieuvriendelijke stad");
} else if (sterren === 0) {
    console.log("De stad moet omgevormd worden");
} else {
    console.log(`De stad heeft nog ${3 - sterren} ster(ren) nodig om milieuvriendelijk te zijn`);
}
