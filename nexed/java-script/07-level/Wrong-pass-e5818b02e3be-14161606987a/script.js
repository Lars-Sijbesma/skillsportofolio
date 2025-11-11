let namen = document.querySelectorAll("h1");
let naam1 = namen[0];
let naam2 = namen[1];

let leeftijden = document.querySelectorAll("span");
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
