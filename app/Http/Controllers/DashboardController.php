<?php
namespace App\Http\Controllers;
use App\Userequire;
use App\Useroffer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{

    public function getDashboard()
    {
      $rpost = Userequire::all();
      $opost = Useroffer::all();

      return view('dashboard',['posts'=>$opost],['post2'=>$rpost]);
    }

}
