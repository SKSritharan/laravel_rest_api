<?php

namespace App\Filters\V1;

use App\Filters\ApiFilter;

class CustomersFilter extends ApiFilter
{
    protected $safeParms = [
        'name' => ['eq'],
        'email' => ['eq'],
        'type' => ['eq'],
        'address' => ['eq'],
        'city' => ['eq'],
        'state' => ['eq'],
        'postalCode' => ['eq', 'gt', 'lt'],
    ];

    protected $columnMap = [
        'postalCode' => 'postal_code',
    ];

    protected $operatorMap = [
        'eq' => '=',
        'lt' => '<',
        'gt' => '>',
        'lte' => '≤',
        'gte' => '≥',
    ];
}