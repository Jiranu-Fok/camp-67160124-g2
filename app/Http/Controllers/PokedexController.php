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
        Pokedex::create($request->all());
        return redirect()->route('pokedexs.index');
    }
    public function edit($id)
    {
        $pokedex = Pokedex::findOrFail($id);
        
        // ใช้หน้า form.blade.php เหมือนเดิม แต่ส่งข้อมูลตัวที่จะแก้ไปด้วย
        return view('pokedex.form', compact('pokedex'));
    }
    public function update(Request $request, $id)
    {
        $pokedex = Pokedex::findOrFail($id);
        $pokedex->update($request->all());

        return redirect()->route('pokedexs.index');
    }
    public function destroy($id)
    {
        $pokedex = Pokedex::findOrFail($id);
        $pokedex->delete();

        return redirect()->route('pokedexs.index');
    }
}