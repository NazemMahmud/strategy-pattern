# Strategy pattern

Strategy is a behavioral design pattern that lets you define a family of algorithms, put each of them into a separate class, and make their objects interchangeable.

Here, an example is used as a TDD (_Test Driven Development_) approach

## Problem Domain

- There are some products with **code**, **name** & **price**. See _**src/Modal/Products**_ file
- There are some offers for specific product, such as
  - Buy 1 get 1 offer for Mango
  - Bulk discount offer for Strawberry: buy item >=3, price will be reduced to a specific amount, in this example, 4.5
- Now, calculate total price when checking out


## Run Test
To run test file through CLI using phpunit, try like this:
```angular2html
./vendor/bin/phpunit tests/CheckoutTest.php
```