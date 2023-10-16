<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Loan</title>
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
                            <a href="loan-delete.php" class="list-group-item list-group-item-action active">Delete</a>
                            <a href="loan-search.php" class="list-group-item list-group-item-action">Search</a>
                            <a href="loan-update-table.php" class="list-group-item list-group-item-action">Update</a>
                          </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 main-page">
                <div class="col-lg-12 h4 text-center mt-5">
                    Delete
                </div>
                <div class="col-lg-12 mt-5 text-center">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Select Your Option
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="delete-loan-search.php">Loan Number</a></li>
                            <li><a class="dropdown-item" href="delete-name-search.php">Customer Name</a></li>
                            <li><a class="dropdown-item" href="delete-mobile-search.php">Customer Mobile Number</a></li>
                            <li><a class="dropdown-item" href="delete-vechicle-search.php">Vechicle Number</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>