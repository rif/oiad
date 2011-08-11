from fabric.api import sudo, prompt, run, local, cd
from fabric.decorators import runs_once, hosts, task
from fabric.colors import green

@task
def ci():
    'Commit localy using mercurial'
    local('hg ci -m "another commit from fabric"' )
    local('hg archive ~/Documents/prog/oiad/kohana/')

@runs_once
def push():
    print(green('pushing...'))
    with cd('/home/rif/Documents/prog/oiad/'):
        local("svn status | awk '{if ($1 == \"?\") print $2 }' | xargs svn add")
        #comment = prompt('Officail commit comment: ', default='another commit from fabric')
        #run('svn ci -m "%s"' % comment)

@task
@hosts('radu.fericean@dev.upandrunningsoftware.com')
def deploy():
    'triggers svn up on the server'
    print(green('deploying...'))
    push()
    'Deploy the app to the target environment'
    run('svn up /data/www/oiad.dev.upandrunningsoftware.com/htdocs/')

