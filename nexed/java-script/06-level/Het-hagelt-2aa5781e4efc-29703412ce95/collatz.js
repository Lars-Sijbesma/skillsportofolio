function oplossingIGeuss(int) {
    let stappen = 0;

    let done = false;
    while (!done) {
        if (int % 2 === 0) {
            int /= 2;
        } else {
            int = int * 3 + 1;
        }

        stappen++;
        if (int === 1 || (int <= 0)) {
            done = true;
        }
    }

    return stappen;
}

let res = oplossingIGeuss(parseInt(process.argv[2]));
console.log(res);
res = oplossingIGeuss(res);
console.log(res);
res = oplossingIGeuss(res);
console.log(res);
