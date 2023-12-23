<h1>Aplikasi yang di install</h1>
Xampp
https://www.apachefriends.org/download.html

Composer
https://getcomposer.org/download/

Versi PHP >= 8.2.12

Versi Composer >= 2.6.5

Versi Database MySQL

<h1>Langkah setup projek</h1>
1. Clone repository dan <code>cd</code> kedalam folde yang ingin di setup
<pre>git clone https://github.com/riskiananda90/Ayo_Makan.git</pre>

2. Install composer pada projek
<pre> composer install</pre>

3. Copy file <code>.env.example</code> dan ubah file menjadi <code>.env</code>

4. generate key app baru
<pre> php artisan key:generate </pre>

5. Buat database <code>db_ayomakan</code> di <code>localhost/phpmyadmin</code>

6. Kemudian ekspor file <code>db_ayomakan</code> pada database tersebut

7. Ubah Configurasi <code>.env</code> menjadi
<pre>DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=db_ayomakan
DB_USERNAME=root
DB_PASSWORD=</pre>

8. membuat link storage
<pre>php artisan storage:link</pre>

9. Selanjutnya jalankan projek
<pre>php artisan serve</pre>

<h2>List User</h2>
Admin

Email:<code>admin@admin.com</code>

password:<code>password</code>

Admin

Email:<code>user@user.com</code>

password:<code>password</code>