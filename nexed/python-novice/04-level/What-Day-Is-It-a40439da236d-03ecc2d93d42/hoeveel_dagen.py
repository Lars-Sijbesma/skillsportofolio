import datetime


jaar = int(input("Wat is het jaar? "))
maand = int(input("Wat is het maandnummer? "))
dag = int(input("Wat is de dag? "))


x = datetime.datetime.now()
print(-(x - datetime.datetime(jaar, maand, dag)))
