<?php
namespace App\Http\Controllers;
use App\Userequire;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserequireController extends Controller
{
  public function postUserequirePost(Request $request)
  {
    $userequire = new Userequire();
    //protected $splitName;
    $rtagname = $request['r_tags'];
    $splitName = explode(',', $request['r_tags'], 3); // Restricts it to only 3 values, for names like Billy Bob Jones

    $userequire->r_detail = $request['r_detail'];
    $userequire->r_tag1 = $splitName[0];
    $userequire->r_tag2 = $splitName[1];
    $userequire->r_tag3 = $splitName[2];

    $request->user()->urequires()->save($userequire);
    return redirect()->route('matchor',compact('rtagname'));
  }

  public function getUserpage()
  {
    return view('addr');
  }

}
