<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Artiste;
use App\Models\User;
use App\Models\Admin;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function admin_dashboard()
    {
        $users = DB::select('Select * from users where id not in (select user_id from admins);');
        $artistes = Artiste::all();
        $user_id = Auth()->user()->id;
        $admin = DB::select("Select id from admins where user_id = $user_id;");
        return view('admin/admin_dashboard', compact('users', 'artistes', 'admin'));
    }

    public function admin_gestion_users()
    {
        $users = DB::select('Select * from users where id not in (select user_id from admins);');
        return view('admin/gestion_users', compact('users'));
    }

    public function admin_gestion_artistes()
    {
        $artistes = Artiste::all();
        return view('admin/gestion_artistes', compact('artistes'));
    }

    public function admin_profil()
    {   
        $user = Auth()->user()->id;
        $admin = Admin::where('user_id', $user)->get();
        $id = $admin[0]->id;
        $admin = Admin::find($id);
        return view('admin/admin_profil', compact('admin'));
    }


    /**
     * desactive or active the specified resource from storage.
     */
    public function desactiverActiver(Request $req)
    {
        $id = $req->id;
        $user = User::find($id);
        $admin= Admin::where('user_id', $id)->get();

        // vérifier afin qu'un admin ne soit désactivé
        if(count($admin)==0){
            if ($user->actif == 1) {
                $user->actif = 0;
            } else $user->actif = 1;
            $user->save();
        }
        
        else
        {
            $notification = "Erreur lors de cette action";
            return redirect()->back();
        } 
       
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}