<?php
session_start();
require_once('library.php');

//echo $rand;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Admin</title>
<link href="css/mystyle.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link href="new.css" rel="stylesheet">

<style type="text/css">

.ds_box {
	background-color: #FFF;
	border: 1px solid #000;
	position: absolute;
	z-index: 32767;
}

.ds_tbl {
	background-color: #FFF;
}

.ds_head {
	background-color: #333;
	color: #FFF;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 13px;
	font-weight: bold;
	text-align: center;
	letter-spacing: 2px;
}

.ds_subhead {
	background-color: #CCC;
	color: #000;
	font-size: 12px;
	font-weight: bold;
	text-align: center;
	font-family: Arial, Helvetica, sans-serif;
	width: 32px;
}

.ds_cell {
	background-color: #EEE;
	color: #000;
	font-size: 13px;
	text-align: center;
	font-family: Arial, Helvetica, sans-serif;
	padding: 5px;
	cursor: pointer;
}

.ds_cell:hover {
	background-color: #F3F3F3;
} /* This hover code won't work for IE */

</style>
<link type="text/css" rel="stylesheet" href="css/style.htm">
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
-->
</style>

<style type="text/css">
<!--
.style1 {
	font-size: 15px;
	font-weight: bold;
	color: #003399;
}
-->
</style>
<script type="text/JavaScript">
<!--
function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_validateForm() { //v4.0
  var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
  for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=MM_findObj(args[i]);
    if (val) { nm=val.name; if ((val=val.value)!="") {
      if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
        if (p<1 || p==(val.length-1)) errors+='- '+nm+' must contain an e-mail address.\n';
      } else if (test!='R') { num = parseFloat(val);
        if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';
        if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
          min=test.substring(8,p); max=test.substring(p+1);
          if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
    } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' is required.\n'; }
  } if (errors) alert('The following error(s) occurred:\n'+errors);
  document.MM_returnValue = (errors == '');
}
//-->
</script>
</head>

<body>

<!-- Navigation -->
  <nav class="navbar navbar-expand-md sticky-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="http://localhost/dbms%20j%20component"><img src="images/logo.png"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="http://localhost/dbms%20j%20component">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.php">Admin Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

	</td>
  </tr>

  <tr>
    <td bgcolor="#FFFFFF">


<table class="ds_box" id="ds_conclass" style="display: none;" cellpadding="0" cellspacing="0">
  <tbody><tr>
    <td id="ds_calclass"> </td>
  </tr>
</tbody></table>
<script type="text/javascript">
// <!-- <![CDATA[

</script>
 <br/>
  <table border="0" align="center" width="100%">
    <tbody>
	<tr>
      <td class="Partext1" bgcolor="F9F5F5" align="center"><span class="headtext13 h2">Add Courier</span></td>
    </tr>

  </tbody>
  </table>
