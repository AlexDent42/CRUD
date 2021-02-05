@extends('layout')


@section('title', isset($user) ? 'Update '.$user->name : 'Create User')

@section('content')

<a type="button" class="btn btn-secondary mb-3" href="{{ route('users.index') }}">Back to users</a>

			<form method="post" 
			@if(isset($user))


			action="{{ route('users.update', $user) }}"

			@else
			action="{{ route('users.store') }}"
			@endif
			>
				@csrf

				@isset($user)
					@method('PUT')
				@endisset
						<div class="row">
					  <div class="col">
					    <input type="text" name="name" value="{{ old('name', isset($user) ? $user->name : null) }}"class="form-control" placeholder="Name" aria-label="Name">
					    @error('name')
					    <div class="alert alert-danger">{{ $message }}</div>
					    @enderror
					  </div>
					  <div class="col">
					    <input type="text" value="{{ old('email',isset($user) ? $user->email : null) }}"name="email" class="form-control" placeholder="Email" aria-label="Email">
					    @error('email')
					    <div class="alert alert-danger">{{ $message }}</div>
					    @enderror
					  </div>
					  <div class="row mt-3">
					  	<div class="d-flex justify-content-end">
					  		<button type="submit" class="btn btn-primary">Create</button>
					  	</div>
					  	
					  </div>

						

					</div>
			</form>
@endsection