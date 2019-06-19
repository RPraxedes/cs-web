@extends('layouts.app')

@section('title' , 'Your Articles')

@section('content')
	<div class="container-fluid">
		<div class="row">
			<div class="col-xl-12 display-1 title text-center">
				Your Articles
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
			@foreach ($articles as $article)
				<div class="card">
					<div class="row">
						<div class="col-md-2">
							<img src="{{asset('images/'.$article->header_image)}}" class="card-img" alt="{{$article->header_alt}}">
						</div>
						<div class="col-md-10">
							@if($article->published_at != NULL)
							<div class="card-body">
								<h4 class="card-title "><strong>{{$article->title}}</strong></h4>
								<p class="card-text"><small class="text-muted">Published on {{\Carbon\Carbon::parse($article->published_at)->toFormattedDateString()}} at {{date('h:i A', strtotime($article->published_at))}} by {{$article->user->name}}</small></p>
								<div class="card-text">
									{!!Str::words(strip_tags($article->body), 100)!!}
								</div>
								<br>
								<a href="{{url('articles?id='.$article->id)}}" role="button" class="btn btn-primary">Read More</a>
							</div>
							@else
							<div class="card-body">
								<h4 class="card-title "><strong>{{$article->title}}</strong></h4>
								<p class="card-text"><small class="text-muted">Saved on {{\Carbon\Carbon::parse($article->updated_at)->toFormattedDateString()}} at {{date('h:i A', strtotime($article->updated_at))}} by {{$article->user->name}}</small></p>
								<div class="card-text">
									{!!Str::words(strip_tags($article->body), 100)!!}
								</div>
								<br>
								<form action="{{route('article.delete')}}" method="POST">
									@csrf
									<input type="hidden" name="id" value={{$article->id}}>
									<button type="submit" class="btn btn-danger">Delete</button>
								</form>
								<form action="{{route('article.publish')}}" method="POST">
									@csrf
									<input type="hidden" name="id" value={{$article->id}}>
									<button type="button" class="btn btn-success" data-toggle="modal" data-target="#publishModal">Publish</button>
									<!-- Modal -->
									<div class="modal fade" id="publishModal" tabindex="-1" role="dialog" aria-labelledby="publishModalTitle" aria-hidden="true">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="publishModalHeaderTitle">Confirm Publication</h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
												</div>
												<div class="modal-body">
													Are you sure you want to publish this article? You won't be able to edit or delete this after.
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
													<button type="submit" class="btn btn-success">Publish</button>
												</div>
											</div>
										</div>
									</div>
								</form>
								<a href="{{route('article.edit')}}?id={{$article->id}}" role="button" class="btn btn-secondary">Edit</a>
							</div>
							@endif
						</div>
					</div>
				</div>
			@endforeach
			</div>
		</div>
	</div>
@endsection