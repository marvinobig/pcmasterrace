# PC Master Race

The website produced is called “The PC Master Race” and it is an e-commerce website that sells pc parts and accessories. The project includes MySQL database capabilities and can add products to a basket, register and login users and also display product information stored on a database table.

## Technologies/Languages

- PHP (version 8.1.10)
- Composer (version 2.4.2)
- MySQL
- phpMyAdmin
- JavaScript
- Bootstrap (version 5.1)
- CSS3
- HTML5

## Features

- View all products
- View individual products
- Add products to basket
- Create and login to account
- Update your password or delete your account
- Admin page only accessible by users with a role of admin
- Add products to website through admin page.

## Running Locally

You will need a web server solution like XAMPP installed on your local computer to be able to run this project locally. The project's connection to a MySQL database is configurable from the config file "config.php" located in the parent directory. To autoload the classes used for the project, you'll need composer installed on your local computer.

### Autoload Classes

To autoload classes using composer, run this command in the parent directory.

```bash
composer install
```

### Import Database Tables

- You need to create the database "pc_masterrace".
- To use the database tables for this project import the database tables using a database administration tool like phpMyAdmin.
- The database tables are in

```bash
core/db/dbTables
```

### Database Connection Setup

As mentioned before, the config.php file in the parent directory will hold everything the website needs to connect to a MySQL database. It uses the default settings for username, host & password to do this but can be easily changed to whatever you have setup.

### Test User

If the tables have been imported correctly using phpMyAdmin, a test user will already be in the users database table for you to test authentication with. This test user is

- Username -> marvinobig
- Password -> 12345
