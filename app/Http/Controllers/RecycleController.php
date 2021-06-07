<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class RecycleController extends Controller{
    public function __construct(){
      $this->middleware('auth');
    }

    public function index(){
        return view('admin.recycle.index');
    }

    public function user(){

    }

    public function income_category(){
      return view('admin.recycle.incate');
    }

    public function expense_category(){
      return view('admin.recycle.expcate');
    }
}
