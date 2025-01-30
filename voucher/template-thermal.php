																								
<style>
  body {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh; /* Full viewport height */
    margin: 0;
    font-family: 'Arial', sans-serif;
    text-align: center; /* Ensure text inside table is centered */
    background-color: #f9f9f9; /* Optional background color */
  }

  .voucher {
    width: 100%;
    max-width: 850px; /* Set a max width for the table */
    border: 2px solid black;
    padding: 10px;
    box-sizing: border-box;
  }

  .voucher td {
    font-size: 18px; /* Increase font size */
    font-weight: bold;
    padding: 5px;
  }

  .voucher .qrcode {
    height: 180px; /* Increase QR code size */
    width: 180px;
  }

  .voucher td.border {
    border: 1px solid black;
  }
</style>


<table class="voucher" style=" width: 100%;">
  <tbody>
<!-- Logo Hotspotname -->
    <tr>
      <td style="text-align: center; font-size: 63px; font-weight:bold;">Pisowifi sa Abbey Road (Store 1)</td>
    </tr>
    <tr>
      <td style="text-align: center; font-size: 63px; font-weight:bold;"><?= date("Y-m-d h:i:sa") ?></td>
    </tr>
	<tr>
      <td style="text-align: center; font-size: 80px; font-weight:bold; border-bottom: 1px black solid; border-top: 1px black solid;"><br><?= $username; ?><br><br></td>
    </tr>
	<tr>
      <td style="text-align: center; font-size: 63px; font-weight:bold;"><?= $validity; ?> <?= $price; ?></td>
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

  </tbody>
    </table>
      </td>
    </tr>
  </tbody>
</table>	        	        	        	        
