<?php

namespace App\Repositories;

interface ProductRepositoryInterface
{
    public function store($data);
    public function update($id, $data);
    public function delete($id); 
}
