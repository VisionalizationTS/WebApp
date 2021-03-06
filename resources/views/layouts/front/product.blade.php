<div class="row">
    <div class="col-xs-12 col-sm-6 col-md-6" style="margin-bottom:10px;">
        <ul id="thumbnails" class="col-md-4 col-xs-4 list-unstyled">
            <li>
                <a href="javascript: void(0)">
                    @if(isset($product->cover))
                    <img class="img-responsive img-thumbnail"
                         src="{{ asset("storage/$product->cover") }}"
                         alt="{{ $product->name }}" />
                    @else
                    <img class="img-responsive img-thumbnail"
                         src="{{ asset("https://placehold.it/180x180") }}"
                         alt="{{ $product->name }}" />
                    @endif
                </a>
            </li>
            @if(isset($images) && !$images->isEmpty())
                @foreach($images as $image)
                <li>
                    <a href="javascript: void(0)">
                    <img class="img-responsive img-thumbnail"
                         src="{{ asset("storage/$image->src") }}"
                         alt="{{ $product->name }}" />
                    </a>
                </li>
                @endforeach
            @endif
        </ul>
        <figure class="text-center product-cover-wrap col-xs-8 col-md-8">
            @if(isset($product->cover))
                <img id="main-image" class="product-cover img-responsive"
                     src="{{ asset("storage/$product->cover") }}?w=400"
                     data-zoom="{{ asset("storage/$product->cover") }}?w=1200">
            @else
                <img id="main-image" class="product-cover" src="https://placehold.it/300x300"
                     data-zoom="{{ asset("storage/$product->cover") }}?w=1200" alt="{{ $product->name }}">
            @endif
        </figure>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-6">
        @include('layouts.errors-and-messages')
        <div class="product-description">
            @if (app()->getLocale() == 'ar')
            <h1>{{ $product->name_ar }}
            @else
            <h1>{{ $product->name }}
            @endif
                @if($product->reviews->count())
                <small>{{trans('main.product.Rating')}}&nbsp;{{ number_format($product->reviews->avg('rating'), 2) }} / 5.00</small>
                @else
                <small>{{trans('main.product.Be The First to Rate!')}}</small>
                @endif
                <small>{{ config('cart.currency') }} {{ $product->price }}</small>
            </h1>
            @if (app()->getLocale() == 'ar')
            <div class="description">{!! $product->description_ar !!}</div>
            <div class="excerpt">
                <hr>{!!  str_limit($product->description_ar, 100, ' ...') !!}</div>
            @else
            <div class="description">{!! $product->description !!}</div>
            <div class="excerpt">
                <hr>{!!  str_limit($product->description, 100, ' ...') !!}</div>
            @endif
            <hr>
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ route('cart.store') }}" class="form-inline" method="post">
                        {{ csrf_field() }}
                        @if(isset($productAttributes) && !$productAttributes->isEmpty())
                            <div class="form-group">
                                <label for="productAttribute">{{trans('main.product.Choose Combination')}}</label> <br />
                                <select name="productAttribute" id="productAttribute" class="form-control select2">
                                    @foreach($productAttributes as $productAttribute)
                                        <option value="{{ $productAttribute->id }}">
                                            @foreach($productAttribute->attributesValues as $value)
                                                {{ $value->attribute->name }} : {{ ucwords($value->value) }}
                                            @endforeach
                                            @if(!is_null($productAttribute->price))
                                                ( {{ config('cart.currency_symbol') }} {{ $productAttribute->price }})
                                            @endif
                                        </option>
                                    @endforeach
                                </select>
                            </div><hr>
                        @endif
                        <div class="form-group">
                            <input type="text"
                                   class="form-control"
                                   name="quantity"
                                   id="quantity"
                                   placeholder="{{trans('main.product.Quantity')}}"
                                   value="{{ old('quantity') }}" />
                            <input type="hidden" name="product" value="{{ $product->id }}" />
                        </div>
                        <button onclick="validation()" type="submit" class="btn btn-warning"><i class="fa fa-cart-plus"></i> {{trans('main.product.Add to cart')}}
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@section('js')
    <script type="text/javascript">
        $(document).ready(function () {
            var productPane = document.querySelector('.product-cover');
            var paneContainer = document.querySelector('.product-cover-wrap');

            new Drift(productPane, {
                paneContainer: paneContainer,
                inlinePane: false
            });
        });
    </script>
@endsection