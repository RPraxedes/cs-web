@extends('layouts.app')

@section('title' , $pages->first()->title)

@section('head')
	@if($position == 'admin')
		<script src="{{ asset('js/user.js') }}"></script>
	@endif
@endsection

@section('header')
<div class="row">
	<div class="col-xl-12 display-4 title header text-center">
		{{$pages->first()->title}}
	</div>
</div>
@endsection

@section('content')
	<div class="container">
		<div class="row margin-top">
			<div class="col-md-4 offset-md-7 highlight">
				{!!$pages->first()->body!!}
			@if($position == 'admin')
				<form action="{{route('checklist.edit', ['id' => $pages->first()->checklists_id])}}" method="post">
					@csrf
					<button type="submit" class="btn btn-secondary btn-sm edit-button float-right">Edit Section</a>
				</form>
			@endif
			</div>
		</div>
		<div class="row justify-content-md-center">
			@for ($i=1; $i<$pages->count()-2; $i++)	<!--consists of total units and subjects per sem-->
			<div class="col-md-5 highlight">
				{!!$pages[$i]->body!!}
				@if($position == 'admin')
					<form action="{{route('checklist.edit', ['id' => $pages[$i]->checklists_id])}}" method="post">
						@csrf
						<button type="submit" class="btn btn-secondary btn-sm edit-button float-right">Edit Section</a>
					</form>
				@endif
			</div>
			@endfor
		</div>
    <div class="row">
      <div class="col-md-12 highlight"> <!-- #list-courses -->
        {!!$pages[$pages->count()-2]->body!!}
        @if($position == 'admin')
					<form action="{{route('checklist.edit', ['id' => $pages[$pages->count()-2]->checklists_id])}}" method="post">
						@csrf
						<button type="submit" class="btn btn-secondary btn-sm edit-button float-right">Edit Section</a>
					</form>
				@endif
      </div>
    </div>
		<div class="row">
			<div class="col-md-12 highlight">
				{!!$pages->last()->body!!} <!-- required for graduate courses since a link to GPO is required -->
				@if($position == 'admin')
					<form action="{{route('checklist.edit', ['id' => $pages->last()->checklists_id])}}" method="post">
						@csrf
						<button type="submit" class="btn btn-secondary btn-sm edit-button float-right">Edit Section</a>
					</form>
				@endif
			</div>
		</div>
	</div>
@endsection
