# Fashionette Challenge

## Tasks

1. JSON API for TV shows by their name: https:://json-api/?q=deadwood.

2. Any other request to the API is invalid and should return the appropriate response.

3. Non-case sensitive and non-typo tolerant

4. Optimization of the number of HTTP requests

5. Best practices

6. Test

## Installation

1. Clone github repo

2. cd into your project

3. Install composer dependencies

4. Create a copy of your .env file

5. Generate an app encryption key

6. You could run tests by using ```\vendor\bin\phpunit --filter SearchShowApiTest``` or ```php artisan test --filter SearchShowApiTest ```

7. Open the browser, the api route is under: ```api/search/?q=deadwood```

## Thinkings of Optimizations

1. More third party services, not only TVMaze api

2. More features of TVMaze api, like search schedule, country

3. More validations for request, like regex check for some special symbols i.e '?', '!'

4. Authentication middleware?

5. Design pattern: Decorator, Adapter, Strategy

6. Limit request numbers

7. Mock some response by testing, no need to call real api in each tests.