<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Exception;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::get();
        return view('admin.users.list')->with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        return view('admin.users.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function edit(User $users)
    {
        return view('admin.users.alt')->with('users',$users);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        try{
            if (!$user->delete()) {
                return redirect()->back()->with('error', 'Desculpe, Aconteceu um problema ao deletar categoria.');
               }else{
                    return redirect()->route('categories.index')->with('Sucesso', 'Categoria foi deletada com sucesso.');
               }
        }catch (Exception $e) {
            return redirect()->back()->with('error', 'Categoria não pode ser deletada, existem produtos nela.');
        }
    }
}
