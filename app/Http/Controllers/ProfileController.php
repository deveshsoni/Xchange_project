<?php
namespace App\Http\Controllers;
use App\User;
use App\Userequire;
use App\Useroffer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
  public function getProfile()
  {
    $udetail = User::where('id', '=', Auth::user()->id)->get();
    $rdetail = Userequire::where('user_id', '=', Auth::user()->id)->get();
    $odetail = Useroffer::where('user_id', '=', Auth::user()->id)->get();
  //  $udate = DB::table('users')->pluck('created_at');

    foreach($udetail as $cdate)
    {
      $codate = explode(' ',$cdate->created_at,2) ;
      $cudate = $codate[0];
    }

    return view('profile',['upost'=>$udetail,'acdate'=>$cudate],['uoview'=>$odetail,'rview'=>$rdetail]);
  }
}
