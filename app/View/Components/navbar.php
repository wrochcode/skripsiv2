<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Support\Facades\DB;

class navbar extends Component
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
        $navbar = [
            'Beranda' => '/',
            // 'Produk' => '/product',
            // 'Profil' => '/about',
            'Artikel' => '/article',
            'Kalkulator Sehat' => '/calchealth',
            // 'Akun Saya' => '/myaccount',
        ];
        return view('components.navbar', compact('navbar', 'namecompany', 'address'));
    }
}
