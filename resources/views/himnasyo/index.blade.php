@extends('layouts.app')

@section('title' , 'Himnasyo Amianan')

@section('header')
<div class="row">
	<div class="col-xl-12 display-4 title header text-center">
		Himnasyo Amianan
	</div>
</div>
@endsection

@section('content')
<div class="container-fluid">
  @foreach($pages as $page)
    @if($position == 'admin')
      <form action="{{route('checklist.edit', ['id' => $page->checklists_id])}}" method="post">
        @csrf
        <button type="submit" class="btn btn-secondary btn-sm edit-button float-right">Edit Section</a></button>
      </form>
    @endif
    @if($page->body == "gallery")
      <div class="row margin-top-80">
        <div class="col-xl-12 display-4 title text-center">
          <h1>Gallery</h1>
        </div>
        <div class="row margin-top-80 justify-content-center">
          <div class="col-md-10">
            <div class="row justify-content-center margin-top margin-bottom">
              @foreach($images as $image)
                <div class="col-md-3">
                  <a href="{{asset("images/".$image->filename)}}" data-lightbox="gallery" data-title="{{$image->caption}}" data-alt="{{$image->alt}}"><img src="{{asset("images/".$image->filename)}}" class="img-thumbnail" style="object-fit: cover; width: auto;" alt="{{$image->alt}}"></a>
                </div>
              @endforeach
            </div>
            <div class="row justify-content-md-center margin-top margin-bottom">
              {{$images->render()}}
            </div>
          </div>
        </div>
      </div>
      @continue
    @endif
    {!!$page->body!!}
  @endforeach
</div>
@endsection
