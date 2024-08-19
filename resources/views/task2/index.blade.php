<!DOCTYPE html>
<html>
<head>
   <meta name="csrf-token" content="{{ csrf_token() }}">
   <title>Task 2: Quản lý sản phẩm</title>
</head>
<body>
	<x-slot name="title">
		Categories
	</x-slot>
	<div class="container mt-5">
	<div class="row">
	<div class="col-md-12">
	<div class="card">
	<div class="card-header">
		<h4>Categories
			<a href="{{ url('task2/create') }}" class="btn btn-primary float-end">Add Category</a>
		</h4>
	</div>
	<div class=card-body>
	

		<table>
			<thead>
				<tr>
					<th>ID</th>
                                        <th>NAME</th>
                                        <th>DESCRIPTION</th>
                                        <th>COST</th>
					<th>ACTION</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($categories as $item)
  	                              <tr>
                        	                <td>{{$item->id}}</td>
                	                        <td>{{$item->name}}</td>
	                                        <td>{{$item->description}}</td>
        	                                <td>{{$item->cost}}</td>
						<td>
							<a href='{{ url('task2/'.$item->id.'/edit') }}' class='btn btn-success mx-2'> EDIT</a>
							<a href='{{ url('task2/'.$item->id.'/delete') }}' class='btn btn-danger mx-1' onclick="return confirm('Are you sure?')">DELETE</a>
						</td>

					</tr>
				@endforeach
                        </tbody>

		</table>
	</div>
        </div>
        </div>
        </div>
	</div>
</body>
</html>
