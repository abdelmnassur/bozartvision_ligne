<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Artiste;
use App\Models\User;
use App\Models\Admin;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    

    /**
     * Display the specified resource.
     */
    public function modifier_nom(Request $req)
    {
        $id = $req->id;
        $user = User::find($id);
        
        if ( $user)
        {
            $user->nom = $req->nom;
            $user->save();

            return redirect()->back();
        }
    }

    public function modifier_prenom(Request $req)
    {
        $id = $req->idP;
        $user = User::find($id);
        
        if ( $user)
        {
            $user->prenom = $req->prenom;
            $user->save();

            return redirect()->back();
        }
    }

    public function modifier_genre(Request $req)
    {
        $id = $req->idG;
        $user = User::find($id);
        
        if ( $user)
        {
            $user->genre = $req->genre;
            $user->save();

            return redirect()->back();
        }
    }

    public function modifier_telephone(Request $req)
    {
        $id = $req->idTEL;
        $user = User::find($id);
        
        if ( $user)
        {
            $user->telephone = $req->telephone;
            $user->save();

            return redirect()->back();
        }
    }

    public function modifier_email(Request $req)
    {
        $id = $req->idE;
        $user = User::find($id);
        
        if ( $user)
        {
            $user->email = $req->email;
            $user->save();

            return redirect()->back();
        }
    }

    public function modifier_date_de_naissance(Request $req)
    {
        $id = $req->idDAT;
        $user = User::find($id);
        
        if ( $user)
        {
            $user->date_de_naissanse = $req->date_de_naissanse	;
            $user->save();

            return redirect()->back();
        }
    }


    public function modifier_photo(Request $req)
    {
        $id = $req->idPh;
        $user = User::find($id);

        if ( $user )
        {
            $req->validate([
                'photo' =>  ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:20000'],
            ]);

            if ($req->file("photo"))
            {
                $photoName = time() . "_" . $req->file("photo")->getClientOriginalName();
                $req->file("photo")->storeAS("public/image/photo_profil/", $photoName);
            }

            $user->photo = $photoName;

            $user->save();

            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     */
     public function show($id)
    {
        $user = User::find($id);
        return view('admin.showUser', compact('user'));
    }

}
