@extends('front.layouts.master')
 @section('title', $category->name.' kateqoriyasi')
 
@section('content')

      <div class="col-md-9 mx-auto">
        @include('front.widgets.articleList')
      </div>
    @include('front.widgets.categoryWidget')
   
  <hr>
@endsection