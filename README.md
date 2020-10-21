# Delocal Zrt. Homework

### Installation

1. Install XAMPP.
2. Start Apache and MySQL.
3. Go to localhost/phpmyadmin.
4. Create a new database with utf8_general_ci encode type and with name delocal.
5. Run the sql command on this database, which can be found in the database folder, and reconfig the dbconfig file with your phpmyadmin settings.
7. cd to the root folder of this project in cmd.
8. Run php -S localhost:8080.
9. You can install Postman for easy testing.

### Usage

  - On the /contacts route you can get all of the contacts from the database in JSON(GET).
  - On the /contacts/{id} route you can get one contact in JSON, I created 10 contacts for testing(GET).
  - On the /create route you can add a new contact like(POST):
  ```sh
{
    "name": "jani",
    "email": "janika@gmail.com",
    "phone_number": "0646152456",
    "address": "4444 Miskolc, Kozepszer u. 33."
}
```
- On the /update you can update your contact's email like this() :
 ```sh
{
    "id": "11",
    "email": "erzsi@gmail.com"
}
```


