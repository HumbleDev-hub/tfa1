<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'User Accounts',
            'users' => [
                ['username' => 'admin_nj', 'name' => 'Narmandy Na-orbe', 'role' => 'Administrator'],
                ['username' => 'cashier1', 'name' => 'Maria Clara', 'role' => 'Cashier'],
                ['username' => 'cashier2', 'name' => 'Crisostomo Ibarra', 'role' => 'Cashier'],
                ['username' => 'mgr_juan', 'name' => 'Juan Dela Cruz', 'role' => 'Manager'],
                ['username' => 'inv_staff', 'name' => 'Simoun Rizal', 'role' => 'Inventory Staff'],
            ]
        ];

        return view('users/index', $data);
    }
}