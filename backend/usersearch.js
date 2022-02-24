$(document).ready(function() {
    $('.searchuser').click(function() {
        var userSearch = $('#usersearch').val();

        $.ajax({
            type: 'POST',
            url: 'userSearch.php',
            data: {
                search: userSearch,
            },
            success: function(response) {
                var searchResult = JSON.parse(response);
                var userSearch = '';

                userSearch += `
                <div class="table-responsive">
                <table class="table table-hover table-bordered" ">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Phone No</th>
                            <th>Photo</th>
                            <th>Address</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                `;
                var j = 1;
                $.each(searchResult, function(i, v) {
                    if (v) {
                        var id = v.id;
                        var name = v.name;
                        var phone = v.phone;
                        var photo = v.photo;
                        var address = v.address;
                        var email = v.email;

                        $('#userTabel div.table-responsive').hide();
                        userSearch += `
                        <tr>
                        <td>${j++}</td>

                        <td>${name}</td>
                        <td>${phone}</td>
                        <td class="image col-md-3">
                            <img src="../${photo}" class="img-fluid">
                        </td>
                        <td> ${address}</td>
                        <td> ${email}</td>
                        <td>
                            <a href="user_edit.php?id= ${id}" class="btn btn-primary">
                                <i class="fas fa-cog"></i>
                            </a>
                            <!-- a tag is get method  -->
                            <form method="POST" action="user_delete.php" onsubmit="return confirm('Are you sure you want to delete!')" class="d-inline-block">
                                <input type="hidden" name="id" value=" ${id}">
                                <button type="" class="btn btn-danger">
                                    <i class="fas fa-times-circle"></i>
                                </button>
                            </form>

                        </td>
                    </tr>
                        `;
                    }
                });
                userSearch += `</tbody>
                                </table>
                                </div>`;
                $('#userTabel').html(userSearch);
            }
        })
    })
})