<?php date_default_timezone_set($_SESSION['timezone']); ?>


<script>
function sendToQuickPrinterChrome(){
 
    var commandsToPrint = 

                        "<center><big><bold><?= $hotspotname ?>\n" +
                        //"<line0>\n" +
                        "<center><?= date("Y-m-d h:i:sa") ?>\n" +
                        "<line0>\n" +
                        <?php
                        echo '"'.$username.' :;; '. $username.'\n" +';
                        ?>
                        <?php
                          echo '"'.$validity.' :;; '.$validity.'\n" +';
                        ?>
                        <?php 
                          echo '"'.$timelimit.' :;; '.$timelimit.'\n" +';
                        ?>
                        <?php 
                          echo '"'.$datalimit.' :;; '.$datalimit.'\n" +';
                        ?>
                        <?php
                          echo '"'.$price.' :;; '.$price.'\n" +';
                        ?>
                        "<line0>\n" +
                        "<center>Login : \n" +
                        //"<line0>\n" +
                        <?php echo '"\n"';?>
                        + "<cut>"
                ;
    var textEncoded = encodeURI(commandsToPrint);
    window.location.href="intent://"+textEncoded+"#Intent;scheme=quickprinter;package=pe.diegoveloper.printerserverapp;end;";
}
</script>

