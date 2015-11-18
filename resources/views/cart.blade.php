@extends('templates.main')


@section('content')	
  
  <section class="section1">
      <div class="contact-heading">
        <h1>About Us</h1>
      </div>
      <div class="sub-nav"></div>
    </section>

	<div id="container">
<table>
  <tr class="p">
    <td class="image"><img src="http://upload.wikimedia.org/wikipedia/en/e/e9/Pok%C3%A9mon_box_art_-_Red_Version.jpg" /></td>
    <td class="name">aaaaaaa</td>
    <td class="price"></td>
    <td class="amount"><input type="number" value="2" min="0" /></td>
    <td class="pricesubtotal"></td>
    <td class="remove"><div>&times</div></td>
  </tr>
  <tr>
    <td> </td>
    <td> </td>
    <td> </td>
    <td>Subtotal:$34</td>
    <td class="totalpricesubtotal"></td>
    <td> </td>
  </tr>
  <tr>
    {{-- <td style="border-top:1px solid white" colspan="6"><br />
      With 5% sales tax <span class="taxval"></span> and <span class="shipping">10</span>$ shipping:<br />
      <span class="big">Total: $<span class="realtotal">0</span></span>
    </td> --}}
  </tr>
</table>
  <div id="checkout">Checkout<span> &rarr;</span></div>
<!-- <div id="footer">
  <ul>
    <li>Change the amount of stuff and see the subtotal and total change</li>
    <li>Try to change the amount of items to minus amounts or 0</li>
    <li>Delete items and see the totals change</li>
  </ul>
  <hr />
  This is my first entry for this week's <a href="http://codepen.io/tag/rodeo-007">CodePen Pattern Rodeo</a>.<br />
  If you like this pen, please heart it :)
</div> -->
</div>


@endsection	