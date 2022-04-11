<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menus=Menu::all();
        return view('menu.index')->with('menus',$menus);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('menu.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $menus=new Menu();
        $menus->codigo=$request->get('codigo');
        $menus->entradas=$request->get('entradas');
        $menus->comida=$request->get('comida');
        $menus->bebidas=$request->get('bebidas');
        $menus->postres=$request->get('postres');
        $menus->cantidad=$request->get('cantidad');
        $menus->precio=$request->get('precio');
        $menus->save();
        return redirect('/menu');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $menu=Menu::find($id);
        return view('menu.edit')->with('menu',$menu);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $menu=Menu::find($id);
        $menu->codigo=$request->get('codigo');
        $menu->entradas=$request->get('entradas');
        $menu->comida=$request->get('comida');
        $menu->bebidas=$request->get('bebidas');
        $menu->postres=$request->get('postres');
        $menu->cantidad=$request->get('cantidad');
        $menu->precio=$request->get('precio');
        $menu->save();
        return redirect('/menu');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $menu=Menu::find($id);
        $menu->delete();
        return redirect('/menu');
    }
}
