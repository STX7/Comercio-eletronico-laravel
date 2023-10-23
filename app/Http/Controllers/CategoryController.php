<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::latest()->paginate(10);
        return view('categories.index')->with('categories', $categories);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.categories.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {

            $category = Category::create([
                'name' => $request->name,
                'description' => $request->description,
            ]);

        } catch (\Throwable $th) {
            return redirect()->back()->with('error', "Desculpe\' houve um problema ao cadastrar categoria.");
        }

        if (!$category) {
            return redirect()->back()->with('error', 'Desculpe\' houve um problema ao cadastrar categoria.');
        }
        return redirect()->route('categories.index')->with('success', 'Sucesso, categoria criada com sucesso.');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('categories.edit')->with('category',$category);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $category->name = $request->name;
            $category->description = $request->description;



        if (!$category->save()) {
            return redirect()->back()->with('error', 'Desculpe\' houve um problema ao atualizar informações.');
        }
        return redirect()->route('categories.index')->with('success', 'Sucesso, informações foram atualizadas.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try{
            if (!$category->delete()) {
                return redirect()->back()->with('error', 'Desculpe, Aconteceu um problema ao deletar categoria.');
               }else{
                    return redirect()->route('categories.index')->with('Sucesso', 'Categoria foi deletada com sucesso.');
               }
        }catch (Exception $e) {
            return redirect()->back()->with('error', 'Categoria não pode ser deletada, existem produtos nela.');
        }
    }
}
