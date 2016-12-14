@extends('layouts.master')

@section('title')
  Profile
@endsection


@section('content')
<div class="row col-md-8 col-md-offset-2  col-lg-offset-3 col-lg-6" ng-app="app" ng-controller="Test">
@foreach($upost as $opost)

    <h2>Your Profile Here</h2>
    <div class="well profile">
         <div class="col-sm-12">
             <div class="col-xs-12 col-sm-14">
                 <h2>{{$opost->first_name}}</h2>
                 <p><strong>About: </strong> Working at ConnectPlus </p>
                 <p><strong>Email: </strong> {{$opost->email}} </p>
                 <p><strong>Joined: </strong>{{$acdate}}</p>
                 <p><strong>Skills: </strong>
                     <span class="tags">html5</span>
                     <span class="tags">css3</span>
                     <span class="tags">jquery</span>
                     <span class="tags">bootstrap3</span>
                 </p>
             </div>
           </div>
    </div>

@endforeach
    <div class="btn-group" role="group">
      <button type="button" class="btn btn-default" ng-click="show = 1">Offerings</button>
      <button type="button" class="btn btn-default" ng-click="show = 2">Requirements</button>
    </div>

  <br><br>

  <section class="row posts" ng-show="show==1">
    <h4>Your Offerings</h4>
    <div class="col-lg-6 col-lg-offset-0 col-md-8 col-md-offset-1">
@foreach($uoview as $oupost)
      <article class="post">
        <p>{{$oupost->o_detail}}</p>
        <div class="info">
          <h5>Tags:{{$oupost->o_tag1}} | {{$oupost->o_tag2}} | {{$oupost->o_tag3}}</h5>
        </div>
      </article>
      <hr>
@endforeach
    </div>
  </section>

  <section class="row posts" ng-show="show==2">
    <h4>Your Requirements</h4>
    <div class="col-lg-6 col-lg-offset-0 col-md-8 col-md-offset-1">
@foreach($rview as $rpost)
      <article class="post">
        <p>{{$rpost->r_detail}}</p>
        <div class="info">
          <h5>Tags:{{$rpost->r_tag1}} | {{$rpost->r_tag2}} | {{$rpost->r_tag3}}</h5>
        </div>
      </article>
      <hr>
@endforeach
    </div>
  </section>

</div>
@endsection
