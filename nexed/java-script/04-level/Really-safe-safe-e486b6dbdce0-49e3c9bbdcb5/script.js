let fouten = parseInt(process.argv[2]);
let pin = parseInt(process.argv[3]);
let functie = process.argv[4].toLowerCase();
let dag = parseInt(process.argv[5]);
let tijd = parseInt(process.argv[6]);

console.log(`#fouten: ${fouten}, pin: ${pin}, functie: ${functie}, dag: ${dag}, tijd: ${tijd}`);

let werkTijd = (dag <= 4 && tijd >= 9 && tijd <= 17);

if (fouten >= 5) {
    console.log("kluis is geblokkeerd");
} else {
    let magOpen = false;

    if (functie === "bestuur") {
        magOpen = true;
    } else if (functie === "administratief medewerker") {
        magOpen = werkTijd;
    }

    if (magOpen) {
        if (pin === 123752) {
            console.log("Kluis opent");
            if (functie !== "bestuur") {
                console.log("Sms naar bestuur");
            }
        } else {
            console.log("Verkeerde pincode");
        }
    } else if (werkTijd) {
        console.log("Alarm gaat af");
    } else {
        console.log("Stil alarm gaat af");
    }
}
