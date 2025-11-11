bezittingen = {
    'goud' : 500,
    'buidel' : ['touw', 'vuursteen', 'zakmes'],
    'rugzak' : ['panfluit', 'dolk', 'slaapzak','appel']
}
bezittingen['zilver'] = 12
bezittingen['buidel'].remove('zakmes')
bezittingen["rugzak"].sort()

print(bezittingen)
