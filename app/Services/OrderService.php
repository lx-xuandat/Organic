<?php

namespace App\Services;

use App\Models\User;
use App\Models\Order;

class OrderService extends BaseService
{
    public function __construct(Order $model)
    {
        $this->model = $model;
    }

    public function addToCart(User $customer, array $item)
    {
        $this->create([

            'employee_id' => null,
            'customer_id' => $customer->id,
            'order_date' => date('Y-m-d H:i:s'),
            'shipped_date' => null,
            'shipper_id' => null,
            'ship_name' => null,
            'ship_address' => null,
            'ship_city' => null,
            'ship_state_province' => null,
            'ship_zip_postal_code' => null,
            'ship_country_region' => null,
            'shipping_fee' => 0,
            'taxes' => 0,
            'payment_type' => 'Credit Card',
            'paid_date' => null,
            'notes' => null,
            'tax_rate' => 0,
            'tax_status_id' => null,
            'status_id' => 0
        ]);
    }


}