<form action="process.php?action=add-courier" method="post" name="frmShipment" >
<div class="gentxt" align="right">
<table border="0" cellpadding="1" cellspacing="1" align="center" width="83%">
<tbody><tr>
<td width="60%">&nbsp;</td>
<td width="40%"><div align="right"></div></td>
</tr>
</tbody></table>
</div>
<table border="0" cellpadding="0" cellspacing="0" align="center" width="75%">
  <tbody>
  <tr>

    <td><table border="0" cellpadding="0" cellspacing="0" align="center" width="98%">
      <tbody><tr>
        <td colspan="2" height="4"></td>
      </tr>
      <tr>
        <td height="18">&nbsp;</td>
      </tr>
      <tr>
        <td><table class="Partext1" cellpadding="2" cellspacing="2" align="center" width="100%">
          <tbody><tr>
            <td colspan="3" class="TrackMediumBlue" align="right"><div class="gentxt" align="right">
                <div class="headtext13" align="left"><strong class="h5">DETAILS </strong></div>
            </div></td>
          </tr>
          <tr>
            <td class="TrackMediumBlue h6" align="right" width="138">Customer ID   :</td>
            <td>&nbsp;</td>
            <td>
			<input name="customerid"  maxlength="100" size="40" type="TEXT" class="form-control">
                </td>
          </tr>
          <tr>
            <td class="TrackMediumBlue h6" align="right" width="138">ITEM ID   :</td>
            <td>&nbsp;</td>
            <td>
			<input name="itemid"  maxlength="100" size="40" type="TEXT" class="form-control">
                </td>
          </tr>
          <tr>
            <td class="TrackMediumBlue h6" align="right">STREET   :</td>
            <td>&nbsp;</td>
            <td><input name="Street" id="Street" maxlength="13" size="40" type="TEXT" class="form-control"></td>
          </tr>
          <tr>
            <td class="TrackMediumBlue h6" align="right">ADDRESS  :</td>
            <td>&nbsp;</td>
            <td><span class="REDLink">
              <textarea name="receiveraddress" cols="27" rows="2" id="receiveraddress" class="form-control"></textarea>
              *</span></td>
          </tr>
          <tr>
            <td class="TrackMediumBlue" align="right">&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td colspan="3" class="TrackMediumBlue" align="right"><div class="headtext13" align="left"><strong class="h5">MORE ABOUT THE WHAT YOU WANT </strong></div></td>
          </tr>
          <tr>
            <td class="TrackMediumBlue h6" align="right">QUANTITY OF ITEMS </td>
            <td>&nbsp;</td>
            <td><input name="Quantity" id="Quantity" maxlength="100" size="40" type="TEXT" class="form-control">
                <span class="REDLink">*</span></td>
          </tr>
          <tr>
            <td class="TrackMediumBlue h6" align="right">WEIGHT: </td>
            <td>&nbsp;</td>
            <td><input name="weight" id="weight" maxlength="13" size="40" type="TEXT" class="form-control"></td>
          </tr>

          <tr>
            <td class="TrackMediumBlue" align="right">&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td colspan="3" class="TrackMediumBlue" align="right"><div class="headtext13" align="left"><strong class="h5">MODE </strong></div></td>
          </tr>

          <tr>
            <td class="TrackMediumBlue h6" align="right">Type of Shipment  :</td>
            <td>&nbsp;</td>
            <td><select id="Shipment-type" name="Shipment-type" class="form-control">
                <option value="Documents" selected="selected">Documents</option>
                <option value="Parcel">Parcel</option>
                <option value="Sentiments">Sentiments</option>
            </select>
			</td>
          </tr>
          <tr>
            <td class="TrackMediumBlue h6" align="right">Booking Mode :</td>
            <td>&nbsp;</td>
            <td><select name="Bookingmode" id="Bookingmode" class="form-control">
                <option selected="selected" value="HOW DID YOU PAY">HOW DID YOU PAY</option>
                <option value="ONLINE">ONLINE</option>
                <option value="OFFLINE">OFFLINE</option>
            </select></td>
          </tr>
          <tr>
            <td align="right">&nbsp;</td>
            <td>&nbsp;</td>
            <td><input name="Submit" type="submit" onClick="MM_validateForm('customerid','','R','itemid','','R','street','','R','quantity','','R','weight','','R','receiveraddress','','R','Bookingmode','','R','shipment-type,'','R');return document.MM_returnValue" value="Add Courier" class="form-control btn btn-info"></td>
          </tr>
        </tbody></table></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
    </tbody></table></td>

  </tr>

</tbody></table>
<br>
</form>



	</td>
  </tr>
  <tr>
    <td><table border="0" cellpadding="0" cellspacing="0" align="center" width="900">
  <tbody><tr>
    <td bgcolor="" height="40" width="476">&nbsp;</td>
    <td bgcolor="" width="304"><div align="right"></div></td>
  </tr>
</tbody></table>
</td>
  </tr>
</tbody></table>

<!--- Connect -->
	<footer id="connect">
        <div class="container-fluid padding">
          <div class="row text-center">
            <div class="col-md-4">
              <a class="navbar-brand" href="#"><img src="images/logo.png"></a>
              <hr class="light">
              <p>999-999-9999</p>
              <p>email@gmail.com</p>
              <p>Dtreet name</p>
              <p>City, State, 00000</p>
            </div>
            <div class="col-md-4">
              <hr class="light">
              <h5>Our hours</h5>
              <hr class="light">
              <p>Monday: 9am to 5pm</p>
              <p>Saturday: 10am to 6pm</p>
              <p>Sunday closed</p>
            </div>
            <div class="col-md-4">
              <hr class="light">
              <h5>Service Area</h5>
              <hr class="light">
              <p>City, State, 00000</p>
              <p>City, State, 00000</p>
              <p>City, State, 00000</p>
              <p>City, State, 00000</p>
            </div>
          </div>
        </div>
      </footer>

</body></html>
