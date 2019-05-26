@extends('admin') 
@section('pagecss')
<link rel="stylesheet" href="{{ asset('/vendor/tinymce/js/tinymce/themes/custom.css') }}">
@endsection
 
@section('content') {{-- start of page content --}}
<h1>{{$lesson->lessonTitle}} | </h1>
<div class="page-view">
  <div class="row">
    <div class="col-12">
      @if ($lesson->lessonType === 'fas fa-video')
      <iframe id="ytplayer" type="text/html" width="100%" height="600" src="https://www.youtube.com/embed/{!!$lesson->lessonVideoLink!!}"
        frameborder="0" allowfullscreen>
          
          @else
          {!!$lesson->lessonContent!!}
          @endif
    </div>
  </div>
<hr>
@endsection


@section('pagescript')
  @if ($lesson->lessonType === 'fas fa-stream')
    <script src="https://h5p.org/sites/all/modules/h5p/library/js/h5p-resizer.js" charset="UTF-8"></script>
  @endif
  <script src='https://vjs.zencdn.net/7.5.4/video.js'></script>
@endsection