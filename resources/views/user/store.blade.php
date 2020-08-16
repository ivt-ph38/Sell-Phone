
@extends('user.layout.master')
@section ('content')
<!-- BREADCRUMB -->
<div id="breadcrumb" class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
			<div class="col-md-2 col-md-offset-5" >
				<h3>{{$categoryName['name']}}</h3>
			</div>
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /BREADCRUMB -->

<!-- SECTION -->
<div class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
			<!-- ASIDE -->
			<div id="aside" class="col-md-3">


				<!-- aside Widget -->
				<div class="aside">
					<h3 class="aside-title text-center">Lọc Theo giá</h3>
					<div class="text-center">
						<a href="">Dưới 2 triệu</a>  <hr>  
						<a href="">Từ 2 - 4 triệu</a> <hr>
						<a href="">Từ 4 - 7 triệu</a> <hr>
						<a href=""> Từ 7 - 13 triệu</a> <hr>
						<a href=""> Trên 13 triệu</a> <hr>
					</div>
				</div>
				<!-- /aside Widget -->

				<!-- aside Widget -->
				<div class="aside">
					<h3 class="aside-title">Sản Phẩm Bán Chạy</h3>
					@foreach ($listHotProduct as $value)
					<div class="product-widget">
						<div class="product-img">
							<img src="{{$value['image']}}" alt="">
						</div>
						<div class="product-body">
							<p class="product-category">{{$value['category_name']}}</p>
							<h3 class="product-name"><a href="#">{{$value['product_name']}}</a></h3>
							<h4 class="product-price">{{$value['price']}} <del class="product-old-price">$990.00</del></h4>
						</div>
					</div>
					@endforeach														
				</div>
				<!-- /aside Widget -->
			</div>
			<!-- /ASIDE -->

			<!-- STORE -->
			<div id="store" class="col-md-9">
				<!-- store top filter -->
				<div class="store-filter clearfix">

					<div class="row">
						<div class="col-md-6 col-md-offset-6">
							<div class="row">
								@if ($arrange=='asc')
								<div class="col-md-6">
									<a style="color:red;font-weight: bold;" href="{{route('user.category',['id'=>$categoryName['id'],'arrange'=>'asc'])}}">Sắp xếp giá tăng dần</a>
								</div>
								<div class="col-md-6">
									<a style="color:#848484" href="{{route('user.category',['id'=>$categoryName['id'],'arrange'=>'desc'])}}">Sắp xếp giá giảm dần</a>
								</div>
								@elseif($arrange=='desc')
								<div class="col-md-6">
									<a style="color:#848484"  href="{{route('user.category',['id'=>$categoryName['id'],'arrange'=>'asc'])}}">Sắp xếp giá tăng dần</a>
								</div>
								<div class="col-md-6">
									<a style="color:red; font-weight: bold;"  href="{{route('user.category',['id'=>$categoryName['id'],'arrange'=>'desc'])}}">Sắp xếp giá giảm dần</a>
								</div>
								@endif

								
							</div>
						</div>
					</div>


				</div>
				<!-- /store top filter -->

				<!-- store products -->
				<div class="row">

					@foreach ($listProduct->items() as $value) 
					<!-- product -->
					<div class="col-md-4 col-xs-6">
						<div class="product">
							<div class="product-img">
								<img src="{{$value->image}}" alt="">
								<div class="product-label">
									<span class="sale">-30%</span>
									<span class="new">NEW</span>
								</div>
							</div>
							<div class="product-body">
								<p class="product-category">{{'categoryName'}}</p>
								<h3 class="product-name"><a href="#">{{$value->name}}</a></h3>
								<h4 class="product-price">{{$value->price}} <del class="product-old-price">$990.00</del></h4>
								<div class="product-rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</div>
							</div>
							<div class="add-to-cart">
								<a href="{{route('user.product',$value->id)}}"><button class="add-to-cart-btn"><i class="fa fa-eye"></i> Chi Tiết Sản Phẩm</button></a>

							</div>
						</div>
					</div>
					<!-- /product -->
					@endforeach		
				</div>
				<!-- /store products -->

				<!-- store bottom filter -->
				<div class="store-filter clearfix">
					<span class="store-qty">Hiển thị {{$listProduct->count()}} của {{ $listProduct->total() }} Sản Phẩm</span>

					{{-- <ul class="store-pagination"> --}}
						{{ $listProduct->links() }}


					{{-- </ul> --}}
				</div>
				<!-- /store bottom filter -->
			</div>
			<!-- /STORE -->
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /SECTION -->
@endsection

