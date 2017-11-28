<div class="thumbnail">
	<a href="{{route('product.get', ['slug' => $product->slug])}}"><img src="{{$product->image}}" alt="{{$product->title}} image"></a>
	<div class="caption">
		<h4><a href="{{route('product.get', ['slug' => $product->slug])}}">{{$product->title}}</a></h4>

		<p>{{$product->description}}</p>
	</div>
</div>