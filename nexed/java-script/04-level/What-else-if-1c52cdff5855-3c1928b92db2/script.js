let inwoners = parseInt(process.argv[2]) * 1000;

if (inwoners >= 10000000) {
    console.log("Megastad");
} else if (inwoners >= 25000) {
    console.log("Stad");
} else {
    console.log("Dorp");
}
