<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="{{asset('site/assets/js/vendor/jquery-3.6.0.min.js')}}"></script>
<script>
  $(function() {
    let cart = new Cart('product');
    auto_get();
  });



  function auto_get() {
    $("tbody").html(get_item());

    $(".sub_total").html(getCartTotal());
    $(".total").html(getTotal());

  }



  function get_item() {

    let cart = new Cart('product');
    let products = cart.getCart();
    let html = "";
    if (products != null) {

      let total = 0;

      products.forEach(function(product) {


        html += `  <tr class="cart_item">`;
        html += `   <td class="product-name">`
        html += `   ${product.name}<strong class="product-quantity"> × ${product.qty}</strong>`
        html += `   </td>`
        html += `   <td class="product-total">`
        html += `       <span class="amount">${product.qty*product.price} BDT</span>`
        html += `   </td>`
        html += `</tr>`
      });
      return html;
    }
  };

  function getCartTotal() {
    var cart = new Cart('product');
    let products = cart.getCart();
    let total = 0;
    if (products != null) {

      products.forEach(function(v) {
        total += parseFloat(v.qty) * parseFloat(v.price);
      });

    }
    return total;
  }

  function getTotal() {

    var cart = new Cart('product');

    let products = cart.getCart();
    let total = 0;
    let cart_total = 0;
    let shipping = 0;
    if (products != null) {

      products.forEach(function(v) {
        cart_total += parseFloat(v.qty) * parseFloat(v.price);
      });
      products.forEach(function(v) {
        // console.log(v.shipping);
        shipping += parseFloat(v.qty) * parseFloat(v.shipping);
      });
      $(".shipping").html(shipping);
      total = cart_total + shipping;
    }
    return total;
  }
</script>

<script>
  $(function() {
    cart = new Cart("product");
    $("#btn-place-order").on("click", function() {

      var token = $("input[name='_token']").val();
      var method = $("input[name='_method']").val();

      var customer_id = <?php echo intval(session("sess_custmer_id")) ?>;
      //console.log(customer_id)
      var name = $("#txtName").val();
      var mobile = $("#txtDefaultMobile").val();
      var email = $("#txtDefaultEmail").val();
      var country = $("#countryDefault").find('option:selected').text();
      var city = $("#txtDefaultCity").val();
      var street_address = $("#txtDefaultStreetAddress").val();
      var apartment = $("#txtDefaultApartment").val();
      var postcode = $("#txtDefaultPostcode").val();
      var shipping_address = `
                            ${name}\n
                            ${apartment}\n
                            ${street_address}\n
                            City:${city},Postcode:${postcode}\n
                            Country:${country}\n
                            Mobile:${mobile}
                            `;
      let discount = 0;
      let vat = 0;
      let products = JSON.parse(localStorage.getItem("cart"));


      let order_date =  t65;
      let delivery_date = null;
      let order_total=  $(".total").val();

      // console.log(shipping_address);

      //var total=$("total").text();
      // console.log(total);

      $.ajax({
        url: "{{route('orders.store')}}",
        type: 'POST',
        data: {
          _token: token,
          _method: method,
          "cmbCustomer": customer_id,
          "txtOrderDate":order_date ,
          "txtDueDate":delivery_date,
          "txtShippingAddress": shipping_address,
          "txtDiscount": discount,
          "txtVat": vat,
          "txtTotal": order_total,
          "txtProducts": products
        },
        success: function(res) {
          console.log(res);
          clearCart();
          $("#items").html("");
        }
      });


    });
  });
</script>