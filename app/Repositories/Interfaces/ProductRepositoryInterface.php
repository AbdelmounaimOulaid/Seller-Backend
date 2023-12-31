<?php

namespace App\Repositories\Interfaces;

interface ProductRepositoryInterface {

    public function all($options = []);

    // public function update($id, $data);

    // public function create($data);

    public function paginate(int $perPage, string $sortBy, string $sortOrder, array $options = []);

    // public function agentOrdersPaginate(array $where, int $perPage, string $sortBy, string $sortOrder);
}
