let namen = document.querySelectorAll("h1");

for (let naam of namen) {
    naam.style.textDecoration = "underline";
}

let naam1 = namen[0];
let naam2 = namen[1];

let h2 = document.querySelectorAll("h2");
for (let naam of h2) {
    naam.style.fontFamily = "cursive";
}

let leeftijden = document.querySelectorAll("span");
for (let leeftijd of leeftijden) {
    leeftijd.style.fontSize = "32px";
}
let leeftijd1 = leeftijden[1].innerHTML;
let leeftijd2 = leeftijden[3].innerHTML;

if (leeftijd1 >= 16.5) {
    naam1.style.color = "green";
} else {
    naam1.style.color = "red";
}
if (leeftijd2 >= 16.5) {
    naam2.style.color = "green";
} else {
    naam2.style.color = "red";
}
