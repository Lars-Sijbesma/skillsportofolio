let leonie = document.querySelector(".leonie");
let naam1 = leonie.firstElementChild;
let leeftijd1 = leonie.lastElementChild;
let mustafa = document.querySelector(".mustafa");
let naam2 = mustafa.firstElementChild;
let leeftijd2 = mustafa.lastElementChild;

if (leeftijd1.innerHTML >= 17) {
    naam1.innerHTML += " mag beginnen met rijlessen!";
} else {
    naam1.innerHTML += " moet nog even wachten!";
}
if (leeftijd2.innerHTML >= 17) {
    naam2.innerHTML += " mag beginnen met rijlessen!";
} else {
    naam2.innerHTML += " moet nog even wachten!";
}
