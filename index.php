<?php
  function collect_itemName_from_database()
  {
    $ar_name = array(); 
    $ar_name_taken = array();
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
                          array_push($ar_name,$row['Item_name']);
                        }

                        foreach ($ar_name as $i)
                        {
                          $counter = 0;
                          foreach($ar_name_taken as $j)
                          {
                            if($i == $j)
                            {
                              $counter ++;
                            }
                          }
                          if($counter == 0)
                          {
                            array_push($ar_name_taken,$i);
                          }
                        }
                        foreach ($ar_name_taken as $j)
                        {
                          echo "<option>".$j."</option>";
                        }
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
  
  <div class="container">
    <form action="confirmbill.php" method="post">
    <div id="Main-container">
      <div id="coustomer-name">
        <label for="name">Coustomer Name </label>
        <input type="text" id="name" placeholder="Enter coustomer name" name="coustomer_name" onfocus="changecolourof('name')" onblur="resetcolourof('name')">
      </div>
      <div id="customer-no">
      <label for="contact">Coustomer Contact No </label>
        <input type="text" id="contact" placeholder="Enter coustomer contact No" name="coustomer_contact_no" onfocus="changecolourof('contact')" onblur="resetcolourof('contact')">
      <div style="margin-top : 20px;">
        <label for="dat">Payment Date</label>
        <input type="text" id="dat" name="date" onfocus="changecolourof('dat')" onblur="resetcolourof('dat')">
      </div>
      </div>
      <div id="Perticulars">
        <span id="Perticular-heading">Item's List</span>   <hr>
