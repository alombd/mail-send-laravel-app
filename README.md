
## About Mail Make Configuration

In first step, you have to add send mail configuration with mail driver, mail host, mail port, mail username, mail password so laravel 8 will use those sender details on email. So you can simply add as like following.


# .env

`MAIL_DRIVER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=mygoogle@gmail.com
MAIL_PASSWORD=rrnnucvnqlbsl
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=mygoogle@gmail.com
MAIL_FROM_NAME="${APP_NAME}"`


# Run Project:

`php artisan serve`

- local URL http://127.0.0.1:8000/api/send-mail.



