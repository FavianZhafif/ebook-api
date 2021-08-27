<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
  public function me() {
    return ['NIS' => 3103119003,
        'name' => 'Favian Zhafif Arkan',
        'gender' => 'Male',
        'phone' => '085327228234',
        'class' => 'XII RPL 3'];
  }
}