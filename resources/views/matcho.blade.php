@extends('layouts.master')

@section('title')
  Match Offerings
@endsection

<?php $var1='bangalore';
      $var2='mumbai';
      $var3='chennai';
?>

@section('content')

<section class="row col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-1">
  <div>
    <h2>These matches your Offerings</h2>
  </div>

<hr>
@foreach($datas as $val)
<div class="col-md-12 col-md-offset-1">

  <section class="row posts" ng-show="show==1">
    <div class="col-lg-6 col-lg-offset-0 col-md-8 col-md-offset-1">

      <article class="post">
        <p>{{$val}}</p>

      </article>
      <hr>

    </div>
  </section>

</div>
@endforeach
</section>
@endsection
