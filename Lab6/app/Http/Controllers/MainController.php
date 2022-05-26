<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Dish;
use App\Models\Dish_of_the_day;
use App\Models\Ingredient;
//use App\Models\OrderData;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function landing(){
        return view('Pages/landing', ['dishes'=>Dish::all()]);
    }
    public function about(){
        return view('Pages/about');
    }
    public function menu(Request $request){
        $categories = Category::all();
        $dishes = Dish::all();
        $selected_category = null;
        $search = $request->input('search');
        if ($search !== null){
            $searched_ingredients = Ingredient::where('name', 'like', '%'.$request->input('search').'%')->get();
            $dishes = new Collection();
            foreach ($searched_ingredients as $ingredient){
                $dishes=$dishes->merge($ingredient->dish);
            }
        }
        if ($request->input('category') !== null) {
            $dishes = Dish::where('category_id', $request->input('category'))->get();
            $selected_category = Category::find($request->input('category'));
        }
        return view('Pages/menu', ['dishes'=>$dishes, 'categories'=>$categories,
            'selected_category'=>$selected_category, 'search'=>$search]);
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
//        $order = new OrderData();
//        return view('Pages/message', ['name'=>$order->getName()]);
        return view('Pages/message', ['name'=>'']);
    }
    public function item($id, Request $request){
        $dishes = new Dish();
        $categories = new Category();
        $dish = $dishes->find($id);
        return view('Pages/item', ['dish'=>$dish, 'dishes'=>$dishes->all(),
            'categories'=>$categories->all(), 'search'=>$request->input('search'),
            'category'=>$categories->find($dish->category_id)]);
    }
    public function orderingPost(Request $request){
        $request->validate([
            'name'=>'required|alpha',
            'phone'=>'required',
            'street'=>'required|alpha',
            'house'=>'required',
            'flat'=>'required|numeric'
        ]);
//        $order = new OrderData();
//        $order->put(
//            $request->input('name'),
//            $request->input('phone'),
//            $request->input('street'),
//            $request->input('house'),
//            $request->input('flat'),
//            $request->input('comment'));
        return redirect('message');
    }

}
