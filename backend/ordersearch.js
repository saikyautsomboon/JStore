$(document).ready(function() {
    $('.searchbtn').on('click', function() {
        var startDate = $('#startDate').val();
        var endDate = $('#endDate').val();

        $.ajax({
            type: 'POST', // ပို့ မဲ့ Method ၑ
            url: 'order_search.php',
            data: {
                start: startDate, // key and value
                end: endDate
            },
            success: function(response) {
                // order_search ကနေ search လုပ်လိုက်တဲ့ result ကိ ု
                // $.each နဲ့ loop ပတ်မယ်


                var searchResult = JSON.parse(response);
                var ordersearchdiv = '';

                ordersearchdiv += `
                <h3>${startDate}&emsp;To&emsp;${endDate} &emsp;(Order List)</h3>
                <div class="table-responsive">
                
                    <table class="table table-hover table-bordered searchdisplay">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>User Name</th>
                                <th>Status</th>
                                <th>Date</th>
                                <th>Voucher No</th>
                                <th>Total</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                    <tbody>
                `;
                var j = 1;
                $.each(searchResult, function(i, v) {

                    if (v) {
                        var id = v.id;
                        var voucher = v.voucherno;
                        var total = v.total;
                        var status = v.status;
                        var date = v.orderdate;
                        var uid = v.user_id;
                        var uname = v.uname;

                        $('#todayorderlist div.table-responsive').hide();
                        if (status == 'Orders') {
                            var actionbtn = `
                                <a href="order_detail.php?id=${id} & user_id= ${uid} " class="btn btn-primary">
                                    <i class="fas fa-cog"></i>
                                </a>
                                <a href="changeorder_status.php?id= ${id}&status=0" class="btn btn-success">
                                    <i class="fas fa-check"></i>
                                </a>
                                <a href="changeorder_status.php?id= ${id}&status=1" class="btn btn-danger">
                                    <i class="fas fa-times-circle"></i>
                                </a>`;
                        } else {
                            var actionbtn = `
                                    <a href="order_detail.php?id=${id} & user_id= ${uid} " class="btn btn-primary">
                                        <i class="fas fa-cog"></i>
                                    </a>
                                    <a href="changeorder_status.php?id= ${id}&status=1" class="btn btn-danger">
                                        <i class="fas fa-times-circle"></i>
                                    </a>`;
                        }
                        ordersearchdiv += `<tr>
                                                <td> ${j++} </td>
                                                <td> ${uname}</td>
                                                <td> ${status}</td>
                                                <td> ${date}</td>
                                                <td> ${voucher}</td>
                                                <td>${total}</td>
                                                <td>${actionbtn}</td>
                                            </tr>`;
                    }
                });
                ordersearchdiv += `</tbody>
                                    </thead>
                                    </table>
                                    </div>`;
                $('#todayorderlist').html(ordersearchdiv);
            }
        })
    })
})