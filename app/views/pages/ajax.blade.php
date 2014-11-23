<table class="table table-striped table-bordered">
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