@extends('layout')
@section('title')
Wall
@endsection

@section('content')
	<div class="totle m-b-md">
		<a href="/show">Wall</a>
	</div>
	@if($search !== false)
		<div>recherche:{{ $search }}</div>
	@endif

	{!! Form::open(['url' => 'write']) !!}
		{!! Form::text('post_content')!!}
		{!! Form::submit('Write on the wall ! ') !!}
	{!! Form::close() !!}

	<br><br>
	<ul>
	@foreach($posts as $post)
		<li>
			<b>{{ $post->user->name }}</b> says : <em>{{ $post->content }}</em>
		</li>
	@endforeach
	</ul>
@endsection