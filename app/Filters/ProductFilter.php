<?php

namespace App\Filters;

use App\Filters\QueryFilter;

class ProductFilter extends QueryFilter
{


    public function rules(): array {
        return [
            'search' => 'filled',
            'selectedCategory' => 'filled',
            'selectedBrand' => 'filled',
            'selectedPrice' => 'filled',
            'selectedDate' => 'filled',
        ];
    }

    public function search($query, $search) {
        $query->search($search);
    }

    public function selectedCategory($query, $selectedCategory) {
        if ($selectedCategory) {
            $query->selectedCategory($selectedCategory);

        }
    }

    public function selectedBrand($query, $selectedBrand) {
        if ($selectedBrand) {
            $query->selectedBrand($selectedBrand);
        }
    }

    public function selectedPrice($query, $selectedPrice) {
        if ($selectedPrice) {
            $query->selectedPrice($selectedPrice);
        }
    }

    public function selectedDate($query, $selectedDate) {
        if ($selectedDate) {
            $query->selectedDate($selectedDate);
        }
    }
}
