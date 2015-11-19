@extends('templates.main')


@section('content')	
  
  <section class="section1">
      <div class="contact-heading">
        <h1>About Us</h1>
      </div>
      <div class="sub-nav"></div>
    </section>

	<div id="container">
  @foreach(Cart::contents() as $item)
<table>
  <tr class="p">
    {{-- <td class="image"><img src="{{asset('img/'.$item->photo)}}" /></td> --}}
    <td class="name"><strong>Product:</strong><br>{{$item->name}}</td>
    <td class="price"><strong>Price:</strong><br>${{$item->price}}</td>
    <td class="amount"><strong>Quantity:<br> {{$item->quantity}}</strong></td>
    <td class="amount"><strong>Size:<br> {{$item->size}}</strong></td>
    <td class="pricesubtotal"><strong>Subtotal:<br></strong>${{$item->price * $item->quantity}}</td>
    <td class="remove"><div>&times</div></td>
  </tr>
  <tr>
    <td> </td>
    <td> </td>
    <td> </td>
    <td></td>
    <td class="totalpricesubtotal"></td>
    <td> </td>
  </tr>
  <tr>
  @endforeach
    <td style="border-top:1px solid white" colspan="6"><br />
      With 5% sales tax <span class="taxval"></span> and <span class="shipping">10</span>$ shipping:<br />
      <span class="big">Total: ${{Cart::totalItems()}}<span class="realtotal">0</span></span>
    </td>
  </tr>
</table>
  
  <div id="checkout">Checkout<span> &rarr;</span></div>
<div id="footer">
  <ul>
    <li>Change the amount of stuff and see the subtotal and total change</li>
    <li>Try to change the amount of items to minus amounts or 0</li>
    <li>Delete items and see the totals change</li>
  </ul>
  {{-- <hr />
  This is my first entry for this week's <a href="http://codepen.io/tag/rodeo-007">CodePen Pattern Rodeo</a>.<br />
  If you like this pen, please heart it :) --}}
</div>
</div>


@endsection	