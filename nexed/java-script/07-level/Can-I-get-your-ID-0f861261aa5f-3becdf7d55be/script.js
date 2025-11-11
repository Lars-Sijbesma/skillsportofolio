let naam1 = document.getElementById("naamLeonie");
let leeftijd1 = document.getElementById("leeftijdLeonie").innerHTML;
let naam2 = document.getElementById("naamMustafa");
let leeftijd2 = document.getElementById("leeftijdMustafa").innerHTML;

if (leeftijd1 >= 17) {
    naam1.innerHTML += " mag beginnen met rijlessen!";
} else {
    naam1.innerHTML += " moet nog even wachten!";
}
if (leeftijd2 >= 17) {
    naam2 += " mag beginnen met rijlessen!";
} else {
    naam2.innerHTML += " moet nog even wachten!";
}
