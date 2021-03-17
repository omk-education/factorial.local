# Прототип приложения «Факториал числа»

Инициализация проекта

```php
composer create-project --prefer-dist laravel/laravel factorial.local
```

### 1. Прототип приложения

-   [x] 1.1. Проектирование маршрутов приложения
-   [x] 1.2. Создание маршрута для загрузки формы
-   [x] 1.3. Создание контроллера

```php
php artisan make:controller CalculateController
```

-   [x] 1.4. Создание метода для загрузки формы
-   [x] 1.5. Создание базового представления приложения
    -   [ ] 1.5.1. Вывод результата
    -   [ ] 1.5.2. Форма для передачи данных
-   [ ] 1.6. Маршрут для вычисления факториала числа
-   [ ] 1.7. Метод для вычисления факториала
-   [ ] 1.8. Модификация представления
-   [ ] 1.9. Валидация данных
-   [ ] 1.10. Модификация представления для вывода ошибок

### 2. Рефакторинг прототипа

-   [ ] 2.1. Перенос валидации данных в Form Request

```php
php artisan make:request FactorialRequest
```

-   [ ] 2.2. Подключение валидации к контроллеру
-   [ ] 2.3. Создание сервиса для вычисления факториала
-   [ ] 2.4. Создание сервис провайдера

```php
php artisan make:provider CalculateServiceProvider
```

-   [ ] 2.5. Подключение сервис провайдера
-   [ ] 2.6. Создание фасада
-   [ ] 2.7. Создание алиаса для фасада
-   [ ] 2.8. Подключение сервиса к контроллеру
