<p align="center">
<img src="info/logo.jpg">
</p>


## Установка из composer

```
composer require Lemoro/stamper
```

 Опубликовать js файлы, вью и миграции необходимые для работы пакета.
Вызывать команду:
```
php artisan vendor:publish --provider="Pottery\Providers\PotteryServiceProvider"
```

Выполнить миграцию
 ```
    php artisan migrate
 ```
