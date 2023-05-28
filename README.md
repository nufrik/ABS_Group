Инструкция для запуска приложения:

1. Клонировать репазиторий - https://github.com/nufrik/ABS_Group.git  (HTTPS)
                           - git@github.com:nufrik/ABS_Group.git      (SSH)

2. Создаём БД ( с именем например ABS_Group)

3. В корне проекта в фале .env прописываем подключение к БД (DB_DATABASE=ABS_Group)

4. Инициализация. В терминале с проектом прописываем команду composer install

5. Запускаем сервер php artisan serve

6. Применить миграции php artisan migrate

7. Вставить данные в таблицы через сидеры php artisan db:seed

8. Теперь пройти в app/API/settings.http и начать использовать api запросы
