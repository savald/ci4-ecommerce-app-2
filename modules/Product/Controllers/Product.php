<?php

namespace Modules\Product\Controllers;

use App\Controllers\BaseController;


class Product extends BaseController
{
  public function index()
  {
    return view('\Modules\Product\Views\Pages\Home');
  }
}
