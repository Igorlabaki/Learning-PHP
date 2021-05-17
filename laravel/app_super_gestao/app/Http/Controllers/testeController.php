<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testeController extends Controller
{
    public function teste(int $p1,int $p2){
        //returnecho view('site.teste',['x'=>$p1, 'y'=>$p2]);
        //return echo view('site.teste',compact('p1','p2'));
        return  view('site.teste')->with('x',$p1)->with('y',$p2);
        
 }
}
