																								
<style>
  body {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
    font-family: 'Arial', sans-serif;
  }

  .voucher {
    width: 250px; /* Increase width */
    padding: 10px;
  }

  .voucher td {
    text-align: center;
    font-size: 18px; /* Increase font size */
  }

  .voucher .qrcode {
    height: 180px; /* Increase QR code size */
    width: 180px;
  }
</style>

<table class="voucher" style=" width: 100%;">
  <tbody>
<!-- Logo Hotspotname -->
    <tr>
      <td style="text-align: center; font-size: 22px; font-weight:bold;"><?= $hotspotname; ?> (Store 1)fffff</td>
    </tr>
    <tr>
      <td style="text-align: center; font-size: 18px; font-weight:bold;"><?= date("Y-m-d h:i:sa") ?></td>
    </tr>
	<tr>
      <td style="text-align: center; font-size: 30px; font-weight:bold; border-bottom: 1px black solid; border-top: 1px black solid;"><br><?= $username; ?><br><br></td>
    </tr>
	<tr>
      <td style="text-align: center; font-size: 22px; font-weight:bold;"><?= $validity; ?> <?= $price; ?></td>
    </tr>
<!-- /  -->
    <tr>
      <td>
    <table style=" text-align: center; width: 170px; font-size: 12px;">
  <tbody>
<!-- Username Password QR    -->
    <tr>
      <td>
        <table style="width:100%; ">
<!-- Username = Password    -->
<?php if ($usermode == "vc") { ?>
       
<!-- /  -->
<!-- Username & Password  -->
<?php 
} elseif ($usermode == "up") { ?>
        <tr>
          <td style="width: 50%">Username</td>
          <td >Password</td>
        </tr>
        <tr style="font-size: 14px;">
          <td style="border: 1px solid black; font-weight:bold;"><?= $username; ?></td>
          <td style="border: 1px solid black; font-weight:bold;"><?= $password; ?></td>
        </tr>
<?php 
} ?>
<!-- /  -->
    </tr>
      </td>
<!-- QR Code    -->
<?php if ($qr == "yes") { ?>
      <td colspan="2">
	<?= $qrcode ?>
      </td>
      </tr>
<?php 
} ?>
<!-- /  -->
   
   
<!-- /  -->
  </tbody>
    </table>
      </td>
    </tr>
  </tbody>
</table>	        	        	        	        
