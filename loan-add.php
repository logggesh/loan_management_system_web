<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Loan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="loan-add.css">
    
</head>
<body>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 dashboard bg-dark">
                <div class="row">
                    <div class="dol-lg-12 h4 text-white text-center mt-3">
                        <a href="index.php" id="comp_name">LOAN MANAGEMENT SYSTEM</a>
                    <div class="heading mt-3"></div>
                    </div>
                    <div class="col-lg-12">
                        <div class="list-group">
                            <a href="loan-add.php" class="list-group-item list-group-item-action active" aria-current="true">
                              Add Loan
                            </a>
                            <a href="loan-view.php" class="list-group-item list-group-item-action">View</a>
                            <a href="loan-delete.php" class="list-group-item list-group-item-action">Delete</a>
                            <a href="loan-search.php" class="list-group-item list-group-item-action">Search</a>
                            <a href="loan-update-table.php" class="list-group-item list-group-item-action">Update</a>
                          </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 main-page">
            
                <div class="row">
                    <div class="col-lg-12 ">
                        <div class="loan_num_view  ms-auto mt-3 fixed-top">
                            
                            <?php
                            $hostname="127.0.0.1";
                            $username="root";
                            $password="";
                            $dbname="loandetails";
                            $con=mysqli_connect($hostname,$username,$password,$dbname);
                            $query="select loan from loandetails order by loan DESC limit 1";
                            $process=mysqli_query($con,$query);
                            while($row=mysqli_fetch_assoc($process)){
                                $lnadd=$row['loan']+1;
                                echo "<div class='h4 text-center lnviewnum'>"."Loan Number:".$lnadd."</div>";
                            }
                            ?>
                            <div class="loan_num_show" id="ln_num_show"></div>
                        </div>
                    <form method="POST" >
                        <div class="form-back mx-auto mt-5">
                                <div class="col-lg-12 h4 text-center mt-5">Customer Details</div>
                                <div class="row">
                                    <div class="col-lg-12 mt-5">
                                        <input class="form-control mx-auto" type="text" placeholder="Customer Name" id="customer_name" name="customer_name">
                                    </div>
                                    <div class="col-lg-12 mt-5">
                                        <input class="form-control mx-auto" type="text" placeholder="Customer Mobile No" aria-label="default input example" id="mob_no" name="mob_no">
                                    </div>
                                    <div class="col-lg-12 mt-5">
                                        <textarea class="form-control mx-auto" id="exampleFormControlTextarea1" rows="2" cols="2" placeholder="Customer Address" id="address" name="address"></textarea>
                                    </div>
                                    <div class="col-lg-12 mt-5">
                                        <input class="form-control mx-auto" type="text" placeholder="Landmark" aria-label="default input example" id="landmark" name="landmark">
                                    </div>
                                    
                                </div>
                            </div>
                        <div class="col-lg-12">
                            <div class="form-back-2 mx-auto mt-5">
                                <div class="col-lg-12 h4 text-center mt-5">
                                    Guranteer Details
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 mt-5">
                                        <input class="form-control mx-auto" type="text" placeholder="Guranteer Name" aria-label="default input example" id="guranteer_name" name="guranteer_name">
                                    </div>
                                    <div class="col-lg-12 mt-5">
                                        <input class="form-control mx-auto" type="number" placeholder="Guranteer Mobile No" aria-label="default input example" id="guranteer_number" name="guranteer_number">
                                    </div>
                                    <div class="col-lg-12 mt-5">
                                        <textarea class="form-control mx-auto" id="exampleFormControlTextarea1" rows="2" cols="2" placeholder="Guranteer Address" id="guranteer_address" name="guranteer_address"></textarea>
                                    </div>
                                    <div class="col-lg-12 mt-5">
                                        <input class="form-control mx-auto" type="text" placeholder="Landmark" aria-label="default input example" id="guranteer_landmark" name="guranteer_landmark">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-back-3 mx-auto mt-5">
                                <div class="col-lg-12 h4 text-center mt-5">
                                    Vechicle Details
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 mt-5">
                                        <input class="form-control mx-auto" type="text" placeholder="Vechicle Name" aria-label="default input example" id="vechicle_name" name="vechicle_name">
                                    </div>
                                    <div class="col-lg-12 mt-5">
                                        <input class="form-control mx-auto" type="text" placeholder="Registration Number" aria-label="default input example" id="registration_number" name="registration_number">
                                    </div>
                                    <div class="col-lg-12 mt-5">
                                        <input class="form-control mx-auto" type="number" placeholder="Model Year" aria-label="default input example" id="model_year" name="model_year">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-back-4 mx-auto mt-5">
                                <div class="col-lg-12 h4 text-center mt-5">
                                    Amount
                                </div>
                                <div class="col-lg-12 mt-5">
                                    <input class="form-control mx-auto" type="number" placeholder="Amount" aria-label="default input example" id="amount" name="amount">
                                </div>
                                <div class="col-lg-12 mt-5">
                                    <input class="form-control mx-auto" type="number" placeholder="Number Of Months" aria-label="default input example" id="no_of_months" name="no_of_months">
                                </div>
                                <div class="col-lg-12 mt-5 d-flex justify-content-center">
                                    <p>Amount Per Month:&nbsp<p id="amt_shw"></p></p>
                                </div>
                                <div class="col-lg-12 mt-5 d-flex justify-content-center">
                                    <p>Registered Date:&nbsp<p id="date_shw"></p></p>
                                </div>
                                <div class="col-lg-12 d-flex justify-content-center mt-4">
                                    <button type="button" class="btn btn-warning" id="calc_button" onclick="amt_calc()">Calculate</button>
                                </div>
                        
                        
                            </div>
                        </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="row mt-4">
                                <div class="col-lg-6 d-flex justify-content-center">
                                    <input type="submit" class="text-white btn btn-success" id="submit_button">
                                </div>
                        </form>
                                <div class="col-lg-6 d-flex justify-content-center">
                                    <button id="cancel_button" class="btn btn-danger" onclick="window.location('index.php')">Cancel</button>
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $hostname = "127.0.0.1";
        $username = "root";
        $password = "";
        $dbname = "loandetails";
        $customer_name = $_POST["customer_name"];
        $mobile_no = $_POST["mob_no"];
        $customer_address = $_POST["address"];
        $customer_landmark = $_POST["landmark"];
        $guranteer_name = $_POST["guranteer_name"];
        $guranteer_number = $_POST["guranteer_number"];
        $guranteer_address = $_POST["guranteer_address"];
        $guranteer_landmark = $_POST["guranteer_landmark"];
        $vechicle_name = $_POST["vechicle_name"];
        $registration_number = $_POST["registration_number"];
        $model_year = $_POST["model_year"];
        $amount = $_POST["amount"];
        $no_of_months = $_POST["no_of_months"];
        $cur_date=date('y-m-d');
        $amt_per_mon=$amount/$no_of_months;
        echo $cur_date;
        $cust_mobno_len=strlen($mobile_no);
        $gurantr_mobno_len=strlen($guranteer_number);
        $con = mysqli_connect($hostname, $username, $password, $dbname);
        if ($customer_name == "") {
            echo "<script>alert('Please Enter the Customer Name')</script>";
        }
        if($mobile_no==""){
            echo "<script>alert('Please Enter the Mobile No')</script>";
        } 
        if($customer_address==""){
            echo "<script>alert('Please Enter the Customer's Address')</script>";
        }
        if($customer_landmark==""){
            echo "<script>alert('Please Enter the Customer Address's Landmark')</script>";
        }
        if($guranteer_name==""){
            echo "<script>alert('Please Enter the Guranteer's Name')</script>";
        }
        if($guranteer_number==""){
            echo "<script>alert('Please Enter the guranteer's Mobile No')</script>";
        }
        if($guranteer_address==""){
            echo "<script>alert('Please Enter the guranteer's Address')</script>";
        }
        if($guranteer_landmark==""){
            echo "<script>alert('Please Enter the guranteers's Landmark')</script>";
        }
        if($vechicle_name==""){
            echo "<script>alert('Please Enter the Vechicle's Name')</script>";
        }
        if($registration_number==""){
            echo "<script>alert('Please Enter the Registration Number')</script>";
        }
        if($model_year==""){
            echo "<script>alert('Please Enter the Model Year')</script>";
        }
        if($amount==""){
            echo "<script>alert('Please Enter the Amount')</script>";
        }
        if($no_of_months==""){
            echo "<script>alert('Please Enter the No Of Months')</script>";
        }
        if($cust_mobno_len>10){
            echo "<script>alert('Please Enter a Valid Customer Mobile Number,You Have Entered more than 10 Numbers')</script>";
        }
        if($cust_mobno_len<10){
            echo "<script>alert('Please Enter a Valid Customer Mobile Number,You Have Entered Less than 10 Numbers')</script>";
        }
        if($gurantr_mobno_len>10){
            echo "<script>alert('Please Enter a Valid Guranteer Mobile Number,You Have Entered more than 10 Numbers')</script>";
        }
        if($gurantr_mobno_len<10){
            echo "<script>alert('Please Enter a Valid Guranteer Mobile Number,You Have Entered Less than 10 Numbers')</script>";
        }
        if(!ctype_digit($mobile_no)){
            echo "<script>alert('Please Enter a Valid Number,You Have Entered Aplhabetical Letters')</script>";
        }
        if(!ctype_digit($guranteer_number)){
            echo "<script>alert('Please Enter a Valid Number,You Have Entered Aplhabetical Letters')</script>";
        }
        if($model_year>date("Y")){
            echo "<script>alert('Please enter a valid year')</script>";
        }
        
        else {
            while($row=mysqli_fetch_assoc($process)){
                $lnadd=$row['loan']+1;
            }  
            $query = "insert into loandetails values('$lnadd','$customer_name','$mobile_no','$customer_address','$customer_landmark','$vechicle_name','$model_year','$registration_number','$guranteer_name','$guranteer_number','$guranteer_address')";
            $amtdet_query="insert into amountdetails(loan,Total_amount,Amount_pending,Amount_to_pay,Amount_per_month,Total_months,Dates) values('$lnadd','$amount','$amount','null','$amt_per_mon','$no_of_months','$cur_date')";
            $run = mysqli_query($con, $query);
            $amt_run=mysqli_query($con,$amtdet_query);
            
            if ($run) {
                echo "<script>alert('Data Inserted')</script>";
                $customer_name = "";
                $mobile_no = "";
                $customer_address = "";
                $customer_landmark = "";
                $guranteer_name = "";
                $guranteer_number = "";
                $guranteer_address = "";
                $guranteer_landmark = "";
                $vechicle_name = "";
                $registration_number = "";
                $model_year = "";
                $amount = "";
                $no_of_months = "";
            } else {
                echo "<script>alert('Sorry Data Not inserted. Please Contact the Developer')</script>";
            }
        }
    }
    

    ?>
<script type="text/javascript">
        var date1 = new Date();
        var date_shw=date1.getDate();
        var month_shw=date1.getMonth();
        var year_shw=date1.getFullYear();
        console.log(date_shw);
        console.log(month_shw);
        console.log(year_shw);
        var final_shw=date_shw+"/"+month_shw+"/"+year_shw;
        console.log(final_shw);
        document.getElementById("date_shw").innerHTML=final_shw;

        function amt_calc(){
            var amt=document.getElementById("amount").value;
            var no_of_months=document.getElementById("no_of_months").value;
            var final_cal=amt/no_of_months;
            console.log(document.getElementById("amt_shw").innerHTML=final_cal);
        }
    </script>
</html>