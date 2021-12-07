<?php
    session_start();
    require "database.php";

    class CRUD extends Database{

        public function register_user($fname, $lname, $username, $pass){
            $newPass = md5($pass);
            $sql = "INSERT INTO login(`username`,`password`) VALUES ('$username', '$newPass')";

            if($this->conn->query($sql)){
                $loginId = $this->conn->insert_id;

                $sql2 = "INSERT INTO user(`first_name`, `last_name`, `login_id`) VALUES ('$fname', '$lname', $loginId)";
                if($this->conn->query($sql2)){
                    $sql3 =  "INSERT INTO `week` (`week_list_id`,`user_id`) VALUES ($loginId,$loginId)";
                    $sql4 =  "INSERT INTO `weekList` (`week_list_id`) VALUES ($loginId)";
                    $sql5 =  "INSERT INTO `month` (`month_list_id`,`user_id`) VALUES ($loginId,$loginId)";
                    $sql6 =  "INSERT INTO `monthList` (`month_list_id`) VALUES ($loginId)";
                    if($this->conn->query($sql3) && $this->conn->query($sql4) && $this->conn->query($sql5) && $this->conn->query($sql6)){
                        header("location: login.php");
                        exit;
                    }else{
                        echo "Error recording week and month.";
                    }

                }else{
                    echo "Error recording user : ".$this->conn->error;
                }
            }else{
                echo "Error recording account : ".$this->conn->error;
            }
        }

        public function login($username, $pass){
            $newPass = md5($pass);

            $sql = "SELECT * FROM `login` JOIN user ON login.login_id = user.login_id WHERE `username` = '$username' AND `password` = '$newPass' ";

            $result = $this->conn->query($sql);

            if($result->num_rows == 1){
                $row = $result->fetch_assoc();
                $_SESSION['loginId'] = $row['login_id'];
                $_SESSION['username'] = $row['username'];
                $_SESSION['status'] = $row['status'];
                $_SESSION['color'] = $row['theme_color'];

                date_default_timezone_set('Asia/Tokyo');
                $_SESSION['iTime'] = date("H:i");

                if($row['status'] == "U"){
                    header("location: index.php");
                    exit;
                }else if($row['status'] == "A"){
                    header("location: admin/admin.php");
                    exit;
                }
            }else{
                echo "Error: ".$this->conn->error;
            }
        }

        public function get_user($id){
            $sql = "SELECT * FROM `user` INNER JOIN `login` ON user.login_id = login.login_id WHERE `user_id` = $id";
            $result = $this->conn->query($sql);
            if($row = $result->fetch_assoc()){
                return $row;
            }
        }

        public function get_users(){
            $sql = "SELECT * FROM `user` INNER JOIN `login` ON user.login_id = login.login_id";
            $result = $this->conn->query($sql);
            $rows = array();
            while($row = $result->fetch_assoc()){
                $rows[] = $row;
            }
            return $rows;
        }

        public function get_week($id){
            $sql = "SELECT * FROM `week` INNER JOIN `weekList` ON week.week_list_id = weekList.week_list_id WHERE `user_id` = $id";
            $result = $this->conn->query($sql);
            if($row = $result->fetch_assoc()){
                return $row;
            }
        }

        public function get_month($id){
            $sql = "SELECT * FROM `month` INNER JOIN `monthList` ON month.month_list_id = monthList.month_list_id WHERE `user_id` = $id";
            $result = $this->conn->query($sql);
            if($row = $result->fetch_assoc()){
                return $row;
            }
        }

        public function get_projects($id){
            $sql = "SELECT * FROM `project` WHERE `user_id` = $id";
            $result = $this->conn->query($sql);
            $rows = array();
            while($row = $result->fetch_assoc()){
                $rows[] = $row;
            }
            return $rows;
        }

        public function get_all_materials(){
            $sql = "SELECT * FROM `material`
            INNER JOIN `project` ON material.project_id = project.project_id
            INNER JOIN `user` ON project.user_id = user.user_id
            ORDER BY material.date DESC";
            $result = $this->conn->query($sql);
            $rows = array();
            while($row = $result->fetch_assoc()){
                $rows[] = $row;
            }
            return $rows;
        }

        public function get_all_papers(){
            $sql = "SELECT * FROM `paper` INNER JOIN `user` ON paper.user_id = user.user_id ORDER BY paper.published_date DESC";
            $result = $this->conn->query($sql);
            $rows = array();
            while($row = $result->fetch_assoc()){
                $rows[] = $row;
            }
            return $rows;
        }

        public function get_all_portfolios(){
            $sql = "SELECT * FROM `portfolio` INNER JOIN `user` ON portfolio.user_id = user.user_id";
            $result = $this->conn->query($sql);
            $rows = array();
            while($row = $result->fetch_assoc()){
                $rows[] = $row;
            }
            return $rows;
        }

        public function get_pCategories(){
            $sql = "SELECT * FROM `paperCategory`";
            $result = $this->conn->query($sql);
            $rows = array();
            while($row = $result->fetch_assoc()){
                $rows[] = $row;
            }
            return $rows;
        }

        public function get_wCategories(){
            $sql = "SELECT * FROM `workCategory`";
            $result = $this->conn->query($sql);
            $rows = array();
            while($row = $result->fetch_assoc()){
                $rows[] = $row;
            }
            return $rows;
        }

        public function update_avatar($image,$id){
            $sql = "UPDATE user SET picture = '$image' WHERE login_id = $id";

            if($this->conn->query($sql)){
                return true;
            }else{
                return false;
            }
        }

        public function update_week($wGoal, $wList, $id){
            $sql = "UPDATE week SET week_goal = '$wGoal' WHERE `user_id` = $id";
            $sql2 = "UPDATE weekList SET `list1`='$wList[0]',`list2`='$wList[1]',`list3`='$wList[2]',`list4`='$wList[3]',`list5`='$wList[4]',`list6`='$wList[5]',`list7`='$wList[6]',`list8`='$wList[7]',`list9`='$wList[8]',`list10`='$wList[9]' WHERE `week_list_id` = $id";
            if($this->conn->query($sql)){
                if($this->conn->query($sql2)){
                    header("location: index.php");
                    exit;
                }else{
                    echo "Error updating ToDo list:".$this->conn->error;
                }
            }else{
                echo "Error updating week:".$this->conn->error;
            }
        }

        public function update_month($mGoal, $mList, $id){
            $sql = "UPDATE `month` SET month_goal = '$mGoal' WHERE `user_id` = $id";
            $sql2 = "UPDATE `monthList` SET `list1`='$mList[0]',`list2`='$mList[1]',`list3`='$mList[2]',`list4`='$mList[3]',`list5`='$mList[4]',`list6`='$mList[5]',`list7`='$mList[6]',`list8`='$mList[7]',`list9`='$mList[8]',`list10`='$mList[9]' WHERE `month_list_id` = $id";
            if($this->conn->query($sql)){
                if($this->conn->query($sql2)){
                    header("location: index.php");
                    exit;
                }else{
                    echo "Error updating ToDo list:".$this->conn->error;
                }
            }else{
                echo "Error updating month:".$this->conn->error;
            }
        }


        public function update_week_hours($workTime,$id){
            $this->update_month_hours($workTime,$id);
            $sql1 = "SELECT * FROM week WHERE `user_id` = $id";
            $result = $this->conn->query($sql1);
            $row = $result->fetch_assoc();
            $workTime += $row['week_hours'];
            $sql2 = "UPDATE week SET week_hours = $workTime WHERE `user_id` = $id";
            if($this->conn->query($sql2)){
                $_SESSION['start'] = strtotime(date("H:i"));
                return 0;
            }else{
                echo "Error update week working hours".$this->conn->error;
                return 0;
            }
        }

        public function update_month_hours($workTime,$id){
            $sql1 = "SELECT * FROM `month` WHERE `user_id` = $id";
            $result = $this->conn->query($sql1);
            $row = $result->fetch_assoc();
            $workTime += $row['month_hours'];

            $sql2 = "UPDATE `month` SET month_hours = $workTime WHERE `user_id` = $id";
            if($this->conn->query($sql2)){
                return 0;
            }else{
                echo "Error update week working hours".$this->conn->error;
                return 0;
            }
        }

        public function get_weeks(){
            $sql = "SELECT * FROM `week`";
            $result = $this->conn->query($sql);
            $count = 0;
            $total = 0;
            while($row = $result->fetch_assoc()){
                $total += $row['week_hours'];
                $count++;
            }
            return $ave = $total / $count;
        }

        public function get_months(){
            $sql = "SELECT * FROM `month`";
            $result = $this->conn->query($sql);
            $count = 0;
            $total = 0;
            while($row = $result->fetch_assoc()){
                $total += $row['month_hours'];
                $count++;
            }
            return $ave = $total / $count;
        }

        public function create_project($title,$summary,$picture,$id){
            $sql = "INSERT INTO project(`project_name`, `picture`, `summary`, `user_id`) VALUES ('$title', '$picture', '$summary', $id)";
            if($this->conn->query($sql)){
                return true;
            }else{
                return false;
            }
        }

        public function get_material($id){
            $sql = "SELECT * FROM material WHERE material_id = $id";

            $result = $this->conn->query($sql);
            if($row = $result->fetch_assoc()){
                return $row;
            }else{
                echo "Error getting material";
            }
        }

        public function get_last_material($id,$cid){
            $sql = "SELECT * FROM material WHERE material_id < $id AND project_id = $cid ORDER BY `date` DESC LIMIT 1";

            $result = $this->conn->query($sql);
            if($row = $result->fetch_assoc()){
                return $row;
            }else{
                return 0;
            }
        }

        public function get_materials($id){
            $sql = "SELECT * FROM material WHERE project_id = $id ORDER BY `date` DESC";
            $result = $this->conn->query($sql);
            $rows = array();
            while($row = $result->fetch_assoc()){
                $rows[] = $row;
            }
            return $rows;
        }

        public function get_works($id){
            $sql = "SELECT * FROM portfolio WHERE `user_id` = $id";
            $result = $this->conn->query($sql);
            $rows = array();
            while($row = $result->fetch_assoc()){
                $rows[] = $row;
            }
            return $rows;
        }

        public function get_work($id){
            $sql = "SELECT * FROM portfolio JOIN user ON portfolio.user_id = user.user_id WHERE `work_id` = $id";

            $result = $this->conn->query($sql);
            if($row = $result->fetch_assoc()){
                return $row;
            }else{
                echo "Error getting work.";
            }
        }

        public function get_paper($id){
            $sql = "SELECT * FROM paper WHERE `paper_id` = $id";

            $result = $this->conn->query($sql);
            if($row = $result->fetch_assoc()){
                return $row;
            }else{
                echo "Error getting paper.";
            }
        }

        public function get_papers($id,$userId){

            $sql = "SELECT * FROM paper JOIN paperCategoryList
            ON paper.paper_id = paperCategoryList.pCategory_list_id
            WHERE (paperCategoryList.pCategory_name1 = (SELECT pCategory_name FROM paperCategory WHERE pCategory_id = $id)
            OR paperCategoryList.pCategory_name2 = (SELECT pCategory_name FROM paperCategory WHERE pCategory_id = $id)
            OR paperCategoryList.pCategory_name3 = (SELECT pCategory_name FROM paperCategory WHERE pCategory_id = $id)
            OR paperCategoryList.pCategory_name4 = (SELECT pCategory_name FROM paperCategory WHERE pCategory_id = $id)
            OR paperCategoryList.pCategory_name5 = (SELECT pCategory_name FROM paperCategory WHERE pCategory_id = $id))
            AND paper.user_id = $userId ORDER BY paper.published_date DESC";

            $result = $this->conn->query($sql);
            $rows = array();
            while($row = $result->fetch_assoc()){
                $rows[] = $row;
            }
            return $result;
        }
        public function get_papers2($id){

            $sql = "SELECT * FROM paper JOIN paperCategoryList
            ON paper.paper_id = paperCategoryList.pCategory_list_id
            WHERE paperCategoryList.pCategory_name1 = (SELECT pCategory_name FROM paperCategory WHERE pCategory_id = $id)
            OR paperCategoryList.pCategory_name2 = (SELECT pCategory_name FROM paperCategory WHERE pCategory_id = $id)
            OR paperCategoryList.pCategory_name3 = (SELECT pCategory_name FROM paperCategory WHERE pCategory_id = $id)
            OR paperCategoryList.pCategory_name4 = (SELECT pCategory_name FROM paperCategory WHERE pCategory_id = $id)
            OR paperCategoryList.pCategory_name5 = (SELECT pCategory_name FROM paperCategory WHERE pCategory_id = $id)
            ORDER BY paper.published_date DESC";

            $result = $this->conn->query($sql);
            $rows = array();
            while($row = $result->fetch_assoc()){
                $rows[] = $row;
            }
            return $result;
        }

        public function get_Categories(){
            $sql = "SELECT * FROM material";
            $result = $this->conn->query($sql);
            $rows = array();
            while($row = $result->fetch_assoc()){
                $rows[] = $row;
            }
            return $rows;
        }

        public function create_material($date,$title,$content,$summary,$advice,$id){
            $sql = "INSERT INTO material (`material_title`, `material_content`, `material_summary`, `material_advice`, `date`, `project_id`) VALUES ('$title', '$content', '$summary', '$advice', '$date', '$id')";
            if($this->conn->query($sql)){
                return true;
            }else{
                echo "Error creating material:".$this->conn->error;
            }
        }

        public function update_material($date,$title,$summary,$advice,$id){
            $sql = "UPDATE material SET `material_title`='$title',  `material_summary`='$summary', `material_advice`='$advice', `date`='$date' WHERE `material_id` = $id ";
            if($this->conn->query($sql)){
                header("location: research.php");
                exit;
            }else{
                return false;
            }
        }

        public function update_material_status($id){
            $sql = "UPDATE material SET `status` = 'D' WHERE material_id = $id";
            if($this->conn->query($sql)){
                if($_SESSION['status'] == "U"){
                    header("location: research.php");
                    exit;
                }else{
                    header("location: admin/researchTable.php");
                    exit;
                }

            }else{
                echo "Error updating material status.";
            }
        }

        public function reupdate_material_status($id){
            $sql = "UPDATE material SET `status` = 'A' WHERE material_id = $id";
            if($this->conn->query($sql)){
                if($_SESSION['status'] == "U"){
                    header("location: research.php");
                    exit;
                }else{
                    header("location: admin/researchTable.php");
                    exit;
                }

            }else{
                echo "Error updating material status.";
            }
        }

        public function update_paper_status($id){
            $sql = "UPDATE paper SET `status` = 'D' WHERE paper_id = $id";
            if($this->conn->query($sql)){
                if($_SESSION['status'] == "U"){
                    header("location: paper.php");
                    exit;
                }else{
                    header("location: admin/paperTable.php");
                    exit;
                }
            }else{
                echo "Error updating paper status.";
            }
        }
        public function reupdate_paper_status($id){
            $sql = "UPDATE paper SET `status` = 'A' WHERE paper_id = $id";
            if($this->conn->query($sql)){
                if($_SESSION['status'] == "U"){
                    header("location: paper.php");
                    exit;
                }else{
                    header("location: admin/paperTable.php");
                    exit;
                }
            }else{
                echo "Error updating paper status.";
            }
        }

        public function create_pcategory($name, $icon, $color, $explanation){
            $sql = "INSERT INTO paperCategory (`pCategory_name`, `pCategory_explanation`, `pCategory_icon`, `pCategory_color`) VALUES ('$name','$explanation','$icon', '$color')";
            if($this->conn->query($sql)){
                header("location: admin/addPaperCategory.php");
            }else{
                echo "Error creating paper category: ".$this->conn->error;
            }
        }

        public function create_paper($title,$date,$author,$paper,$summary,$good,$bad,$benefit,$categories,$id){

            $sql1 = "INSERT INTO paper
            (`paper_title`,`paper_content`, `paper_author`, `paper_summary`, `paper_good`, `paper_bad`, `paper_benefit`, `published_date`, `user_id`)
            VALUES ('$title','$paper','$author','$summary','$good','$bad','$benefit','$date',$id)";

            $sql2 = "INSERT INTO paperCategoryList
            (`pCategory_name1`, `pCategory_name2`, `pCategory_name3`, `pCategory_name4`, `pCategory_name5`)
            VALUES ('$categories[0]','$categories[1]','$categories[2]','$categories[3]','$categories[4]')";

            if($this->conn->query($sql1)){
                if($this->conn->query($sql2)){
                    return true;
                }else{
                    echo "Error inserting to categories:".$this->conn->error;
                }
            }else{
                echo "Error creating paper.".$this->conn->error;
            }
        }

        public function update_paper($title,$date,$author,$summary,$good,$bad,$benefit,$id){
            $sql = "UPDATE `paper` SET `paper_title`='$title',`paper_author`= '$author',`paper_summary`='$summary',`paper_good`='$good',`paper_bad`='$bad',`paper_benefit`='$benefit',`published_date`= '$date' WHERE paper_id = $id";

            if($this->conn->query($sql)){
                header("location: paper.php");
            }else{
                echo "Error updating paper: ".$this->conn->error;
            }
        }

        public function create_work($name,$picture,$material,$contents,$technique,$other,$id){
            $sql ="INSERT INTO portfolio (`work_name`, `work_picture`, `work_material`, `work_content`, `work_technique`, `work_other`, `user_id`)
            VALUES ('$name','$picture','$material','$contents','$technique','$other',$id)";

            if($this->conn->query($sql)){
                return true;
            }else{
                echo "Error adding work: ".$this->conn->error;
            }
        }

        public function delete_user($id){
            $sql = "DELETE FROM `user` WHERE `user_id` = $id";

            if($this->conn->query($sql)){
                header("location: admin/admin.php");
            }else{
                return false;
            }
        }

        public function update_profile($fname,$lname,$uname,$color,$bio,$id){
            $sql = "UPDATE user SET first_name = '$fname',`last_name`='$lname',`theme_color`='$color',`bio`= '$bio' WHERE `user_id` = $id";
            $sql2 = "UPDATE login SET username = '$uname' WHERE login_id = $id";
            $_SESSION['color'] = $color;
            if($this->conn->query($sql) && $this->conn->query($sql2)){
                header("location: profile.php");
            }else{
                echo "Error.";
            }
        }
    }
?>