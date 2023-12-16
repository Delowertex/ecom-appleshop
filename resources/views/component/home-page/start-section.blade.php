<!-- END MAIN CONTENT -->
<div class="main_content">

    <!-- START SECTION BANNER -->
    <div class="section pb_20">
        <div class="container">
            <div class="row" id="collectionItem">
                {{-- <div class="col-md-6">
                    <div class="single_banner">
                        <img src="{{ asset('images/shop_banner_img1.jpg') }}" alt="shop_banner_img1"/>
                        <div class="single_banner_info">
                            <h5 class="single_bn_title1">Super Sale</h5>
                            <h3 class="single_bn_title">New Collection</h3>
                            <a href="shop-left-sidebar.html" class="single_bn_link">Shop Now</a>
                        </div>
                    </div>
                </div> --}}
                {{-- <div class="col-md-6">
                    <div class="single_banner">
                        <img src="{{ asset('images/shop_banner_img2.jpg') }}" alt="shop_banner_img2"/>
                        <div class="single_banner_info">
                            <h3 class="single_bn_title">New Season</h3>
                            <h4 class="single_bn_title1">Sale 40% Off</h4>
                            <a href="shop-left-sidebar.html" class="single_bn_link">Shop Now</a>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
    <!-- END SECTION BANNER -->


    <script>
        CollectionSession();
        async function CollectionSession() {
            let res = await axios.get("/new-collection");
            $('#collectionItem').empty();
            res.data['data'].forEach((item, i)=>{
                let itemCollection = `<div class="col-md-6">
                    <div class="single_banner">
                        <img src="${item['image']}" alt="shop_banner_img1"/>
                        <div class="single_banner_info">
                            <h5 class="single_bn_title1">${item['title']}</h5>
                            <h3 class="single_bn_title">${item['subtitle']}</h3>
                            <a href="/details?id=${item['id']}" class="single_bn_link">Shop Now</a>
                        </div>
                    </div>
                </div>`
                $('#collectionItem').append(itemCollection);
            })
        }
    </script>

