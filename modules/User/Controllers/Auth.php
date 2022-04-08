<?php

namespace User\Controllers;

use App\Controllers\BaseController;
use User\Entities\UsersEntity;
use User\Models\UsersModel;

class Auth extends BaseController
{
  private $userModel;
  public function __construct()
  {
    $this->userModel = new UsersModel();
  }

  public function createAccount()
  {
    $users = new UsersEntity();
    $users->name = $this->request->getPost('name');
    $users->email = $this->request->getPost('email');
    $users->password = $this->request->getPost('password');

    $this->userModel->save($users);
    return redirect()->to('/product');
  }

  public function login()
  {
    $email = $this->request->getPost('email');
    $password = $this->request->getPost('password');
    $userData = $this->userModel->first($email);

    if (password_verify($password, $userData->password)) {
      session()->set([
        'is_logged' => true,
        'name' => $userData->name,
      ]);
    }

    return redirect()->back();
  }
}
