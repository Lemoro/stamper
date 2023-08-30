<?php

    namespace App\Http\Controllers\Stamper;

    use App\Http\Controllers\Controller;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Validator;

    class StamperController extends Controller
    {


        public function index() {


            return view('stamper.example');

        }
    }
