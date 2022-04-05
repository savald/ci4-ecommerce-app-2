<?php

namespace Modules\Product\Controllers;

use App\Controllers\BaseController;


class Product extends BaseController
{
  public function index()
  {
    return view('\Modules\Product\Views\Pages\Home');
  }

  public function viewProduct($slug = null)
  {
    return view('\Modules\Product\Views\Pages\view-product');
  }

  public function viewCart($slug = null)
  {
    return view('\Modules\Product\Views\Pages\view-cart');
  }

  public function categories($slug = null)
  {
    return view('\Modules\Product\Views\Pages\categories');
  }
}
