 <?php
include 'dbconnect.php';
if(isset($_POST['submit'])){
	$sName = $_POST['sname'];
	$transaction = $_POST['transaction'];
	$application = $_POST['application'];
	$process = $_POST['process'];
	$amountDue = $_POST['amount'];
	$amount_paid = $_POST['amount_paid'];
	$total = $_POST['total'];

	$data = "INSERT INTO `fee_recepit`(`sname`, `transaction_id`, `application_fee`, `processing_fee`, `amount_due`, `amount_paid`, `total`) VALUES ('$sName','$transaction','$application','$process','$amountDue','$amount_paid','$total')";

	$result = mysqli_query($conn,$data);
	if($result==true){
		?>
<script>
alert("Yes");
</script>
<?php
	}else{
		?>
<script>
alert("Error");
</script>
<?php
	}

}
?>

<!DOCTYPE html>
<html>

<head>
    <title> Fee Receipt</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
    }

    .container {
        max-width: 600px;
        margin: 0 auto;
        padding: 20px;
        background-color: #fff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }

    h1 {
        font-size: 28px;
        margin-top: 0;
        text-align: center;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
    }

    td,
    th,
    input {
        padding: 10px;
        border: 1px solid #ccc;
        text-align: left;
        font-size: 14px;
        font-weight: normal;
    }

    input {
        padding: 10px;
        border: 1px solid #ccc;
        text-align: left;
        font-size: 14px;
        font-weight: normal;
        border: none;
    }

    th {
        background-color: #f2f2f2;
        font-weight: bold;
    }

    .total {
        font-weight: bold;
        text-align: right;
        padding: 10px 0;
    }

    footer {
        font-size: 12px;
        color: #777;
        text-align: center;
        margin-top: 20px;
    }
	button{
        margin-left: 37%;
		width: 25%;
        color:white;
        height: 30px;
        text-align: center;
        border: none;
        border-radius: 10px;
        background-color: rgb(231, 102, 233);
        
	}
    button:hover{
        background-color: rgb(228, 50, 219);
    }
    h1{
        color: rgb(210, 92, 234);
    }
    h1:hover{
        color: rgb(236, 66, 205);
    }
    </style>
</head>

<body>

    <form action="" method="post">
        <div class="container">
            <h1>Fee Receipt</h1>
            <table>
                <thead>
                    <tr>
                        <th>Particulars</th>
                        <th>Amount (INR)</th>
                    </tr>
                </thead>
                <tbody>

                    <tr>

                        <!-- <input type="text"name="sname">Name: -->

                    </tr>
                    <tr>

                        <th><input type="text" name="sname" placeholder="Name:" required></th>
                        <!-- <label for="">Enter Transaction Id:</label> -->
                        <td><input type="text" name="transaction" placeholder=" Transaction Id: 1236547: " required></td>
                    </tr>


                    <tr>

                        <th><input type="text" name="application" placeholder="Application Fee: " required></th>
                        <th><input type="text" name="process" placeholder="Precessing Fee: " required></th>

                    </tr>


                    <tr>

                        <th><input type="text" name="amount" placeholder="Amount Due: " required></th>
                        <th><input type="text" name="amount_paid" placeholder="Amount Paid: " required></th>
                  
                    </tr>
                
                </tbody>
                <tfoot>
                    <tr>

                        <td><input type="text" name="total" placeholder="Total Balance: " required></td>
                        
                    </tr>

                 
                </tfoot>
            </table>
            <div class="date:23-02-2023">
                <tr>
                    <td name="date">Date:</td>
                </tr>
            </div>
            <p>Received from: Chandni Shree</p>
            <!-- <p>Amount in words: Six Hundred Rupees Only</p> -->

           
            <button type="text" name="submit">Submit</button>
        </div>

    </form>

</body>

</html>