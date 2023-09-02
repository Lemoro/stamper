<?php

namespace Stamper\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class StamperMainController extends Controller
{


    public function index()
    {
        return view('stamper::main');
    }
}
