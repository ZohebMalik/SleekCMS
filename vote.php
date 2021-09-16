<?php

require_once '/includes/findretros_config.php';
require_once '/includes/findretros.php';

$FindRetros = new FindRetros();

if($FindRetros->hasClientVoted()) {

 //   echo 'You have voted!';

}else{

    // echo 'You have yet to vote!';

    $FindRetros->redirectClientToVote();

}
?>