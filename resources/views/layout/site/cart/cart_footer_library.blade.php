

<!-- Activation JS -->
<script src="assets/js/active.js"></script>

@include("layout.site.common.site_cart_library")
<script>
    $(function() {
        let cart = new Cart('product');
        cart_reload()
        $("body").on("click", ".remove", function() {

            let item_id = $(this).data("id");
            cart.delItem(item_id);
            //$(this).parent().remove();
            cart_reload();
        });
        $("body").on("click", ".delete", function() {

            let id = $(this).data("id");


            cart.delItem(id);
            //$(this).parent().remove();
            cart_reload();
        });
        $("body").on("click", ".clear-cart", function() {
            cart.clearCart();
            cart_reload();

        });
        $("body").on("click", ".btn-add", function() {

            let id = $(this).data("id");
                // alert(id);

            cart.QtyUp(id, 1);
            //$(this).parent().remove();
            cart_reload();
        });
        $("body").on("click", ".btn-sub", function() {

            let id = $(this).data("id");
            // alert(id);

            cart.QtyUp(id, -1);
            //$(this).parent().remove();
            cart_reload();
        });



    });

    function cart_reload() {
        $("#cart_qty").html(get_cart_count())
        $("#cart-count").html(get_cart_count())
        $("tbody").html(get_cart_product());
        $("#minicart-product-list").html(get_html_cart());
        $("#cart-total").html(getCartTotal() + " BDT");
        $("#subtotal").html(getCartTotal() + " BDT");

    }

    function get_cart_count() {

        var cart = new Cart('product');
        if (cart.getCart() != null) {
            return cart.getCart().length;
        }
    }

    function get_cart_product() {
        cart = new Cart("product");
        let products = cart.getCart();
        let html = "";

        products.forEach(function(product) {
            html += "<tr>";
            html += `<td <a class="product-item_remove" href="javascript:void(0)"><i  data-id="${product.item_id}" class="icon-rt-close-outline remove"></i></a></td>`;
            html += `<td class="plantmore-product-thumbnail"><a href="#"><img src="{{asset('img/${product.photo}')}}" width='120px' alt=""></a></td>`;
            html += ` <td class="plantmore-product-name"><a href="#">${product.name}</a></td>`;
            html += ` <td class="plantmore-product-price"><span class="amount">${product.price}</span></td>`;
            html += `<td class="plantmore-product-quantity">`;
            html += ` <form action="#" class="cart-quantity d-flex">`;
            html += `<div class="quantity">`;
            html += "<div class='cart-plus-minus justify-content-center'>";
            html += `
                <div class="inc qtybutton btn-sub" data-id="${product.item_id}"><i class="fa fa-angle-up btn-sub">-</i></div>
                <input class="cart-plus-minus-box" value="${product.qty}" type="text">
                <div class="dec qtybutton  btn-add" data-id="${product.item_id}"><i class="fa fa-angle-down btn-add" >+</i></div>
                           `;

            html += " </div>";
            html += "</div>";
            html += " </form>";
            html += " </td>";
            html += ` <td class="product-subtotal"><span class="amount">${product.qty*product.price} BDT</span></td>`;
            html += "</tr>";
        });
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