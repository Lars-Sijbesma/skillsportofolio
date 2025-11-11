let gem = parseInt(process.argv[2]);
let neerslag = parseInt(process.argv[3]);
let lowest = parseInt(process.argv[4]);

console.log(`gemiddelde temperatuur: ${gem}°c, neerslag: ${neerslag} mm, laagste temperatuur: ${lowest}°c`);

let warm = (gem > 20 && neerslag < 750) || lowest > 10 || gem >= 25;

console.log(`Het land is een warm land: ${warm}`);
