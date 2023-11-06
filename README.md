
Create Jobs And Send Mail Via Queue In Laravel 10 Bangla Tutorial Mamuror IT hadi jaman


1. composer create-project laravel/laravel mamurjor-hadi

2. .env
MAIL_MAILER=smtp
MAIL_HOST=sandbox.smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=62bd5185706e32
MAIL_PASSWORD=fb4129801ac0cd

3. php artisan make:mail LaravelTenTestMail


4. resources/views/email/test.blade.php


5. QUEUE_CONNECTION=database

6. php artisan queue:table

//then

7.php artisan migrate


8.php artisan make:job LaravelQueueMailJob


9. 
use Illuminate\Support\Facades\Mail;

Route::get('laravel_ten_queue_test_mail', function () {
    $data['text'] = "We are learning laravel 10 mail from mamurjor it";
    $data['email'] = 'hadijaman@gmail.com';
    dispatch(new App\Jobs\LaravelQueueMailJob($data));

    dd('Mail send successfully.');
});

10.
php artisan serve

http://localhost:8000/laravel_ten_queue_test_mail


11. php artisan queue:listen
