<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\siswas;

class siswabaruController extends Controller
{
    public function siswa()
    {
        $siswa = siswas::all();
        return view('indexcalonsiswa', ['siswa'=>$siswa]);
    }
    public function destroy($id)
    {
        $siswa = siswas::destroy($id);
        return redirect(Route('siswa'));
    }
}
