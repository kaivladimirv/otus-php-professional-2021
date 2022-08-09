[Otus. PHP Developer. Professional 2021](https://otus.ru/lessons/razrabotchik-php/?int_source=courses_catalog&int_term=programming)
==============================

## Домашнее задание №4.1

#### Разработать приложение получающее post-параметр string и производящее валидацию скобочной последовательности.

Верификация строки со скобками Используя Docker, вы описали сборку двух контейнеров – один с nginx, второй – с php-fpm и вашим кодом. Используя docker-compose вы запускаете оба контейнера. Контейнер с nginx пробрасывает 80 порт на вашу хостовую машину и ожидает соединений. Клиент соединяется, и шлёт следующий HTTP-запрос:
POST / HTTP/1.1

string=(()()()()))((((()()()))(()()()(((()))))))

String - это POST-параметр, который можно проверять:
1. На непустоту;
1. На корректность кол-ва открытых и закрытых скобок;

Все запросы с динамическим содержимым (*.php) nginx, используя директиву fastcgi_pass, проксирует в контейнер с php-fpm и вашим кодом.  
Nginx должен обрабатывать запросы не обращая внимания на директиву Host.

После обработки:
- если строка корректна, то пользователю возвращается ответ 200 OK, с информационным текстом, что всё хорошо;
- если строка некорректна, то пользователю возвращается ответ 400 Bad Request, с информационным текстом, что всё плохо;

<br>

>Критерии оценки:
>- Строка в примере - только пример. На тестах она должна быть любой;
>- Соответствие скобок должно быть и с точки зрения скобок. Тест ")(" не должен проходить
>- Конструкции @ и die неприемлемы. Вместо них используйте исключения;
>- С точки зрения логики веб-сервиса ответ 400 - это валидное завершение работы скрипта;
>- В рамках одной машины (без сетевого соединения) сборка LNMP гораздо быстрее работает при соединении FPM и Nginx через socket. Плюс за использование именно такой настройки;
>- Принимается только Unix-сокет;
>- Код здесь и далее мы пишем с применением ООП;
>- Код здесь и далее должен быть конфигурируем через файлы настроек типа config.ini;
>- Обратите внимание на паттерн FrontController (он же - единая точка доступа). Все приложения, которые Вы создаёте здесь и далее должны вызываться через один файл index.php;
>- Точка входа - app.php;