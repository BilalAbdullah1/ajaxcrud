<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <title>Category</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <style>
        body {
            color: #566787;
            background: #f5f5f5;
            font-family: 'Varela Round', sans-serif;
            font-size: 13px;
        }

        .table-responsive {
            margin: 30px 0;
        }

        .table-wrapper {
            background: #fff;
            padding: 20px 25px;
            border-radius: 3px;
            min-width: 1000px;
            box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
        }

        .table-title {
            padding-bottom: 15px;
            background: #435d7d;
            color: #fff;
            padding: 16px 30px;
            min-width: 100%;
            margin: -20px -25px 10px;
            border-radius: 3px 3px 0 0;
        }

        .table-title h2 {
            margin: 5px 0 0;
            font-size: 24px;
        }

        .table-title .btn-group {
            float: right;
        }

        .table-title .btn {
            color: #fff;
            float: right;
            font-size: 13px;
            border: none;
            min-width: 50px;
            border-radius: 2px;
            border: none;
            outline: none !important;
            margin-left: 10px;
        }

        .table-title .btn i {
            float: left;
            font-size: 21px;
            margin-right: 5px;
        }

        .table-title .btn span {
            float: left;
            margin-top: 2px;
        }

        table.table tr th,
        table.table tr td {
            border-color: #e9e9e9;
            padding: 12px 15px;
            vertical-align: middle;
        }

        table.table tr th:first-child {
            width: 60px;
        }

        table.table tr th:last-child {
            width: 100px;
        }

        table.table-striped tbody tr:nth-of-type(odd) {
            background-color: #fcfcfc;
        }

        table.table-striped.table-hover tbody tr:hover {
            background: #f5f5f5;
        }

        table.table th i {
            font-size: 13px;
            margin: 0 5px;
            cursor: pointer;
        }

        table.table td:last-child i {
            opacity: 0.9;
            font-size: 22px;
            margin: 0 5px;
        }

        table.table td a {
            font-weight: bold;
            color: #566787;
            display: inline-block;
            text-decoration: none;
            outline: none !important;
        }

        table.table td a:hover {
            color: #2196F3;
        }

        table.table td a.edit {
            color: #FFC107;
        }

        table.table td a.delete {
            color: #F44336;
        }

        table.table td i {
            font-size: 19px;
        }

        table.table .avatar {
            border-radius: 50%;
            vertical-align: middle;
            margin-right: 10px;
        }

        /* Modal styles */
        .modal .modal-dialog {
            max-width: 400px;
        }

        .modal .modal-header,
        .modal .modal-body,
        .modal .modal-footer {
            padding: 20px 30px;
        }

        .modal .modal-content {
            border-radius: 3px;
            font-size: 14px;
        }

        .modal .modal-footer {
            background: #ecf0f1;
            border-radius: 0 0 3px 3px;
        }

        .modal .modal-title {
            display: inline-block;
        }

        .modal .form-control {
            border-radius: 2px;
            box-shadow: none;
            border-color: #dddddd;
        }

        .modal textarea.form-control {
            resize: vertical;
        }

        .modal .btn {
            border-radius: 2px;
            min-width: 100px;
        }

        .modal form label {
            font-weight: normal;
        }

        .loading {
            color: black;
            font: 300 2em/100% Impact;
            text-align: center;
        }

        /* loading dots */

        .loading:after {
            content: ' .';
            animation: dots 1s steps(5, end) infinite;
        }

        @keyframes dots {

            0%,
            20% {
                color: rgba(0, 0, 0, 0);
                text-shadow:
                    .25em 0 0 rgba(0, 0, 0, 0),
                    .5em 0 0 rgba(0, 0, 0, 0);
            }

            40% {
                color: black;
                text-shadow:
                    .25em 0 0 rgba(0, 0, 0, 0),
                    .5em 0 0 rgba(0, 0, 0, 0);
            }

            60% {
                text-shadow:
                    .25em 0 0 black,
                    .5em 0 0 rgba(0, 0, 0, 0);
            }

            80%,
            100% {
                text-shadow:
                    .25em 0 0 black,
                    .5em 0 0 black;
            }
        }
    </style>
</head>

