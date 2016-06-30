==== Email Notifikasi Setelah Melakukan Registrasi ====

Aplikasi ini masih menggunakan localhost XAMPP.
Setelah mendownload aplikasi, silahkan copy project tepat ke 
folder htdocs
Cth : C:\xampp\htdocs
Setelah dicopy, nanti file path menjadi ==> C:\xampp\htdocs\Registrasi

Untuk dapat menggunakan aplikasi dengan baik,
silahkan melakukan beberapa konfigurasi dibawah ini.

1. Buka file register.php

2. Pada line 61 : $mail->Username = 'emailanda@gmail.com';  
	-> ganti menjadi alamat email anda
		 cth : $mail->Username = 'joyce.manroe@gmail.com';  

3. Pada line 62 : $mail->Password = 'password-emailanda@gmail.com'; 
	-> ganti menjadi password email gmail anda : 
	-> password joyce.manroe@gmail.com === 12345
		 cth : $mail->Password = '12345';


4. Pada line 67 : $mail->addAddress('emailpenerima@gmail.com');
	-> ganti menjadi alamat email yang akan menerima email notifikasi
		 cth : if413061@gmail.com

5. Pastikan php.ini (C:\xampp\php) sudah diset dapat mengirim email

6. Setelah melakukan konfigurasi diatas, silahkan menggunakan aplikasi,
dan pastikan komputer Anda terhubung dengan koneksi Internet.


================ 

Selamat menggunakan. :)
JRNM
================
