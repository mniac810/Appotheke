<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.14.0/build/css/alertify.min.css"/>
    <link rel="icon" href="data:,">

    <!-- Sidebar Start -->
    <div class="sidebar">
        <div class="logo">
            <img src="../image/Logo.png" alt="Logo">
            <span class="brand-name">APPOTHEKE</span>
        </div>
        <ul class="menu">
            <li><a href="../dashboard/index.php"><i class='bx bxs-dashboard'></i><span>Dashboard</span></a></li>
            <li><a href="../signup/signup.php"><i class='bx bx-user'></i><span>Create Account</span></a></li>
            <li class="active"><a href="#"><i class='bx bx-line-chart'></i><span>Sale</span></a></li>
            <li><a href="../supplier/addSupplier.php"><i class='bx bx-user-plus'></i><span>Suppliers</span></a></li>
            <li><a href="../medicine/addMedicine.php"><i class='bx bxs-capsule'></i><span>Inventory</span></a></li>
            <li>
                <a href="../customer/addCustomer.php">
                    <i class='bx bx-cog' ></i>
                    <span>Customers</span>
                </a>
            </li>
            <li><a href="../invoice/invoiceForm.php"><i class='bx bx-credit-card'></i><span>Invoices</span></a></li>
            <li><a href="../newChat/chat.php"><i class='bx bx-conversation'></i><span>Messages</span></a></li>
            <li>
                <a href="../employee/viewPharmacist.php">
                    <i class='bx bx-user-plus'></i>
                    <span>Employee</span>
                </a>
            </li>
            <li class="logout"><a href="#"><i class='bx bx-log-out bx-rotate-180'></i><span>Logout</span></a></li>
        </ul>
    </div>

    <div class="main--content">
        <div class="header--wrapper">
            <div class="header--title">
                <h2>Hello <?php echo $_SESSION['user_username'] ?></h2>
                <span>Sales</span>
            </div>
            <div class="user--info">
                <div class="search--box">
                    <i class='bx bx-search'></i>
                    <input type="text" placeholder="Search..." />
                </div>
                <img src="../login/img/img.png" alt="user-pic">
            </div>
        </div>
    
</head>
