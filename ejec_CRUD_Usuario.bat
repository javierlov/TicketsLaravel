cls
	rem CRUD para un usuario
	pause

php artisan make:controller UsuarioController
	rem se crea un controlador para el usuario
	rem ver directorio /app/http/controllers/UsuarioController.php	
	rem escribir las vistas en la clase
	rem generar las vistas /resources/view/admin/index.blade.php
	rem generar las vistas /resources/view/layout/admin.blade.php
	pause 

	rem generar las rutas en /app/http/Route.php  enrutado restfull
	rem Routes::resources('usuario','UsuarioController');
	pause
	
php artisan make:seeder UserTableSeeder
	
php artisan migrate
	rem se actualiza la estructura de la tabla user
	pause
	
php artisan route:list
	pause
	
	
php artisan db:seed --class=UserTableSeeder
	rem agrega un nuevo usuario...
	pause