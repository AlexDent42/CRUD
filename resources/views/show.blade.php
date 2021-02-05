@extends('layout')


@section('title', 'User '.$user->name)

@section('content')
<a type="button" class="btn btn-secondary mb-3" href="{{ route('users.index') }}">Back to users</a>
			<div class="card" style="width: 18rem;">
  <ul class="list-group list-group-flush">
    <li class="list-group-item">ID: {{ $user->id }}</li>
    <li class="list-group-item">Name: {{ $user->name }}</li>
    <li class="list-group-item">Email: {{ $user->email }}</li>
    <li class="list-group-item">Created at: {{ $user->created_at->format('Y/m/d') }}</li>
    <li class="list-group-item">Updated at: {{ $user->updated_at->format('Y/m/d, H:i:s ') }}</li>
    <a type="button" class="btn btn-warning" href="{{ route('users.edit', $user) }}">Edit</a>
  </ul>
</div>
@endsection