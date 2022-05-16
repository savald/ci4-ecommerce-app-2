<?php

namespace Dashboard\Controllers;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
  public function index()
  {
    $data = [
      'title' => 'Dashboard',
    ];

    return view('Dashboard\Views\Pages\home', $data);
  }

  public function products()
  {
    $data = [
      'title' => 'Dashboard | Products',
    ];

    return view('Dashboard\Views\Pages\products', $data);
  }

  public function addProduct()
  {
    $data = [
      'title' => 'Dashboard | Add Product',
    ];

    return view('Dashboard\Views\Pages\add-product', $data);
  }

  public function profile()
  {
    $data = [
      'title' => 'Dashboard | Profile Info',
    ];

    return view('Dashboard\Views\Pages\profile', $data);
  }

  public function becomeSeller()
  {
    $data = [
      'title' => 'Dashboard | Become a Seller',
    ];

    return view('Dashboard\Views\Pages\become-seller', $data);
  }
}
