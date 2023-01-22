<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Repositories\CustomerRepository as RepositoriesCustomerRepository;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    private $repository;
    public function __construct(RepositoriesCustomerRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index(){
        $customers = $this->repository->all();
        return $customers;
    }
}
