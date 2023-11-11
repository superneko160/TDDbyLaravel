# TDDbyLaravel
TDD by Laravel10

## SetUp

### .env
```
DB_DATABASE=memo
```

### Create Table
```
php artisan migrate
```

## TestCode Creation

### Feature Test
```
php artisan make:test FooTest
```

### Unit Test
```
php artisan make:test --unit FooTest
```

## Test
```
php artisan test
```

## Test Steps

Specifics: Check git log.

### Step1 Red
Write tests that don't pass.

### Step2 Green
Write a test that passes.

### Step3 Refactoring

Refactoring to the extent that the test is "green".
