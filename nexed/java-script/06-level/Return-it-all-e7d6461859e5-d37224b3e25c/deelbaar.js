function deelbaar(int) {
    return int % 43 === 0;
}

console.log(`13729 is deelbaar door 43: ${deelbaar(13729)}`);
console.log(`14706 is deelbaar door 43: ${deelbaar(14706)}`);
