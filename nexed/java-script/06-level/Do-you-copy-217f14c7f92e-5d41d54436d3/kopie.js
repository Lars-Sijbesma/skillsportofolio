let arr = [1, 2, 3];

function print(prefix) {
    console.log(`${prefix}: [ ${arr.join(", ")} ]`);
}

function push(array) {
    array.push(4);
}

function appoint(array) {
    array = [1, 2, 3, 4, 5];
}

print("Voor de push");
push(arr);
print("Na de push");
print("Voor de toewijzing");
appoint(arr);
print("Na de touwijzing");
