

<style>
    .style{
        height: 70px;
    }
</style>
<div  class="header-middle-area in align-items-center style justify-content-center "  >
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-3">
                <div class="logo">
                    <a href="{{url('/')}}"><img src="{{asset('img/mango-market.png')}}" width="275" height="70"  alt=""></a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="search-box">
                    <form class="search-field" >
                        <input type="text" class="search-field"  name="table_search" id="search" placeholder="Search product...">
                        <button type="submit" onkeyup="search()" class="search-btn"><i class="icon-rt-loupe"></i></button>
                    </form>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="header-middle-right-area">
                    <div class="my-account">
                        <a href="#" class="header-action-item" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-rt-user"></i></a>
                    </div>
                    <div class="wishlist">
                        <a href="{{url('wishlist')}}" class="header-action-item">
                            <i class="icon-rt-heart2"></i>
                            <span class="wishlist-count">2</span>
                        </a>
                    </div>
                    <div class="cart">
                        <a href="#miniCart" class="header-action-item toolbar-btn">
                            <i class="icon-rt-basket-outline"></i>
                            <span class="wishlist-count" id="cart_qty">0</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="{{asset('site/assets/js/vendor/jquery-3.6.0.min.js')}}"></script>

<script>
	function search() {



		var search = document.getElementById('search').value.toLowerCase()

		var table = document.getElementById('table')


		var tr = table.getElementsByTagName('tr')


		for (i = 0; i < tr.length; i++) {

			var td = tr[i].getElementsByTagName('td')



			for (j = 0; j < td.length; j++) {
				var content = td[j].textContent.toLowerCase()

				if (content.indexOf(search) > -1) {
					tr[i].style.display = "";
					// tr[i].style.color = "green"

					break;


				} else {
					tr[i].style.display = "none";

				}

			}

		}



	}
</script>