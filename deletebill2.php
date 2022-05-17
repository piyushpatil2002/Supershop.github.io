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

 
  <div class="container">
    <form action="deletebill2.php" method="post">
        <div id="Main-container">
            <div>
            <?php
            $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "grocery";

    $conn = mysqli_connect($servername, $username, $password, $database);
              
    $sql = "delete from `coustomer_details` WHERE `coustomer_details`.`ID` = ".$_POST['upbid'].";";
     mysqli_query($conn, $sql);
          ?>
                <span id="Bill-id">
                <label for="bi">Enter Bill Id </label>
                    <input type="text" id="bi" list="dl" name="upbid" onfocus="changecolourof('bi')" onblur="resetcolourof('bi')">
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
                    
                    <button type="Submit" style="margin-right:20px;">Delete informaton</button>

            </div>
               </div>
        <div>
          
        </div>
    </form>
  </div>



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