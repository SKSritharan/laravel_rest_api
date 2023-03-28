# Laravel API Documentation

## Introduction
This API is built with Laravel and provides functionality for managing customers and invoices. Customers can be created, updated, and read, while invoices can be created and updated for each customer.

## Setup
1. Run `php artisan migrate:fresh --seed`
2. Go to `http://127.0.0.1:8000/setup` - to generate access tokens with create, update, and read-only permissions.

## API Endpoints

### Customers
- `GET /api/v1/customers` - Retrieve all customers
- `GET /api/v1/customers/{id}` - Retrieve a single customer
- `POST /api/v1/customers` - Create a new customer
- `PUT /api/v1/customers/{id}` - Update an existing customer
- `PATCH /api/v1/customers/{id}` - Update an existing customer's only fields

### Invoices
- `GET /api/v1/invoices` - Retrieve all invoices
- `GET /api/v1/invoices/{id}` - Retrieve a single invoice
- `POST /api/v1/invoices/bulk` - Insert Bulk Invoices into Cutomer(s)

## Authentication
All API endpoints require an access token to be included in the request headers. The access token can be obtained by visiting the `/setup` endpoint.

The following access tokens are available:
- Admin token with create, update, and delete permissions
- Update token with create and update permissions
- Basic token with read-only permissions
    - Content-Type: application/json
    - Authorization: Bearer <access_token>
