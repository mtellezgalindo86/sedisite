<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContactUser;

class AdminContactoController extends Controller
{
    //
    public function index()
    {
        $contacts = ContactUser::where('read', 0)->get();
        return view('admin_dashboard.contactos.index',[
            'contacts' => $contacts
        ]);
    }

    public function updateContacto($id){
        $contacts = ContactUser::find($id);
        $contacts->read = true;
        $contacts->save();
        return redirect()->route('sediadministrador.get-list');
        
    }
}
