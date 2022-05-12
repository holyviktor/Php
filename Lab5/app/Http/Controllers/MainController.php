<?php

namespace App\Http\Controllers;

use App\Models\Dish;
use App\Models\OrderData;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function landing(){
        return view('Pages/landing');
    }
    public function about(){
        return view('Pages/about');
    }
    public function menu(){
        $dishes = new Dish();
        $data = $dishes->getData();
        return view('Pages/menu', ['data'=>$data]);
    }
    public function basket(){
        return view('Pages/basket');
    }
    public function ordering(){
        $translate_ua = ["ім'я", "номер телефону","вулиця", "будинок", "квартира"];
        $translate_eng = ['name', 'phone', 'street', 'house', 'flat'];
        return view('Pages/ordering', ['ua'=>$translate_ua, 'eng'=>$translate_eng]);
    }
    public function message(){
        $order = new OrderData();
        return view('Pages/message', ['name'=>$order->getName()]);
    }
    public function item($id){
        $dishes = new Dish();
        $data = $dishes->getData();
        $dish = $dishes->getDataBiId($id);
        return view('Pages/item', compact('dish', 'data'));
    }
    public function orderingPost(Request $request){
        $request->validate([
            'name'=>'required|alpha',
            'phone'=>'required',
            'street'=>'required|alpha',
            'house'=>'required',
            'flat'=>'required|numeric'
        ]);
        $order = new OrderData();
        $order->put(
            $request->input('name'),
            $request->input('phone'),
            $request->input('street'),
            $request->input('house'),
            $request->input('flat'),
            $request->input('comment'));
        return redirect('message');
    }
}
