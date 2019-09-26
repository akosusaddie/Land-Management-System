<?php 
$id = $_POST["id"];
$action = $_POST["act"];

if($action == "add_application"){
    include("public/members/add_application.php");
}

elseif($action == "add_new_visit"){
    include("public/members/add_visit.php");
}
elseif($action == "new_visit"){
    include("public/members/add_visit.php");
}
elseif($action == "view_visit"){
    include("public/members/view_visit.php");
}
elseif($action == "view_application"){
    include("public/members/view_application.php");
}
elseif($action == "add_new_file"){
    include("public/members/add_file.php");
}
elseif($action == "dashboard"){
    include("dashboard.php");
}
elseif($action == "list_files"){
    include("public/members/list_files.php");
}
elseif($action == "list_lease"){
    include("public/members/list_lease.php");
}
elseif($action == "user_signup"){
    include("public/members/user_signup.php");
}
elseif($action == "profile_overview"){
    include("public/members/profile_overview.php");
}
elseif($action == "add_new_visit"){
    include("public/members/add_application.php");
}

elseif($action == "pending_valuation_files"){
    include("public/members/list_files.php");
}

elseif($action == "pending-files_survey"){
    include("public/members/list_files.php");
}

elseif($action == "pending_lease_prep"){
    include("public/members/list_files.php");
}

elseif($action == "pending_valuation_files"){
    include("public/members/list_files.php");
}

elseif($action == "generate_valReport"){
    include("public/members/val_report.php");
}

elseif($action == "val_leasePrep"){
    include("public/members/valuation.php");
}

elseif($action == "val_leaseExec"){
    include("public/members/val_leaseExec.php");
}

elseif($action == "val_leasePrep"){
    include("public/members/valuation.php");
}

elseif($action == "val_leasePrep"){
    include("public/members/valuation.php");
}

elseif($action == "val_leasePrep"){
    include("public/members/valuation.php");
}

?>

