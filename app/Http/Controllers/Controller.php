<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function axios()
    {
        $test  = "test reussi";
        $test2 = view("accueil");
//        return new JsonResponse($test2);
        return view("components.test");
    }

    public function update()
    {

    }

    public function test()
    {
        return view("test");
    }

    public function accueil()
    {
        $concerts = DB::table('concerts')->get();

        return view("accueil",compact('concerts'));
    }
    public function acteur()
    {

        return view("accueil");
    }

    public function contact()
    {
        return view("contact");
    }

    public function reservation($data)
    {
//        dd($data);
        $concert = DB::table('concerts')->where('id', $data)->get();
        return view("reservation",compact('concert'));
    }
    public function GalerieSup()
    {

        return view("GalerieSup");
    }
}
