<?php
namespace App\Http\Controllers;
use App\Models\Pokedex;
use Illuminate\Http\Request;
class PokedexController extends Controller
{
    public function index()
    {
        $pokedexs = Pokedex::all();
        return view('pokedex.index', compact('pokedexs'));
    }
    public function create()
    {
        return view('pokedex.form');
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'species' => 'required|string|max:255',
            'height' => 'required|integer',
            'weight' => 'required|integer',
            'hp' => 'required|numeric',
            'attack' => 'required|numeric',
            'defense' => 'required|numeric',
            'image_url' => 'required|string|max:255',
        ]);
        Pokedex::create($validated);
        return redirect('/pokedex')->with('success', 'เพิ่ม Pokémon สำเร็จ!');
    }
    public function edit($id)
    {
        $pokemon = Pokedex::findOrFail($id);
        return view('pokedex.form', compact('pokemon'));
    }
    public function update(Request $request, $id)
    {
        $pokemon = Pokedex::findOrFail($id);
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'species' => 'required|string|max:255',
            'height' => 'required|integer',
            'weight' => 'required|integer',
            'hp' => 'required|numeric',
            'attack' => 'required|numeric',
            'defense' => 'required|numeric',
            'image_url' => 'required|string|max:255',
        ]);
        $pokemon->update($validated);
        return redirect('/pokedex')->with('success', 'แก้ไข Pokémon สำเร็จ!');
    }
    public function destroy($id)
    {
        Pokedex::destroy($id);
        return redirect('/pokedex')->with('success', 'ลบ Pokémon สำเร็จ!');
    }
}
