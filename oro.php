<?php
$html = file_get_contents('https://www.italpreziosi.it/it/quotazioni-e-grafici-oro');
$quotazione = (explode("xau_eur_gr" . chr(34) .">EUR/Gr <span class=" . chr(34) . "value" . chr(34) . ">" ,$html));
$quotazione = substr($quotazione[1],0,(strpos($quotazione[1] , '<')));
echo "Quotazione ORO attuale tramite Italpreziosi.it $quotazione";
?> 