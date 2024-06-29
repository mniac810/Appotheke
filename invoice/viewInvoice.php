<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Appotheke</title>
    <link rel="stylesheet" href="view_style.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
</head>
<body>
    <!-- Sidebar Start -->
    <div class="sidebar">
        <div class="logo">
            <img src="../image/Logo.png" alt="Logo">
            <span class="brand-name">APPOTHEKE</span>
        </div>
        <ul class="menu">
            <li><a href="#"><i class='bx bxs-dashboard'></i><span>Dashboard</span></a></li>
            <li><a href="../signup/index.php"><i class='bx bx-user' ></i><span>Create Account</span></a></li>
            <li><a href="../sale/addSale.php"><i class='bx bx-line-chart' ></i><span>Sale</span></a></li>
            <li><a href="../supplier/addSupplier.php"><i class='bx bx-package' ></i><span>Suppliers</span></a></li>
            <li><a href="../medicine/addMedicine.php"><i class='bx bxs-capsule'></i><span>Inventory</span></a></li>
            <li><a href="../customer/addCustomer.php"><i class='bx bx-cog'></i><span>Customers</span></a></li>
            <li class="active"><a href="../invoice/invoiceForm.php"><i class='bx bx-credit-card' ></i><span>Invoices</span></a></li>
            <li><a href="../newChat/chat.php"><i class='bx bx-conversation' ></i><span>Messages</span></a></li>
            <li><a href="../employee/viewPharmacist.php"><i class='bx bx-user-plus'></i><span>Employee</span></a></li>
            <li class="logout"><a href="#"><i class='bx bx-log-out bx-rotate-180' ></i><span>Logout</span></a></li>
        </ul>
    </div>

    <div class="main--content">
        <div class="header--wrapper">
            <div class="header--title">
                <h2>Hello Ngoc Truong,</h2>
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
                <li class="supplier-item">
                    <a href="../invoice/invoiceForm.php">
                        <span>Generate Invoices</span>
                    </a>
                </li>
                <li class="supplier-item active">
                    <span>View Invoices</span>
                </li>
            </ul>
        </div>

        <div class="sp--wrapper">
            <div class="row">
                <div class="col-12 mb-3 mb-lg-5">
                    <div class="position-relative card table-nowrap table-card">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Invoice ID</th>
                                        <th>Date</th>
                                        <th>Pharmacist</th>
                                        <th>Customer</th>
                                        <th>Amount</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="align-middle">
                                        <td>#57473829</td>
                                        <td>13 Sep, 2024</td>
                                        <td>Renee Sims</td>
                                        <td>John</td>
                                        <td>$234</td>
                                    </tr>   
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
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