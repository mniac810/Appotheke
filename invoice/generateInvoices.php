<?php 
    // session_start();
    require_once '../include/config_session.inc.php';
    require_once '../include/databaseHandler.inc.php';
    if (isset($_SESSION['user_username'])) {
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Appotheke</title>
    <link rel="stylesheet" href="style.css">
    <!--Font for icon (cdn link)-->
    <!-- Boxicons JS -->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700" rel='stylesheet' type='text/css'>

</head>
<body>
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
            <li>
                <a href="#">
                    <i class='bx bx-bell' ></i>
                    <span>Notifications</span>
                </a>
            </li>
            <?php if ($_SESSION['user_role'] == 'Admin') { ?>
            <li>
                <a href="../signup/signup.php">
                    <i class='bx bx-user' ></i>
                    <span>Create Account</span>
                </a>
            </li>

            <?php }?>
            <li>
                <a href="../sale/addSale.php">
                    <i class='bx bx-line-chart' ></i>
                    <span>Sale</span>
                </a>
            </li>
            <?php if ($_SESSION['user_role'] == 'Admin') { ?>
            <li>
                <a href="../supplier/addSupplier.php">
                    <i class='bx bx-line-chart' ></i>
                    <span>Suppliers</span>
                </a>
            </li>
            <?php } ?>
            <?php if ($_SESSION['user_role'] == 'Admin') { ?> 
            <li>
                <a href="../medicine/addMedicine.php">
                    <i class='bx bx-package' ></i>
                    <span>Inventory</span>
                </a>
            </li>
            <?php }?> 

            <li class="active">
                <a href="../invoice/generateInvoices.php">
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

            <?php if ($_SESSION['user_role'] == 'Admin') { ?>
            <li>
                <a href="#">
                    <i class='bx bx-cog' ></i>
                    <span>Setting</span>
                </a>
            </li>
            <?php } ?>
            <li class="logout">
                <form action="../include/logout.inc.php" method="post">
                    <button type="submit" name="logout-submit" class="logout">
                        <a href="#">
                            <i class='bx bx-log-out bx-rotate-180' ></i>
                            <span>Logout</span>
                        </a>
                    </button>
                </form>
            </li>
        </ul>

    </div>

    <div class="main--content">
        <div class="header--wrapper">
            <div class="header--title">
                <h2>Hello <?php echo $_SESSION['user_username']?></h2>
                <span>Invoices</span>
            </div>
            <div class="user--info">
                <div class="search--box">
                    <i class='bx bx-search'></i>
                    <input type="text"
                    placeholder="Search..." />
                </div>
                <img src="../image/img.png" alt="user-pic">
            </div>
        </div>

            <!-- Title -->
        <div class="supplier-items-container">
            <ul class="supplier-menu">
                <li class="supplier-item active">
                    <span>Generate Invoices</span>
                </li>
                <li class="supplier-item ">
                <a href = "../invoice/viewInvoice.php">
                    <span>View Invoices</span>
                </li>
            </ul>
        </div>

        <div class="container">
            <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="invoice-title">
                                    <h4 class="float-end font-size-15">Invoice #DS0204 <span class="badge bg-success font-size-12 ms-2">Paid</span></h4>
                                    <div class="mb-4">
                                       <h2 class="mb-1 text-muted">Appotheke.com</h2>
                                    </div>
                                    <div class="text-muted">
                                        <p class="mb-1">Ring Road 4 Street Quarter 4 Ben Cat Town, Binh Duong</p>
                                        <p class="mb-1"><i class="uil uil-envelope-alt me-1"></i> appotheke@manager.com</p>
                                        <p><i class="uil uil-phone me-1"></i> 012-345-6789</p>
                                    </div>
                                </div>
            
                                <hr class="my-4">
            
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="text-muted">
                                            <h5 class="font-size-16 mb-3">Billed To:</h5>
                                            <h5 class="font-size-15 mb-2">Preston Miller</h5>
                                            <p class="mb-1">4068 Post Avenue Newfolden, MN 56738</p>
                                            <p class="mb-1">PrestonMiller@armyspy.com</p>
                                            <p>001-234-5678</p>
                                        </div>
                                    </div>
                                    <!-- end col -->
                                    <div class="col-sm-6">
                                        <div class="text-muted text-sm-end">
                                            <div>
                                                <h5 class="font-size-15 mb-1">Invoice No:</h5>
                                                <p>#DZ0112</p>
                                            </div>
                                            <div class="mt-4">
                                                <h5 class="font-size-15 mb-1">Invoice Date:</h5>
                                                <?php
                                                //Set default datetime zone
                                                date_default_timezone_set('Asia/Ho_Chi_Minh');    
                                                echo date('d-m-y');
                                                ?>
                                            </div>
                                            <div class="mt-4">
                                                <h5 class="font-size-15 mb-1">Order No:</h5>
                                                <p>#1123456</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end col -->
                                </div>
                                <!-- end row -->
                                
                                <div class="py-2">
                                    <h5 class="font-size-15">Order Summary</h5>
            
                                    <div class="table-responsive">
                                        <table class="table align-middle table-nowrap table-centered mb-0">
                                            <thead>
                                                <tr>
                                                    <th style="width: 70px;">No.</th>
                                                    <th>Item</th>
                                                    <th>Price</th>
                                                    <th>Quantity</th>
                                                    <th class="text-end" style="width: 120px;">Total</th>
                                                </tr>
                                            </thead><!-- end thead -->
                                            <tbody>
                                                <tr>
                                                    <th scope="row">01</th>
                                                    <td>
                                                        <div>
                                                            <h5 class="text-truncate font-size-14 mb-1">Black Strap A012</h5>
                                                            <p class="text-muted mb-0">Watch, Black</p>
                                                        </div>
                                                    </td>
                                                    <td>$ 245.50</td>
                                                    <td>1</td>
                                                    <td class="text-end">$ 245.50</td>
                                                </tr>
                                                <!-- end tr -->
                                                <tr>
                                                    <th scope="row">02</th>
                                                    <td>
                                                        <div>
                                                            <h5 class="text-truncate font-size-14 mb-1">Stainless Steel S010</h5>
                                                            <p class="text-muted mb-0">Watch, Gold</p>
                                                        </div>
                                                    </td>
                                                    <td>$ 245.50</td>
                                                    <td>2</td>
                                                    <td class="text-end">$491.00</td>
                                                </tr>
                                                <!-- end tr -->
                                                <tr>
                                                    <th scope="row" colspan="4" class="text-end">Sub Total</th>
                                                    <td class="text-end">$732.50</td>
                                                </tr>
                                                <!-- end tr -->
                                                <tr>
                                                    <th scope="row" colspan="4" class="border-0 text-end">
                                                        Discount :</th>
                                                    <td class="border-0 text-end">- $25.50</td>
                                                </tr>
                                                <!-- end tr -->
                                                <tr>
                                                    <th scope="row" colspan="4" class="border-0 text-end">
                                                        Shipping Charge :</th>
                                                    <td class="border-0 text-end">$20.00</td>
                                                </tr>
                                                <!-- end tr -->
                                                <tr>
                                                    <th scope="row" colspan="4" class="border-0 text-end">
                                                        Tax</th>
                                                    <td class="border-0 text-end">$12.00</td>
                                                </tr>
                                                <!-- end tr -->
                                                <tr>
                                                    <th scope="row" colspan="4" class="border-0 text-end">Total</th>
                                                    <td class="border-0 text-end"><h4 class="m-0 fw-semibold">$739.00</h4></td>
                                                </tr>
                                                <!-- end tr -->
                                            </tbody><!-- end tbody -->
                                        </table><!-- end table -->
                                    </div><!-- end table responsive -->
                                    <div class="d-print-none mt-4">
                                        <div class="float-end">
                                            <a href="javascript:window.print()" class="btn btn-success me-1"><i class="fa fa-print">Print</i></a>
                                            <!-- <a href="#" class="btn btn-primary w-md">Send</a> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- end col -->
                </div>
            </div>

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

<?php
    } else {
        header("Location: ../login/login.php");
        exit();
    }