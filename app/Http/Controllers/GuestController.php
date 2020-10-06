<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;

class GuestController extends Controller
{

  public function index() {

    $emp = Employee::all();

    return view('emp-home', compact('emp'));

  }

  public function show($id) {

    $emp = Employee::findOrFail($id);

    return view('emp-show', compact('emp'));
  }


}
