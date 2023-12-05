<?php

namespace App\Http\Controllers;

use App\Models\Buffet;
use Illuminate\Http\Request;

class BuffetController extends Controller
{
    public function index()
    {
        $buffets = Buffet::all();

        return view('buffets.index', ['buffets' => $buffets]);
    }

    public function create()
    {
        return view('buffets.create');
    }

    public function store(Request $request)
    {
        $buffet = new Buffet();

        $description = str_replace('</p>', ' - ', $request->description);
        $description = str_replace('<p>', '', $description);

        $buffet->name = $request->name;
        $buffet->description = $description;
        $buffet->price = $request->price;

        $buffet->save();

        return redirect()->route('buffets.index');
    }

    public function edit(Buffet $buffet, int $id) 
    {
        $buffet = $buffet->find($id);

        return view('buffets.edit', compact('buffet'));
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
        ]);

        $buffet = Buffet::findOrFail($id);

        $buffet->update([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
        ]);
 
        return redirect()->route('buffets.index');
    }

    public function destroy(Buffet $buffet, int $id)
    {
        $buffet = $buffet->find($id);
        if (!$buffet) {
            return redirect()->back();
        }

        $buffet->delete();
        return redirect()->route('buffets.index');
    }
}
