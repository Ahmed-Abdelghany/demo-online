<?php

namespace App\Repository\Eloquent;


use App\Repository\BaseRepositoryInterface;

class BaseRepository implements BaseRepositoryInterface{
    public function all($relations)
    {
        if(count($relations) == 0) {
            return $this->model::query()->get();
        }
        return $this->model::query()->with($relations)->get();
    }
}
