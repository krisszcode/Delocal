# CRUD REST API for php

### Installation

1. Install XAMPP.
2. Start Apache and MySQL.
3. Go to localhost/phpmyadmin.
4. Import the database.sql from the database folder to your phpmyadmin.
7. cd to the root folder of this project in cmd.
8. Run php -S localhost:8080.
9. You can install Postman for easy testing.

### Usage

  - On the /contacts route you can get all of the contacts from the database in JSON(GET).
  - On the /contacts/{id} route you can get one contact in JSON(GET).
  - On the /create route you can add a new contact like(POST):
  ```sh
{
    "name": "Nagy Janos",
    "email": "janos@gmail.com",
    "phone_number": "0646152456",
    "address": "4444 Miskolc, Kozepszer u. 33."
}
```
- On the /update you can update your contact's email like this() :
 ```sh
{
    "id": "11",
    "email": "mate@gmail.com"
}
```


