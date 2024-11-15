<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\LinkService;
use App\Models\Setting;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index() : View
    {
        $data = [
            'title'     => 'IQIS Makassar',
            'setting'   => Setting::first(),
            'service'   => LinkService::select('kbit', 'tkit', 'sdit', 'smpit', 'smkit')->first(),
            'about'     => About::select('jenis', 'description')->where('jenis', 'About')->first(),
            'visi'      => About::select('jenis', 'description')->where('jenis', 'Visi')->first(),
            'misi'      => About::select('jenis', 'description')->where('jenis', 'Misi')->get(),
        ];
        return view('index', $data);
    }
}
