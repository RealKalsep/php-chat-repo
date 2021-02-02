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
![PHPChat on computer](https://i.imgur.com/Ljgi69v.png)
![PHPChat on computer](https://i.imgur.com/DWw17fN.png)

## Developer Info
* You are free to fork.
* You are free to change the terms and data usage, but changing the data usage to match your chat data storing is recommended.
* If you want to contribute, fork the repository, work on your fork and create a pull request.