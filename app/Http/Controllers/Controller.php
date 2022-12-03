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
//        TODO: Corriger la condition ajouter unique a la fin de la verif actuelle ajoute a chaque fois que la verif est valide
        $id = Auth()->user()->id;
        if ($id == $request->get('idUser') && Auth()->check()) {
            //add in database
            $prixConcert = DB::table('concerts')->where('id', $request->get('idConcert'))->get()->first()->Price;
            if (count($request->get('placeSelectionner')) >= 1) {
                foreach ($request->get('placeSelectionner') as $place) {
                    //verify that the place is already exists in database when NumberPlace and NumberPlace return false
                    $placeExist = DB::table('reservations')->where('NumberPlace', $place)->where('idConcert', $request->get('idConcert'))->exists();
                    if (!$placeExist) {
                        DB::table('reservations')->insert([
                            'idUser'          => $id,
                            'NumberPlace'     => $place,
                            'idConcert'       => $request->get('idConcert'),
                            'created_at'      => now(),
                            'updated_at'      => now(),
                            "dateReservation" => now(),
                            "prixPlace"       => $prixConcert,
                        ]);
                    } else {
                        return "false";
                    }
                }


            } else {
//                DB::table('reservations')->insert([
//                    'idUser'          => $id,
//                    'idConcert'       => $request->get('idConcert'),
//                    'NumberPlace'     => $request->get('placeSelectionner')[0],
//                    "dateReservation" => now(),
//                    "prixPlace"       => 12,
//
//
//                ]);
                return "test2";
            }
//            return $prixConcert;
            return "test3";
        } else {
//            dd("not ok");
            return redirect()->route('accueil')->with('error', 'Erreur lors de la reservation');
        }
//        return $request;
//        return redirect()->back()->with('success', 'Votre reservation a ete enregistre');
    }

    public function recapitulatif($data)
    {
        $data        = explode(";", $data);
        $idConcert   = $data[0];
        $NumeroPlace = explode(",", $data[1]);
        $PrixPlace   = $data[2];
//        dd($data,$idConcert,$NumeroPlace,$PrixPlace);

        $concert = DB::table('concerts')->where('concerts.id', $idConcert)->join("artistes", "concerts.IdArtiste", "artistes.id")->get()->first();
//dd($concert);
        return view("recapitulatif", compact("concert", "NumeroPlace", "PrixPlace"));
    }


    public function accueil()
    {
        $concerts = DB::table('concerts')->get();

        return view("accueil", compact('concerts'));
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

        return view("reservation", compact('concert'));
    }

    public function GalerieSup($data)
    {
//        dd($data);
        $placesTotal = DB::table('reservations')->join("concerts", "idConcert", "=", "concerts.id")->select("NumberPlace")->where('reservations.idConcert', $data)->get()->toArray();


//        dd($placesTotal);
        return view("GalerieSup", compact('placesTotal'));
    }

    public function GalerieCentral($data)
    {
        $placesTotal = DB::table('reservations')->join("concerts", "idConcert", "=", "concerts.id")->select("NumberPlace")->where('reservations.idConcert', $data)->get()->toArray();


//        dd($placesTotal);
        return view("GalCentral", compact('placesTotal'));
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
        return view("artiste", compact('artistes'));
    }

    public function profile()
    {

//        dd(Auth()->user());
//get in database all reservation of user
        $reservations = DB::table('reservations')->join("concerts", "idConcert", "=", "concerts.id")->select("concerts.*", "reservations.*", "artistes.*")->join("artistes", "concerts.IdArtiste", "=", "artistes.id")->where('reservations.idUser', Auth()->user()->id)->orderBy('reservations.NumberPlace')->orderBy('reservations.idConcert')->get()->toArray();
//        dd($reservations);
//        ->join("concerts.IdArtiste","=","artistes.id")
//        dd($reservations);
        return view("profile", compact("reservations"));
    }
}



