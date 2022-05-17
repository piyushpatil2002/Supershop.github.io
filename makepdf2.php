<?php
  require_once __DIR__ . "/vendor/autoload.php";

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "grocery";

    $conn = mysqli_connect($servername, $username, $password, $database);
    
    $sql = "Select * from coustomer_details where id=".$_POST["upbid"].";";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    $bill_no = $row['ID'];
    $coustomer_name = $row['coustomer_name'];
    $coustomer_contact_no = $row['coustomer_contact_no'];
    $date = $row['date'];
    $payment_status = $row['payment_status'];
    $payment_mode = $row['note'];
    $payment_paid = $row['payment_paid'];
    $items_taken = array();
    $items_quantity = array();
    $item_price = array();
    $total_amount = $row['total_amount'];
    $payment_remaining = $row['payment_remaining'] ;
    $string_items = $row['items_taken'];
    $item = "";
    $i =0;
    echo $string_items;
    for($i = 0 ; $i < strlen($string_items); $i++)
    {
      $c = $string_items[$i];
      if($c == ':')
      {
        array_push($items_taken,$item);
        $item ="";
      }
      elseif($c == '*')
      {
        array_push($items_quantity,$item);
        $item ="";
      }
      elseif($c == ',')
      {
        array_push($item_price,$item);
        $item ="";
      }
      else
      {
        $item .= $c;
      }
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
      $data .= "<tr><td >".$y."</td><td >".$j."</td><td style=' text-align: right; '>".$z."</td></tr>";
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