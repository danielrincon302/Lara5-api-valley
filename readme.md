Iniciar Servidores
<br>
┌──(㉿)-[~]
└─$ service apache2 start 
<br>
┌──(㉿)-[~]
└─$ service mysqld start 
<br>
Datos para pruebas
<br>
Vendedores.
<br>
INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Vendedor1', 'vendedor@onfraga.com', '12345', NULL, NULL, NULL),
(2, 'Vendedor 2', 'Vendedor2@hotmail.com', '12345', NULL, '2023-03-18 00:10:25', '2023-03-18 00:10:25');
<br><br>
Productos.
<br>
INSERT INTO `products` (`id`, `name`, `description`, `price`, `created_at`, `updated_at`, `f100_id_f200_id_fk1`) VALUES
(1, 'La Coste Red', 'Perfumeria fina', 2000.00, '2023-03-17 12:45:07', '2023-03-17 12:45:07', 1),
(3, 'Lolita Lempicka', 'Lolita Lempicka', 3000.00, '2023-03-18 00:09:36', '2023-03-18 00:09:36', 1),
(4, 'Paris Hilton', 'Lolita Lempicka', 3000.00, '2023-03-18 00:09:36', '2023-03-18 00:09:36', 1),
(5, 'Invictus', 'Invictus', 5000.00, '2023-03-18 00:11:09', '2023-03-18 00:11:09', 2);
<br><br>
Notificaciones.
<br><br>
INSERT INTO `notify_products` (`id`, `nota`, `f1_id_f2_id_fk1`, `created_at`, `updated_at`) VALUES
(1, 'Se envia correcto', 1, '2023-03-24 16:14:58', '2023-03-18 02:04:28'),
(2, 'Producto sin stock', 1, '2023-03-24 16:14:58', '2023-03-17 16:14:58'),
(11, 'Producto Terminado', 1, '2023-03-18 05:12:03', '2023-03-18 06:24:18'),
(12, 'En traslado', 1, '2023-03-18 05:13:03', '2023-03-18 06:24:50'),
(15, 'No recibido', 4, '2023-03-18 05:36:43', '2023-03-18 05:36:43'),
(17, 'paris final', 4, '2023-03-18 05:38:48', '2023-03-18 05:38:48');
<br>
<br>

Comandos Laravel
Modelos.<br>
┌──(cdrb㉿onfraga)-[~]
└─$ php artisan make:model NotifyProduct -m     
<br>
Controladores<br>
┌──(cdrb㉿onfraga)-[~]
└─$ php artisan make:controller RestApiDemoController  
<br>
Iniciar migracio;n<br>
┌──(cdrb㉿onfraga)-[~]
└─$ php artisan migrate 
<br>Lista de rutas<br>
┌──(cdrb㉿onfraga)-[~]
└─$ php artisan route:list 
<br>
instalaci;on angular
┌──(cdrb㉿onfraga)-[~]
└─$ npm install -g @angular/cli   
<br>
┌──(cdrb㉿onfraga)-[~]
└─$ ng serve --open    
<br>
<br>
<b>Prueba de API via CURL</b>
┌──(cdrb㉿onfraga)-[~]
└─$ curl -X POST -G 'http://127.0.0.1:8000/api/apiNotifyNew/' -d 'nota=Producto en camino'  
<br>
┌──(cdrb㉿onfraga)-[~]
└─$ curl -X PUT -G 'http://127.0.0.1:8000/api/apiNotifyUpdate/1' -d 'nota=Producto entregado' 
<br><br>
<b>Instalacio;n PHP 7.0 Debian</b>
<br>
┌──(cdrb㉿onfraga)-[~]
└─$ sudo apt-get install php7.0-mysql 
<br>
<br>
Composer 2.2<br>
┌──(cdrb㉿onfraga)-[~]
└─$ curl -sS https://getcomposer.org/installer | php -- --2.2  
<br>
Repositorio PHP7
┌──(cdrb㉿onfraga)-[~]
└─$ sudo add-apt-repository ppa:ondrej/php 

<img src="http://www.onraga.com/valley.png">


