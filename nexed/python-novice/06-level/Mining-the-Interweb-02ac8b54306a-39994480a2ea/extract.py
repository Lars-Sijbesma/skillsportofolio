import requests

x = int(input("Typ een getal: "))

y = requests.get('https://jsonplaceholder.typicode.com/todos/' + str(x))

print(y.json())
