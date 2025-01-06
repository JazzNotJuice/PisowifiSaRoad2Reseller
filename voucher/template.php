																																																																																																																																																																																																																																																																																																																																																																																																																																																																																										<!-- MULAI -->

<style>
.qrcode{
		height:60px;
		width:60px;
}
</style> 
<div style="overflow:hidden;position:relative;padding: 0px;margin: 0;border: 1px solid #FFF3E0;width:190px;height:125px;float:left;-webkit-print-color-adjust: exact;">

	
 
<!-- <div style="position:absolute;margin-top:0;background:#2d7a2d;width:auto;color:#fff;font-weight:bold;font-family:Agency FB;font-size:18px;padding:2.5px 25px 2.5px 20px;border-radius:0 0 50px 0;"><span style="font-size:14px;margin-left:-15px;position:absolute;"> </span><span style="font-size:35px;"><?= $price; ?></span></div> -->


<!-- PRICE -->
	
<div style="position:absolute;margin-top:0;background:#2d7a2d;width:auto;color:#fff;font-weight:bold;font-family:Agency FB;font-size:18px;padding:2.5px 25px 2.5px 20px;border-radius:0 0 50px 0;"><span style="font-size:14px;margin-left:-15px;position:absolute;"> </span><span style="font-size:35px;">
   <?= 	
$pricefinal = substr($price, 0, strpos($price, ".")); 	
?>	
    </span></div>

<!-- PRICE -->
<!-- AKUN -->
<div style="position:absolute;top:40px;right:0px;display:inline;color:#fff;text-align:right;">
<!-- Voucher : Username = Password  -->
<div style="padding:0px;text-align:right;font-weight:bold;font-size:11px;font-family:Courier New;width:90px;background:#333;color:#fff;padding:2.5px 5px;margin-bottom:2.5px;">VOUCHER</div>
<div style="padding:0px 5px 0px 0px;border-top:1px solid #fff;border-bottom:1px solid #fff;text-align:right;font-weight:bold;font-size:15px;font-family:Courier New;"><?= $username; ?></div>
</div>
<!-- AKUN -->
<!-- AKTIF & LIMIT -->
<div style="position:absolute;top:10px;right:0px;display:inline;color:#fff;text-align:right;">
<div style="padding:0 2.5px;text-align:right;font-size:20px;font-weight:bold;color:#333333;">
<span style="text-transform: uppercase;"><?= $validity; ?></span>
</div>

</div>
<!-- AKTIF & LIMIT -->
<!-- QRCODE-->
<!-- QRCODE-->
<!-- LOGO-->
<!--<img style="position:absolute;bottom:5px;left:5px;display:inline;margin:5px 0 0 0px;width:60px;height:60px;" src="<?= $logo; ?>" alt="logo"> -->
<div style="font-size:9px;font-weight:bold; position:absolute;bottom:2px;left:5px;display:inline;margin:5px 0 0 0px;" alt="logo"><center>Scan to connect<br/><?= $qrcode ?></center></div>
	<!-- -->
<!-- LOGO-->
<!-- LOGIN-->
<div style="position:absolute;bottom:0px;right:5px;display:inline;color:#000;font-size:9px;font-weight:bold;margin:0 -2.5px;padding:2.5px;width:60%;text-align:right;">
	<span style="color:#a10000;font-size:10px;"><b>Step1:</b></span> Connect to <br> "Pisowifi sa Road 2" <br> 
<span style="color:#a10000;font-size:10px;"><b>Step2:</b></span> Go to <?= $dnsname; ?> and enter code
</div>
<!-- LOGIN-->
<!-- BG-->
<div style="overflow: hidden;padding: 0px;float:left;">
<div style="margin-top:-100px;width: 0; height: 0; border-top: 230px solid transparent;border-left: 50px solid transparent;border-right:140px solid #ffae2b; "></div>
</div>
<!-- BG-->
</div>
<!-- AKHIR -->   	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        