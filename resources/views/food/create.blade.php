@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        	@if(Session::has('message'))
            <div class="alert alert-success">
            {{Session::get('message')}}
            </div>
            @endif
        	<form method="POST" action="{{route('food.store')}}" enctype="multipart/form-data">@csrf
            <div class="card">
                <div class="card-header">{{ __('Add New Food') }}</div>

                <div class="card-body">
                   <div class="form-group mt-3">
	                   	<label for="name">Name</label>
	                   	<input type="text" name="name" class="form-control @error('name') is-invalid @enderror"> 
	                   	@error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
						@enderror
                   </div>
                   <div class="form-group mt-3">
	                   	<label for="description">Description</label>
	                   	<textarea class="form-control @error('description') is-invalid @enderror" name="description">Description</textarea>
	                   	@error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
						@enderror
                   </div>
                   <div class="form-group mt-3">
	                   	<label for="price">Price</label>
	                   	<input type="number" name="price" class="form-control @error('price') is-invalid @enderror">
	                    @error('price')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
						@enderror 

                   </div>
                   <div class="form-group mt-3">
	                   	<label for="category">Category</label>
	                   	<select name="category" class="form-control @error('category') is-invalid @enderror">
	                   		<option value="">Select Category</option>
	                   		@foreach(App\Models\Category::all() as $category)
	                   			<option value="{{$category->id}}">{{$category->name}}</option>
	                   		@endforeach
	                   	</select>
	                   	@error('category')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
						@enderror 
                   </div>
                   <div class="form-group mt-3">
	                   	<label for="image">Image</label>
	                   	<input type="file" name="image" class="form-control @error('image') is-invalid @enderror"> 
	                   	@error('image')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
						@enderror 
                   </div>
                   <div class="form-group mt-3">
	                   	<button class="btn 	btn-outline-primary">Submit</button>
                   </div>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
@endsection
