@extends('templates.main')


@section('content')	
  
  <section class="section1">
      <div class="contact-heading">
      </div>
      <div class="sub-nav"></div>
      <!-- <div id="map"></div> -->
    </section>

    
    <div class="contact-container">
        <div class="contact-details">
          <h1>Shipping <i class="fa fa-truck"></i></h1>
          <p>Because we are local, we can offer fast delivery of three to four weeks for these made to order garments (or just a couple of days for the limited number of stocked ones we have).</p><br><br><br>
            
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
            <div id="footer"></div> 
          </div>
        </div>
    </div>
<div style="height:15em;"></div>

@endsection	