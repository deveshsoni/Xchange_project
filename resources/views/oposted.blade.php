@extends('layouts.master')

@section('title')
  Success
@endsection

@section('content')
  <div class="alert alert-success col-lg-8  col-md-8 col-md-offset-1" role="alert">You Offering is successfully posted.</div>
  <ul class="list-group col-lg-8  col-md-8 col-md-offset-1">
  <li class="list-group-item"><a href="profile">View My Profile</a></li>
  <li class="list-group-item"><a href="matchr">Show Matching Requirements</a></li>
  <li class="list-group-item"><a href="addo">Add my Offerings</a></li>
</ul>
@endsection
