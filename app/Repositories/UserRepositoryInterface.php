<?php

namespace App\Repositories;

interface UserRepositoryInterface
{
    public function store($data);
    public function update($id, $data);
    public function delete($id); 
}
