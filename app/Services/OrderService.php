<?php

namespace App\Services;

use App\Models\Customer;
use App\Models\Order;

class OrderService extends BaseService
{
    public function __construct(Order $model)
    {
        $this->model = $model;
    }

    public function addToCart(Customer $user, array $item)
    {
    }


}
