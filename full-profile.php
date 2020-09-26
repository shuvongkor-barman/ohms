<?php
session_start();
$dbconnect = new mysqli('localhost', 'root', 'rootpassword', 'diuohmsx_hostel');
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<title>Print Student  Information | DIU OHMS </title>
<link href="hostel.css" rel="stylesheet" type="text/css">

</head>

<body>

<div id="mainContent">

  <table id="printData">
          <?php 
                  $ret = mysqli_query($dbconnect, "SELECT * FROM registration where emailid = '".$_GET['id']."'");
                
              while($row=mysqli_fetch_array($ret)){
          ?>



          <tr>
              <th colspan="2"><?php echo ucfirst($row['firstName']);?> <?php echo ucfirst($row['lastName']);?>'S <span class="font1"> information &raquo;</span> </th>
          </tr>
          <tr>
              <td>Reg Date : </td>
              <td><?php echo $row['postingDate'];?> </td>
          </tr>
          <tr>
              <th colspan="2">Room Related Info &raquo; </th>
          </tr>      
          

          <tr>
              <td>Room No. : </td>

              <td><?php echo $row['roomno'];?></td>
          </tr>
          <tr>
              <td>Seater : </td>

              <td><span class="comb-value"><?php echo $row['seater'];?></span></td>
          </tr>

          <tr>
              <td>Fees PM : </td>
              <td><?php echo $fpm=$row['feespm'];?></td>
          </tr>
          <tr>
              <td>Food Status: </td>
              <td><?php if($row['foodstatus']==0)
          {
            echo "Without Food";
          }
          else
          {
            echo "With Food";
          }
                                ;?></td>
          </tr>
          <tr>
              <td>Staying From: </td>
              <td><?php echo $row['stayfrom'];?></td>
          </tr>
          <tr>
              <td>Duration: </td>
              <td><?php echo $dr=$row['duration'];?></td>
          </tr>
          <tr>
              <td>Total Fee: </td>
              <td>
                  <?php if($row['foodstatus']==1)
                                { 
                                  $fd=2000; 
                                  echo (($fd+$fpm)*$dr);
                                }
                                  else
                                  {
                                    echo $dr*$fpm;
                                  }
                                ?></td>
          </tr>
          <tr>
              <th colspan="2">Personal Info &raquo; </th>
          </tr>
          <tr>
              <td>Course: </td>
              <td><?php echo $row['course'];?></td>
          </tr>

          <tr>
              <td>Reg No: </td>
              <td><?php echo $row['regno'];?></td>
          </tr>

          <tr>
              <td>Full Name: </td>
              <td><?php echo $row['firstName'];?> <?php echo $row['middleName'];?> <?php echo $row['lastName'];?></td>
          </tr>

          <tr>
              <td>Gender: </td>
              <td><?php echo $row['gender'];?></td>
          </tr>

          <tr>
              <td>Contact No: </td>
              <td><?php echo $row['contactno'];?></td>
          </tr>

          <tr>
              <td>Email ID: </td>
              <td><?php echo $row['emailid'];?></td>
          </tr>

          <tr>
              <td>Emergency Contact: </td>
              <td><?php echo $row['egycontactno'];?></td>
          </tr>

          <tr>
              <td>Guardian Name: </td>
              <td><?php echo $row['guardianName'];?></td>
          </tr>

          <tr>
              <td>Guardian Relation: </td>
              <td><?php echo $row['guardianRelation'];?></td>
          </tr>

          <tr>
              <td>Guardian Contact: </td>
              <td><?php echo $row['guardianContactno'];?></td>
          </tr>
          <tr>
              <th colspan="2">Current Address &raquo; </th>
          </tr>
          <tr>
              <td>Address: </td>
              <td><?php echo $row['corresAddress'];?></td>
          </tr>

          <tr>
              <td>City: </td>
              <td><?php echo $row['corresCIty'];?></td>
          </tr>

          <tr>
              <td>Division: </td>
              <td><?php echo $row['corresState'];?></td>
          </tr>

          <tr>
              <td>Postal Code: </td>
              <td><?php echo $row['corresPincode'];?></td>
          </tr>
          <tr>
              <th colspan="2">Permanent Address &raquo; </th>
          </tr>
          <tr>
              <td>Address: </td>
              <td><?php echo $row['pmntAddress'];?></td>
          </tr>

          <tr>
              <td>City: </td>
              <td><?php echo $row['pmntCity'];?></td>
          </tr>

          <tr>
              <td>Division: </td>
              <td><?php echo $row['pmnatetState'];?></td>
          </tr>

          <tr>
              <td>Postal Code: </td>
              <td><?php echo $row['pmntPincode'];?></td>
          </tr>
          <tr>
              <td>Division: </td>
              <td><?php echo $row['pmnatetState'];?></td>
          </tr>
          <?php } ?>     
      
    
      </table>


  <div class="printSection">
    <input id="printpagebutton" type="button" value="Print this page" onclick="printpage()"/>
    <input id="closepagebutton" type="button" value="Close this page" onclick="closepage()"/>
 
  </div>
</div>

</body>

<script type="text/javascript">
    function printpage() {
        //Get the print button and put it into a variable   
        var printButton = document.getElementById("printpagebutton");
		   var closeButton = document.getElementById("closepagebutton");
        //Set the print button visibility to 'hidden' 
        printButton.style.visibility = 'hidden';
		    closeButton.style.visibility = 'hidden';
        
        var printText = document.getElementById("printData");
        printText.style.fontSize = '11px';
        
        //Print the page content
        window.print()
        //Set the print button to 'visible' again 
        //[Delete this line if you want it to stay hidden after printing]
        printButton.style.visibility = 'visible';
		    closeButton.style.visibility = 'visible';
        printText.style.fontSize = 'inherit';
    }
	
	function closepage() { 
        window.close();
         }

</script>
</html>
