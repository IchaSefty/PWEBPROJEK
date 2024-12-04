<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RiwayatAksesController extends Controller
{
    // Konstruktor untuk middleware admin
    public function __construct()
    {
        $this->middleware('isAdmin');  // Middleware belum tak bikin rooo
    }

    public function riwayatakses()
    {
        $riwayatAkses = \DB::table('log_akses')->get(); // Gantilah 'log_akses' dengan nama tabel yang sesuai ////MIGRATION E JUGA BELUMMM BUAT LOG_AKSESNYA

        return view('tehs.admin.riwayatakses', compact('riwayatAkses'));
    }
}
