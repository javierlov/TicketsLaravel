php artisan make:model Ticket
	echo se crea un modelo Ticket
	echo ver directorio /app/Ticket.php
	echo agregar los campos que deben ir a la tabla Tickets..... antes de continuar!
	pause 

php artisan make:controller TicketController
	echo crea un controlador ...
	echo directorio C:\xampp\htdocs\Tickets\app\Http\Controllers
	pause
		
php artisan make:seeder TicketTableSeeder
	echo crea un seeder para agregar datos de prueba a la tabla Tickets
	echo ver directorio /database/seeds/TicketTableSeeder.php
	pause

	echo php artisan migrate:refres --seed
	echo si se configura el seeder se crea la tabla y los datos.
	pause

php artisan make:migration create_table_tickets --create=Tickets	
	echo crea la estructura de la tabla tickets
	echo directorio C:\xampp\htdocs\Tickets\database\migrations	
	pause

php artisan migrate
	echo se crea la migracion en la base. se crea la tabla tickets
	rem php make migrate (esto crea las tablas en la base)
	pause


php artisan make:test TicketsCreateTest
	echo crea un archivo para generar test unitarios a medida que se va agregando funcionalidad al sistema
	echo ver dir /test/TicketsCreateTest.php
	echo para testear ejecutar /
	

php artisan route:list	
	echo muestra la lista de rutas existentes ...
	echo estas se encuentra en el dir C:\xampp\htdocs\Tickets\resources\views
	pause	