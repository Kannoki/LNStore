<div class="container contain-bg">
    <div class="cart_section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cart_container">
                        <div class="cart_items">
                            <ul class="cart_list">
                                @if(Session::has('success_message'))
                                    <div class="alert alert-success">
                                        <strong>Success</strong> {{Session::get('success_message')}}
                                    </div>
                                @endif
                                @if(Cart::count() > 0)
                                @foreach (Cart::content() as $item)
                                <li class="cart_item clearfix col-12">
                                    <div class="cart_item_image"><img src="{{ asset('assets/products/') }}/{{ $item->model->image }}" alt="{{$item->model->name}}"></div>
                                    <div class="cart_item_info d-flex flex-md-row flex-column justify-content-between">                                        
                                        <div class="cart_item_name cart_info_col">
                                            <div class="cart_item_title">Name</div>
                                            <div class="cart_item_text ellipsis-title">{{ $item->model->name }}</div>
                                        </div>
                                        <div class="cart_item_quantity cart_info_col quantity-input">
                                            <div class="cart_item_title">Quantity</div>
                                            <div class="input-group" style="margin-top: 30px">
                                                <span class="input-group-btn">
                                                    <button type="button" class="quantity-left-minus btn btn-danger btn-number"  data-type="minus" data-field="" wire:click.prevent="decreaseQuantity('{{$item->rowId}}')">
                                                        <i class="fa fa-minus" aria-hidden="true"></i>
                                                    </button>
                                                </span>
                                                <input style="width: 43px" type="text" id="quantity" name="product-quality" class="form-control input-number" value="{{ $item->qty }}" data-max="120" pattern="[0-9]*">
                                                <span class="input-group-btn">
                                                    <button type="button" class="quantity-right-plus btn btn-success btn-number" data-type="plus" data-field="" wire:click.prevent="increaseQuantity('{{$item->rowId}}')">
                                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                                    </button>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="cart_item_price cart_info_col">
                                            <div class="cart_item_title">Price</div>
                                            <div class="cart_item_text">${{ $item->model->regular_price }}</div>
                                        </div>
                                        <div class="cart_item_total cart_info_col">
                                            <div class="cart_item_title">Total</div>
                                            <div class="cart_item_text">${{ $item->subtotal }}</div>
                                        </div>
                                    </div>
                                </li>
                                @endforeach
                                @else
                                <p>No item in cart</p>
                                @endif
                            </ul>
                        </div>
                        <div class="order_total">
                            <div class="order_total_content text-md-right">
                                <div class="order_total_title">Order Total:</div>
                                <div class="order_total_amount">${{Cart::subtotal()}}</div>
                            </div>
                        </div>
                        <div class="cart_buttons"> 
                            <button type="button" class="button1 cart_button_clear" wire:click.prevent="destroyAll()">Clear Cart</button> 
                            <button type="button" class="button1 cart_button_checkout">Check Out</button> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>