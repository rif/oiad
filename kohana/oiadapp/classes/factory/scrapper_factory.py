import csv

def write_class(name, class_name, address):
    template = open('scrapper.template').read()
    template = template.replace('{{address}}', address)
    template = template.replace('{{class}}', class_name)
    template = template.replace('{{name}}', name)
    with open('scrappers/' + class_name + '.php', 'w') as fp:
        fp.write(template)

sitesReader = csv.reader(open('oiadsites.csv', 'rb'), delimiter=',', quotechar='"')
for row in sitesReader:
    name = row[0]
    address = row[1]
    class_name  = name.title()
    for char in " !'&'-.":
        class_name = class_name.replace(char, '')
    class_name = class_name.lstrip('1234567890')
    write_class(name, class_name, address)
    
