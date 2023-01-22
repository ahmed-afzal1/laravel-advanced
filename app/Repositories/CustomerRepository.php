<?php
namespace App\Repositories;

use App\Customer;

class CustomerRepository
{
    public function all(){
        return Customer::orderBy('name')
                              ->where('active',1)
                              ->with('user')
                              ->get()
                              ->map->format();
    }
}