<div id="Perticulars2">
        <table>
        <tr>
        <th class="item-name">Item Name</th>
        <th class="quantity">Quantity</th>
        <th class="price">Price</th>
        </tr>
        <tr>
           <td class="item-name"><input type="text"  list="itemlist" name="mi1">
            <datalist id="itemlist">
            <?php
              collect_itemName_from_database();       
            ?>
           </datalist>
            
            </td>
            <td class="quantity"><div id="quantity"> <datalist id="dl1"></datalist>  <input list="dl1" type="text" style="width: 100px;" id="mi1q" name="mi1q"  list="dl1"> </div></td>
            <td class="price"><div id="price1"> <input type="text" style="width: 100px;" id="mi1p" name="mi1p"> </div></td>
          </tr>
        </table>
        </div>
        <div id="mid2" style="display:none">
            <table>
            <tr >
            <td class="item-name"><input type="text" list="mitemlist" name="mi2">
            <datalist id="mitemlist">
            <?php
              collect_itemName_from_database();       
            ?>
           </datalist>
            
            </td>
            <td class="quantity"><div id="quantity"> <datalist id="dl2"></datalist> <input list="dl2"  type="text" style="width: 100px;" id="mi2q" name="mi2q"> </div></td>
            <td class="price"><div id="price2"> <input type="text" style="width: 100px;" id="mi2p" name="mi2p"> </div></td>
          </tr>
            </table>
          </div>
        <div id="mid3" style="display:none">
            <table>
            <tr>
           <td class="item-name"><input type="text"  list="mitemlist" name="mi3">
            <datalist id="mitemlist">
            <?php
              collect_itemName_from_database();       
            ?>
           </datalist>
            
            </td>
            <td class="quantity"><div id="quantity"> <datalist id="dl3"></datalist> <input list="dl3"  type="text" style="width: 100px;" id="mi3q" name="mi3q"> </div></td>
            <td class="price"><div id="price3"> <input type="text" style="width: 100px;" id="mi3p" name="mi3p"> </div></td>
          </tr>
            </table>
          </div>
        <div id="mid4" style="display:none">
            <table>
            <tr>
           <td class="item-name"><input type="text"  list="mitemlist" name="mi4">
            <datalist id="mitemlist">
            <?php
              collect_itemName_from_database();       
            ?>
           </datalist>
            
            </td>
            <td class="quantity"><div id="quantity"> <datalist id="dl4"></datalist> <input list="dl4"  type="text" style="width: 100px;" id="mi4q" name="mi4q"> </div></td>
            <td class="price"><div id="price4"> <input type="text" style="width: 100px;" id="mi4p" name="mi4p"> </div></td>
          </tr>
            </table>
          </div>
        <div id="mid5" style="display:none">
            <table>
            <tr>
           <td class="item-name"><input type="text"  list="mitemlist" name="mi5">
            <datalist id="mitemlist">
            <?php
              collect_itemName_from_database();       
            ?>
           </datalist>
            
            </td>
            <td class="quantity"><div id="quantity"> <datalist id="dl5"></datalist> <input list="dl5"  type="text" style="width: 100px;" id="mi5q" name="mi5q"> </div></td>
            <td class="price"><div id="price5"> <input type="text" style="width: 100px;" id="mi5p" name="mi5p"> </div></td>
          </tr>
            </table>
          </div>
        <div id="mid6" style="display:none">
            <table>
            <tr>
           <td class="item-name"><input type="text"  list="mitemlist" name="mi6">
            <datalist id="mitemlist">
            <?php
              collect_itemName_from_database();       
            ?>
           </datalist>
            
            </td>
            <td class="quantity"><div id="quantity"> <datalist id="dl6"></datalist> <input  list="dl6" type="text" style="width: 100px;" id="mi6q" name="mi6q"> </div></td>
            <td class="price"><div id="price6"> <input type="text" style="width: 100px;" id="mi6p" name="mi6p"> </div></td>
          </tr>
            </table>
          </div>
        <div id="mid7" style="display:none">
            <table>
            <tr>
           <td class="item-name"><input type="text"  list="mitemlist" name="mi7">
            <datalist id="mitemlist">
            <?php
              collect_itemName_from_database();       
            ?>
           </datalist>
            
            </td>
            <td class="quantity"><div id="quantity"> <datalist id="dl7"></datalist> <input  list="dl7" type="text" style="width: 100px;" id="mi7q" name="mi7q"> </div></td>
            <td class="price"><div id="price7"> <input type="text" style="width: 100px;" id="mi7p" name="mi7p"> </div></td>
          </tr>
            </table>
          </div>
        <div id="mid8" style="display:none">
            <table>
            <tr>
           <td class="item-name"><input type="text"  list="mitemlist" name="mi8">
            <datalist id="mitemlist">
            <?php
              collect_itemName_from_database();       
            ?>
           </datalist>
            
            </td>
            <td class="quantity"><div id="quantity"> <datalist id="dl8"></datalist> <input list="dl8"  type="text" style="width: 100px;" id="mi8q" name="mi8q"> </div></td>
            <td class="price"><div id="price8"> <input type="text" style="width: 100px;" id="mi8p" name="mi8p"> </div></td>
          </tr>
            </table>
          </div>
        <div id="mid9" style="display:none">
            <table>
            <tr>
           <td class="item-name"><input type="text"  list="mitemlist" name="mi9">
            <datalist id="mitemlist">
            <?php
              collect_itemName_from_database();       
            ?>
           </datalist>
            
            </td>
            <td class="quantity"><div id="quantity"> <datalist id="dl9"></datalist> <input list="dl9"  type="text" style="width: 100px;" id="mi9q" name="mi9q"> </div></td>
            <td class="price"><div id="price9"> <input type="text" style="width: 100px;" id="mi9p" name="mi9p"> </div></td>
          </tr>
            </table>
          </div>
        <div id="mid10" style="display:none">
            <table>
            <tr>
           <td class="item-name"><input type="text"  list="mitemlist" name="mi10">
            <datalist id="mitemlist">
            <?php
              collect_itemName_from_database();       
            ?>
           </datalist>
            
            </td>
            <td class="quantity"><div id="quantity"> <datalist id="dl10"></datalist> <input list="dl10"  type="text" style="width: 100px;" id="mi10q" name="mi10q"> </div></td>
            <td class="price"><div id="price10"> <input type="text" style="width: 100px;" id="mi10p" name="mi10p"> </div></td>
          </tr>
            </table>
          </div>
        <div id="mid11" style="display:none">
            <table>
            <tr>
           <td class="item-name"><input type="text"  list="mitemlist" name="mi11">
            <datalist id="mitemlist">
            <?php
              collect_itemName_from_database();       
            ?>
           </datalist>
            
            </td>
            <td class="quantity"><div id="quantity"> <datalist id="dl11"></datalist> <input list="dl11"  type="text" style="width: 100px;" id="mi11q" name="mi11q"> </div></td>
            <td class="price"><div id="price11"> <input type="text" style="width: 100px;" id="mi11p" name="mi11p"> </div></td>
          </tr>
            </table>
          </div>
        <div id="mid12" style="display:none">
            <table>
            <tr>
           <td class="item-name"><input type="text"  list="mitemlist" name="mi12">
            <datalist id="mitemlist">
            <?php
              collect_itemName_from_database();       
            ?>
           </datalist>
            
            </td>
            <td class="quantity"><div id="quantity"> <datalist id="dl12"></datalist> <input list="dl12"  type="text" style="width: 100px;" id="mi12q" name="mi12q"> </div></td>
            <td class="price"><div id="price12"> <input type="text" style="width: 100px;" id="mi12p" name="mi12p"> </div></td>
          </tr>
            </table>
          </div>
        <div id="mid13" style="display:none">
            <table>
            <tr>
           <td class="item-name"><input type="text"  list="mitemlist" name="mi13">
            <datalist id="mitemlist">
            <?php
              collect_itemName_from_database();       
            ?>
           </datalist>
            
            </td>
            <td class="quantity"><div id="quantity"> <datalist id="dl13"></datalist> <input list="dl13"  type="text" style="width: 100px;" id="mi13q" name="mi13q"> </div></td>
            <td class="price"><div id="price13"> <input type="text" style="width: 100px;" id="mi13p" name="mi13p"> </div></td>
          </tr>
            </table>
          </div>
        <div id="mid14" style="display:none">
            <table>
            <tr>
           <td class="item-name"><input type="text"  list="mitemlist" name="mi14">
            <datalist id="mitemlist">
            <?php
              collect_itemName_from_database();       
            ?>
           </datalist>
            
            </td>
            <td class="quantity"><div id="quantity"> <datalist id="dl14"></datalist> <input list="dl14"  type="text" style="width: 100px;" id="mi14q" name="mi14q"> </div></td>
            <td class="price"><div id="price14"> <input type="text" style="width: 100px;" id="mi14p" name="mi14p"> </div></td>
          </tr>
            </table>
          </div>
        <div id="mid15" style="display:none">
            <table>
            <tr>
           <td class="item-name"><input type="text"  list="mitemlist" name="mi15">
            <datalist id="mitemlist">
            <?php
              collect_itemName_from_database();       
            ?>
           </datalist>
            
            </td>
            <td class="quantity"><div id="quantity"> <datalist id="dl15"></datalist> <input list="dl15"  type="text" style="width: 100px;" id="mi15q" name="mi15q"> </div></td>
            <td class="price"><div id="price15"> <input type="text" style="width: 100px;" id="mi15p" name="mi15p"> </div></td>
          </tr>
            </table>
          </div>
        <div id="mid16" style="display:none">
            <table>
            <tr>
           <td class="item-name"><input type="text"  list="mitemlist" name="mi16">
            <datalist id="mitemlist">
            <?php
              collect_itemName_from_database();       
            ?>
           </datalist>
            
            </td>
            <td class="quantity"><div id="quantity"> <datalist id="dl16"></datalist> <input list="dl16"  type="text" style="width: 100px;" id="mi16q" name="mi16q"> </div></td>
            <td class="price"><div id="price16"> <input type="text" style="width: 100px;" id="mi16p" name="mi16p"> </div></td>
          </tr>
            </table>
          </div>
        <div id="mid17" style="display:none">
            <table>
            <tr>
           <td class="item-name"><input type="text"  list="mitemlist" name="mi17">
            <datalist id="mitemlist">
            <?php
              collect_itemName_from_database();       
            ?>
           </datalist>
            
            </td>
            <td class="quantity"><div id="quantity"> <datalist id="dl17"></datalist> <input list="dl17"  type="text" style="width: 100px;" id="mi17q" name="mi17q"> </div></td>
            <td class="price"><div id="price17"> <input type="text" style="width: 100px;" id="mi17p" name="mi17p"> </div></td>
          </tr>
            </table>
          </div>
        <div id="mid18" style="display:none">
            <table>
            <tr>
           <td class="item-name"><input type="text"  list="mitemlist" name="mi18">
            <datalist id="mitemlist">
            <?php
              collect_itemName_from_database();       
            ?>
           </datalist>
            
            </td>
            <td class="quantity"><div id="quantity"> <datalist id="dl18"></datalist> <input list="dl18"  type="text" style="width: 100px;" id="mi18q" name="mi18q"> </div></td>
            <td class="price"><div id="price18"> <input type="text" style="width: 100px;" id="mi18p" name="mi18p"> </div></td>
          </tr>
            </table>
          </div>
        <div id="mid19" style="display:none">
            <table>
            <tr>
           <td class="item-name"><input type="text"  list="mitemlist" name="mi19">
            <datalist id="mitemlist">
            <?php
              collect_itemName_from_database();       
            ?>
           </datalist>
            
            </td>
            <td class="quantity"><div id="quantity"> <datalist id="dl19"></datalist> <input list="dl19"  type="text" style="width: 100px;" id="mi19q" name="mi19q"> </div></td>
            <td class="price"><div id="price19"> <input type="text" style="width: 100px;" id="mi19p" name="mi19p"> </div></td>
          </tr>
            </table>
          </div>
        <div id="mid20" style="display:none">
            <table>
            <tr>
           <td class="item-name"><input type="text"  list="mitemlist" name="mi20">
            <datalist id="mitemlist">
            <?php
              collect_itemName_from_database();       
            ?>
           </datalist>
            
            </td>
            <td class="quantity"><div id="quantity"> <datalist id="dl20"></datalist> <input list="dl20"  type="text" style="width: 100px;" id="mi20q" name="mi20q"> </div></td>
            <td class="price"><div id="price20"> <input type="text" style="width: 100px;" id="mi20p" name="mi20p"> </div></td>
          </tr>
            </table>
          </div>
        <div id="mid21" style="display:none">
            <table>
            <tr>
           <td class="item-name"><input type="text"  list="mitemlist" name="mi21">
            <datalist id="mitemlist">
            <?php
              collect_itemName_from_database();       
            ?>
           </datalist>
            
            </td>
            <td class="quantity"><div id="quantity"> <datalist id="dl21"></datalist> <input list="dl21"  type="text" style="width: 100px;" id="mi21q" name="mi21q"> </div></td>
            <td class="price"><div id="price21"> <input type="text" style="width: 100px;" id="mi21p" name="mi21p"> </div></td>
          </tr>
            </table>
          </div>
        <div id="mid22" style="display:none">
            <table>
            <tr>
           <td class="item-name"><input type="text"  list="mitemlist" name="mi22">
            <datalist id="mitemlist">
            <?php
              collect_itemName_from_database();       
            ?>
           </datalist>
            
            </td>
            <td class="quantity"><div id="quantity"> <datalist id="dl22"></datalist> <input list="dl22"  type="text" style="width: 100px;" id="mi22q" name="mi22q"> </div></td>
            <td class="price"><div id="price22"> <input type="text" style="width: 100px;" id="mi22p" name="mi22p"> </div></td>
          </tr>
            </table>
          </div>
        <div id="mid23" style="display:none">
            <table>
            <tr>
           <td class="item-name"><input type="text"  list="mitemlist" name="mi23">
            <datalist id="mitemlist">
            <?php
              collect_itemName_from_database();       
            ?>
           </datalist>
            
            </td>
            <td class="quantity"><div id="quantity"> <datalist id="dl23"></datalist> <input  list="dl23" type="text" style="width: 100px;" id="mi23q" name="mi23q"> </div></td>
            <td class="price"><div id="price23"> <input type="text" style="width: 100px;" id="mi23p" name="mi23p"> </div></td>
          </tr>
            </table>
          </div>
        <div id="mid24" style="display:none">
            <table>
            <tr>
           <td class="item-name"><input type="text"  list="mitemlist" name="mi24">
            <datalist id="mitemlist">
            <?php
              collect_itemName_from_database();       
            ?>
           </datalist>
            
            </td>
            <td class="quantity"><div id="quantity"> <datalist id="dl24"></datalist> <input list="dl24"  type="text" style="width: 100px;" id="mi24q" name="mi24q"> </div></td>
            <td class="price"><div id="price24"> <input type="text" style="width: 100px;" id="mi24p" name="mi24p"> </div></td>
          </tr>
            </table>
          </div>
        <div id="mid25" style="display:none">
            <table>
            <tr>
           <td class="item-name"><input type="text"  list="mitemlist" name="mi25">
            <datalist id="mitemlist">
            <?php
              collect_itemName_from_database();       
            ?>
           </datalist>
            
            </td>
            <td class="quantity"><div id="quantity"> <datalist id="dl25"></datalist> <input  list="dl25" type="text" style="width: 100px;" id="mi25q" name="mi25q"> </div></td>
            <td class="price"><div id="price25"> <input type="text" style="width: 100px;" id="mi25p" name="mi25p"> </div></td>
          </tr>
            </table>
          </div>
        <div id="mid26" style="display:none">
            <table>
            <tr>
           <td class="item-name"><input type="text"  list="mitemlist" name="mi26">
            <datalist id="mitemlist">
            <?php
              collect_itemName_from_database();       
            ?>
           </datalist>
            
            </td>
            <td class="quantity"><div id="quantity"> <datalist id="dl26"></datalist> <input list="dl26"  type="text" style="width: 100px;" id="mi26q" name="mi26q"> </div></td>
            <td class="price"><div id="price26"> <input type="text" style="width: 100px;" id="mi26p" name="mi26p"> </div></td>
          </tr>
            </table>
          </div>
        <div id="mid27" style="display:none">
            <table>
            <tr>
           <td class="item-name"><input type="text"  list="mitemlist" name="mi27">
            <datalist id="mitemlist">
            <?php
              collect_itemName_from_database();       
            ?>
           </datalist>
            
            </td>
            <td class="quantity"><div id="quantity"> <datalist id="dl27"></datalist> <input list="dl27"  type="text" style="width: 100px;" id="mi27q" name="mi27q"> </div></td>
            <td class="price"><div id="price27"> <input type="text" style="width: 100px;" id="mi27p" name="mi27p"> </div></td>
          </tr>
            </table>
          </div>
        <div id="mid28" style="display:none">
            <table>
            <tr>
           <td class="item-name"><input type="text"  list="mitemlist" name="mi28">
            <datalist id="mitemlist">
            <?php
              collect_itemName_from_database();       
            ?>
           </datalist>
            
            </td>
            <td class="quantity"><div id="quantity"> <datalist id="dl28"></datalist> <input  list="dl28" type="text" style="width: 100px;" id="mi28q" name="mi28q"> </div></td>
            <td class="price"><div id="price28"> <input type="text" style="width: 100px;" id="mi28p" name="mi28p"> </div></td>
          </tr>
            </table>
          </div>
        <div id="mid29" style="display:none">
            <table>
            <tr>
           <td class="item-name"><input type="text"  list="mitemlist" name="mi29">
            <datalist id="mitemlist">
            <?php
              collect_itemName_from_database();       
            ?>
           </datalist>
            
            </td>
            <td class="quantity"><div id="quantity"> <datalist id="dl29"></datalist> <input  list="dl29" type="text" style="width: 100px;" id="mi29q" name="mi29q"> </div></td>
            <td class="price"><div id="price29"> <input type="text" style="width: 100px;" id="mi29p" name="mi29p"> </div></td>
          </tr>
            </table>
          </div>
        <div id="mid30" style="display:none">
            <table>
            <tr>
           <td class="item-name"><input type="text"  list="mitemlist" name="mi30">
            <datalist id="mitemlist">
            <?php
              collect_itemName_from_database();       
            ?>
           </datalist>
            
            </td>
            <td class="quantity"><div id="quantity"> <datalist id="dl30"></datalist> <input  list="dl30" type="text" style="width: 100px;" id="mi30q" name="mi30q"> </div></td>
            <td class="price"><div id="price30"> <input type="text" style="width: 100px;" id="mi30p" name="mi30p"> </div></td>
          </tr>
            </table>
          </div>
        <div id="mid31" style="display:none">
            <table>
            <tr>
           <td class="item-name"><input type="text"  list="mitemlist" name="mi31">
            <datalist id="mitemlist">
            <?php
              collect_itemName_from_database();       
            ?>
           </datalist>
            
            </td>
            <td class="quantity"><div id="quantity"> <datalist id="dl31"></datalist> <input  list="dl31" type="text" style="width: 100px;" id="mi31q" name="mi31q"> </div></td>
            <td class="price"><div id="price31"> <input type="text" style="width: 100px;" id="mi31p" name="mi31p"> </div></td>
          </tr>
            </table>
          </div>
        <div id="mid32" style="display:none">
            <table>
            <tr>
           <td class="item-name"><input type="text"  list="mitemlist" name="mi32">
            <datalist id="mitemlist">
            <?php
              collect_itemName_from_database();       
            ?>
           </datalist>
            
            </td>
            <td class="quantity"><div id="quantity"> <datalist id="dl32"></datalist> <input  list="dl32" type="text" style="width: 100px;" id="mi32q" name="mi32q"> </div></td>
            <td class="price"><div id="price32"> <input type="text" style="width: 100px;" id="mi32p" name="mi32p"> </div></td>
          </tr>
            </table>
          </div>
        <div id="mid33" style="display:none">
            <table>
            <tr>
           <td class="item-name"><input type="text"  list="mitemlist" name="mi33">
            <datalist id="mitemlist">
            <?php
              collect_itemName_from_database();       
            ?>
           </datalist>
            
            </td>
            <td class="quantity"><div id="quantity"> <datalist id="dl33"></datalist> <input  list="dl33" type="text" style="width: 100px;" id="mi33q" name="mi33q"> </div></td>
            <td class="price"><div id="price33"> <input type="text" style="width: 100px;" id="mi33p" name="mi33p"> </div></td>
          </tr>
            </table>
          </div>
        <div id="mid34" style="display:none">
            <table>
            <tr>
           <td class="item-name"><input type="text"  list="mitemlist" name="mi34">
            <datalist id="mitemlist">
            <?php
              collect_itemName_from_database();       
            ?>
           </datalist>
            
            </td>
            <td class="quantity"><div id="quantity"> <datalist id="dl34"></datalist> <input  list="dl34" type="text" style="width: 100px;" id="mi34q" name="mi34q"> </div></td>
            <td class="price"><div id="price34"> <input type="text" style="width: 100px;" id="mi34p" name="mi34p"> </div></td>
          </tr>
            </table>
          </div>
        <div id="mid35" style="display:none">
            <table>
            <tr>
           <td class="item-name"><input type="text"  list="mitemlist" name="mi35">
            <datalist id="mitemlist">
            <?php
              collect_itemName_from_database();       
            ?>
           </datalist>
            
            </td>
            <td class="quantity"><div id="quantity"> <datalist id="dl35"></datalist> <input list="dl35"  type="text" style="width: 100px;" id="mi35q" name="mi35q"> </div></td>
            <td class="price"><div id="price35"> <input type="text" style="width: 100px;" id="mi35p" name="mi35p"> </div></td>
          </tr>
            </table>
          </div>
        <div id="mid36" style="display:none">
            <table>
            <tr>
           <td class="item-name"><input type="text"  list="mitemlist" name="mi36">
            <datalist id="mitemlist">
            <?php
              collect_itemName_from_database();       
            ?>
           </datalist>
            
            </td>
            <td class="quantity"><div id="quantity"> <datalist id="dl36"></datalist> <input list="dl36"  type="text" style="width: 100px;" id="mi36q" name="mi36q"> </div></td>
            <td class="price"><div id="price36"> <input type="text" style="width: 100px;" id="mi36p" name="mi36p"> </div></td>
          </tr>
            </table>
          </div>
        <div id="mid37" style="display:none">
            <table>
            <tr>
           <td class="item-name"><input type="text"  list="mitemlist" name="mi37">
            <datalist id="mitemlist">
            <?php
              collect_itemName_from_database();       
            ?>
           </datalist>
            
            </td>
            <td class="quantity"><div id="quantity"> <datalist id="dl37"></datalist> <input  list="dl37" type="text" style="width: 100px;" id="mi37q" name="mi37q"> </div></td>
            <td class="price"><div id="price37"> <input type="text" style="width: 100px;" id="mi37p" name="mi37p"> </div></td>
          </tr>
            </table>
          </div>
        <div id="mid38" style="display:none">
            <table>
            <tr>
           <td class="item-name"><input type="text"  list="mitemlist" name="mi38">
            <datalist id="mitemlist">
            <?php
              collect_itemName_from_database();       
            ?>
           </datalist>
            
            </td>
            <td class="quantity"><div id="quantity"> <datalist id="dl38"></datalist> <input  list="dl38" type="text" style="width: 100px;" id="mi38q" name="mi38q"> </div></td>
            <td class="price"><div id="price38"> <input type="text" style="width: 100px;" id="mi38p" name="mi38p"> </div></td>
          </tr>
            </table>
          </div>
        <div id="mid39" style="display:none">
            <table>
            <tr>
           <td class="item-name"><input type="text"  list="mitemlist" name="mi39">
            <datalist id="mitemlist">
            <?php
              collect_itemName_from_database();       
            ?>
           </datalist>
            
            </td>
            <td class="quantity"><div id="quantity"> <datalist id="dl39"></datalist> <input  list="dl39" type="text" style="width: 100px;" id="mi39q" name="mi39q"> </div></td>
            <td class="price"><div id="price39"> <input type="text" style="width: 100px;" id="mi39p" name="mi39p"> </div></td>
          </tr>
            </table>
          </div>
        <div id="mid40" style="display:none">
            <table>
            <tr>
           <td class="item-name"><input type="text"  list="mitemlist" name="mi40">
            <datalist id="mitemlist">
            <?php
              collect_itemName_from_database();       
            ?>
           </datalist>
            
            </td>
            <td class="quantity"><div id="quantity"> <datalist id="dl40"></datalist> <input  list="dl40" list="dl40" type="text" style="width: 100px;" id="mi40q" name="mi40q"> </div></td>
            <td class="price"><div id="price40"> <input type="text" style="width: 100px;" id="mi40p" name="mi40p"> </div></td>
          </tr>
            </table>
          </div>


          

<button type="button" onclick="addboxesmanuel()">Add</button>

        <div id="total-amount">
          <button type="button" onclick="check_total()">check total amount</button>
          <input id="total-amt" type="text" name="total_amount" style="width: 100px;">
        </div>
        
        <div id="Payment-mode" style="font-size : 0.7em;">
        <label for="mode">Note </label>
        <input type="text" id="mode" name="payment_m" onfocus="changecolourof('mode')" onblur="resetcolourof('mode')">
      
      <span id="payment-paid">
        <label for="payment-paid-now">Payment paid </label>
        <input type="text" id="payment-paid-now" name="payment-paid" onfocus="changecolourof('payment-paid-now')" onblur="resetcolourof('payment-paid-now')">
      </span> 

      <span id="paid-or-not">
        <label for="paid-not">Payment Status</label>
        <select name="pon" id="paid-not">
          <option></option>
          <option>Paid</option>
          <option>Some amount paid</option>
          <option>Not paid</option>
        </select>
</span>
      </div>


        <div id="submit-button">
        <button type="submit" id="sbb">Create Bill</button>
        </div>
      </div>
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
