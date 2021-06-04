<?php

namespace App\Repository\Eloquent;

use App\Models\Product;
use App\Repository\ProductRepositoryInterface;
use Illuminate\Support\Facades\DB;

class ProductRepository extends BaseRepository implements ProductRepositoryInterface{
    protected $model;

    public function __construct(Product $model)
    {
        $this->model = $model;
    }

    /**
     * for Display all Products with the main image only the $pram must be '1'
     * and for all images $pram must be null
     *
     * @param $pram
     *
     */
    public function productImage($pram='')
    {

        if($pram == 1){

            return DB::table('images')
                ->rightjoin('products','images.product','=','products.id')
                ->where('images.main','=',$pram)
                ->orderBy('products.id')->get();

        }else{
            return DB::table('images')
                ->rightjoin('products','images.product','=','products.id')
                ->orderBy('products.id')->get();
        }



        }

    /**
     * This is for return non duplicated record for category and brand name
     * @param $columnName
     * @return \Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection
     */
        public function singleFilter($columnName)
        {
            return Product::query()->distinct()->get($columnName);
        }

    /**
     * @param $columnName  .. the column of the product table
     * @param $operator  .. the operator
     * @param $value  .. the word looking for
     * @return \Illuminate\Support\Collection
     */
        public function productFilter($columnName,$operator,$value)
        {
//            return Product::query()->where($columnName,'=',$value)->get();
            return DB::table('images')
                ->rightjoin('products','images.product','=','products.id')
                ->where('images.main','=',1)
                ->where($columnName,$operator,$value)
                ->orderBy('products.id')->get();
        }


}
