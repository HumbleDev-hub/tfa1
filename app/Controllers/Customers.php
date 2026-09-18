<?php

namespace App\Controllers;

class Customers extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'Customer Accounts',
            'customers' => [
                ['name' => 'Marites Intrigada', 'email' => 'tsimis@chika.ph', 'phone' => '09170001111'],
                ['name' => 'Cardo Dalisay', 'email' => 'immortal@probinsyano.ph', 'phone' => '09189998888'],
                ['name' => 'Boy Abunda', 'email' => 'fasttalk@mirror.ph', 'phone' => '09192223333'],
                ['name' => 'Tito Bhoy', 'email' => 'sinigang@extraasim.ph', 'phone' => '09204445555'],
                ['name' => 'Kuya Kim', 'email' => 'weather@matanglawin.ph', 'phone' => '09216667777'],
            ]
        ];

        return view('customers/index', $data);
    }
}