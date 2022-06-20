<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Exception;


class AdminController extends Controller
{
    public function index(){
        try {
            return view('Admin.home');
        } catch (Exception $exception) {
            return view('errors.404');
        }
    }
}
