<?php

namespace User\Entities;

use CodeIgniter\Entity\Entity;

class UsersEntity extends Entity
{
  protected $datamap = [];
  protected $dates   = ['created_at', 'updated_at', 'deleted_at'];
  protected $casts   = [];

  public function setPassword($password)
  {
    return $this->attributes['password'] = password_hash($password, PASSWORD_BCRYPT);
  }
}
