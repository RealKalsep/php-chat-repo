# php-chat
A PHP chat with Apache, no databases.
Please report any issues you find!

PROS:
* IP hashing with sha256
* IDs
* Admin panel
* Commands
* Ban system
* Admin panel security (unauthorized hashes go to main page)
* Unwanted admin login detections

CONS:
* Many flaws, probably.
* You have to refresh to update messages.

## Instructions
#### Requires Apache (PHP)
#### Requires write and read permission
* Install Apache or choose a hosting with Apache.
* Put the files into the htdocs (or public_html) folder.
* If you have it on your computer, enter localhost (127.0.0.1).
* If you have it on a hosting, enter the site link.
* You set the admin password in admcheck.php

### PHP-Chat on computer
![PHPChat on computer](https://i.imgur.com/0eGar7Q.jpg)
![PHPChat on computer](https://i.imgur.com/z3Fpsyb.jpg)
Images are outdated. Remind me to do new ones.

## Developer Info
* You are free to fork.
* When forking, please do actual changes (or tests, you are free to make it private), and credit me, Kalsep.
* You are free to change the terms, however for every user's security please change the data usage if you change the logging system.
* If you want to contribute, fork the repository, work on your fork and create a pull request.
