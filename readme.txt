Description
This project is a custom PHP 8 application built from scratch, following the MVC (Model-View-Controller) pattern. The intention behind creating this project is to gain a deeper understanding of how popular frameworks like Laravel work under the hood. By studying the internal mechanisms of such frameworks, I aim to enhance my knowledge of PHP development and improve my ability to build efficient and scalable web applications.

Prerequisites
To run this project, you need to have the following installed on your system:

PHP 8
XAMPP (or any other local server environment)
Installation and Setup
Clone this repository to your local machine.
Install and configure XAMPP or a similar local server environment.
Move the cloned project directory to the appropriate location in your server's document root.
Start your local server environment (Apache and MySQL).
Create a new MySQL database for the project.
Import the provided SQL file into the newly created database.
Open the project in your preferred code editor.
Configure the database connection settings in the config.php file located in the project's root directory.
Launch your web browser and navigate to the project's URL.
Usage
Upon accessing the project, you will be able to explore the implemented functionality and navigate through different sections.
The project's structure and code organization follow the MVC pattern, separating the application's logic into models, views, and controllers.
Take some time to examine the codebase, explore how different components interact with each other, and gain insights into the inner workings of a framework-like architecture.
Contributing
I welcome contributions from the community to further enhance this project. If you have any suggestions, improvements, or bug fixes, please feel free to submit a pull request. Together, we can make this project even better!

License
This project is licensed under the MIT License. Feel free to use, modify, and distribute the code as per the terms of the license.

Acknowledgements
I would like to express my gratitude to the creators of Laravel and other PHP frameworks, whose innovative designs and architecture have served as an inspiration for this project. Their contributions have significantly shaped the PHP development landscape and continue to drive progress in web application development.

IMP REMINDER - 11:00 am i have completed linking the Admin Assets css js everything to the
IMP admin index.php changed few things in the config.php like created an constant variable 
IMP ADMIN_THEME to point to the admin assets
IMP created a new member function in the core controller class named viewAdmin which redirects to the 
IMP right view

IMP The ASSETS constant is the path to the assets folder (defined in index.php<outer most index.php>)
IMP The ROOT has the absolute path (defined in index.php<outer most index.php>)


IMP Here the users table is equivalent to crioretailers table in the database
{
    i changed the name of the models name from users.class.php to crioretailers.class.php
    and inside the file the name of the class has been renamed to crioretailers from user
}

IMP TO change any business Logic go to the respective Models Example to change the rank of the user/retailer go to the crioretailers.class.php
in models

IMP SESSION-> the only item that is saved inside the session is the user_url
