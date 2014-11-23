## Init application
1. clone repository: `git clone git@github.com:janoszab/westlinewebworks.git`
2. run `composer install` command in app folder
3. run `touch app/database/production.sqlite` command in app folder
4. run `php artisan migrate` in app folder
5. run `php artisan serve` in app folder after app available localhost:8000
6. open `http://localhost:8000` url in your favorite browser


## Data Generate
1. frequently run `php artisan generate:data` or create a new record for this in crontab   
