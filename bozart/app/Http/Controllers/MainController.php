<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Oeuvre;
use App\Models\Artiste;
use App\Models\Categorie;
use App\Models\Admin;
use App\Models\User;
use Illuminate\Support\Facades\DB;


class MainController extends Controller
{
    public function home()
    {
        $actif = 1;
        $oeuvres = Oeuvre::where('actif', $actif)->where('nombre_exemplaire', '>', 0)->paginate(4);
        return view('home', compact('oeuvres'));
    }

    public function contact()
    {
        $artiste = Artiste::where('id', 1)->get();
        return view('contact', compact('artiste'));
    }

    public function listeOeuvres()
    {
        $oeuvres = Oeuvre::all();
        return view('listeOeuvres', compact('oeuvres'));
    }

    public function listeArtistes()
    {
        $artistes = Artiste::all();
        return view('listeArtistes', compact('artistes'));
    }

    public function mon_compte()
    {
        $admin = Admin::where('user_id', Auth()->user()->id)->first('id');
        
        $artiste = Artiste::where("user_id", Auth()->user()->id)->first('id');

        if(isset($admin))
        {
            return redirect()->route('admin_dashboard');
        }

        if(isset($artiste))
        {
            return redirect()->route('artiste_dashboard');
        }
        
        return redirect()->route('user_compte',Auth()->user()->id);
    }

    public function user_compte($user)
    {
        return view('user_compte');
    }

    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    

}
