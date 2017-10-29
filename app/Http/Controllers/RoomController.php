<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\RoomCategory;
use Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;

class RoomController extends Controller
{
    public function __construct()
    {
    	$this->middleware('auth');
    }

    public function index()
    {
    	$rooms = Room::with(['roomCategory'])->get();
    	return view('room.index', compact('rooms'));
    }

    public function create()
    {
    	$categoryList = RoomCategory::pluck('name', 'id');
    	return view('room.create', compact('categoryList'));
    }

    public function store(Request $request)
    {
    	$input = Input::all();
	    $rules = [
	    	'name' => 'required|unique:rooms',
	    	'category_id' => 'required',
	    	'rate' => 'numeric|required'
	    ];

	    $messages = [
            'name.required' => 'The Room Name field is required.',
            'name.unique' => 'The Room Name already exist.',
            'category_id.required' => 'The Room Category field is required.',
            'rate.required' => 'The Room Rate field is required.'
        ];
	    
    	$validator = Validator::make($input, $rules, $messages);

        if ($validator->fails()) {
        	flash()->error('Something Wrong!');
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }

        $room = new Room;
        $room->name = $request->name;
        $room->category_id = $request->category_id;
        $room->rate = $request->rate;
        $room->description = $request->description;
        $room->created_by = Auth::id();
        $room->save();

        flash()->success($room->name.' Room Created Successfully');
    	return redirect('room');
    }

    public function edit($id)
    {
    	$room = Room::find($id);
    	$categoryList = RoomCategory::pluck('name', 'id');
    	return view('room.edit', compact('room', 'categoryList'));
    }

    public function update(Request $request, $id)
    {
    	$room = Room::find($id);
    	$input = Input::all();
	    $rules = [
	    	'name' => 'required|unique:rooms,name,'.$room->id,
	    	'category_id' => 'required',
	    	'rate' => 'numeric|required'
	    ];

	    $messages = [
            'name.required' => 'The Room Name field is required.',
            'name.unique' => 'The Room Name already exist.',
            'category_id.required' => 'The Room Category field is required.',
            'rate.required' => 'The Room Rate field is required.'
        ];
	    
    	$validator = Validator::make($input, $rules, $messages);

        if ($validator->fails()) {
        	flash()->error('Something Wrong!');
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }
        $room->name = $request->name;
        $room->category_id = $request->category_id;
        $room->rate = $request->rate;
        $room->description = $request->description;
        $room->updated_by = Auth::id();
        $room->save();

        flash()->success($room->name.' Room Updated Successfully');
    	return redirect('room');
    }
}
