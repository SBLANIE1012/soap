<?php
// How to Create a SOAP Client/Server in PHP (Added Authentification) - Part 02
// https://www.youtube.com/watch?v=6V_myufS89A

/* data.php used in the next AJAX examples:
 *          service2_ajax_xhttp.php
 *          service2_ajax_jquery.php
 *          service2_fetch.php
 */
include 'client.php';
$client = new client();
$marca = $_GET['marca'];
  //  $modelo = $client->getModelos($marca);
    
    ?>
    <ul>
    
        
            <ul>
                <?php
                $modelos = $client->getModelos($marca);
                foreach ($modelos as $m) {
                    ?>
                    <li><img src="<?= strtolower($marca) ?>.png" style="width:100px; heigth:100px"></li>
                    <li><?= $m ?></li>
                    <?php
                }
                ?>
            </ul>
        
        
</ul>