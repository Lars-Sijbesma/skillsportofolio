let totaal = parseInt(process.argv[2]);
let dag = parseInt(process.argv[3]);

let totaalProcent = 1.0;

switch (dag) {
    case 0:
        totaalProcent = 1.0;
        break;
    case 1:
        totaalProcent = 0.98;
        break;
    case 2:
        totaalProcent = 0.97;
        break;
    case 3:
        totaalProcent = 0.96;
        break;
    case 4:
        totaalProcent = 0.995;
        break;
    case 5:
        totaalProcent = 0.985;
        break;
    case 6:
        totaalProcent = 0.95;
        break;
    default:
        totaalProcent = 1;
        break;
}

totaal = Math.round((totaal * totaalProcent) * 100.0) / 100.0;

console.log(`Totaalbedrag is ${totaal}`);
