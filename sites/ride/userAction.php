<?php

require_once "classes/crud.php";
$myObj = new CRUD;

if(isset($_POST['btnRegister'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $username = $_POST['username'];
    $pass = $_POST['passw'];
    $cpass = $_POST['confPassw'];

    if($pass = $cpass){
        $myObj->register_user($fname, $lname, $username, $pass);
    }else{
        echo "Error: password is not same as confirmation one.";
    }

}else if(isset($_POST['btnLogin'])){
    $username = $_POST['username'];
    $pass = $_POST['password'];

    $myObj->login($username, $pass);
}else if(isset($_POST['btnUpdateWeek'])){
    $wGoal = $_POST['wGoal'];
    $wList = [];
    for($num=1; $num<=10; $num++){
        $list = "list".$num;
        $wList[] = $_POST[$list];
    }
    $id = $_SESSION['loginId'];

    $myObj->update_week($wGoal, $wList, $id);
}else if(isset($_POST['btnUpdateMonth'])){
    $mGoal = $_POST['mGoal'];
    $mList = [];
    for($num=1; $num<=10; $num++){
        $list = "list".$num;
        $mList[] = $_POST[$list];
    }
    $id = $_SESSION['loginId'];

    $myObj->update_month($mGoal, $mList, $id);
}else if(isset($_POST['btnAddProject'])){
    $title = $_POST['name'];
    $summary = $_POST['summary'];
    $picture = $_FILES['picture']['name'];
    $id = $_SESSION['loginId'];

    $target_dir = "assets/img/project/";
    $target_file = $target_dir.basename($picture);


    if($myObj->create_project($title,$summary,$picture,$id)){
        move_uploaded_file($_FILES['picture']['tmp_name'], $target_file);
        header("location: research.php");
        exit;
    }else{
        echo "Error creating project.";
    }
}else if(isset($_POST['btnAddMaterial'])){
    $date = $_POST['date'];
    $title = $_POST['name'];
    $content = $_FILES['material']['name'];
    $summary = $_POST['summary'];
    $advice = $_POST['advice'];
    $id = $_POST['id'];

    $target_dir = "assets/material/";
    $target_file = $target_dir.basename($content);

    if($myObj->create_material($date,$title,$content,$summary,$advice,$id)){
        move_uploaded_file($_FILES['material']['tmp_name'], $target_file);
        header("location:research.php");
        exit;
    }else{
        echo "Error creating material.";
    }
}else if(isset($_POST['btnUpdateMaterial'])){
    $date = $_POST['date'];
    $title = $_POST['name'];
    $summary = $_POST['tSummary'];
    $advice = $_POST['advice'];
    $id = $_POST['id'];

    $myObj->update_material($date,$title,$summary,$advice,$id);
}else if(isset($_GET['action']) == 'archiveMaterial'){
    $id = $_GET['id'];

    $myObj->update_material_status($id);
}else if(isset($_GET['action2']) == 'archivePaper'){
    $id = $_GET['id'];

    $myObj->update_paper_status($id);
}else if(isset($_GET['action3']) == 'deleteUser'){
    $id = $_GET['id'];

    $myObj->delete_user($id);
}else if(isset($_GET['action4']) == 'publishMaterial'){
    $id = $_GET['id'];

    $myObj->reupdate_material_status($id);
}else if(isset($_GET['action5']) == 'publishPaper'){
    $id = $_GET['id'];

    $myObj->reupdate_paper_status($id);
}else if(isset($_POST['btnAddpCategory'])){
    $name = $_POST['name'];
    $icon = $_POST['icon'];
    $color = $_POST['color'];
    $explanation = $_POST['explanation'];

    $myObj->create_pcategory($name, $icon, $color, $explanation);
}else if(isset($_POST['btnAddPaper'])){
    $title = $_POST['title'];
    $date = $_POST['date'];
    $author = $_POST['author'];
    $paper = $_FILES['paper']['name'];
    $summary = $_POST['summary'];
    $good = $_POST['good'];
    $bad = $_POST['bad'];
    $benefit = $_POST['benefit'];
    $id = $_SESSION['loginId'];

    if (isset($_POST['categories']) && is_array($_POST['categories'])) {
        $categories = $_POST['categories'];
    }else{
        echo "Error select categories.";
    }

    $target_dir = "assets/paper/";
    $target_file = $target_dir.basename($paper);

    if($myObj->create_paper($title,$date,$author,$paper,$summary,$good,$bad,$benefit,$categories,$id)){
        move_uploaded_file($_FILES['paper']['tmp_name'], $target_file);
        header("location:addPaper.php");
        exit;
    }else{
        echo "Error creating paper.";
    }
}else if(isset($_POST['btnAddWork'])){
    $name = $_POST['name'];
    $picture = $_FILES['picture']['name'];
    $material = $_FILES['material']['name'];
    $contents = $_POST['contents'];
    $technique = $_POST['technique'];
    $other = $_POST['other'];
    $id = $_SESSION['loginId'];

    $target_dir1 = "assets/img/work/picture/";
    $target_file1 = $target_dir1.basename($picture);
    $target_dir2 = "assets/work/material/";
    $target_file2 = $target_dir2.basename($material);

    if($myObj->create_work($name,$picture,$material,$contents,$technique,$other,$id)){
        move_uploaded_file($_FILES['picture']['tmp_name'], $target_file1);
        move_uploaded_file($_FILES['material']['tmp_name'], $target_file2);
        header("location:portfolio.php");
        exit;
    }else{
        echo "Error creating work.";
    }
}else if(isset($_POST['btnUploadPhoto'])){
    $image = $_FILES['image']['name'];

    $target_dir = "assets/img/avatar/";
    $target_file = $target_dir.basename($image);
    $id = $_SESSION['loginId'];

    if($myObj->update_avatar($image,$id)){
        move_uploaded_file($_FILES['image']['tmp_name'], $target_file);
        header("location:profile.php");
        exit;
    }else{
        echo "Error creating material.";
    }
}else if(isset($_POST['btnUpdateProfile'])){
    $fname = $_POST['first_name'];
    $lname = $_POST['last_name'];
    $uname = $_POST['username'];
    $color = $_POST['color'];
    $bio = $_POST['bio'];
    $id = $_SESSION['loginId'];

    $myObj->update_profile($fname,$lname,$uname,$color,$bio,$id);
}else if(isset($_POST['btnUpdatePaper'])){
    $title = $_POST['title'];
    $date = $_POST['date'];
    $author = $_POST['author'];
    $summary = $_POST['summary'];
    $good = $_POST['good'];
    $bad = $_POST['bad'];
    $benefit = $_POST['benefit'];
    $id = $_POST['id'];

    $myObj->update_paper($title,$date,$author,$summary,$good,$bad,$benefit,$id);
}