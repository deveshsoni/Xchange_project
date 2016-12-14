<?php
namespace App\Http\Controllers;
use App\Useroffer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserofferController extends Controller
{
  public function postUserofferPost(Request $request)
  {
    $useroffer = new Useroffer();
    //protected $splitName;
    $otagname = $request['o_tags'];
    $splitName2 = explode(',', $request['o_tags'], 3); // Restricts it to only 3 values, for names like Billy Bob Jones

    $useroffer->o_detail = $request['o_detail'];
    $useroffer->o_tag1 = $splitName2[0];
    $useroffer->o_tag2 = $splitName2[1];
    $useroffer->o_tag3 = $splitName2[2];

    $request->user()->uoffers()->save($useroffer);
    return redirect()->route('matchro',compact('otagname'));
  }

  public function getUserpage()
  {
    return view('addo');
  }
}
