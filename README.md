## Task
You're tasked to create a simple REST web service application for an e-commerce app using Laravel.

You need to develop APIs for creating and viewing a single product. There should also be an API for viewing a list of the products.

A product needs to have the following information:

- Product name
- Product description
- Product price
- Created at
- Updated at

## Project setup
- Run `composer install` in the project root
- Create a new MySQL database named `backend_coding_test`
- Copy the `.env.example` file to a new file called `.env`
- Fill out the corresponding database values in the `.env` file
- Run `php artisan migrate` in the project root

## Requirements
- The product name should have a maximum of 255 characters, and the product price should be numeric that accepts up to two decimal places.
- The created at and updated at fields should be in timestamp format.
- The view products list API needs to be paginated.
- You are free to use any library or component just as long as it can be installed using Composer.

## Optional (for bonus points)
- Say for example, we need a feature where we can display featured products. How would you go about implementing this feature? (You don't need to write code for this, just describe how would you implement it)


## TODO

--PRODUCT--

POST
-create product param(name|max:255,	 description,	price|numeric 2 decimals, 	created_at,	updated_a,) 

GET
-search product param(product_id or product_name)

GET
-search * product()

--PRODUCT--



<!-- Removed auto generated -->
<!-- --USER-- -->
<!-- POST
-create users param(name|max:255,  email|email,  email_verified_at|timestamp,  password,  remember_token|Url?,  created_at|timestamp,  updated_at|timestamp)  -->

<!-- POST
-signin users param(email|email,  password,) -->

<!-- POST
-forgot password param(email|email, remember_token|Url?, created_at|timestamp) -->

<!-- --USER-- -->

<!-- --ERROR HANDLING--

POST
-failed_jobs param(uuid,  connection,	queue,	payload	exception,	failed_at|timestamp)

--ERROR HANDLING-- -->
