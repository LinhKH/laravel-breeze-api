<?php

namespace App\Filters\V1;

use Illuminate\Http\Request;
use App\Filters\ApiFilter;

class CustomerFilter extends ApiFilter {

    protected $safeParams = [
        'postalCode' => ['eq', 'gt', 'lt'],
        'name' => ['eq'],
        'type' => ['eq'],
        'email' => ['eq'],
        'address' => ['eq'],
        'state' => ['eq'],
    ];

    protected $columnMap = [
        'postalCode' => 'postal_code'
    ];

    protected $operatorMap = [
        'eq' => '=',
        'lt' => '<',
        'lte' => '<=',
        'gt' => '>',
        'gte' => '>=',
    ];

    // public function transform(Request $request)
    // {
    //     $eloQuery = [];
    //     foreach ($this->safeParams as $parm => $operators) {
    //         $query = $request->query($parm);

    //         if (!isset($query)) continue;

    //         $column = $this->columnMap[$parm] ?? $parm;

    //         foreach ($operators as $operator) {
    //             if (isset($query[$operator])) {
    //                 $eloQuery[] = [ $column, $this->operatorMap[$operator], $query[$operator] ];
    //             }
    //         }
    //     }
    //     return $eloQuery;
    // }
}