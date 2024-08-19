<!DOCTYPE html>
<html>
<head>
   <meta name="csrf-token" content="{{ csrf_token() }}">
   <title>Task 2: Quản lý sản phẩm</title>
</head>
<body>
        <x-slot name="title">
                Edit Categories
        </x-slot>
        <div class="container mt-5">
        <div class="row">
	<div class="col-md-12">
		@if (session('status'))
			<div class="alert alert-success">
			{{session('status')}}
			</div>
		@endif
        <div class="card">
        <div class="card-header">
                <h4>Edit Categories
                        <a href="{{ url('task2') }}" class="btn btn-primary float-end">Back</a>
                </h4>
	</div>
        <div class="card-body">
		<form action="{{ url('task2/'.$category->id.'/edit') }}" method="POST">
			@csrf
			@method('PUT')
			<div class="mb-3">
			<label>NAME</label>
			<input type="text" name="name" class="form-control" value="{{ $category->name }}" />
			</div>
			<div class="mb-3">
			<label>DESCRIPTION</label>
                        <textarea name="description" class="form-control" rows="3">{{ $category->description }}</textarea>

                        </div>
                        <div class="mb-3">
			<label>COST</label>
			<input type="number" name="cost" class="form-control" value="{{ $category->cost }}" />
			</div>
                        <div class="mb-3">
			<button type="submit" class="btn btn-primary">UPDATE</button>
			</div>

		</form>
	</div>

        </div>
        </div>
        </div>
        </div>
</body>
</html>

