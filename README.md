# Laravel API with Job Queue, Database and Event Handling

## Setup Instructions

1. Clone the repository:

    ```bash
    git clone https://github.com/alelisdev/qrder-test.git
    cd qrder-test
    ```

2. Install dependencies:
    ```bash
    composer install
    ```
3. Set up your .env file (copy from .env.example):
    ```bash
    cp .env.example .env
    ```
4. Generate an application key:
    ```bash
    php artisan key:generate
    ```
5. Run migrations:
    ```bash
    php artisan migrate
    ```

## Testing the API

Test the API endpoint using tools like Postman or curl. Send a POST request to:

```bash
POST /api/submissions
```

with the following JSON payload:

```
{
    "name": "John Doe",
    "email": "john.doe@example.com",
    "message": "This is a test message."
}
```

## Unit Test

Run the test

```bash
php artisan test
```
