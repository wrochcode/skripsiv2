<?php

namespace App\View\Components;

use App\Models\About;
use Illuminate\View\Component;
use Illuminate\Support\Facades\DB;

class footer extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $company['namecompany'] = DB::table('abouts')->where('name', 'namecompany')->first();
        $company['address'] = DB::table('abouts')->where('name', 'address')->first();
        $company['telp'] = DB::table('abouts')->where('name', 'telp')->first();
        $company['mission'] = DB::table('abouts')->where('name', 'mission')->first();
        // dd($mission);
        $navbar = [
            'Beranda' => '/',
            'Kalkulator Sehat' => '/calchealth',
            'Profilku' => '/myaccount',
        ];
        return view('components.footer', compact('navbar', 'company'));
    }
}
