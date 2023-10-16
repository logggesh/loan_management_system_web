<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Loan Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="loan-add.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 dashboard bg-dark">
                <div class="row">
                    <div class="dol-lg-12 h4 text-white text-center mt-3">
                        LOAN MANAGEMENT SYSTEM
                    <div class="heading mt-3"></div>
                    </div>
                    <div class="col-lg-12">
                        <div class="list-group">
                            <a href="loan-add.php" class="list-group-item list-group-item-action">
                              Add Loan
                            </a>
                            <a href="loan-view.php" class="list-group-item list-group-item-action">View</a>
                            <a href="loan-delete.php" class="list-group-item list-group-item-action">Delete</a>
                            <a href="loan-search.php" class="list-group-item list-group-item-action">Search</a>
                            <a href="loan-update-table.php" class="list-group-item list-group-item-action active">Update</a>
                          </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 main-page">
            <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Loan Number</th>
      <th scope="col">Customer Name</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Vechicle Name</th>
      <th scope="col">Model Year</th>
      <th scope="col">Registration Number</th>
    </tr>
  </thead>
  <tbody>
        <?php
        $hostname="127.0.0.1";
        $username="root";
        $password="";
        $dbname="loandetails";
        $con=mysqli_connect($hostname,$username,$password,$dbname);
        $query="select loan,customername,phonenumber,vechiclename,modelyear,registrationnumber from loandetails";
        $runnit=mysqli_query($con,$query);
        echo "<tr>";
        while($row=mysqli_fetch_assoc($runnit)){
          $loannumber=$row['loan'];
        echo "<td>".$row['loan']."</td>";
        echo "<td>".$row['customername']."</td>";
        echo "<td>".$row['phonenumber']."</td>";
        echo "<td>".$row['vechiclename']."</td>";
        echo "<td>".$row['modelyear']."</td>";
        echo "<td>".$row['registrationnumber']."</td>";
        echo "<td><a href='loan-update.php?loan=$loannumber' class='btn btn-success'>Update</a></td>";
        echo "</tr>";
        }
        ?>
  </tbody>
</table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>