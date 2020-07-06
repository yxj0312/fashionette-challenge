# Fashionette Challenge

## Tasks

- [x] JSON API for TV shows by their name: https:://json-api/?q=deadwood.

- [x] Any other request to the API is invalid and should return the appropriate response.

- [x] Non-case sensitive and non-typo tolerant

- [x] Optimization of the number of HTTP requests

- [x] Best practices

- [x] Test

## Installation

1. Clone github repo

2. cd into your project

3. Install composer dependencies

4. Create a copy of your .env file

5. Generate an app encryption key

6. You could run tests by using ```\vendor\bin\phpunit --filter SearchShowApiTest``` or ```php artisan test --filter SearchShowApiTest ```

7. Open the browser, the api route is under: ```api/search/?q=deadwood```

## [See all the commits here](https://github.com/yxj0312/fashionette-challenge/commits/master)

## Thinkings of Optimizations

### How do you think this API can be evolved in the future

1. More third party services, not only TVMaze api

2. More features of TVMaze api, like search schedule, country

3. More validations for request, like regex check for some special symbols i.e '?', '!'

4. Authentication middleware

5. Design pattern: Decorator, Adapter, Strategy

6. Limit request numbers

7. Mocking some response by testing, avoid to call real api to make the test running faster
