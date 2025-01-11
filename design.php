
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Student Dashboard</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet" />

  


</head>
<body>
<div class="top-navbar">

<img src="assets/inventory.jpg" alt="inventory_logo"> 


    
    <h2>Inventory System</h2>

   
        <input type="text" name="search_query" class="form-control" placeholder="Search Product Name..." />
        <button type="submit" name="search" class="btn btn-primary ml-2">Search</button>
    </form>
</div>
<nav class="sidebar">
<h4 class="welcome-message">Welcome!</h4>
 
    <div>
    <a class="btn btn-primary mb-3 w-100 <?php echo ($_GET['page'] ?? '') === 'dashboard' ? 'active' : ''; ?>" href="design.php?page=dashboard">
    <i class="fas fa-home"></i> Dashboard
</a>

<a class="btn btn-primary mb-3 w-100 <?php echo ($_GET['page'] ?? '') === 'expired' ? 'active' : ''; ?>" href="design.php?page=expired">
    <i class="fas fa-clock"></i> Expired Products
</a>

<a class="btn btn-primary mb-3 w-100 <?php echo ($_GET['page'] ?? '') === 'inventory' ? 'active' : ''; ?>" href="design.php?page=inventory">
    <i class="fas fa-box"></i> Inventory
</a>

<a class="btn btn-primary mb-3 w-100 <?php echo ($_GET['page'] ?? '') === 'sales' ? 'active' : ''; ?>" href="design.php?page=sales">
    <i class="fas fa-chart-line"></i> Sales Report
</a>

    </div>
    <a class="btn btn-danger text-white w-100" href="../actions/logout.php">
        <i class="fas fa-sign-out-alt"></i> Log Out
    </a>
    
</nav>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<div class="main-content">


</div>

<?php 
if (isset($_GET['page'])){
    $page = $_GET['page'];

    switch ($page) {
        case 'sales':
            include 'sales.php';
            break;
        case 'products':
            include 'products.php';
            break;
        case 'expired':
            include 'expired.php';
                break;
        case 'inventory':
            include 'inventory.php';
            break;
            case 'dashboard':
                include 'dashboard.php';
                break;
    }
}
?>

</body>
</html>
