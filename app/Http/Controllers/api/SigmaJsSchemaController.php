<?php


namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
//use app\Classes\PowerUsage; 
//use app\Classes\ShortestPath; 



class SigmaJsSchemaController extends Controller
{
    public function show($time)
    {

    $CurrentPowerUsage = new \App\Classes\PowerUsage();

    $ShortestPath = new \App\Classes\ShortestPath();

    $PowerMap =  $CurrentPowerUsage->show($time);
   
    return $ShortestPath->MakeShortestPath($PowerMap);
   
    
    }
  

    
  
 /*   public function index() {
      dd($this->Powerusage->getName());
   }
  
   public function getLastName() {
      dd(Common::getName());
   } */
   // $kittens = new PowerUsage();
     // $Power = PowerUsage::show($time);
      //$Bids = $Power::show($time);

    //  $sp = new ShortestPath;
     // return $sp::MakeShortestPath($Bids);
    

}