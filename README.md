<div style="display:flex; align-items: center">
  <h1 style="position:relative; top: -6px" >Movie Quotes App</h1>
</div>

---
Movie Quotes is an App where you are able to see random movie quotes.
The platform has its own admin panel where you can add movies and quotes.

#
### Table of Contents
* [Prerequisites](#prerequisites)
* [Tech Stack](#tech-stack)
* [Getting Started](#getting-started)
* [Migrations](#migration)
* [Development](#development)
* [Deployment](#deployment)
* [Resources](#resources)

#
### Prerequisites

* <img src="readme/assets/php.svg" width="35" style="position: relative; top: 4px" /> *PHP@8.1 and up*
* <img src="readme/assets/mysql.png" width="35" style="position: relative; top: 4px" /> *MYSQL@8 and up*
* <img src="readme/assets/npm.png" width="35" style="position: relative; top: 4px" /> *npm@7 and up*
* <img src="readme/assets/composer.png" width="35" style="position: relative; top: 6px" /> *composer@2.4 and up*


#
### Tech Stack

* <img src="readme/assets/laravel.png" height="18" style="position: relative; top: 4px" /> [Laravel@9.x](https://laravel.com/docs/9.x) - back-end framework
* <img src="readme/assets/spatie.png" height="19" style="position: relative; top: 4px" /> [Spatie Translatable](https://github.com/spatie/laravel-translatable) - package for translation
* <img src="readme/assets/tailwind.png" height="19" style="position: relative; top: 4px" /> [Tailwind CSS](https://tailwindcss.com) - css library

#
### Getting Started
1\. First of all you need to clone Movie Quotes repository from github:
```sh
git clone https://github.com/RedberryInternship/guram-tsagareishvili-movie-quotes
```

2\. Next step requires you to run *composer install* in order to install all the dependencies.
```sh
composer install
```

3\. after you have installed all the PHP dependencies, it's time to install all the JS dependencies:
```sh
npm install
```

and also:
```sh
npm run dev
```
in order to run Tailwind CSS.

4\. Now we need to set our env file. Go to the root of your project and execute this command.
```sh
cp .env.example .env
```
5\. Now we need to generate Laravel key.
```sh
php artisan key:generate
```
And now you should provide **.env** file all the necessary environment variables:

#
**MYSQL:**
>DB_CONNECTION=mysql

>DB_HOST=127.0.0.1

>DB_PORT=3306

>DB_DATABASE=*****

>DB_USERNAME=*****

>DB_PASSWORD=*****

##### Now, you should be good to go!


#
### Migration
if you've completed getting started section, then migrating database if fairly simple process, just execute:
```sh
php artisan migrate
```

#
### Development

You can run Laravel's built-in development server by executing:

```sh
  php artisan serve
```

You must also run:

```sh
  npm run dev
```
it is needed for Tailiwind CSS to work!



#
### Deployment
<br/>

!["CI / CD"](./readme/assets/cicd.png)

<br />

Continues Development / Continues Integration & Deployment steps:
* CI \ CD process first step is of course is development.
* After some time of development when you are ready to integrate and deploy your feature/fix/work you make a commit or pull request to gihub branch.
* That triggers github action which listens to pull requests and commits on development and master branch. Github actions will set up configure project, run unit tests.
* If unit tests fail, you go a head and do some fixing and aftermath try again.
* If unit tests succeed then github actions will deploy your code to development or production server according to the branch you are making commit to.
* After deploying, github actions script will build your code and run migrations all to be up to date.

Then everything should be OK :pray:

#
### Resources

1\. Git Book.
```sh
https://redberry.gitbook.io/assignment-i-movie-quotes/
```

2\. Design:
```sh
https://www.figma.com/file/IIJOKK5esgM8uK8pM3D59J/Movie-Quotes?node-id=0%3A1
```
3\. Database structure in DrawSQL:
```sh
https://drawsql.app/teams/skeleton-team/diagrams/movie-quotes
```



