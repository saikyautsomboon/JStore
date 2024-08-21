$(document).ready(function() {
    notic();
    showData();

    $('.addtocart').click(function() {
        var id = $(this).data('id');
        var name = $(this).data('name');
        var price = parseInt($(this).data('price'));
        var discount = $(this).data('discount');
        var photo = $(this).data('photo');

        var items = {
            id: id,
            name: name,
            price: price,
            discount: discount,
            photo: photo,
            qty: 1,
        }

        var itemshop = localStorage.getItem('itemshop');
        var myitem;

        if (itemshop == null) {
            myitem = [];
        } else {
            myitem = JSON.parse(itemshop);
        }
        var status = false;

        myitem.forEach(function(v, i) {
            if (v.id == id) {
                v.qty++;
                status = true;
            }
        });
        if (status == false) {
            myitem.push(items);
        }

        var itemstring = JSON.stringify(myitem);
        localStorage.setItem('itemshop', itemstring);
        notic();
    })

    function notic() {
        var itemlist = localStorage.getItem('itemshop');
        var totalqty = 0;
        var total = 0;
        var subtotal;
        var itemtable = '';


        if (itemlist) {
            var itemarray = JSON.parse(itemlist);

            itemarray.forEach(function(v, i) {
                subtotal = v.qty * v.price;
                total += subtotal;
                totalqty += v.qty;

                if (i == 0) {
                    itemtable += `
                            <li>
                                    <div class="cart-item product-summary">
                                        <div class="row">
                                            <div class="col-xs-4">
                                                <div class="image"> <a href="shopping-cart.php"><img src="backend/${v.photo}" alt=""></a> </div>
                                            </div>
                                            <div class="col-xs-7">
                                                <h3 class="name"><a href="shopping-cart.php">${v.name}</a></h3>
                                                <div class="price">${v.price}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.cart-item -->
                                    <div class="clearfix"></div>
                                    <hr>
                                    <div class="clearfix cart-total">
                                        <div class="pull-right"> <span class="text">Sub Total :</span><span class='price'>${subtotal}</span> </div>
                                        <div class="clearfix"></div>
                                        <a href="shopping-cart.php" class="btn btn-upper btn-primary btn-block m-t-20">Checkout</a>
                                    </div>
                                    <!-- /.cart-total-->

                                </li>
                            `;
                }
            });

            $('.count').html(totalqty);
            $('.totalprice').html(total);
            $('#itemdropdown').html(itemtable);

            var itemtable = itemarray[0];

        } else {

            $('.count').html(totalqty);
            $('.totalprice').html(total);
        }

    }



    function showData() {

        var itemlist = localStorage.getItem('itemshop');

        if (itemlist) {
            var myitem = JSON.parse(itemlist);
            var itemtable = '';
            var itemamount = '';
            var j = 1;
            var subtotal;
            var total = 0;


            myitem.forEach(function(v, i) {

                subtotal = (v.qty * v.price) - v.discount;
                total += subtotal;
                itemtable += `
                <tr>
                    <td>${j++}</td>
                    <td class="romove-item">
                        <a href="#" title="cancel" class="btn btn-danger remove" style="color: white" data-id=${i}>
                            <i class="fa fa-trash-o"></i>
                        </a>
                    </td>
                    <td class="cart-image">
                        <a class="entry-thumbnail" href="detail.html">
                            <img src='backend/${v.photo}' alt="">
                        </a>
                    </td>
                    <td class="cart-product-name-info">
                        <h4 class='cart-product-description'><a href="detail.html">${v.name}</a></h4>
                        <div class="cart-product-info">
                            <span class="product-color">COLOR:<span>Blue</span></span>
                        </div>
                    </td>
                    
                    <td class="cart-product-quantity">
                        <div class="quant-input">
                            <div class="arrows">
                                <div class="arrow plus gradient" data-id='${i}'><span class="ir"><i class="icon fa fa-sort-asc"></i></span></div>
                                <div class="arrow minus gradient" data-id='${i}'><span class="ir"><i class="icon fa fa-sort-desc"></i></span></div>
                            </div>
                            <input type="text" value="${v.qty}">
                        </div>
                    </td>
                    <td class="cart-product-sub-total"><span class="cart-sub-total-price">${v.price}</span></td>
                    <td class="cart-product-sub-total"><span class="cart-sub-total-price">${v.discount}</span></td>
                    <td class="cart-product-grand-total"><span class="cart-grand-total-price">${subtotal}</span></td>
                </tr>
                
                `;

            });
            itemamount += `
                <tr>
                                <th>
                                    <div class="cart-grand-total">
                                            Grand Total<span class="inner-left-md">${total} Ks</span>
                                        
                                    </div>
                                </th>
                            </tr>`;
            $('#itemtable').html(itemtable);

            $('#itemamount').html(itemamount);
        }
    }
    $('#itemtable').on('click', '.remove', function() {
        var itemlist = localStorage.getItem('itemshop')
        var id = $(this).data('id');

        if (itemlist) {
            var itemarray = JSON.parse(itemlist);
            itemarray.splice(id, 1);

            var itemstring = JSON.stringify(itemarray);
            localStorage.setItem('itemshop', itemstring);

            showData();
        }
    });
    $('#itemtable').on('click', '.plus', function() {
        var itemlist = localStorage.getItem('itemshop');
        var id = $(this).data('id');

        if (itemlist) {
            var itemarray = JSON.parse(itemlist);

            itemarray.forEach(function(v, i) {
                if (i == id) {
                    v.qty++;
                }
            });
            var itemstring = JSON.stringify(itemarray);
            localStorage.setItem('itemshop', itemstring);
            showData();
        }

    });
    $('#itemtable').on('click', '.minus', function() {
        var itemlist = localStorage.getItem('itemshop');
        var id = $(this).data('id');

        if (itemlist) {
            var itemarray = JSON.parse(itemlist);

            itemarray.forEach(function(v, i) {
                 if (i == id) {
                    if (v.qty <= 1) {
                        alert('Are you Show to Delete this item?');
                        v.qty--;
                        
                    } else {
                        v.qty--;
                    }
                    if (v.qty == 0) {
                        itemarray.splice(id, 1);
                    }
                }
            });
            var itemstring = JSON.stringify(itemarray);
            localStorage.setItem('itemshop', itemstring);
            showData();
        }
    });

    $("#checkoutbtn").on('click', function() {
        var itemshop = localStorage.getItem('itemshop');
        var note = $('#notes').val();

        var total = 0;
        var itemarray = JSON.parse(itemshop);
        itemarray.forEach(function(v, i) {
            total += (v.qty * v.price) - v.discount;
        });
        // console.log(total, itemarray);
        // ajax

        $.post('storeorder.php', {
            // key:value 
            items: itemarray,
            note: note,
            total: total,
        }, function(response) {
            localStorage.clear();
            location.href = "ordersuccess.php";
        });
    });
})
