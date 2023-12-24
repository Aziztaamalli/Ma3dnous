<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\peeps;
use App\Models\personne;

class ControllerPeeps extends Controller
{
    public function showP(){
        return view('welcome');
    }
    public function show(){
        return view('homepage');
    }
    public function about(){
        return view('about');
    }
    public function ajouter(Request $request){
        $request->validate([
            'yourName'=>'required',
            'nickname'=>'required',
            'idCard'=>'required',
            'corruptName'=>'required',
            'workplace'=>'required',
          'report'=>'required',

        ]);
        $peeps=new peeps();
        $personne=new personne();

        $peeps->yourName=$request->yourName;
        $peeps->nickname=$request->nickname;
        $peeps->idCard=$request->idCard;
        $peeps->save();
        $personne->corruptName=$request->corruptName;
        $personne->workplace=$request->workplace;
        $personne->report=$request->report;
        $personne->image=$request->image;
        $personne->save();
        return $request->input();

    }
}
