@extends('layouts.master')

@section('title')
  Add
@endsection

@section('content')
  <section class="row">
    <div class="col-md-6">
      <h3>Add Requirement</h3>
      <form action="{{route('addmrequire')}}" method="post">
        <div class="form-group">
          <label for="r_detail">Requirements Details</label>
          <textarea class="form-control" name="r_detail" id="r_detail" rows="5"></textarea>
        </div>
        <div class="form-group">
          <label for="r_tags">Input 3 tags</label>
          <input class="form-control" type="text" name="r_tags" id="r_tags"/>
        </div>
        <button type="submit" class="btn btn-primary">Add</button>
        <input type="hidden" name="_token" value="{{Session::token()}}">
      </form>
    </div>
  </section>
  @endsection
