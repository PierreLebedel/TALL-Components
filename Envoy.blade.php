@servers(['web' => ['pleb@51.210.9.18 -p 2223']])

@task('deploy', ['on' => 'web'])
    cd /var/www/tallcomponents;
    git pull origin main;
    php artisan migrate --force;
    php artisan optimize:clear;
@endtask