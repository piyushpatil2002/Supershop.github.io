<?php session_start(); ?>

<?php
    function update_inerntory($s, $s2)
    {
      $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "grocery";

    $conn = mysqli_connect($servername, $username, $password, $database);

    $sql2 = "Select quantity from items where Item_name ='".$_SESSION[$s]."';";
  
    $result = mysqli_query($conn, $sql2);

    $row = mysqli_fetch_assoc($result);

    $check_quan = $row['quantity'];
    $update_quantity = $check_quan - $_SESSION[$s2];      
    $sql2 = "update items set quantity=".$update_quantity." where Item_name = '".$_SESSION[$s]."'";
  
    mysqli_query($conn, $sql2);


    }

    require_once __DIR__ . "/vendor/autoload.php";

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "grocery";

    $conn = mysqli_connect($servername, $username, $password, $database);

    $coustomer_name = "";
    $coustomer_contact_no = "";
	  $coustomer_name = $_SESSION['coustomer_name'];
    $coustomer_contact_no = $_SESSION['coustomer_contact_no'];
    
    
    $date = $_SESSION['date'];
    $payment_status = $_SESSION['pon'];
    $payment_mode = $_SESSION['payment_m'];
    $payment_paid = $_SESSION['payment-paid'];
    $items_taken = array();
    $items_quantity = array();
    $item_price = array();
    $total_amount = $_SESSION['total_amount'];
    $payment_remaining =  $total_amount - $payment_paid;


    $quantity_counter = 0;






    if(!empty($_SESSION['mi1']))
    {
      array_push($items_taken,$_SESSION['mi1']);
      array_push($items_quantity,$_SESSION['mi1q']);
      array_push($item_price,$_SESSION['mi1p']);

      update_inerntory("mi1","mi1q");
    }
    if(!empty($_SESSION['mi2']))
    {
      array_push($items_taken,$_SESSION['mi2']);
      array_push($items_quantity,$_SESSION['mi2q']);
      array_push($item_price,$_SESSION['mi2p']);
      
      update_inerntory("mi2","mi2q");
    }
    if(!empty($_SESSION['mi3']))
    {
      array_push($items_taken,$_SESSION['mi3']);
      array_push($items_quantity,$_SESSION['mi3q']);
      array_push($item_price,$_SESSION['mi3p']);
     
      update_inerntory("mi3","mi3q");
    }
    if(!empty($_SESSION['mi4']))
    {
      array_push($items_taken,$_SESSION['mi4']);
      array_push($items_quantity,$_SESSION['mi4q']);
      array_push($item_price,$_SESSION['mi4p']);
      
      update_inerntory("mi4","mi4q");
    }
    if(!empty($_SESSION['mi5']))
    {
      array_push($items_taken,$_SESSION['mi5']);
      array_push($items_quantity,$_SESSION['mi5q']);
      array_push($item_price,$_SESSION['mi5p']);
      
      update_inerntory("mi5","mi5q");
    }
    if(!empty($_SESSION['mi6']))
    {
      array_push($items_taken,$_SESSION['mi6']);
      array_push($items_quantity,$_SESSION['mi6q']);
      array_push($item_price,$_SESSION['mi6p']);
      
      update_inerntory("mi6","mi6q");
    }
    if(!empty($_SESSION['mi7']))
    {
      array_push($items_taken,$_SESSION['mi7']);
      array_push($items_quantity,$_SESSION['mi7q']);
      array_push($item_price,$_SESSION['mi7p']);
     
      update_inerntory("mi7","mi7q");
    }
    if(!empty($_SESSION['mi8']))
    {
      array_push($items_taken,$_SESSION['mi8']);
      array_push($items_quantity,$_SESSION['mi8q']);
      array_push($item_price,$_SESSION['mi8p']);
     
      update_inerntory("mi8","mi8q");
    }
    if(!empty($_SESSION['mi9']))
    {
      array_push($items_taken,$_SESSION['mi9']);
      array_push($items_quantity,$_SESSION['mi9q']);
      array_push($item_price,$_SESSION['mi9p']);
    
      update_inerntory("mi9","mi9q");
    }
    if(!empty($_SESSION['mi10']))
    {
      array_push($items_taken,$_SESSION['mi10']);
      array_push($items_quantity,$_SESSION['mi10q']);
      array_push($item_price,$_SESSION['mi10p']);
     
      update_inerntory("mi10","mi10q");
    }
    if(!empty($_SESSION['mi11']))
    {
      array_push($items_taken,$_SESSION['mi11']);
      array_push($items_quantity,$_SESSION['mi11q']);
      array_push($item_price,$_SESSION['mi11p']);
     
      update_inerntory("mi11","mi11q");
    }
    if(!empty($_SESSION['mi12']))
    {
      array_push($items_taken,$_SESSION['mi12']);
      array_push($items_quantity,$_SESSION['mi12q']);
      array_push($item_price,$_SESSION['mi12p']);
      
      update_inerntory("mi12","mi12q");
    }
    if(!empty($_SESSION['mi13']))
    {
      array_push($items_taken,$_SESSION['mi13']);
      array_push($items_quantity,$_SESSION['mi13q']);
      array_push($item_price,$_SESSION['mi13p']);
     
      update_inerntory("mi13","mi13q");
    }
    if(!empty($_SESSION['mi14']))
    {
      array_push($items_taken,$_SESSION['mi14']);
      array_push($items_quantity,$_SESSION['mi14q']);
      array_push($item_price,$_SESSION['mi14p']);
     
      update_inerntory("mi14","mi14q");
    }
    if(!empty($_SESSION['mi15']))
    {
      array_push($items_taken,$_SESSION['mi15']);
      array_push($items_quantity,$_SESSION['mi15q']);
      array_push($item_price,$_SESSION['mi15p']);
     
      update_inerntory("mi15","mi15q");
    }
    if(!empty($_SESSION['mi16']))
    {
      array_push($items_taken,$_SESSION['mi16']);
      array_push($items_quantity,$_SESSION['mi16q']);
      array_push($item_price,$_SESSION['mi16p']);
     
      update_inerntory("mi16","mi16q");
    }
    if(!empty($_SESSION['mi17']))
    {
      array_push($items_taken,$_SESSION['mi17']);
      array_push($items_quantity,$_SESSION['mi17q']);
      array_push($item_price,$_SESSION['mi17p']);
     
      update_inerntory("mi17","mi17q");
    }
    if(!empty($_SESSION['mi18']))
    {
      array_push($items_taken,$_SESSION['mi18']);
      array_push($items_quantity,$_SESSION['mi18q']);
      array_push($item_price,$_SESSION['mi18p']);
     
      update_inerntory("mi18","mi18q");
    }
    if(!empty($_SESSION['mi19']))
    {
      array_push($items_taken,$_SESSION['mi19']);
      array_push($items_quantity,$_SESSION['mi19q']);
      array_push($item_price,$_SESSION['mi19p']);
      
      update_inerntory("mi19","mi19q");
    }
    if(!empty($_SESSION['mi20']))
    {
      array_push($items_taken,$_SESSION['mi20']);
      array_push($items_quantity,$_SESSION['mi20q']);
      array_push($item_price,$_SESSION['mi20p']);
      
      update_inerntory("mi20","mi20q");
    }
    if(!empty($_SESSION['mi21']))
    {
      array_push($items_taken,$_SESSION['mi21']);
      array_push($items_quantity,$_SESSION['mi21q']);
      array_push($item_price,$_SESSION['mi21p']);
    
      update_inerntory("mi21","mi21q");
    }
    if(!empty($_SESSION['mi22']))
    {
      array_push($items_taken,$_SESSION['mi22']);
      array_push($items_quantity,$_SESSION['mi22q']);
      array_push($item_price,$_SESSION['mi22p']);
   
      update_inerntory("mi22","mi22q");
    }
    if(!empty($_SESSION['mi23']))
    {
      array_push($items_taken,$_SESSION['mi23']);
      array_push($items_quantity,$_SESSION['mi23q']);
      array_push($item_price,$_SESSION['mi23p']);
   
      update_inerntory("mi23","mi23q");
    }
    if(!empty($_SESSION['mi24']))
    {
      array_push($items_taken,$_SESSION['mi24']);
      array_push($items_quantity,$_SESSION['mi24q']);
      array_push($item_price,$_SESSION['mi24p']);
    
      update_inerntory("mi24","mi24q");
    }
    if(!empty($_SESSION['mi25']))
    {
      array_push($items_taken,$_SESSION['mi25']);
      array_push($items_quantity,$_SESSION['mi25q']);
      array_push($item_price,$_SESSION['mi25p']);
   
      update_inerntory("mi25","mi25q");
    }
    if(!empty($_SESSION['mi26']))
    {
      array_push($items_taken,$_SESSION['mi26']);
      array_push($items_quantity,$_SESSION['mi26q']);
      array_push($item_price,$_SESSION['mi26p']);
      update_inerntory("mi26","mi26q");
    }
    if(!empty($_SESSION['mi27']))
    {
      array_push($items_taken,$_SESSION['mi27']);
      array_push($items_quantity,$_SESSION['mi27q']);
      array_push($item_price,$_SESSION['mi27p']);
      update_inerntory("mi27","mi27q");
    }
    if(!empty($_SESSION['mi28']))
    {
      array_push($items_taken,$_SESSION['mi28']);
      array_push($items_quantity,$_SESSION['mi28q']);
      array_push($item_price,$_SESSION['mi28p']);
      update_inerntory("mi28","mi28q");
    }
    if(!empty($_SESSION['mi29']))
    {
      array_push($items_taken,$_SESSION['mi29']);
      array_push($items_quantity,$_SESSION['mi29q']);
      array_push($item_price,$_SESSION['mi29p']);
      update_inerntory("mi29","mi29q");
    }
    if(!empty($_SESSION['mi30']))
    {
      array_push($items_taken,$_SESSION['mi30']);
      array_push($items_quantity,$_SESSION['mi30q']);
      array_push($item_price,$_SESSION['mi30p']);
      update_inerntory("mi30","mi30q");
    }
    if(!empty($_SESSION['mi31']))
    {
      array_push($items_taken,$_SESSION['mi31']);
      array_push($items_quantity,$_SESSION['mi31q']);
      array_push($item_price,$_SESSION['mi31p']);
      update_inerntory("mi31","mi31q");
    }
    if(!empty($_SESSION['mi32']))
    {
      array_push($items_taken,$_SESSION['mi32']);
      array_push($items_quantity,$_SESSION['mi32q']);
      array_push($item_price,$_SESSION['mi32p']);
      update_inerntory("mi32","mi32q");
    }
    if(!empty($_SESSION['mi33']))
    {
      array_push($items_taken,$_SESSION['mi33']);
      array_push($items_quantity,$_SESSION['mi33q']);
      array_push($item_price,$_SESSION['mi33p']);
      update_inerntory("mi33","mi33q");
    }
    if(!empty($_SESSION['mi34']))
    {
      array_push($items_taken,$_SESSION['mi34']);
      array_push($items_quantity,$_SESSION['mi34q']);
      array_push($item_price,$_SESSION['mi34p']);
      update_inerntory("mi34","mi34q");
    }
    if(!empty($_SESSION['mi35']))
    {
      array_push($items_taken,$_SESSION['mi35']);
      array_push($items_quantity,$_SESSION['mi35q']);
      array_push($item_price,$_SESSION['mi35p']);
      update_inerntory("mi35","mi35q");
    }
    if(!empty($_SESSION['mi36']))
    {
      array_push($items_taken,$_SESSION['mi36']);
      array_push($items_quantity,$_SESSION['mi36q']);
      array_push($item_price,$_SESSION['mi36p']);
      update_inerntory("mi36","mi36q");
    }
    if(!empty($_SESSION['mi37']))
    {
      array_push($items_taken,$_SESSION['mi37']);
      array_push($items_quantity,$_SESSION['mi37q']);
      array_push($item_price,$_SESSION['mi37p']);
      update_inerntory("mi37","mi37q");
    }
    if(!empty($_SESSION['mi38']))
    {
      array_push($items_taken,$_SESSION['mi38']);
      array_push($items_quantity,$_SESSION['mi38q']);
      array_push($item_price,$_SESSION['mi38p']);
      update_inerntory("mi38","mi38q");
    }
    if(!empty($_SESSION['mi39']))
    {
      array_push($items_taken,$_SESSION['mi39']);
      array_push($items_quantity,$_SESSION['mi39q']);
      array_push($item_price,$_SESSION['mi39p']);
      update_inerntory("mi39","mi39q");
    }
    if(!empty($_SESSION['mi40']))
    {
      array_push($items_taken,$_SESSION['mi40']);
      array_push($items_quantity,$_SESSION['mi40q']);
      array_push($item_price,$_SESSION['mi40p']);
      update_inerntory("mi40","mi40q");
    }

    $items_taken_string = "";
    for ($i=0 ; $i<count($items_taken) ; $i++)                                                                                                                                    
    {
      $items_taken_string .= $items_taken[$i]."*".$items_quantity[$i].":".$item_price[$i].","; 
    }

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "grocery";

    $conn = mysqli_connect($servername, $username, $password, $database);

    $sql2 = "insert into `coustomer_details`(`ID`, `coustomer_name`, `coustomer_contact_no`, `date`, `items_taken`, `total_amount`, `note`, `payment_paid`, `payment_status`, `payment_remaining`) VALUES (NULL, '".$coustomer_name."', '".$coustomer_contact_no."', '".$date."', '".$items_taken_string."', '".$total_amount."', '".$payment_mode."', '".$payment_paid."', '".$payment_status."', '".$payment_remaining."');";
  
    $result = mysqli_query($conn, $sql2);

    $sql = "Select * from coustomer_details";
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result))
    {
      $bill_no = $row['ID'];
    }

    $mpdf = new \Mpdf\Mpdf();
    $data = '';

    $data = "<body style='font-size: 12px;'><div style='width: 50%;'><table><tr><td><h2 style='text-align: center; margin:0px;'>Tirupati Super Shopee</h2>
    <h5 style='text-align: center; margin:0px;'>All Wholesale products Available</h5></td></tr></table>
    <span style='text-align: left; font-size: 10px;'>Shop no 12, Gurukrupa Apartment, Datta mandir road, Nasik road</span>
    <div >Contact No : 9270674447</div><hr style=' margin:02px;'>";
    
    
    $data .= "<b>Name : </b>".$coustomer_name."
    <b> M No : </b>".$coustomer_contact_no."
    <b> Date : </b>".$date."
    <b> Bill no : </b>".$bill_no."
    <hr style=' margin:02px; margin-bottom:10px;'>
    
    
    <table style=' width:100%; text-align: left; '>
        
    ";
    
    for($i=0;$i<count($items_taken);$i++)
    {
      $j = $items_taken[$i];
      $y = $items_quantity[$i];
      $z = $item_price[$i];
      $data .= "<tr><td >".$j."</td><td >".$y."</td><td style=' text-align: right; '>".$z."</td></tr>";
    }
    
    
    $data .= "</table><hr><div style=\"margin-top: 1px;  text-align: right;\">Total amount : <b>".$total_amount."</b></div>
    <hr style=' margin:02px;'>
    <div>Note : ".$payment_mode."</div>
    <div>Amount Paid : ".$payment_paid."</div>
    <div style='text-align: center;'><B>Thank you for your Trust</b></div><div style='text-align: center;'> Visit Again</div>
    </div>
    
    </body>";
    
    $mpdf->WriteHTML($data);

    $mpdf->output($bill_no,"I");
    
  
?>