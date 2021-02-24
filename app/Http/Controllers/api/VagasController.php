<?php
    
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vagas;

class VagasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     */
    public function index()
    {
        $vagas = Vagas::all();
        return view('home',compact('vagas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        Vagas::create($request->all());

        $vaga = Vagas::create([
            "name"=>$request->input("name"),
            "email"=>$request->input("email"),
            "companyName"=>$request->input("companyName"),
            "office"=>$request->input("office"),
            "description"=>$request->input("description"),
            "value"=>$request->input("value"),

        ]);
    
        $vaga->save();
        return redirect('/home')->with('success', 'Vaga adicionada');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Vagas::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
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
        $vagas = Vagas::findOrFail($id);
        $vagas->update($request->all());

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vagas = Vagas::findOrFail($id);
        $vagas->delete();

        return redirect('/home')->with('success', 'Vaga deletada');
    }

    public function like($id)
    {
        $likes = Vagas::findOrFail($id);
        $likes->like++;
        
 
        $likes->update();
 
        return redirect('/home')->with('success', 'Like efetuado com sucesso');
    }
    
}
