<?php
namespace App\Http\Controllers;
use App\Userequire;
use App\Useroffer;
use Illuminate\Http\Request;
use App\Http\Controllers\UserequiureController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class MatchrequireController extends Controller
{

  public function getMatchrequiree($otagname)
  {
    //echo $otagname;
    $y = explode(',', $otagname, 3);
  //  echo $y[2];
    $data = [];
    $data = array_fill(0,0,0);
  //  echo "<br>";
    $rpost = Userequire::all();
    if (Auth::check() ){
    foreach($rpost as $rrpost){
        $id = Auth::id();
        if((($rrpost->r_tag1 == $y[0] || $rrpost->r_tag2 == $y[0] || $rrpost->r_tag3 == $y[0]) && $rrpost->user_id != $id) || (($rrpost->r_tag1 == $y[1] || $rrpost->r_tag2 == $y[1] || $rrpost->r_tag3 == $y[1]) && $rrpost->user_id != $id) || (($rrpost->r_tag1 == $y[2] || $rrpost->r_tag2 == $y[2] || $rrpost->r_tag3 == $y[2]) && $rrpost->user_id != $id))
        {
          //echo $oopost->o_detail;

          $data[] = $rrpost->r_detail;
        }

    }

        $id = Auth::id();
    //    echo "<h3>ID:".$id."</h3>";

      }

      foreach($data as $val){
      //print_r($val);
}
  //echo $y[1];
      return view('matcho',['datas'=>$data]);
  }
    public function getMatchrequire()
    {
      //echo $y;
    /*  $y =  $request->all();
      print_r($y);
      $opost = Userequire::all();
*/
    /*  $var = 6;
      //(Auth::check())->id;
      $arr = array();
      foreach($opost as $udata)
      {
          if($udata->user_id != $var){
            $arr[] = array("uid" => $udata->user_id, "tag" => $udata->r_tag1, "detail" =>$udata->r_detail );
        }
      }

      echo count($arr);
      for($x=0;$x<count($arr);$x++)
      {
        echo "<br>";
        print_r($arr[$x]["detail"]);

      }
      print_r($arr);

if (Auth::check() ){
foreach($opost as $oopost){
    $id = Auth::id();
    if((($oopost->r_tag1 == "bangalore" || $oopost->r_tag2 == "bangalore" || $oopost->r_tag3 == "bangalore") && $oopost->user_id != $id) || (($oopost->r_tag1 == "seo" || $oopost->r_tag2 == "seo" || $oopost->r_tag3 == "seo") && $oopost->user_id != $id) || (($oopost->r_tag1 == "free" || $oopost->r_tag2 == "free" || $oopost->r_tag3 == "free") && $oopost->user_id != $id))
    {
      echo $oopost->id;
    }
    $var = $oopost->lists('r_tag1','user_id');
    $var2 = $oopost->lists('r_tag2','user_id');
    $var3 = $oopost->lists('r_tag3','user_id');
    $var4 = $oopost->lists('r_detail','user_id');


    //echo $oopost->r_detail;
    echo "<br>";
}
    $id = Auth::id();
    echo $id;

  }*/
}
}
