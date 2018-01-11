<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use Input;

class ItemController extends Controller
{

	/**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
        $this->middleware('auth');
    }


	public function show()
    {

    	$items = Item::find($user_id);


        return view('home', compact('items'));
    }

        public function view()
    {

    	$items = \Auth::user()->items;

    	return view('view', compact('items'));

    }

    public function view_delete()
    {

    	$items = \Auth::user()->items;

    	return view('delete', compact('items'));

    }

    public function update()
    {

    	$id = Input::get('id');

    	$identity = \Auth::user()->id;

    	$item = Item::findorFail($id);


    	if($item->user_id == $identity){

    	$item->mark();
    	}
    	

    	return redirect('/');
    }

    public function create()
    {

    	$this->validate(request(), [

    			'title'		=> 'required|min:7|max:200'
    		]);


    	$item = new Item;
    	$item->title = Input::get('title');
    	$item->user_id = \Auth::user()->id;
    	$item->save();
    	return redirect('/');

    }

    public function delete()
    {

    	$id = Input::get('id');

    	$identity = \Auth::user()->id;

    	$item = Item::findorFail($id);


    	if($item->user_id == $identity){

    	$item->delete();
    	}

    	return redirect('/delete');

    }

}
