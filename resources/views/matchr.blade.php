@extends('layouts.master')

@section('title')
  Match Requirements
@endsection



@section('content')

<section class="row col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-1">
  <div>
    <h2>These matches your Requirements</h2>
  </div>
  @foreach($datas as $val)
<hr>
<div class="col-md-12 col-md-offset-1">
  <section class="row posts">
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
