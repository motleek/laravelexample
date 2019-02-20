@extends('layout')

@section('content')
	<h1 class="title">Projects</h1>
	<ul>
		@foreach ($projects as $project)
			<li>
				<a href="/projects/{{ $project->id  }}">
					{{ $project->title }}
				</a>
			</li>
		@endforeach
	</ul>
	<form method="GET" action="/projects/create">

<!-- 		@method('DELETE')
		@csrf
 -->

		<div class="box">

			<div class="control">
				<button type="submit" class="button is-link">Create a New Project</button>
			</div>
		</div>

	</form>
@endsection