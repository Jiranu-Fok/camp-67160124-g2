<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class WorkshopController extends Controller
{
    public function index()
    {
        return view('workshop');
    }
    public function store(Request $request)
    {
        $data = $request->all();
        return view('workshop_result', compact('data'));
    }
}
