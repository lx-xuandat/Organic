<?php

namespace App\Services;

use App\Models\Product;

class ProductService extends BaseService
{
    public function __construct(Product $model)
    {
        $this->model = $model;
    }

    public function getBySlug(int|string $slug)
    {
        return $this->where("id", "=", $slug)->first();
    }
}
