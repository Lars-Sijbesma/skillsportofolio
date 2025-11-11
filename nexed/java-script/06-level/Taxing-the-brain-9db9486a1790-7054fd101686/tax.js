function berekenBelasting(inkomen) {
    let belasting = 0;

    if (inkomen > 70000) {
        belasting += (inkomen - 70000) * 0.9;
        inkomen = 70000;
    }
    if (inkomen > 30000) {
        belasting += (inkomen - 30000) * 0.5;
        inkomen = 30000;
    }
    if (inkomen > 10000) {
        belasting += (inkomen - 10000) * 0.2;
        inkomen = 10000;
    }
    return belasting;
}

function berekenMin50ProcentBelasting() {
    let inkomen = 10000;
    let cont = true;
    while (cont) {
        const percentage = berekenBelastingPercentage(inkomen);
        if (percentage >= 50) {
            cont = false;
        } else {
            inkomen += 1;
        }
    }
    return inkomen;
}

function berekenBelastingPercentage(inkomen) {
    const belasting = berekenBelasting(inkomen);
    const percentage = (belasting / inkomen) * 100;
    return percentage;
}
let inkomen = parseFloat(process.argv[2]);
if (Number.isNaN(inkomen)) {
    inkomen = berekenMin50ProcentBelasting();
}

const percentage = berekenBelastingPercentage(inkomen);
console.log(`Income: ${inkomen}; effective tax: ${percentage.toFixed(10)}%`);