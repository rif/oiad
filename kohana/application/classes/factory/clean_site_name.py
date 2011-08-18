from glob import glob

for php_file in glob('scrappers/*.php'):
    content = ''
    with open(php_file) as f:
        for line in f.read().split('\n'):
            content += line + '\n' if not 'site_name' in line else ''
    with open(php_file, 'w') as f:
        f.write(content)
