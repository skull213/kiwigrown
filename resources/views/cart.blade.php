@extends('templates.main')


@section('content')	
  
  <section class="section1">
      <div class="contact-heading">
        <h1>Contact Us</h1>
      </div>
      <div class="sub-nav"></div>
      <!-- <div id="map"></div> -->
    </section>

    
    <div class="contact-container">
        <div class="contact-details">
          <h1>Shipping <i class="fa fa-truck"></i></h1>
          <p>possimus laboriosam. Porro et sapiente odit excepturi dolorem voluptate, voluptatum aliquid sint odio accusamus sit nostrum impedit quae, quia ullam?</p><br><br><br>
          <ul>
            <li><i>Adrdress: </i><address>795 South Park Avenue, Door 6 Wonderland, CA 94107, Australia</address></li>
            <li><i>Phone: </i><em>+440 875369208</em></li><br>
            <li><i>Email: </i><em>nfo@sitename.com</em></li><br>
            <li><i>Fax: </i><em>nfo@sitename.com</em></li><br>
          </ul>
            
        </div>
        <div class="form">
        <h1>Cart  <i class="fa fa-shopping-cart "></i></h1>
        <div id="container">
<table>
  @foreach(Cart::contents() as $item)
  <tr class="p">
    <td class="image"><img src="{{asset('img/'.$item->photo)}}" /></td>
    <td class="name"><strong>item</strong><br>{{$item->name}}</td>
    <td class="price"><strong>price</strong><br>${{$item->price}}</td>
    <td class="amount">quantity<br>{{$item->quantity}}</td>
     <td class="amount">size<br>{{$item->size}}</td>
    <td class="pricesubtotal"></td>
    <td class="remove"><div><a href="{{url('removeItem/'.$item->identifier)}}"><i class="fa fa-times"></i></a></div></td>
  </tr>
  
  <tr>
    <td> </td>
    <td> </td>
    <td> </td>
    <td><strong>Subtotal:</strong>${{$item->price * $item->quantity}}</td>
    <td class="totalpricesubtotal"></td>
    <td> </td>
  </tr>
  @endforeach
  
  <tr>
    <td style="border-top:1px solid white" colspan="6"><br />
      {{-- With 5% sales tax <span class="taxval"></span> and <span class="shipping">10</span>$ shipping:<br /> --}}
      <span class="big">Total: <span class="realtotal">${{Cart::total()}}</span></span>
    </td>
  </tr>
</table>
  <div id="checkout"><a href="{{url('orderForm')}}" class="pure-button pure-button-primary">Make Order</a></div>
<div id="footer">
  <ul>
    <li>Change the amount of stuff and see the subtotal and total change</li>
    <li>Try to change the amount of items to minus amounts or 0</li>
    <li>Delete items and see the totals change</li>
  </ul>
</div>
</div>
      </div>
    </div>


@endsection	