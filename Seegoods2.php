<style>
tr,th,table,td
{
    border : 1px solid black;
}

</style>
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
  <div id="Main-container" style="font-size:20px;">
    <form action="Seegoods2.php" method="post">
        <div>
        <span id="Goods">
                    <label for="itname"> Select Item name</label>
                    <input type="text" name="itname" list="dl">
                    <datalist id="dl">
                    <option></option>
                    <?php
                         $servername = "localhost";
                         $username = "root";
                         $password = "";
                         $database = "grocery";
                     
                         $conn = mysqli_connect($servername, $username, $password, $database);
                                   
                         $sql = "Select * from items order by item_name";
                         $result = mysqli_query($conn, $sql);
                         echo "<option></option>";
                         while($row = mysqli_fetch_assoc($result))
                         {
                           echo "<option>".$row['Item_name']."</option>";
                         }  
                    ?>
                    </datalist>
                </span>
                <button type="submit">See Good</button>
        </div>

        <div style="margin-top:20px;">
            <table style="width:90%">
                <tr>
                <th>Item Name</th>
                <th>Quantity</th>
                </tr>
                
                <?php
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $database = "grocery";
                
                    $conn = mysqli_connect($servername, $username, $password, $database);
                              
                    $sql = "Select * from items where Item_name='".$_POST['itname']."';";
                    $result = mysqli_query($conn, $sql);
                    
                    while($row = mysqli_fetch_assoc($result))
                    {
                      echo "<tr>";
                      echo "<td>".$row['Item_name']."</td>";
                      echo "<td>".$row['quantity']."</td>";
                      echo "</tr>";
                    }  
                ?>
                
            </table>
        </div>
         
    </form>
    </div>
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
