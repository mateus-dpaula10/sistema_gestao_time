<?php

namespace App\Http\Controllers;

use App\Models\Foto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
// use App\Helpers\Helper;

class FotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fotos = Foto::all();

        return view ('pages.fotos.index', compact('fotos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        // $data['formFile'] = Helper::uploadFiles($request, 'formFile', 'img_jogos', 'img_jogos');
        
        if($request->formFile){
            $data['formFile'] = $request->formFile->store('fotos_jogos');
        }   

        $data = Foto::create($data);

        return redirect()->back()->with('success', 'Foto criada com sucesso!');    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Foto  $foto
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $fotos = Foto::findOrFail($id);

        return view ('pages.fotos.show', compact('fotos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Foto  $foto
     * @return \Illuminate\Http\Response
     */
    public function edit(Foto $foto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Foto  $foto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {        
        if ($request->formFile) {
            $foto = Foto::findOrFail($id);

            $image_path = public_path("/storage/". $foto->formFile);

            // dd($image_path);
            
            if(File::exists($image_path)){
                File::delete($image_path);
            }

            $foto->update([
                'titulo' => $request->titulo,
                'formFile' => $request->formFile->store('fotos_jogos'),
            ]);
        }

        return redirect()->back()->with('success', 'Jogo editado com sucesso!');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Foto  $foto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Foto $foto)
    {
        //
    }
}
