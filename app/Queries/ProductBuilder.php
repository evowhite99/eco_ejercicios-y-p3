<?php

namespace App\Queries;
class ProductBuilder extends QueryBuilder
{
    public function search($search) {
        return $this->where('name', 'LIKE', "%{$search}%");

    }

    public function selectedCategory($selectedCategory) {
        $this->whereHas('subcategory.category', function ($query) use ($selectedCategory) {
            $query->where('id', $selectedCategory);
        });
    }

    public function selectedBrand($selectedBrand) {
        $this->whereHas('brand', function ($query) use ($selectedBrand) {
            $query->where('id', $selectedBrand);
        });
    }

    public function selectedPrice($selectedPrice) {
        $this->where('price', $selectedPrice);

    }

    public function selectedDate($selectedDate) {
        $this->whereDate('created_at', $selectedDate);

    }
}
