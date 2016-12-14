@extends('layouts.master')

@section('title')
  Success
@endsection

@section('content')
  <div class="alert alert-success col-lg-8  col-md-8 col-md-offset-1" role="alert">You Requirement is successfully posted.</div>
  <ul class="list-group col-lg-8  col-md-8 col-md-offset-1">
  <li class="list-group-item"><a href="profile">View My Profile</a></li>
  <li class="list-group-item"><a href="matcho">Show Matching Offerings</a></li>
  <li class="list-group-item"><a href="addr">Add my Requirements</a></li>
</ul>
@endsection
