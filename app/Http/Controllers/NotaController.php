<?php

namespace App\Http\Controllers;

use App\Models\Nota;
use Illuminate\Http\Request;
use Illuminate\http\Response;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\NotaStoreRequest;
use App\Http\Requests\NotaUpdateRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
class NotaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $notas = Nota::first()->paginate(5);
        
        return view('notas.nota', compact('notas'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
        
        //old code
        //return view('notas.nota',["notas"=>$notas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('notas.create');
    }   

    /**
     * Store a newly created resource in storage.
     */
    public function store(NotaStoreRequest $request): RedirectResponse
    {
        Nota::create($request->validated());

        return redirect()->route('notas.nota')
            ->with('success', 'Nota creada exitosamente');    
    }

    /**
     * Display the specified resource.
     */
    public function show(Nota $nota)
    {
        return view('notas.show', compact('nota'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Nota $nota)
    {
        return view('notas.edit', compact('nota'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(NotaUpdateRequest $request, Nota $nota): RedirectResponse
    {
        $nota->update($request->validated());

        return redirect()->route('notas.nota')
            ->with('success', 'Nota actualizada exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Nota $nota): RedirectResponse
    {
        $nota->delete();

        return redirect()->route('notas.nota')
                        ->with('success', 'Nota eliminada exitosamente');
    }
}
