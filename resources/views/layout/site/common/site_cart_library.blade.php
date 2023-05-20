<!-- <script src="{{asset('js/cart.js')}}"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="{{asset('site/assets/js/vendor/jquery-3.6.0.min.js')}}"></script>
<script>
    class Cart {
        constructor(cartName) {
            this.cartName = cartName;
        }

        // ==========Methods============

        getCart() {
            let cart = localStorage.getItem(this.cartName);
            cart = JSON.parse(cart);
            return cart;
        } //end getCart

        save(item) {
            let cart = localStorage.getItem(this.cartName);

            if (cart != null) {
                if (!this.itemExists(item.item_id)) {
                    cart = JSON.parse(cart);
                    cart.push(item);
                    localStorage.setItem(this.cartName, JSON.stringify(cart));
                } else {
                    this.QtyUp(item.item_id, item.qty);
                }

            } else {
                cart = [];
                cart.push(item);
                localStorage.setItem(this.cartName, JSON.stringify(cart));
            }
        } //end save


        QtyUp(id, qty) {
            //console.log(id)
            let cart = localStorage.getItem(this.cartName);
            if (cart != null) {
                cart = JSON.parse(cart);
                let tmp = [];


                cart.forEach(function(item, i) {

                    if (id == item.item_id) {
                        let discount = item.discount != null ? item.discount : 0

                        item.qty += qty;

                        if (item.qty < 1) item.qty = 1;

                        discount = item.discount * item.qty;
                        item.total_discount = discount;
                        item.subtotal = (item.qty * item.price) - (discount);

                        // console.log(item);
                        tmp.push(item);
                    } else {

                        tmp.push(item);
                    }

                });


                localStorage.setItem(this.cartName, JSON.stringify(tmp));
            }
        } //end QtyUp


        itemExists(id) {
            let found = 0;
            let cart = localStorage.getItem(this.cartName);
            if (cart != null) {
                cart = JSON.parse(cart);
                cart.forEach(function(item, i) {
                    if (id == item.item_id) {
                        found = 1;
                    }

                });


            } else {
                found = 0;
            }

            return found;
        } //end itemExists

        delItem(id) {
            let cart = localStorage.getItem(this.cartName);
            if (cart != null) {
                cart = JSON.parse(cart);
                let tmp = [];



                cart.forEach(function(item, i) {
                    if (id != item.item_id) {
                        tmp.push(item);
                    }
                });


                localStorage.setItem(this.cartName, JSON.stringify(tmp));
            }
        } //end delItem


        clearCart() {
            localStorage.removeItem(this.cartName);
            localStorage.setItem(this.cartName, JSON.stringify([]));

        } //end clearCart





    } //end class

    $(function() {


        let cart = new Cart('product');
        cart_load();

        $(".laravel_cart").on("click", function() {



            let id = $(this).data("id");
            // alert(id)

            $.ajax({
                type: 'get',
                url: `http://hafiz.intels.co/projects/mango-market/public/api/products/${id}`,

                success: function(res) {

                    let data = JSON.parse(res);

                    let item = {
                        item_id: id,
                        qty: 1,
                        price: data.offer_price,
                        name: data.name,
                        discount: 0,
                        photo: data.photo,
                        shipping: data.shipping
                    };

                    cart.save(item);


                    cart_load();


                    toastr.success('Added to cart');

                }
            });

        })

        $("body").on("click", ".delete", function() {

            let id = $(this).parent().data("id");


            cart.delItem(id);
            //$(this).parent().remove();
            cart_load();
        });
        $("body").on("click",".clear-cart",function(){
            cart.clearCart();
            cart_load();
              
        });
    })

    //-------Helper Functions-----------


    function cart_load() {
        $("#cart_qty").html(get_cart_count());
        $("#cart-count").html(get_cart_count())
        $("#minicart-product-list").html(get_html_cart());
        $("#cart-total").html(getCartTotal() + " BDT");
       
    }


    function get_cart_count() {

        var cart = new Cart('product');
        if (cart.getCart() != null) {
            return cart.getCart().length;
        }
    }

    function get_html_cart() {
        var cart = new Cart('product');
        let products = cart.getCart();
        let html = "";
        if (products != null) {

            let total = 0;

            products.forEach(function(v) {
                html += `<li class="minicart-product" data-id=${v.item_id}>`;
                html += `<a class='product-item_img'>`;
                html += `<img class='img-fluid' src="{{asset('img/${v.photo}')}}" width='100px' alt="Product Image">`;
                html += "</a>";
                html += "<div class='product-item_content'>";
                html += `<a class='product-item_title' href='product-details.html'>${v.name}</a>`
                html += `<label class="product-item_quantity"> <span>${v.price}</span>x<span>${v.qty}</span> = <span>${v.qty*v.price} </span></label>`

                html += `</div>`;
                html += ` <a class="product-item_remove delete " href="javascript:void(0)"><i class="icon-rt-close-outline"></i></a>`
                html += "</li>";

                // totol+=parseFloat(v.qty)*parseFloat(v.price);

            });

        } //end loop

        //$("#cart-total").html(total);

        return html;

    }

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
</script>