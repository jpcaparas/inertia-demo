## Overview

A demo for testing out the features of [Inertia.js](https://inertiajs.com/) on a Laravel application.

## Run it

    composer install

    yarn && yarn mix

    php artisan serve

## Endpoints that leverage Inertia.js

    /greet/{name} # /greet/JP

    /sort/{sortDirection}/{numbers?} # /sort/asc/20/4/2/1/100

## Questions

> I changed one of the Vue page components and nothing happened.

You'll need to run `yarn watch` to listen for file changes.

---

> Where are the Vue page components located?

They are located on the `./resources/js/Pages` directory, as specified on the `createInertiaApp::resolve` param on the `app.js` file.

---

> What if I want to add new routes and corresponding pages?

--- 

Simply register a route on the `web.php` file and attach a controller to it. The controller should return an `Inertia` response object, which links to a Vue single file component. 