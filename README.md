# Hello PHP Vegas

Slides for this talk can be found here: 

https://docs.google.com/presentation/d/1zscpQEJL6PGqXJ-B6z53EpJSu2DSISbxJ_CvNjM6ZTA/edit?usp=sharing

This repo is paired with my talk about Lumen and RESTful API's. You can find the repository for the API here.

https://github.com/Robert430404/rc-notes-api.git

This repo contains the example commands used to show case some of the basics of the talk. If you would like to look at them to better
understand how they work, you can pull this repo down using git, and experiment with them on your own.

## Looking Through The API

The API is a simple lumen application. I made use of the middleware system for the authentication. You can look in 

	/bootstrap/app.php

to see the enabled modules for lumen. 

If you want to look over the middleware provider, you can look in

	/app/Providers/AuthServiceProvider.php 

and see how I implemented the authentication. 

I use an artisan command in order to generate admin users, and there API keys. You can see my logic for the user creation here.

	/app/Console/Commands/MakeAdmin.php

I bound all of the routes using namespacing for the API, you can look through the route definitions here.

	/routes/web.php

You'll notice that the URI stays the same through out the routes, but the protocol changes based upon request type. If you look in the corresponding controllers, you can see the different logic that applies to each HTTP method.

The controllers are located here

	/app/Http/Controllers/...

## Configuring The API

In order to make these test commands work with your installation of the API, you'll need to do a few things.

The first thing you'll need to do in order to start playing with the api is to pull down the repo.

	git clone https://github.com/Robert430404/rc-notes-api.git

After you have the repository cloned down, you'll need to change into the directory and install the dependencies.

	composer install

Once that completes, you'll then need to setup the .env file for the local install.

	cp .env.sample .env

Then open up that file, and configure it like this to get something quick working with sqlite.

	APP_ENV=local
	APP_DEBUG=true
	APP_KEY=
	APP_TIMEZONE=UTC

	DB_CONNECTION=sqlite

	CACHE_DRIVER=array
	QUEUE_DRIVER=array

After you have your .env configured, you'll need to create the database file with this command.

	touch database/database.sqlite

You should now be able to run the migrations
	
	php artisan migrate

and seed the database

	php artisan db:seed

The next step is to create you're account.

	php artisan make:admin --name="Your Name" --email="your@email.com" --pass="yourpassword"

This will generate an account for you and show you your api key in the console window, copy your api key to a safe place for the next step.

Then just change directory into the public folder and run this to start the development server

	php -S localhost:8989

**make sure to leave this window open and running**

## Configuring The Test Commands

You will now need to clone down this repository

	git clone https://github.com/Robert430404/php-vegas-talk-examples-rest-api.git

You will then change directory into the new exmple directory.

You will then issue this command

	cp config.sample.php config.php

and edit that file to use your new api key.

You can then start issuing commands. In order to see a list of commands, use this command

	php runner list
