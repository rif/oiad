from fabric.api import sudo, prompt, run, local, cd
from fabric.decorators import runs_once, hosts, task
from fabric.colors import green

@task
def ci():
    'Commit localy using mercurial'
    comment = prompt('Commit comment: ', default='another commit from fabric')
    print(green('commiting...'))
    local('hg ci -m "%s"' % comment)
    push()

@runs_once
def push():
    print(green('pushing...'))
    local('hg push')

@task
@hosts('radu.fericean@dev.upandrunningsoftware.com')
def deploy():
    'triggers svn up on the server'
    print(green('deploying...'))
    push()
    'Deploy the app to the target environment'
    run('svn up /data/www/oiad.dev.upandrunningsoftware.com/htdocs/')

@task
@hosts('radu.fericean@dev.upandrunningsoftware.com')
def database_reimport():
    print(green('reimporting database...'))
    run('svn cat https://mayfair.uarss.com/svn/oneitemaday/trunk/schema.sql | mysql --user=root --password=UARdeveloper oiad')