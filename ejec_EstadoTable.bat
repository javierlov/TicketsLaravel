php artisan make:model Estado
	rem se crea un modelo Estado
	rem ver directorio /app/Estado.php
	rem agregar los campos que deben ir a la tabla Estados..... antes de continuar!
	pause 

php artisan make:controller EstadoController
	rem crea un controlador ... define el vinculo entre vista y modelo
	rem directorio ...\app\Http\Controllers
	pause
		
php artisan make:seeder EstadoTableSeeder
	rem crea un seeder para agregar datos de prueba a la tabla Estados
	rem ver directorio /database/seeds/EstadoTableSeeder.php
	pause

	rem php artisan migrate:refres --seed
	rem si se configura el seeder se crea la tabla y los datos.
	pause

php artisan make:migration create_table_Estados --create=Estados	
	rem crea la estructura de la tabla Estados
	rem directorio ...\database\migrations	
	pause

php artisan migrate
	rem se crea la migracion en la base. se crea la tabla Estados
	rem php make migrate (esto crea las tablas en la base)
	pause

php artisan db:seed
	rem genera datos de prueba en la tabla
	rem populate
	pause
	

php artisan make:test EstadosCreateTest
	rem crea un archivo para generar test unitarios a medida que se va agregando funcionalidad al sistema
	rem ver dir /test/EstadosCreateTest.php
	rem para testear ejecutar /
	

php artisan route:list	
	rem muestra la lista de rutas existentes ...
	rem estas se encuentra en el dir ...\resources\views
	pause	