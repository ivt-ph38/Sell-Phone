@extends('admin.master.master')
		@section ('content')
		<h1 class="text-center">Edit Product</h1>
		<form action="{{route('product.update', $product->id)}}" method="POST" role="form" enctype="multipart/form-data">
	@method('PUT')
	@csrf
	
		<div class="row">
			<div class="col-6">
			<div class="form-group">
				<label for="">Name</label>
				<input type="text" name="name" class="form-control" value="{{old('name') ? old('name') : $product->name}}">
			</div>
			<div class="form-group">
				<label for="">Category_ID</label>
		
				<select name="category_id" id="" required="required" class="form-control">
				<option value="{{$product->category->id}}">{{$product->category->name}}</option>
				<option value="">-- Lựa Chọn --</option>}
			
				@foreach ($categoryID as $value)
			
				<option value="{{$value->id}}">{{$value->name}}</option>
				@endforeach
			
		</select>
	</div>
	<div class="form-group">
				<label for="">Title</label>
				<input type="text" name="title" value="{{old('titel') ? old('titel') :$product->title}}" class="form-control" id="" placeholder="Input field">
			</div>
			<div class="form-group">
				<label for="">Description</label>
				<textarea name="description"  class="form-control" rows="4" >{{old('description') ? old('description') :$product->description}}</textarea>
				
			</div>
			<div class="form-group">
				<label for="">Price</label>
				<input type="text" name="price" value="{{old('price') ? old('price') :$product->price}}" class="form-control" id="" placeholder="Input field">
			</div>
			<div class="form-group">
				<label for="">Quantity</label>
				<input type="text" name="quantity" value="{{old('quantity') ? old('quantity') :$product->quantity}}" class="form-control" id="" placeholder="Input field">
			</div>
			<div class="form-group">
				<label for="">Size</label>
				<input type="text" name="size" value="{{old('size') ? old('size') :$product->size}}" class="form-control" id="" placeholder="Input field">
			</div>
			<div class="form-group">
				<label for="">Weight</label>
				<input type="text" name="weight" value="{{old('weight') ? old('weight') :$product->weight}}" class="form-control" id="" placeholder="Input field">
			</div>
			<div class="form-group">
				<label for="">Color</label>
				<input type="text" name="color" value="{{old('color') ? old('color') :$product->color}}" class="form-control" id="" placeholder="Input field">
			</div>
			<label for="">Image</label>
			<div class="form-group">
				<div class="custom-file">
				<input type="file" name="image" class="custom-file-input" value="{{$product->image}}" >
				<label class="custom-file-label" >Choose file</label>
				</div>
			</div>
			<div class="form-group">
				<label for="">Display</label>
				<input type="text" name="display" value="{{old('display') ? old('display') :$product->display}}" class="form-control" id="" placeholder="Input field">
			</div>
			<div class="form-group">
				<label for="">Os</label>
				<input type="text" name="os" value="{{old('os') ? old('os') :$product->os}}" class="form-control" id="" placeholder="Input field">
			</div>
		
		</div>
		<div class="col-6">
			<div class="form-group">
				<label for="">Storage</label>
				<input type="text" name="storage" value="{{old('storage') ? old('storage') :$product->storage}}" class="form-control" id="" placeholder="Input field">
			</div>
			<div class="form-group">
				<label for="">Ram</label>
				<input type="text" name="ram" value="{{old('ram') ? old('ram') :$product->ram}}" class="form-control" id="" placeholder="Input field">
			</div>
			<div class="form-group">
				<label for="">CPU</label>
				<input type="text" name="cpu" value="{{old('cpu') ? old('cpu') :$product->cpu}}" class="form-control" id="" placeholder="Input field">
			</div>
			<div class="form-group">
				<label for="">GPU</label>
				<input type="text" name="gpu" value="{{old('gpu') ? old('gpu') :$product->gpu}}" class="form-control" id="" placeholder="Input field">
			</div>
			<div class="form-group">
				<label for="">Primary_camera</label>
				<input type="text" name="primary_camera" value="{{old('primary_camera') ? old('primary_camera') :$product->primary_camera}}" class="form-control" id="" placeholder="Input field">
			</div>
			<div class="form-group">
				<label for="">Rear_camera</label>
				<input type="text" name="rear_camera" value="{{old('rear_camera') ? old('rear_camera') :$product->rear_camera}}" class="form-control" id="" placeholder="Input field">
			</div>
			<div class="form-group">
				<label for="">Battery</label>
				<input type="text" name="battery" value="{{old('battery') ? old('battery') :$product->battery}}" class="form-control" id="" placeholder="Input field">
			</div>
			<div class="form-group">
				<label for="">Warranty</label>
				<input type="text" name="warranty" value="{{old('warranty') ? old('warranty') :$product->warranty}}" class="form-control" id="" placeholder="Input field">
			</div>
			<div class="form-group">
				<label for="">Promotion_price</label>
				<input type="text" name="promotion_price" value="{{old('promotion_price') ? old('promotion_price') :$product->promotion_price}}" class="form-control" id="" placeholder="Input field">
			</div>
			<div class="form-group">
				<label for="">Start_promotion</label>
				<input type="date" name="start_promotion" value="{{old('start_promotion') ? old('start_promotion') :$product->start_promotion}}" class="form-control" id="" placeholder="Input field">
			</div>
			<div class="form-group">
				<label for="">End_promotion</label>
				<input type="date" name="end_promotion" value="{{old('end_promotion') ? old('end_promotion') :$product->end_promotion}}" class="form-control" id="" placeholder="Input field">
			</div>
			<button type="submit" style="float:right" class="btn btn-primary">Update Product</button>

		</div>

	</div>
	



	
</form>
@endsection