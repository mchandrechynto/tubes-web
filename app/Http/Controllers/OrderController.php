<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $order = Order::all();
    return view('order', compact('order'));
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    $request->validate([
      'name' => 'required|max:100',
      'email' => 'required|unique:users',
      'gender' => 'required|max:100',
      'address' => 'required',
      'note' => 'required',
    ]);

    Order::create($request->all());
    return redirect('order');
  }
}
