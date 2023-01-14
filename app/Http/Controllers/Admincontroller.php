<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Cache;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Category;

class Admincontroller extends Controller
{



    public function __construct(){

        $this->middleware('auth');

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
        $categories = Cache::remember(
          'categories', now()->addHours(24), function(){
            
            return Category::All();
            
          });
          
        $user =  auth()->user();
        return view('admin.dashboard',['User'=>$user, 'categories' => $categories]);

    }

    /**
     * Display user settings.
     *
     * @return \Illuminate\Http\Response
     */
    public function setting()
    {
         return view('admin.settings');
    }


    /**
     * Display products.
     *
     * @return \Illuminate\Http\Response
     */
    public function products()
    {
         return view('admin.products.products');
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

   

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

   
}