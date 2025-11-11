let administratie = parseInt(process.argv[2]);
let infrastructuur = parseInt(process.argv[3]);
let evenementen = parseInt(process.argv[4]);
let totaal = parseInt(process.argv[5]);

let overig = totaal - evenementen - infrastructuur - administratie;

let procenten = (administratie / totaal) * 100;

console.log("Aan administratie  en infrastructuur is " + (administratie + infrastructuur) + " miljoen uitgegeven");
console.log("De overige kosten zijn " + overig + " miljoen");
console.log("Administratie was goed voor " + procenten + "% van de uitgaven");