<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>


## About Author

My name is Shamim. I'm working over 6+ years on Web Development. Basically i'm highly intersted on Web Programming. In this project i just trying to stand up basic mockup of Sanctum API. 


### Project Moduels

- Registration new user using API.
- Login user using API.

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
   a) name (required)
   b) email (required)
   c) password (required)
   d) password_confirmation (required)

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