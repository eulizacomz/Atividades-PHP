<?php

function cpfNaoConfiavel($cpf) {
    $num = preg_replace('/[^0-9]/', '', $cpf);
    return str_pad($nums, (strlen($nums) > 11) ? 14 : 11, '0', STR_PAD_LEFT);
}
<?