<body>
    <div class="container-xl">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="bg-light p-2 m-2">
                        <h5 class="text-dark text-center">Category</h5>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <h2>Manage <b>Category</b></h2>
                        </div>
                        <div class="col-sm-6">
                            <a href="#addCategoryModal" class="btn btn-success" data-toggle="modal"><i
                                    class="material-icons">&#xE147;</i><span>Add New Category</span></a>
                        </div>
                    </div>
                </div>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Category</th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody id="category_data">
                    </tbody>
                </table>
                <!--<p class="loading">Loading Data</p>-->
            </div>
        </div>
    </div>
    <!-- Edit Modal HTML -->
    <div id="addCategoryModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add Category</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body add_category">
                    <div class="form-group">
                        <label>Category</label>
                        <input type="text" id="name_input" class="form-control" required>
                    </div>

                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                    <input type="submit" class="btn btn-success" value="Add" onclick="addCategory()">
                </div>
            </div>
        </div>
    </div>
    <!-- Edit Modal HTML -->
    <div id="editCategoryModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Category</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body edit_category">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" id="name_input" class="form-control" required>
                    </div>
       
                    <div class="form-group">
                        <input type="hidden" id="employee_id" class="form-control" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                    <input type="submit" class="btn btn-info" onclick="editCategory()" value="Save">
                </div>
            </div>
        </div>
    </div>

    <!-- View Modal HTML -->
    <div id="viewCategoryModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">View Category</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body view_category">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" id="name_input" class="form-control" readonly>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Close">
                </div>
            </div>
        </div>
    </div>

    <!-- Delete Modal HTML -->
    <div id="deleteCategoryModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Delete Employee</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to delete these Records?</p>
                    <p class="text-warning"><small>This action cannot be undone.</small></p>
                </div>
                <input type="hidden" id="delete_id">
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                    <input type="submit" class="btn btn-danger" onclick="deleteCategory()" value="Delete">
                </div>
            </div>
        </div>
    </div>

    <script>

    </script>
    <script>
        $(document).ready(function () {
            categoryList();

        });

        function categoryList() {
            $.ajax({
                type: 'get',
                url: "category-list.php",
                success: function (data) {
                    var response = JSON.parse(data);
                    console.log(response);
                    var tr = '';
                    for (var i = 0; i < response.length; i++) {
                        var id = response[i].cid;
                        var catname = response[i].catname;
                        // var email = response[i].email;
                        // var phone = response[i].phone;
                        // var address = response[i].address;
                        tr += '<tr>';
                        tr += '<td>' + id + '</td>';
                        tr += '<td>' + catname + '</td>';
                        tr += '<td>' + "" + '</td>';
                        tr += '<td>' + "" + '</td>';
                        tr += '<td>' + "" + '</td>';
                        tr += '<td><div class="d-flex">';
                        tr +=
                            '<a href="#viewCategoryModal" class="m-1 view" data-toggle="modal" onclick=viewEmployee("' +
                            id + '")><i class="fa" data-toggle="tooltip" title="view">&#xf06e;</i></a>';
                        tr +=
                            '<a href="#editCategoryModal" class="m-1 edit" data-toggle="modal" onclick=viewEmployee("' +
                            id +
                            '")><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>';
                        tr +=
                            '<a href="#deleteCategoryModal" class="m-1 delete" data-toggle="modal" onclick=$("#delete_id").val("' +
                            id +
                            '")><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>';
                        tr += '</div></td>';
                        tr += '</tr>';
                    }
                    $('.loading').hide();
                    $('#category_data').html(tr);
                }
            });
        }

        function addCategory() {
            var catname = $('.add_category #name_input').val();
            // var email = $('.add_category #email_input').val();
            // var phone = $('.add_category #phone_input').val();
            // var address = $('.add_category #address_input').val();

            $.ajax({
                type: 'post',
                data: {
                    catname: catname,
                    // email: email,
                    // phone: phone,
                    // address: address,
                },
                url: "category-add.php",
                success: function (data) {
                    var response = JSON.parse(data);
                    $('#addCategoryModal').modal('hide');
                    categoryList();
                    alert(response.message);
                }

            })
        }

        function editCategory() {
            var catname = $('.edit_category #name_input').val();
            // var email = $('.edit_category #email_input').val();
            // var phone = $('.edit_category #phone_input').val();
            // var address = $('.edit_category #address_input').val();
            var cid = $('.edit_category #employee_id').val();

            $.ajax({
                type: 'post',
                data: {
                    catname: catname,
                    // email: email,
                    // phone: phone,
                    // address: address,
                    cid: cid,
                },
                url: "category-edit.php",
                success: function (data) {
                    var response = JSON.parse(data);
                    $('#editCategoryModal').modal('hide');
                    categoryList();
                    alert(response.message);
                }

            })
        }

        function viewEmployee(cid = 1) {
            $.ajax({
                type: 'get',
                data: {
                    cid: cid,
                },
                url: "category-view.php",
                success: function (data) {
                    var response = JSON.parse(data);
                    $('.edit_category #name_input').val(response.catname);
                    // $('.edit_category #email_input').val(response.email);
                    // $('.edit_category #phone_input').val(response.phone);
                    // $('.edit_category #address_input').val(response.address);
                    $('.edit_category #employee_id').val(response.cid);
                    $('.view_category #name_input').val(response.catname);
                    // $('.view_category #email_input').val(response.email);
                    // $('.view_category #phone_input').val(response.phone);
                    // $('.view_category #address_input').val(response.address);
                }
            })
        }

        function deleteCategory() {
            var cid = $('#delete_id').val();
            $('#deleteCategoryModal').modal('hide');
            $.ajax({
                type: 'get',
                data: {
                    cid: cid,
                },
                url: "category-delete.php",
                success: function (data) {
                    var response = JSON.parse(data);
                    categoryList();
                    alert(response.message);
                }
            })
        }
    </script>

</body>

</html>