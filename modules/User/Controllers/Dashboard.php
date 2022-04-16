<?php

namespace User\Controllers;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
  public function index()
  {

    $data = [
      'title' => 'Dashboard',
    ];

    return view('User\Views\Dashboard\index', $data);
  }

  public function products()
  {

    $data = [
      'title' => 'Dashboard',
    ];

    return view('User\Views\Dashboard\products', $data);
  }
}
