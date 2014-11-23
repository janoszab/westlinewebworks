@extends('layouts.main')

@section('content')
	<div class="page-header">
	  <h1>Poll stat</h1>
	</div>

	<table class="table table-striped table-bordered" id="poll-table">
		<thead>
			<tr>
				<th>question id</th>
				<th>num of vote</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($data as $poll)
				<tr>
					<td>{{ $poll->question_id }}</td>
					<td>{{ $poll->vote }}</td>
				</tr>
			@endforeach
		</tbody>
	</table>
@stop