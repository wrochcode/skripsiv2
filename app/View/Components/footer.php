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
        $namecompany = DB::table('abouts')->where('name', 'namecompany')->first();
        $address = DB::table('abouts')->where('name', 'address')->first();
        $telp = DB::table('abouts')->where('name', 'telp')->first();
        $navbar = [
            'Beranda' => '/',
            'Kalkulator Sehat' => '/calchealth',
            'Profilku' => '/myaccount',
        ];
        return view('components.footer', compact('navbar', 'namecompany', 'address', 'telp'));
    }
}
