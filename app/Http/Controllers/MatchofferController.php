<?php
namespace App\Http\Controllers;
use App\Userequire;
use App\Useroffer;
use Illuminate\Http\Request;
use App\Http\Controllers\UserequiureController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class MatchofferController extends Controller
{

  public function getMatchofferr($rtagname)
  {
    //echo $rtagname;
    $y = explode(',', $rtagname, 3);
  //  echo $y[0];
    $data = [];
    $data = array_fill(0,0,0);
  //  echo "<br>";
    $opost = Useroffer::all();
    if (Auth::check() ){
    foreach($opost as $oopost){
        $id = Auth::id();
        if((($oopost->o_tag1 == $y[0] || $oopost->o_tag2 == $y[0] || $oopost->o_tag3 == $y[0]) && $oopost->user_id != $id) || (($oopost->o_tag1 == $y[1] || $oopost->o_tag2 == $y[1] || $oopost->o_tag3 == $y[1]) && $oopost->user_id != $id) || (($oopost->o_tag1 == $y[2] || $oopost->o_tag2 == $y[2] || $oopost->o_tag3 == $y[2]) && $oopost->user_id != $id))
        {
          //echo $oopost->o_detail;

          $data[] = $oopost->o_detail;
        }
      /*  $var = $oopost->lists('r_tag1','user_id');
        $var2 = $oopost->lists('r_tag2','user_id');
        $var3 = $oopost->lists('r_tag3','user_id');
        $var4 = $oopost->lists('r_detail','user_id');
*/

        //echo $oopost->r_detail;
      //  echo "<br>";
    }

        $id = Auth::id();
    //    echo "<h3>ID:".$id."</h3>";

      }

      foreach($data as $val){
      //print_r($val);
}

      return view('matchr',['datas'=>$data]);
  }
    public function getMatchoffer()
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


}
}
