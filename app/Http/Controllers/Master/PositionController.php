<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Master\Position;

class PositionController extends Controller
{
    public function __construct()
    {

    }

    public function index(Request $request)
    {
        $position = Position::all();
        if($request->has('search')){
            $position = Position::where('name', 'like', "%{$request->search}%")->orwhere('status', 'like', "%{$request->search}%")->get();
        }
        return view('master.position.index', ['position'=>Position::all(), 'count'=>Position::count()]);
    }

    public function create()
    {
        return view('master.position.create');
    }

    public function store(Request $request)
    {
        $request->merge([
            'salary' => preg_replace('/\D/', '', $request->salary),
        ]);

        $request->validate([
            'name'=>'required',
            'salary'=>'required|max:50|min:3',
            'status'=>'required'
        ]);

        Position::create($request->all());


        return redirect()->route('position.index')->with('message', 'Data Position Created Successfully');
    }

    public function edit(Position $position)
    {
        $data['title'] = 'Edit Position';
        $data['position'] = $position;
        return view('master.position.edit', $data);
    }

    public function update(Request $request, Position $position)
    {
        $request->merge([
            'salary' => preg_replace('/\D/', '', $request->salary),
        ]);

        $request->validate([
            'name'=>'required',
            'salary'=>'required|max:50|min:3',
            'status'=>'required'
        ]);

        $position->update($request->all());

        $message = [
            'alert-type'=>'success',
            'message'=> 'Data position updated successfully'
        ];
        return redirect()->route('position.index')->with($message);
    }

    public function destroy(Position $position)
    {
        $position->delete();
        return redirect()->route('position.index')->with('message', 'Position Delete Succcesfully');
    }
}

