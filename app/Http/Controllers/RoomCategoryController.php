<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RoomCategory;
use Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;

class RoomCategoryController extends Controller
{
    public function __construct()
    {
    	$this->middleware('auth');
    }

    public function index()
    {
    	$categories = RoomCategory::get();
    	return view('room_category.index', compact('categories'));
    }

    public function create()
    {
    	return view('room_category.create');
    }

    public function store(Request $request)
    {
    	$input = Input::all();
	    $rules = [
	    	'name' => 'required|unique:room_categories'
	    ];

	    $messages = [
            'name.required' => 'The Room Category Name field is required.',
            'name.unique' => 'The Room Category Name already exist.'
        ];
	    
    	$validator = Validator::make($input, $rules, $messages);

        if ($validator->fails()) {
        	flash()->error('Something Wrong!');
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }

        $category = new RoomCategory;
        $category->name = $request->name;
        $category->created_by = Auth::id();
        $category->save();

        flash()->success($category->name.' Room Category Successfully Created');
    	return redirect('room-category');
    }

    public function edit($id)
    {
    	$category = RoomCategory::find($id);
    	return view('room_category.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
    	$category = RoomCategory::find($id);
    	$input = Input::all();
	    $rules = [
	    	'name' => 'required|unique:room_categories,name,'.$category->id,
	    ];

	    $messages = [
            'name.required' => 'The Room Category Name field is required.',
            'name.unique' => 'The Room Category Name already exist.'
        ];
	    
    	$validator = Validator::make($input, $rules, $messages);

        if ($validator->fails()) {
        	flash()->error('Something Wrong!');
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }
        $category->name = $request->name;
        $category->updated_by = Auth::id();
        $category->save();

        flash()->success($category->name.' Room Category Successfully Updated');
    	return redirect('room-category');
    }
}
