<?php

namespace Product\Controllers;

use App\Controllers\BaseController;


class Product extends BaseController
{
  public function index()
  {
    $data = [
      'title' => 'Home',
    ];

    return view('Product\Views\Pages\Home', $data);
  }

  public function viewProduct($slug = null)
  {
    $data = [
      'title' => 'View Product',
    ];

    return view('Product\Views\Pages\view-product', $data);
  }

  public function viewCart($userId = null)
  {
    $data = [
      'title' => 'Cart',
    ];

    return view('Product\Views\Pages\view-cart', $data);
  }

  public function viewWishlist($userId = null)
  {
    $data = [
      'title' => 'Wishlist',
    ];

    return view('Product\Views\Pages\view-wishlist', $data);
  }

  public function categories()
  {
    $data = [
      'title' => 'Categories',
    ];

    return view('Product\Views\Pages\categories', $data);
  }
}
