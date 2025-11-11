let pincode = 123752;

let inCode = parseInt(process.argv[2]);
let positie = process.argv[3].toLowerCase();
let dag = parseInt(process.argv[4]);

let codeGoed = pincode === inCode;
let positieGoed = (positie === "bestuur" || positie === "administratief medewerker");

if (codeGoed && positieGoed) {
    console.log("Toegang verleend");
} else if ((!codeGoed && (dag === 5 || dag === 6)) || (!positieGoed && (dag === 5 || dag === 6))) {
    console.log("Veiligheidsdiensten worden ingeschakeld");
} else if ((!codeGoed && positieGoed) || (codeGoed && !positieGoed)) {
    console.log("Verkeerde pincode of je hebt niet de juiste rechten");
}
