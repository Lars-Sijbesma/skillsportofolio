const countries = ["Gambia", "Sri Lanka", "United Kingdom", "Uzbekistan"];

function containsMadagascar(array) {
    for (let arrayElement of array) {
        if (arrayElement === "Madagascar") {
            return true;
        }
    }
    return false;
}

function sort(array) {
    return array.sort();
}

function reverse(array) {
    return array.reverse();
}

console.log(containsMadagascar(countries));

let sorted = sort(countries);
console.log(sorted);
sorted = reverse(sorted);
console.log(sorted);

