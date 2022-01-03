<?php

namespace App\Repositories\Impl;

interface BookRepositoryInterface extends BaseRepositoryInterface
{
    public function store($request);

    public function update($id, $request);
}
