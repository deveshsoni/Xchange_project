@extends('layouts.master')

@section('title')
  Add
@endsection

@section('content')
  <section class="row">
    <div class="col-md-6">
      <h3>Add Offerings</h3>
      <form action="{{route('addoffer')}}" method="post">
        <div class="form-group">
          <label for="o_detail">Offerings Details</label>
          <textarea class="form-control" name="o_detail" id="o_detail" rows="5"></textarea>
        </div>
        <div class="form-group">
          <label for="o_tags">Input 3 tags</label>
          <input class="form-control" type="text" name="o_tags" id="o_tags">
        </div>
        <button type="submit" class="btn btn-primary">Add</button>
        <input type="hidden" name="_token" value="{{Session::token()}}">
      </form>
    </div>
  </section>
  @endsection
