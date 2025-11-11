import  json

with open('gras_blok.json') as json_file:
    data = json.load(json_file)
    print(json.dumps(data, indent=4))
    data['block']['snow'] = True
    data['block']['coordinates']['y']  +=66
    data['block']['coordinates']['z'] *=3
    print(data)
    json_file.close()

with open('sneeuw_blok.json', 'w') as json_file:
    json.dump(data, json_file)
    json_file.close()
