This task was build using [Laravel](https://laravel.com/docs/7.x)

# Steps to run The project

- git clone of the master branch
- run `composer install`
- renaming .env.example to .env
- run `composer dump-autoload`
- the base url is 'http://127.0.0.1:8000/api/v1/repos'

# Notes

- for API [documentation](https://documenter.getpostman.com/view/5140236/TzshHR6s) that contains examples for success
  and failures endpoints

# Testing

- run `vendor/bin/phpunit`

# Docker

- run `docker-compose up -d`
- run `docker exec -it repo-filtering-api sh`
- the base url is 'http://127.0.0.1:8080/api/v1/repos'

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
