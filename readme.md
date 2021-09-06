#### Install laravel project
open a terminal and navigate to the cloned folder  
composer update  
composer install  
php artisan serve  
go to 127.0.0.1:8000  
click generate app key  

start apache and mysql servers  
go to localhost/phpmyadmin  
create a database (GeometryCalculator)  
create a testing database (GeometryCalculatorTest)  

rename .env.example to .env  
set **DB_CONNECTION** value to **mysql**  
set **DB_DATABASE** value to **GeometryCalculator**  
add a key **DB_TEST_DATABASE** and set value to GeometryCalculatorTest  

#### Configure testing driver
go to config/database.php  
create a duplicate entry of 'mysql' driver, set a new name (**mysql_testing**)  
under database key of the driver, change the env key from *DB_DATABASE* to **DB_TEST_DATABASE**  

go to **phpunit.xml** file  
uncomment DB_CONNECTION and DB_DATABASE,  
change DB_CONNECTION value to mysql_testing  

#### UI
run **composer require laravel/ui**
