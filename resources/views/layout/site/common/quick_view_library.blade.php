<script src="{{asset('js/cart.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="{{asset('site/assets/js/vendor/jquery-3.6.0.min.js')}}"></script>

<script>
    $(function() {
    
        let cart = new Cart('product');

        $(".quick_view").on("click", function() {



let id = $(this).data("id");
// alert(id)

$.ajax({
    type: 'get',
    url: `http://localhost/laravel/mango-market/public/api/products/${id}`,

    success: function(res) {

        let data = JSON.parse(res);

        let item = {
            item_id: id,
            item_name: name,
            qty: 1,
            offer_price: data.offer_price,
            regular_price: data.regular_price,
            name: data.name,
            discount: 0,
            photo: data.photo,
            shipping: data.shipping
        };
        $(".old-price").html(item.regular_price)
        $(".new-price").html(item.offer_price)
        $(".img-poppu").html("<img src='asset{{asset('img/${item.photo')}}' >");


    }
 
});


})


})

</script>
