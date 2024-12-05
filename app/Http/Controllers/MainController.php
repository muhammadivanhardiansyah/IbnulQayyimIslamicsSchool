<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Facility;
use App\Models\Faq;
use App\Models\LinkService;
use App\Models\Setting;
use GuzzleHttp\Client;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index() : View
    {

        /**START API */
        // URL endpoint API
        $url = 'https://sim.iqis.sch.id/api/count-users';

        // Membuat instance Guzzle client
        $client = new Client();

        try {
            // Melakukan permintaan GET dengan basic auth
            $response = $client->request('POST', $url, [
                'headers' => [
                    'Authorization' => 'fajarramadana25'
                ]
            ]);

            // Mengambil body response sebagai array
            $apiData = json_decode($response->getBody(), true);

            // Memeriksa apakah status responsnya OK
            if ($apiData['status'] == 200 && $apiData['ok']) {

                $count_students = $apiData['data']['count_students'] ?? 0;
                $count_teachers = $apiData['data']['count_teachers'] ??0;
                $count_schools = $apiData['data']['count_schools'] ?? 0;

            } else {
                $count_students = 0;
                $count_teachers = 0;
                $count_schools = 0;
            }
        } catch (\Exception $e) {
            // Menangani error jika terjadi masalah dalam 
            $count_students = 0;
            $count_teachers = 0;
            $count_schools = 0;

            return response()->json([
                'error' => 'Failed to fetch data', 'message' => $e->getMessage(),
            ], 500);
        }

        /**END API */

        $data = [
            'title'     => 'IQIS Makassar',
            'setting'   => Setting::first(),
            'service'   => LinkService::select('kbit', 'tkit', 'sdit', 'smpit', 'smkit')->first(),
            'about'     => About::select('jenis', 'description')->where('jenis', 'About')->first(),
            'visi'      => About::select('jenis', 'description')->where('jenis', 'Visi')->first(),
            'misi'      => About::select('jenis', 'description')->where('jenis', 'Misi')->get(),
            'facility'  => Facility::select('icon', 'title', 'text')->get(),
            'faqs'      => Faq::select('question', 'answer')->get(),
            'count_students' => $count_students,
            'count_teachers' => $count_teachers,
            'count_schools' => $count_schools,
        ];
        return view('index', $data);
    }


}
