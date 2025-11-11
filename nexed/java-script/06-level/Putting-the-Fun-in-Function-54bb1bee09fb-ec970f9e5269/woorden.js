let woorden = ["the", "quick", "brown", "fox", "jumps", "over", "the", "lazy", "dog"];

function contains(woordenArray, chars) {
    for (let woord of woordenArray) {
        for (let char of chars) {
            for (let c of woord) {
                if (c === char) {
                    console.log(`${woord} bevat de letter ${char}`);
                }
            }
        }
    }
}

contains(woorden, ['o', 'p', 'q']);
