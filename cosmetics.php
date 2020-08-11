<?php
if (isset($_GET['uuid'])) {
    echo '{"uuid":"' . $_GET['uuid'] . '","username":null,"cosmetics":{"cb_staff":{"name":"cb_staff","type":"cape","scale":0.16,"active":true,"resourceLocation":"cb_staff"},"black":{"name":"black","type":"dragon_wings","scale":0.13,"active":true,"resourceLocation":"black"}}}';
}
?>
