<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Details View</title>
    <link href="all-details-view.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 d-flex justify-content-center">
                <div class="form-back-customer mt-5">
                    <div class="col-lg-12 loan_view">

                    </div>
                    <div class="col-lg-12 h4 text-center mt-4">Customer Details</div>
                    <?php
                        $hostname="127.0.0.1";
                        $username="root";
                        $password="";
                        $dbname="loandetails";
                        $con=mysqli_connect($hostname,$username,$password,$dbname);
                        if(isset($_GET['loan'])){
                            $loannumber_set=$_GET['loan'];
                            $query="select * from loandetails where loan=$loannumber_set";
                            $runnit=mysqli_query($con,$query);
                            
                        }
                    ?>
                    <div class="Customer-name h5 ms-5 mt-4 col-lg-12">Customer Name:
                        <?php while($row=mysqli_fetch_assoc($runnit)){
                            echo "&nbsp".$row['customername'];
                        }?>
                    </div>
                    <div class="Customer-mobno h5 ms-5 mt-4 col-lg-12">Mobile Number:
                        <?php
                        if(isset($_GET['loan'])){
                            $loannumber_set=$_GET['loan'];
                            $query="select * from loandetails where loan=$loannumber_set";
                            $runnit=mysqli_query($con,$query);
                            
                        }
                         while($row=mysqli_fetch_assoc($runnit)){
                        echo "&nbsp".$row['phonenumber'];
                              }?>
                    </div>
                    <div class="Customer-add h5 ms-5 mt-4 col-lg-12">Address:
                        <?php
                        if(isset($_GET['loan'])){
                            $loannumber_set=$_GET['loan'];
                            $query="select * from loandetails where loan=$loannumber_set";
                            $runnit=mysqli_query($con,$query);
                            
                        }
                         while($row=mysqli_fetch_assoc($runnit)){
                        echo "&nbsp".$row['address'];
                              }?>
                    </div>
                    <div class="Customer-landmark h5 ms-5 mt-4 col-lg-12">
                        Landmark:
                        <?php
                        if(isset($_GET['loan'])){
                            $loannumber_set=$_GET['loan'];
                            $query="select * from loandetails where loan=$loannumber_set";
                            $runnit=mysqli_query($con,$query);
                            
                        } 
                        while($row=mysqli_fetch_assoc($runnit)){
                        echo "&nbsp".$row['landmark'];
                              }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 d-flex justify-content-center">
                <div class="form-back-guranteer mt-5">
                    <div class="col-12-lg h4 text-center mt-2">
                        Guranteer Details
                    </div>
                    <div class="row">
                    <div class="guranteer-name h5 ms-5 mt-4 col-lg-12">Guranteer Name:
                        <?php
                        if(isset($_GET['loan'])){
                            $loannumber_set=$_GET['loan'];
                            $query="select * from loandetails where loan=$loannumber_set";
                            $runnit=mysqli_query($con,$query);
                            
                        }
                         while($row=mysqli_fetch_assoc($runnit)){
                        echo "&nbsp".$row['guranteername'];
                              }
                        ?>
                    </div>
                    <div class="guranteer-mobno h5 ms-5 mt-4 col-lg-12">Mobile Number:
                        <?php
                        if(isset($_GET['loan'])){
                            $loannumber_set=$_GET['loan'];
                            $query="select * from loandetails where loan=$loannumber_set";
                            $runnit=mysqli_query($con,$query);
                            
                        }
                         while($row=mysqli_fetch_assoc($runnit)){
                        echo "&nbsp".$row['guranteernumber'];
                              }
                        ?>
                    </div>
                    <div class="guranteer-add h5 ms-5 mt-4 col-lg-12">Address:
                        <?php
                        if(isset($_GET['loan'])){
                            $loannumber_set=$_GET['loan'];
                            $query="select * from loandetails where loan=$loannumber_set";
                            $runnit=mysqli_query($con,$query);
                            
                        } 
                        while($row=mysqli_fetch_assoc($runnit)){
                        echo "&nbsp".$row['guranteeradress'];
                              }
                        ?>
                    </div>
                    <div class="guranteer-landmark h5 ms-5 mt-4 col-lg-12">Landmark:</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 d-flex justify-content-center mt-5">
                <div class="form-back-vechicle">
                    <div class="col-lg-12 h4 text-center mt-4">
                        Vechicle Details
                    </div>
                    <div class="row">
                    <div class="vechicle-name h5 ms-5 mt-4 col-lg-12">Vechicle Name:
                        <?php
                        if(isset($_GET['loan'])){
                            $loannumber_set=$_GET['loan'];
                            $query="select * from loandetails where loan=$loannumber_set";
                            $runnit=mysqli_query($con,$query);
                            
                        } 
                        while($row=mysqli_fetch_assoc($runnit)){
                        echo "&nbsp".$row['vechiclename'];
                              }?>
                    </div>
                    <div class="regis-num h5 ms-5 mt-4 col-lg-12">Registration Number:
                        <?php
                        if(isset($_GET['loan'])){
                            $loannumber_set=$_GET['loan'];
                            $query="select * from loandetails where loan=$loannumber_set";
                            $runnit=mysqli_query($con,$query);
                            
                        }
                         while($row=mysqli_fetch_assoc($runnit)){
                        echo "&nbsp".$row['registrationnumber'];
                              }?>
                    </div>
                    <div class="model-year h5 ms-5 mt-4 col-lg-12">Model Year:
                        <?php
                        if(isset($_GET['loan'])){
                            $loannumber_set=$_GET['loan'];
                            $query="select * from loandetails where loan=$loannumber_set";
                            $runnit=mysqli_query($con,$query);
                            
                        } 
                        while($row=mysqli_fetch_assoc($runnit)){
                        echo "&nbsp".$row['modelyear'];
                              }?>
                    </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 d-flex justify-content-center mt-5">
                <div class="form-back-amount">
                    <div class="col-lg-12 h4 text-center mt-4">
                        Amount Details
                    </div>
                    <div class="row">
                    <div class="amount h5 ms-5 mt-4 col-lg-12">Total Amount:
                        <?php
                        if(isset($_GET['loan'])){
                            $loannumber_set=$_GET['loan'];
                            $query="select Total_amount from amountdetails where loan=$loannumber_set";
                            $runnit=mysqli_query($con,$query);
                            
                        } 
                        while($row=mysqli_fetch_assoc($runnit)){
                        echo "&nbsp".$row['Total_amount'];
                              }?>
                    </div>
                    <div class="no-of-months h5 ms-5 mt-4 col-lg-12">Number Of Months:
                        <?php
                        if(isset($_GET['loan'])){
                            $loannumber_set=$_GET['loan'];
                            $query="select Total_months from amountdetails where loan=$loannumber_set";
                            $runnit=mysqli_query($con,$query);
                            
                        }
                         while($row=mysqli_fetch_assoc($runnit)){
                        echo "&nbsp".$row['Total_months'];
                              }
                        ?>
                    </div>
                    <div class="no-of-months h5 ms-5 mt-4 col-lg-12">Amount Per Month:
                        <?php
                        if(isset($_GET['loan'])){
                            $loannumber_set=$_GET['loan'];
                            $query="select Amount_per_month from amountdetails where loan=$loannumber_set";
                            $runnit=mysqli_query($con,$query);
                            
                        }
                         while($row=mysqli_fetch_assoc($runnit)){
                        echo "&nbsp".$row['Amount_per_month'];
                              }
                        ?>
                    </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 mt-5">
                <div class="row">
                    <div class="col-lg-12 h4 text-center mt-4">Due'S And Balance's To Be Paid</div>
                    <div class="col-lg-12 mt-4">
                    <form method="POST">
                        <input class="form-control amt_input" name="amt" id="amt_input" type="text" placeholder="Enter Amount">
                        <input type="submit" value="Pay" class="btn btn-success">
                    </form>
                    <?php
                        $hostname="127.0.0.1";
                        $username="root";
                        $password="";
                        $dbname="loandetails";
                        if(isset($_GET['loan'])){
                            $loannumber_set=$_GET['loan'];
                        }
                        $con=mysqli_connect($hostname,$username,$password,$dbname);
                        if($_SERVER['REQUEST_METHOD']=='POST'){
                            $amt_received=$_POST['amt'];
                            $cur_date=date('y-m-d');
                            echo $cur_date;
                            $amount_bal="select Amount_pending from amountdetails where loan='$loannumber_set'";
                        $create_it=mysqli_query($con,$amount_bal);
                        while($row=mysqli_fetch_assoc($create_it)){
                            $tot_amt=$row['Amount_pending'];
                        }
                            $bal_amt=$tot_amt-$amt_received;
                            $update_amt="update amountdetails set Amount_pending='$bal_amt' where loan='$loannumber_set'";
                            $update_run=mysqli_query($con,$update_amt);
                            $query_amt="insert into payment_details(loan,amt_received_date,amt_received,balance_amount) values('$loannumber_set','$cur_date','$amt_received','$bal_amt')";
                            $runit=mysqli_query($con,$query_amt);
                        }
                        
                    ?>
                    </div>
                <table class="table mt-3">
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col">Date</th>
                        <th scope="col">Amount Received</th>
                        <th scope="col">Balance Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <td>
                        <?php
                        $hostname="127.0.0.1";
                        $username="root";
                        $password="";
                        $dbname="loandetails";
                        $con=mysqli_connect($hostname,$username,$password,$dbname);

                        if(isset($_GET['loan'])){
                            $loannumber_set=$_GET['loan'];
                        }
                        $query_amt="select * from payment_details where loan='$loannumber_set'";
                        $runit=mysqli_query($con,$query_amt);
                        while($row=mysqli_fetch_assoc($runit)){
                            $date=$row['amt_received_date'];
                            echo $date.'<br>';
                        }
                        
                        ?>
                        </td>
                        <td>
                        <?php
                        $hostname="127.0.0.1";
                        $username="root";
                        $password="";
                        $dbname="loandetails";
                        $con=mysqli_connect($hostname,$username,$password,$dbname);

                        if(isset($_GET['loan'])){
                            $loannumber_set=$_GET['loan'];
                        }
                        $query_amt="select * from payment_details where loan='$loannumber_set'";
                        $runit=mysqli_query($con,$query_amt);
                        while($row=mysqli_fetch_assoc($runit)){
                            
                            $amt_received_disp=$row['amt_received'];
                            echo $amt_received_disp.'<br>';    
                        }
                        
                        ?>                       
                        </td>
                        <td>
                        <?php
                        $hostname="127.0.0.1";
                        $username="root";
                        $password="";
                        $dbname="loandetails";
                        $con=mysqli_connect($hostname,$username,$password,$dbname);

                        if(isset($_GET['loan'])){
                            $loannumber_set=$_GET['loan'];
                        }
                        $query_amt="select * from payment_details where loan='$loannumber_set'";
                        $runit=mysqli_query($con,$query_amt);
                        while($row=mysqli_fetch_assoc($runit)){

                            $balance_amt_disp=$row['balance_amount'];
                            echo $balance_amt_disp.'<br>';
                        }
                        
                        ?>
                        </td>   
                        </tr>
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>