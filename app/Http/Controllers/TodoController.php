<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;

class TodoController extends Controller
{

    public function __construct() {

        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        //
        $todos = Todo::all();

        return view('todos.index', compact('todos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('todos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'naslov'=>'required',
            'autor'=>'required',
            'zanr'=>'required'
        ]);

        $todo = new Todo([
            'naslov' => $request->get('naslov'),
            'autor' => $request->get('autor'),
            'zanr' => $request->get('zanr'),
            'isbn' => $request->get('isbn'),
            'dostupno' => $request->get('dostupno')
            
        ]);
        $todo->save();
        return redirect('/todos')->with('success', 'Todo saved!');
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
        //
        $todo = Todo::find($id);
        return view('todos.edit', compact('todo')); 
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
        //
        $request->validate([
            'naslov'=>'required',
            'autor'=>'required',
            'zanr'=>'required'
        ]);

        $todo = Todo::find($id);
        $todo->naslov =  $request->get('naslov');
        $todo->autor = $request->get('autor');
        $todo->zanr = $request->get('zanr');
        $todo->isbn = $request->get('isbn');
        $todo->dostupno = $request->get('dostupno');
        
        $todo->save();

        return redirect('/todos')->with('success', 'Todo successfully updated!');
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
        $todo = Todo::find($id);
        $todo->delete();

        return redirect('/todos')->with('success', 'ToDo deleted!');
    }
}
