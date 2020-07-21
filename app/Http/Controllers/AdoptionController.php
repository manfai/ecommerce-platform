<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Adoption;

class AdoptionController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('adoption.list',[
            'adoptions'=>Adoption::paginate(5)
        ]);
    }

    public function show(Adoption $adoptionNo, Request $request)
    {
        return view('adoption.detail',[
            'adoption'=>$adoptionNo
        ]);
    }

    public function stories()
    {
        return view('adoption.stories');
    }
}
