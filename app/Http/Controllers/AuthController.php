<?php

namespace App\Http\Controllers;

use App\Interfaces\Services\AuthServiceInterface;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function __construct(protected AuthServiceInterface $authService)
    {
        
    }
    public function register(){

    }
}
