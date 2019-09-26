<?php
$action = $_POST["act"];

if($action == "load_appointment"){
    include("public/members/load_appointment.php");
}

elseif($action == "load_VO"){
    include("public/members/load_VO.php");
}

?>