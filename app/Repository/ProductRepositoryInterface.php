<?php

namespace App\Repository;

interface ProductRepositoryInterface extends BaseRepositoryInterface{

    public function productImage($pram);

    public function singleFilter($columnName);

    public function productFilter($columnName,$operator,$value);
}
