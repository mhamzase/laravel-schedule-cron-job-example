@extends('master')

@section('notify')

    <div id="ct">
      <div class="corner " id="left_top"></div>
      <div class="corner" id="left_bottom"></div>
      <div class="corner" id="right_top"></div>
      <div class="corner" id="right_bottom"></div>
      <span>{{$details['name']}}</span>
      <blockquote>
        <p><i>&ldquo;{{$details['quote']}}&rdquo; </i></p>
      </blockquote>
    </div>
@endsection