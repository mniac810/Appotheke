<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard Design</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- Sidebar Start -->
    <div class="sidebar">
        <div class="logo">
            <img src="../image/Logo.png" alt="Logo">
            <span class="brand-name">APPOTHEKE</span>
        </div>
        <ul class="menu">
            <li>
                <a href="../dashboard/index.php">
                    <i class='bx bxs-dashboard'></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <!-- <li>
                <a href="#">
                    <i class='bx bx-bell' ></i>
                    <span>Notifications</span>
                </a>
            </li> -->

            <li>
                <a href="../signup/index.php">
                    <i class='bx bx-user' ></i>
                    <span>Create Account</span>
                </a>
            </li>

            <li>
                <a href="../sale/addSale.php">
                    <i class='bx bx-line-chart' ></i>
                    <span>Sale</span>
                </a>
            </li>

            <li>
                <a href="../supplier/addSupplier.php">
                    <i class='bx bx-package'></i>
                    <span>Suppliers</span>
                </a>
            </li>

            <li>
                <a href="../medicine/addMedicine.php">
                    <i class='bx bxs-capsule' ></i>
                    <span>Inventory</span>
                </a>
            </li>

            <li>
                <a href="../customer/addCustomer.php">
                    <i class='bx bx-cog'></i>
                    <span>Customers</span>
                </a>
            </li>
            
            <li class="active">
                <a href="#">
                    <i class='bx bx-credit-card' ></i>
                    <span>Invoices</span>
                </a>
            </li>

            <li>
                <a href="../chat/src/App.jsx">
                    <i class='bx bx-conversation' ></i>
                    <span>Messages</span>
                </a>
            </li>

            <li>
                <a href="../employee/viewPharmacist.php">
                    <i class='bx bx-user-plus'></i>
                    <span>Employee</span>
                </a>
            </li>

            <li class="logout">
                <a href="#">
                    <i class='bx bx-log-out bx-rotate-180' ></i>
                    <span>Logout</span>
                </a>
            </li>
        </ul>

    </div>

    <div class="main--content">
        <div class="header--wrapper">
            <div class="header--title">
                <h2>Hello Ngoc Truong,</h2>
                <span>Invoice</span>
            </div>
            <div class="user--info">
                <div class="search--box">
                    <i class='bx bx-search'></i>
                    <input type="text"
                    placeholder="Search..." />
                        
            </div>
            <img src="../login/img/img.png" alt="user-pic">
        </div>
    </div>

            <!-- Title -->
                <div class="supplier-items-container">
            <ul class="supplier-menu">
                <li class="supplier-item active">
                    <span>Generate Invoices</span>
                </li>
                <li class="supplier-item">
                    <a href = "../invoice/viewInvoice.php">
                        <span>View Invoices</span>
                    </a>
                </li>
            </ul>
        </div>

    <!-- Invoice Form starts here-->
    <div class="container">
        <div class="row">
            <div class="col-md-12">


                <div class="card mt-4">
                    <div class="card-header">
                        <h4>Invoice Form
                            <a href="javascript:void(0)" class="add-more-form float-end btn btn-primary">ADD MORE</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <form action="../invoice/invoiceFormHandler.php" method="POST">
                        
                            <div class="main-form mt-3 border-bottom">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group mb-2">
                                            <label for="">Medicine ID</label>
                                            <input type="ID" name="medicineID[]" class="form-control" required placeholder="Enter Medicine ID">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group mb-2">
                                            <label for="">Quantity</label>
                                            <input type="number" name="Quantity[]" class="form-control" required placeholder="Enter Quantity">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="paste-new-forms"></div>

                            <button type="submit" name="save_multiple_data" class="btn btn-primary">Save Multiple Data</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        $(document).ready(function () {

            $(document).on('click', '.remove-btn', function () {
                $(this).closest('.main-form').remove();
            });
            
            $(document).on('click', '.add-more-form', function () {
                $('.paste-new-forms').append('<div class="main-form mt-3 border-bottom">\
                                <div class="row">\
                                    <div class="col-md-4">\
                                        <div class="form-group mb-2">\
                                            <label for="">Medicine ID</label>\
                                            <input type="text" name="medicineID[]" class="form-control" required placeholder="Enter Medicine ID">\
                                        </div>\
                                    </div>\
                                    <div class="col-md-4">\
                                        <div class="form-group mb-2">\
                                            <label for="">Quantity</label>\
                                            <input type="number" name="quantity[]" class="form-control" required placeholder="Enter Quantity">\
                                        </div>\
                                    </div>\
                                    <div class="col-md-4">\
                                        <div class="form-group mb-2">\
                                            <br>\
                                            <button type="button" class="remove-btn btn btn-danger">Remove</button>\
                                        </div>\
                                    </div>\
                                </div>\
                            </div>');
            });

        });
    </script>
    <!-- Invoice Form ends here -->

    <script>
        document.addEventListener("DOMContentLoaded", function() {
        let subMenu = document.getElementById("subMenu");
        function ToggleMenu(){
            subMenu.classList.toggle("open-menu");
        }
    });
    </script>


</body>
</html>