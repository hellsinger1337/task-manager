## Установка

 
    ```sh
    git clone https://github.com/hellsinger1337/task-manager.git
    cd task-manager
    composer install

    cp .env.example .env

    php artisan key:generate

    php artisan migrate

    php artisan db:seed

    php artisan serve
    ```

Приложение теперь должно быть доступно по адресу `http://localhost:8000`.

## Использование

### API Документация

API документация доступна по адресу `http://localhost:8000/api/documentation` после генерации Swagger документации. 

```sh
php artisan l5-swagger:generate
```