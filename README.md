Lab'O project
========================

[...]

System requirements
-------------------

* PHP 7.1;

* Web-server (Apache or Nginx);

* Database (MySQL/MariaDB or PostgreSQL);

* composer https://getcomposer.org/doc/00-intro.md

* npm https://www.npmjs.com/get-npm


How To Use
----------

To clone and run this project, you'll need Git, Composer and NPM. From your command line:

*Clone this repository*
gitclone https://github.com/WildCodeSchool/orleans-0218-labo.git

*Go to the project repertory*
cd orleans-0218-labo

*Install dependencies*
Before you continue, you must authorize you computer to connect to your mail account.
Connect to a gmail account and go to "google account". Click on "connect to google validation in two steps", click on "start", click on "next".
Then you must authenticate yourself with your mobile phone, and write the code you will receive.
Click on "next", and activate.
You will receive a confirmation message on your mobile phone.
You have to go back on your google account and go to connection and security and click click on "connect to google".
Click on "applications's password" (you have none yet). Approve the connection to the mobile phone, 
select "other (personnalised name)", then generate.
The generated password must be kept for the composer installation.

1) How to install composer :
composer install (cli)
Press enter for parameters : database_host, database_port
Choose a name for database_name, then press enter.
Chooser a name for database_user, or keep default name (root), then press enter.
Enter your database password and press enter.
Enter "gmail" in mailer_transport parameter, press enter.
Enter "smtp.gmail.com" in mailer_host parameter, press enter.
Enter an email address in mailer_user parameter, press enter.
You have to fill mailer_password parameter with the previously generated password.
For mailer_mail, do the same as with the mailer_user parameter, then press enter.
Finally, press enter to keep the secret parameter default.

2) How to install npm:
npm install (cli)

*Compile Webpack for CSS and JS*
./node_modules/.bin/encore production (cli)

*Initiate Project*
php bin/console doctrine:database:create (cli)
php bin/console doctrine:schema:update --force (cli)

*Launch Server PHP*
php bin/console server:run or configure a web server (apache, nginx, ...).