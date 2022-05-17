<?php
               $servername = "localhost";
               $username = "root";
               $password = "";
               $database = "grocery";
               
               $conn = mysqli_connect($servername, $username, $password, $database);
              //  $sql = "Select * from coustomer_details";
              //   $result = mysqli_query($conn, $sql);

              if($_POST['ucn'] != "")
              {
                $sql="update `coustomer_details` SET `coustomer_name` = '".$_POST['ucn']."' WHERE `coustomer_details`.`ID` = '".$_POST['upbid']."';";
                mysqli_query($conn, $sql);
                echo "name changed<br>";

              }

              if($_POST['ucno'] != "")
              {
                $sql="update `coustomer_details` SET `coustomer_contact_no` = '".$_POST['ucno']."' WHERE `coustomer_details`.`ID` = '".$_POST['upbid']."';";
                mysqli_query($conn, $sql);
                echo "Phone Number changed<br>";
              }
              
            ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tirupati Super Shopee</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  </head>
<body>
  <header>
    <nav id = "Main_header" class="navbar navbar-headers">
      <div class="container">
        <div class="navbar-header">
          <span class="navbar-brand">
          
            <a href="index.php"><h1>Tirupati Super Shopee</h1>
                <h4>All Wholesale product available</h4>
            </a>
            
          </span>
        </div>
      </div>   
    </nav>

    <ul id="options" class="nav navbar-nav">
      <li><a href="index.php"><span>Create new Bill</span></a></li>
      <li><a href="editbill.php"><span>Edit Bill</span></a></li>
      <li><a href="see_bills.php"><span>See Bills</span></a></li>
      <li><a href="printbill.php"><span>Print Bill</span></a></li>
      <li><a href="deletebill.php"><span>Delete Bill</span></a></li>
      <li><a href="insert_items.php"><span>Insert Items</span></a></li>
      <li><a href="deleteitems.php"><span>Delete Items</span></a></li>
      <li><a href="Insertgoods.php"><span>Insert Goods</span></a></li>
      <li><a href="Seegoods.php"><span>See Goods</span></a></li>
      <li><a href="managment.php"><span>Managment</span></a></li>
    </ul>
  </header>
  
    <form action="editbill2.php" method="post">
    <div id="Main-container">
    <div>
                
                <span id="Bill-id">
                <label for="bi">Enter Bill Id </label>
                    <input type="text" id="bi" list="dl" name="upbid">
                    <datalist id="dl">
                    <option>0</option>
                      <?php
                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $database = "grocery";
                        
                        $conn = mysqli_connect($servername, $username, $password, $database);
                                  
                        $sql = "Select * from coustomer_details";
                        $result = mysqli_query($conn, $sql);
                        while($row = mysqli_fetch_assoc($result))
                        {
                          echo "<option>".$row['ID']."</option>";
                        }
                      ?>
                    </datalist>
                    
                
            </div>
            <div style="margin-top:20px;">
                <label for="chname">Enter New Name</label>
                <input type="text" name='ucn' id="chname">
            </div>
            <div style="margin-top:20px;">
                <label for="chno">Enter New No</label>
                <input type="text" name='ucno' id="chno">
            </div>
            <div id="update-section">
                <label for="updated-amount">Enter the amount paid : </label>
                  <input type="text" id="updated-amount" name="ua" onfocus="changecolourof('updated-amount')" onblur="resetcolourof('updated-amount')">
            </div>
            <button type="Submit">Change information</button>
            <table  style="border : 1px solid black;">
              <tr>
              <th style="border : 1px solid black;">Bill Id</th>
            <th style="border : 1px solid black;">Customer Name</th>
            <th style="border : 1px solid black;">Customer Number</th>
            <th style="border : 1px solid black;">Date</th>
            <th style="border : 1px solid black;">Items Taken</th>
            <th style="border : 1px solid black;">Total Amount</th>
            <th style="border : 1px solid black;">Note</th>
            <th style="border : 1px solid black;">Payment Paid</th>
            <th style="border : 1px solid black;">Payment Status</th>
            <th style="border : 1px solid black;">Payment Remaining</th>
              </tr>
              <tr>
                <?php
                if($_POST["ua"] != "")
                {

                  $servername = "localhost";
                  $username = "root";
                  $password = "";
                  $database = "grocery";
                  $paid = 0;
                  $payment_status = "";
                  $conn = mysqli_connect($servername, $username, $password, $database);
                  
                  
                    $sql = "Select * from coustomer_details where ID=".$_POST['upbid'].";";
                    $result = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_assoc($result);
                    $paid = $row['payment_paid'] + $_POST['ua'];
                    
                    $remaining = $row['total_amount'] - $paid;
                    if($paid > $row['total_amount'])
                    {
                      echo "<script>alert(\"Main amount lesser than the new amount\");</script>";
                    }
                    else if($paid < 0)
                    {
                      echo "<script>alert(\"Amount can not be lesser than 0\");</script>";
                    }

                    else
                    {

                    if($paid == 0)
                    {
                      $payment_status = "Not Paid";
                    }
                    else if($paid > 0 && $paid < $row['total_amount'])
                    {
                      $payment_status = "Some Amount Paid";
                    }
                    else if( $paid == $row['total_amount'])
                    {
                      $payment_status = "Paid";
                    }



                    $sql = "update `coustomer_details` SET `payment_paid` = '".$paid."', `payment_remaining` = '".$remaining."', `payment_status` = '".$payment_status."' WHERE `coustomer_details`.`ID` = ".$_POST['upbid'].";";
                    mysqli_query($conn, $sql);
                  

                  $sql = "Select * from coustomer_details where ID=".$_POST['upbid'].";";
                  $result = mysqli_query($conn, $sql);
                  while($row = mysqli_fetch_assoc($result))
                  {
                    echo "<tr style=\"border : 1px solid black;\">";
                    echo "<td  style=\"border : 1px solid black;\">".$row['ID']."</td>";
                    echo "<td  style=\"border : 1px solid black;\">".$row['coustomer_name']."</td>";
                    echo "<td  style=\"border : 1px solid black;\">".$row['coustomer_contact_no']."</td>";
                    echo "<td  style=\"border : 1px solid black;\">".$row['date']."</td>";
                    echo "<td  style=\"border : 1px solid black;\">".$row['items_taken']."</td>";
                    echo "<td  style=\"border : 1px solid black;\">".$row['total_amount']."</td>";
                    echo "<td  style=\"border : 1px solid black;\">".$row['note']."</td>";
                    echo "<td  style=\"border : 1px solid black;\">".$row['payment_paid']."</td>";
                    echo "<td  style=\"border : 1px solid black;\">".$row['payment_status']."</td>";
                    echo "<td  style=\"border : 1px solid black;\">".$row['payment_remaining']."</td>";
                    echo "</tr>";
                  }
                }
                }
                ?>
              </tr>
            </table>
    </div>
  </form>
  


  <footer class="panel-footer">
    <div class="container">
      <div class="row">
        <section id="hours" class="col-md-4">
          <span>Hours:</span><br>
          Sun-Thurs: 11:15am - 10:00pm<br>
          Fri: 11:15am - 2:30pm<br>
          Saturday Closed
        </section>
        <section id="Address" class="col-md-6">
          <span>Address:</span><br>
          Shop no 15,<br>
          prushiti park,<br>
          near ambad police station,cidco<br>
          nasik<br>
          <br>
        </section>
        <section id="ph-no" class="col-md-2">
          <span>Phno : 9881271466 </span>
        </section>
      </div>
    </div>
  </footer> 

  <!-- jQuery (Bootstrap JS plugins depend on it) -->
  <script src="js/jquery-2.1.4.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/script.js"></script>
</body>
</html>
