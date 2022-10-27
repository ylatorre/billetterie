<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
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

    public function test(Request $request)
    {

        return view("test");
    }
    public function verifePlace(Request $request)
    {
        if (Auth()->check()) {
//            $id    = Auth()->user()->id;
//            $place = DB::table("place")->where("id_user", $id)->get();
//            if ($place->count() > 0) {
//                return redirect()->route("accueil")->with("error", "Vous avez deja reserver une place");
//            } else {
//                $data  = $request->all();
//                $place = DB::table("place")->where("id", $data["id"])->first();
//                if ($place->id_user == null) {
//                    DB::table("place")->where("id", $data["id"])->update(["id_user" => $id]);
//                    return redirect()->route("accueil")->with("success", "Votre place a ete reserver avec succes");
//                } else {
//                    return redirect()->route("accueil")->with("error", "Cette place a deja ete reserver");
//                }
            }
//        $data = $request->all();
//        $place = $data["place"];
//        $date = $data["date"];
//        $heure = $data["heure"];
//        $id = $data["id"];
//        $place = DB::table("place")->where("id", $place)->first();
//        $place = $place->place;
//        $place = DB::table("reservation")->where("place", $place)->where("date", $date)->where("heure", $heure)->where("id", "!=", $id)->first();
//        if ($place) {
//            return "place deja reserver";
//        } else {
//            return "place libre";
//        };

            return $request;

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
        $concert = DB::table('concerts')->where('id', $data)->get()->toArray();

        return view("reservation",compact('concert'));
    }
    public function GalerieSup($data)
    {
//        dd($data);
        $placesTotal = DB::table('reservations')->join("concerts", "idConcert","=","concerts.id")->select("NumberPlace")->where('reservations.idConcert', $data)->get()->toArray();


//        dd($placesTotal);
        return view("GalerieSup",compact('placesTotal'));
    }
    public function GalerieCentral($data)
    {
        $placesTotal = DB::table('reservations')->join("concerts", "idConcert","=","concerts.id")->select("NumberPlace")->where('reservations.idConcert', $data)->get()->toArray();


//        dd($placesTotal);
        return view("GalCentral",compact('placesTotal'));
    }
    public function GalerieInferieur($data)
    {
        $placesTotal = DB::table('reservations')->join("concerts", "idConcert", "=", "concerts.id")->select("NumberPlace")->where('reservations.idConcert', $data)->get()->toArray();
        return view("GalerieInferieur", compact('placesTotal'));
    }
    public function cour($data)
    {
        $placesTotal = DB::table('reservations')->join("concerts", "idConcert", "=", "concerts.id")->select("NumberPlace")->where('reservations.idConcert', $data)->get()->toArray();
        return view("cour", compact('placesTotal'));
    }
    public function artiste()
    {
        $artistes = DB::table('artistes')->get();
        return view("artiste",compact('artistes'));
    }
}



