<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<div class="button-group minor-group">
    <a href="#" class="button primary">Dashboard</a>
    <a href="#" class="button">Inbox</a>
    <a href="#" class="button">Account</a>
    <a href="#" class="button">Logout</a>
</div>


## About Author

My name is Shamim. I'm working over 6+ years on Web Development. Basically i'm highly intersted on Web Programming. In this project i just trying to stand up basic mockup of Sanctum API. 


### Project Moduels

- Registration new user using API.
- Login user using API.
- Logout user using API.

- Create Product using API.
- Show all product list using API.
- View single product by product ID using API. 
- Update single product by product ID using API.
- Delete product by ID using API.

### Installation

1. Clone the repo
   ```sh
   git clone https://github.com/shamimbdpro/laravel-api-development-with-sanctum-package.git
   ```
2. Install NPM packages
   ```sh
   npm install
   ```
3. Change username and password on .eve file.


### Registration new user using API.
1. Endpoind. https://yoursite.com/api/register
2. Request Field:
 
 ```sh
  {
    "name": "string",
    "email": "string",
    "password": "string",
    "password_confirmation": "string",
}
   ```

Response.
   
 ```sh
  {
    "status": 1,
    "message": "User Registration Sucessfull",
    "token": "8|bJMenOt2q7EyFh1fkti8NXnD5W2z4dAK8DlOmnFF",
    "data": {
        "name": "shamim",
        "email": "shamim4@gmail.com",
        "updated_at": "2021-09-27T05:12:24.000000Z",
        "created_at": "2021-09-27T05:12:24.000000Z",
        "id": 4
    }
}
   ```


   ### Login user using API.
   API Endpoind (https://yoursite.com/api/login)

   Request.

    ```sh
    {
    "email": "string",
    "password": "string",
    }
   ```


   Response.
   
 ```sh
{
    "status": 1,
    "message": "User Loggin Successfully.",
    "access_token": "11|q4eYsrp2D6syVrfnc4Z6IjZYSnM11RXtv6PWQAUw"
}
   ```