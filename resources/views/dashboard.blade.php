@extends('layouts.master')

@section('title')
  Dashboard
@endsection


@section('content')
<div  ng-app="app" ng-controller="Test">
<section class="col-lg-offset-0" ng-show="show==1">
  <h3>Offerings Posted Globally</h3>
</section>
<section class="col-lg-offset-0" ng-show="show==2">
  <h3>Requirements Posted Globally</h3>
</section>

<div class="col-lg-8  col-md-8 col-md-offset-1">

  <div class="btn-group" role="group">
    <button type="button" class="btn btn-default" ng-click="show = 1">Offerings</button>
    <button type="button" class="btn btn-default" ng-click="show = 2">Requirements</button>
  </div>

<br><br>

<section class="row posts" ng-show="show==1">
  <div class="col-lg-8 col-lg-offset-0 col-md-8 col-md-offset-1" >
    @foreach($posts as $opost)

    <article class="post">
      <p>{{$opost->o_detail}}</p>
      <div class="info">
        <h5>Tags:</h5>{{$opost->o_tag1}},{{$opost->o_tag2}},{{$opost->o_tag3}}
      </div>
    </article>
    <hr>
      @endforeach
        </div>
      <div class="col-lg-7" >
        <input type="text" id="myBtn" placeholder="Add New Offerings" class="form-control input-lg" readonly>
      </div>


</section>

<section class="row posts" ng-show="show==2">
  <div class="col-lg-8 col-lg-offset-0 col-md-8 col-md-offset-1">
  @foreach($post2 as $rpost)
    <article class="post">
      <p>{{$rpost->r_detail}}</p>
      <div class="info">
        <h5>Tags:</h5>{{$rpost->r_tag1}},{{$rpost->r_tag2}},{{$rpost->r_tag3}}
      </div>
    </article>
    <hr>
@endforeach
  </div>
  <div class="col-lg-7" >
    <input type="text" id="myBtn" placeholder="Add New Requirement" class="form-control input-lg" readonly>
  </div>
</section>
</div>
</div>
@endsection
