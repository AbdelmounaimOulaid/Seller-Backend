<?php

namespace App\Repositories\Interfaces;

interface OrderRepositoryInterface {

    public function all();

    public function paginate(int $perPage, string $sortBy, string $sortOrder);

    public function followUpStatistics($userId);
}
