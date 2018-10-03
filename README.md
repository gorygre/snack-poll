# Snack Poll
This is my response to a coding challenge issued by my current employee Symplicity Coropration. It leverages the PHP framework Laravel for its backend including a RESTful API. On the front end I used Angular 1.x

# See for yourself!
[snackpoll.grmccall.com](http://snackpoll.grmccall.com/)

# Rundown
Please note for login that Jane and John have the following account information

username - jane@grmccall.com

password - monkey

username - john@grmccall.com

password - monkey

Each user can vote only once. However for testing the voting system I have added a "admin" account which can vote as much as they care to.

username - admin@grmccall.com

password - admin
 
## RESTful API
GET snackpoll.grmccall.com/api/snacks

GET snackpoll.grmccall.com/api/snacks/[id]

PATCH snackpoll.grmccall.com/api/snacks/[id]

## Angular 1.x
The js is located in laravel/public/scripts/

Blade templating is in resources/views/ (particularly home.blade.php)

## Laravel 5.6
Routing is in routes/api.php and routes/web.php

Models are in app/User.php and app/Vote.php

Controllers handle interaction with database models in app/Http/Controllers/VoteController and UserController

Laravel interfaces the underlying MySQL database with the Models
