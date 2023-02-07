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