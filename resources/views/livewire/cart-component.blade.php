<div>
    <div class="home-shop">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 text-center">
                    <h1 class="title-shop">
                        Cart
                    </h1>
                    <p class="text-shop">
                        Home: <span>Cart</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="line mb-5"></div>
    <div class="content-cart">
        <div class="container">
            <div class="row">
                @if (Cart::count() > 0)

                    <div class="col-xl-12 gio-hang">
                        @if (Session::has('message_succeed'))
                            <div class="alert alert-success">
                                {{ Session::get('message_succeed') }}
                            </div>
                        @endif
                        @if (Cart::count() > 0)
                            <form action="" method="">
                                <table class="table text-center show-pc">
                                    <thead>
                                        <tr>
                                            <th colspan="3">Tour</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Number of people</th>
                                            <th scope="col">Subtotal</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach (Cart::content() as $item)
                                            <tr>
                                                <th scope="row">
                                                    <a href=""
                                                        wire:click.prevent="destroy('{{ $item->rowId }}')">
                                                        <ion-icon name="close-circle-outline"></ion-icon>
                                                    </a>
                                                </th>
                                                <td>
                                                    <a href=""><img class="img-fluid fix-img-cart"
                                                            src="{{ asset('images') }}/{{ $item->model->image }}"
                                                            alt=""></a>
                                                </td>
                                                <td><a
                                                        href="{{ route('tour.details', ['slug' => $item->model->slug]) }}">{{ $item->model->name }}</a>
                                                </td>
                                                <td>{{ number_format($item->model->regular_price) }}円</td>
                                                <td>
                                                    <a href=""
                                                        wire:click.prevent="increaseQuantity('{{ $item->rowId }}')">
                                                        <ion-icon name="add-circle-outline"></ion-icon>
                                                    </a>
                                                    <input type="number" name="" value="{{ $item->qty }}"
                                                        id="">
                                                    <a href=""
                                                        wire:click.prevent="decreaseQuantity('{{ $item->rowId }}')">
                                                        <ion-icon name="remove-circle-outline"></ion-icon>
                                                    </a>
                                                </td>
                                                <td>{{ number_format($item->subtotal) }}円</td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                                <table class="table text-center show-mb">
                                    <tbody>
                                        @foreach (Cart::content() as $item)
                                            <tr>
                                                <td colspan="3"><img
                                                        src="{{ asset('images') }}/{{ $item->model->image }}"
                                                        class="img-fluid img-mb" alt=""></td>
                                                <td><a href=""
                                                        wire:click.prevent="destroy('{{ $item->rowId }}')"><i
                                                            class="fas fa-times-circle fix-vitri"></i></td>
                                            </tr>
                                            <tr>
                                                <td colspan="3"><a
                                                        href="{{ route('tour.details', ['slug' => $item->model->slug]) }}">{{ $item->model->name }}</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>{{ $item->model->regular_price }}円</td>
                                                <td>
                                                    <a href=""
                                                        wire:click.prevent="increaseQuantity('{{ $item->rowId }}')">
                                                        <ion-icon name="add-circle-outline"></ion-icon>
                                                    </a>
                                                    <input type="number" name="" value="{{ $item->qty }}"
                                                        id="">
                                                    <a href=""
                                                        wire:click.prevent="decreaseQuantity('{{ $item->rowId }}')">
                                                        <ion-icon name="remove-circle-outline"></ion-icon>
                                                    </a>
                                                </td>
                                                <td>{{ number_format($item->subtotal) }}円</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </form>
                            {{-- @if (!Session::has('coupon'))
                            <div class="magiamgia">
                                <form action="" wire:submit.prevent="applyCoupon">

                                    @if (Session::has('Tin_nhan_thanh_cong'))
                                        <div class="alert alert-success">
                                            {{ Session::get('Tin_nhan_thanh_cong') }}
                                        </div>
                                    @endif
                                    <input class="text-cp" type="text" name="" id="" placeholder="Coupon Code"
                                        wire:model="couponCode">
                                    <button class="btn-coupon" type="submit">APPLY COUPON</button>
                                </form>
                            </div>
                        @endif --}}
                        @else
                            <h1 class="koco_hang">No tour in cart</h1>
                        @endif
                    </div>
                    <div class="col-xl-6 thanh-toan mb-5">
                        <p class="cart-total">
                            Order Summary
                        </p>

                        <form action="" method="">

                            <table class="table">

                                <tr>
                                    <td>Subtotal</td>
                                    <td class="text-right">{{ number_format(Cart::subtotal()) }}円</td>
                                </tr>
                                @if (Session::has('coupon'))
                                    <tr>
                                        <td>割引({{ Session::get('coupon')['code'] }})</td>
                                        <td class="text-right">{{ number_format($discount) }}円</td>
                                    </tr>
                                    <tr>
                                        <td>税( {{ config('cart.tax') }}%)</td>
                                        <td class="text-right">{{ number_format($taxafterdiscount) }}円</td>
                                    </tr>
                                    <tr>
                                        <td>割引の小計</td>
                                        <td class="text-right">{{ number_format($subtotalafterdiscount) }}円</td>
                                    </tr>
                                    <tr>
                                        <td>合計</td>
                                        <td class="text-right">{{ number_format($totalafterdiscount) }}円</td>
                                    </tr>
                                @else
                                    <tr>
                                        <td>Tax</td>
                                        <td class="text-right">{{ number_format(Cart::tax()) }}円</td>
                                    </tr>
                                    <tr>
                                        <td>Total</td>
                                        <td class="text-right">{{ number_format(Cart::total()) }}円</td>
                                    </tr>
                                @endif

                            </table>
                            <a class="btn-checkout" href="#" wire:click.prevent="checkout">Check out</a>
                        </form>
                    </div>
                @else
                    <div class=" col-lg-12 text-center pt-5 pb-5">
                        <h1>No tour in cart</h1>
                        <p>Book Now</p>
                        <a href="/tour" class="btn btn-success">Book Now</a>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
