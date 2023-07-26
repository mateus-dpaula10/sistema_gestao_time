<?php

namespace App\Http\Controllers;

use App\Models\Jogo;
use Illuminate\Http\Request;
use Carbon\Carbon;

class JogoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $date = Carbon::now();

        // dd($date);

        $data['jogos'] = Jogo::orderBy('data', 'asc')->where('data', '>', $date)->get();

        return view ('pages.jogos.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('pages.jogos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $data = $request->all();
            Jogo::create($data);
            return redirect()->route('index.jogos')->with('success', 'Jogo cadastrado com sucesso!');
        } catch (\Exception $ex) {
            return redirect()->route('index.jogos')->with('error', 'Erro! Falha ao registrar.');
            dd($data);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jogo  $jogo
     * @return \Illuminate\Http\Response
     */
    public function show(Jogo $jogo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jogo  $jogo
     * @return \Illuminate\Http\Response
     */
    public function edit(Jogo $jogo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Jogo  $jogo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jogo $jogo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jogo  $jogo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jogo $jogo)
    {
        //
    }
}
