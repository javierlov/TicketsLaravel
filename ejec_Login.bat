cls
	rem login de usuarios
	pause

php artisan make:controller LoginController
	rem se crea un controlador para el logins
	rem ver directorio /app/http/controllers/LoginController.php		
	pause 

php artisan make:request LoginRequest
	rem genera un loginrequest para el logeo
	rem generar en routes.php las rutas para logeo
	rem ...\app\Http\Requests\LoginRequest.php
	pause
