<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class WorkshopController extends Controller
{
    public function index()
    {
        return view('workshop_form');
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'fName'  => 'required|string',
            'lName'  => 'required|string',
            'birth'  => 'required|string',
            'age'    => 'required|numeric',
            'gender' => 'required|string',
            'address'=> 'required|string',
            'color'  => 'required|string',
            'music'  => 'required|string',
            'agree'  => 'accepted',
        ]);
        return view('workshop_result', compact('data'));
    }
}
