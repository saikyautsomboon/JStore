$(document).ready(function() {
    $('.searchitems').on('click', function() {

        var itemsearch = $('#itemsearch').val();

        $.ajax({
            type: 'POST',
            url: 'searchitem.php',
            data: {
                search: itemsearch,
            },
            success: function(response) {

                var searchResult = JSON.parse(response);
                var itemSearch = '';
                console.log(searchResult);

                itemSearch += `
                            <div id='showitme'>
                                <div class="row">
                                    <div class="clearfix filters-container m-t-10">
                                        <div class="row">
                                            <div class="col col-sm-6 col-md-3 col-lg-3 col-xs-6">
                                                <div class="filter-tabs">
                                                    <h1>Search Items</h1>
                                                </div>

                                            </div>

                                        </div>

                                    </div>
                                    <div class="search-result-container ">
                                        <div id="myTabContent" class="tab-content category-list">
                                            <div class="tab-pane active " id="grid-container">
                                                <div class="category-product">
                                                    <div class="row">
                                            
                                    `;


                $.each(searchResult, function(i, v) {


                    if (v) {
                        var id = v.id;
                        var name = v.name;
                        var photo = v.photo;
                        var price = v.price;
                        var discount = v.discount;
                        var description = v.description;
                        var brandid = v.brand_id;
                        var subcategoryid = v.subcategory_id;
                        var brandname = v.bname;
                        var subcategoryname = v.sname;
                        var categoryid = v.cid;
                        var categoryname = v.cname;



                        if (discount.length > 0) {
                            itemSearch += `
                                                    <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                                                        <div class="item">
                                                            <div class="products">
                                                                <div class="product">
                                                                    <div class="product-image">
                                                                        <div class="image">
                                                                            <a href="product-detail.php?id=${id}">
                                                                                <img src="backend/${photo}" alt="">

                                                                            </a>
                                                                        </div>

                                                                    </div>
                                                                    <div class="product-info text-left">
                                                                        <h3 class="name"><a href="product-detail.php?id=${id}">${name}</a></h3>
                                                                        <div class="rating rateit-small"></div>
                                                                        <div class="description"></div>
                                                                        <div class="product-price">
                                                                                <span class="price">
                                                                                Prices : 
                                                                                    ${price} ks
                                                                                </span><br>
                                                                                <span class="price-before-discount">
                                                                                Discount : 
                                                                                    ${discount} ks
                                                                                </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="cart clearfix animate-effect">
                                                                        <div class="action">
                                                                            <ul class="list-unstyled">
                                                                                <li class="add-cart-button btn-group">
                                                                                    <button class="btn btn-primary icon addtocart" data-toggle="dropdown" type="button" title='Add to Cart' data-id='${id}' data-name='${name}' data-price=' ${price}' data-discount=' ${discount}' data-photo='${photo}'>
                                                                                        <i class="fa fa-shopping-cart"></i> </button>
                                                                                    <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                                                                </li>
                                                                            </ul>
                                                                        </div>

                                                                    </div>

                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div>`;
                        } else {
                            itemSearch += `

                                                    <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                                                        <div class="item">
                                                            <div class="products">
                                                                <div class="product">
                                                                    <div class="product-image">
                                                                        <div class="image">
                                                                            <a href="product-detail.php?id=${id}">
                                                                                <img src="backend/${photo}" alt="">

                                                                            </a>
                                                                        </div>

                                                                    </div>
                                                                    <div class="product-info text-left">
                                                                        <h3 class="name"><a href="product-detail.php?id=${id}">${name}</a></h3>
                                                                        <div class="rating rateit-small"></div>
                                                                        <div class="description"></div>
                                                                        <div class="product-price">
                                                                                <span class="price">
                                                                                    Prices : ${price} ks
                                                                                </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="cart clearfix animate-effect">
                                                                        <div class="action">
                                                                            <ul class="list-unstyled">
                                                                                <li class="add-cart-button btn-group">
                                                                                    <button class="btn btn-primary icon addtocart" data-toggle="dropdown" type="button" title='Add to Cart' data-id='${id}' data-name='${name}' data-price=' ${price}' data-discount=' ${discount}' data-photo='${photo}'>
                                                                                        <i class="fa fa-shopping-cart"></i> </button>
                                                                                    <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                                                                </li>
                                                                            </ul>
                                                                        </div>

                                                                    </div>

                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div>`;
                        }
                    }
                });
                itemSearch += `</div>
                                </div>
                                </div>   
                                </div>
                                </div>
                                </div>
                                </div>`;

                $('#showitme div.row').html(itemSearch);
            }
        })
    })
})