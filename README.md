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
<pre>git clone git@github.com:riskiananda90/Ayo_Makan.git</pre>

2. Install composer pada projek
<pre> composer install</pre>

3. Copy file <code>.env.example</code> dan ubah file menjadi <code>.env</code>

4. generate key app baru
<pre> php artisan key:generate </pre>

5. Ubah Configurasi <code>.env</code> menjadi

