<?php

namespace App\Services;

use App\Enums\Customer as EnumsCustomer;
use App\Models\Customer;
use App\Models\Moral;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;

class CustomerService
{
public function create(array $customer = [])
{
return Customer::create($customer);
}

public function edit(int $id, array $customer = []): Customer
{
$newCustomer = $this->findById($id);
$newCustomer->update($customer);
$newCustomer->refresh();
return $newCustomer;
}

public function delete(int $id): bool
{
return Customer::destroy($id);
}

public function findById(int $id): Customer
{
return Customer::findOrFail($id);
}

public function getAll(): Collection
{
    return Customer::All();
}

public function formatCustomer(array $request): array
{
$customer = [];
$customer['name'] = $request['name'] ?? null;
$customer['email'] = $request['email'] ?? null;
$customer['phone'] = $request['phone'] ?? null;

return $customer;
}
}

