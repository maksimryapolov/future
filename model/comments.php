<?php
    class Comments 
    {
        static public function getCommetns()
        {
            $listComment = array();
            $db = Db::getConnection();

            $sql = "SELECT * FROM comments";

            $result = $db->prepare($sql);

            $result->execute();
            $i = 0;

            while($row = $result->fetch(PDO::FETCH_ASSOC)){
                $listComment[$i]["user_name"] = $row["user_name"];
                $listComment[$i]["content"] = $row["content"];
                $listComment[$i]["date"] = $row["date"];
                $listComment[$i]["time"] = $row["time"];
                $i++;
            }
            return $listComment;
        }

        static public function AddComments($user_name, $message)
        {
            $db = Db::getConnection();

            $sql = "INSERT INTO comments (id, user_name, content, date, time) VALUES (NULL, :user_name, :message, CURRENT_DATE(), CURRENT_TIME())";
            
            $result = $db->prepare($sql);
            $result->bindParam(':user_name', $user_name, PDO::PARAM_STR);
            $result->bindParam(':message', $message, PDO::PARAM_STR);

            return $result->execute();
        }

        static public function checkField($text)
        {
           if(strlen($text) == 0) {
               return false;
           }
           return true;
        }
    }
?>