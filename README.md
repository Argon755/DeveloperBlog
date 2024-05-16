# Блог-платформа для разработчиков.
***Добро пожаловать на страницу моего дипломного проекта "Разработка блог-платформы для разработчиков" по laravel***
___
## **Реализованные функции**
+ Реализованна регистрация с помощь SMTP.
+ Реализованна панель администратора.
+ Реализованно CRUD для администратора.
+ Реализованно "мягкое удаление/soft delete".
+ Реализован плавный скролл с анимацией с помощью библиотеки GSAP.
+ Частично реализован личный кабинет пользователя.
+ Частична реализованна пагинация.
+ Частично реализованна функция популярные посты.
+ Частично реализованны страницы блогов.
+ Частично реализованны лайки к постам.
+ Частично реализованны комментарии к постам.
___
## **Установка проекта**
Склонируйте репозиторий на свой локальный компьютер:git clone ___https://github.com/Argon755/DeveloperBlog.git___
___
+ Поместите проект в папку ***domains***
+ Перейдите в директорию проекта с помощью команды: __cd domains/DeveloperBlog/DevBlog/example-app/__
+ Переименуйте файл .env.example из директории проекта в ***.env***
+ Подключите свою базу данных
+ Сгенерируйте ключ приложения с помощью команды: `php artisan key:generate`
+ Убедитесь в работе приложения используя команду: __`php artisan`__
+ Выполните миграции для создания таблиц в базе данных: __`php artisan migrate`__
+ Запустите веб-сервер: __`php artisan serve`__
+ проект доступен по адресу: __http://localhost:8000__. :white_check_mark:
____
## **Инструкция к web-приложению**
+ Регистрация пользователя доступна по ссылке: __http://127.0.0.1:8000/register__
+ Авторизация пользователя доступна по ссылке: __http://127.0.0.1:8000/login__
+ Список постов пользователей доступен по ссылке: __http://127.0.0.1:8000/posts__ 
+ Личный кабинет пользователя доступен по ссылке: __http://127.0.0.1:8000/personal/main__
+ Просмотр понравившихся постов доступен по ссылке: __http://127.0.0.1:8000/personal/liked__
+ Ваши комментарии доступны по ссылке: __http://127.0.0.1:8000/personal/comments__
+ ***Админ панель*** доступна по ссылке: __http://127.0.0.1:8000/admin__
+ В ***админ панели*** вы можете создавать новые аккаунты пользователей, данная функция доступна по ссылке: __http://127.0.0.1:8000/admin/users__ 
+ В ***админ панели*** вы можете создавать новые посты, а также редактировать и удалять их, данная функция доступна по ссылке: __http://127.0.0.1:8000/admin/posts__ 
+ В ***админ панели*** вы можете создавать новые категории, а также редактировать и удалять их, данная функция доступна по ссылке: __http://127.0.0.1:8000/admin/categories__ 
+ В ***админ панели*** вы можете создавать новые тэги, а также редактировать и удалять их, данная функция доступна по ссылке: __http://127.0.0.1:8000/admin/tags__ 
