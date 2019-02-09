<?php

require_once ROOT . "/model/comments.php";

    class IndexController
    {
        public static function actionComments()
        {

            $errors = false;
            $name = '';
            $message = '';
            $listComments = Comments::getCommetns();
            if(isset($_POST['submit'])) {
                

                $name = trim($_POST['name']);
                $message = trim(htmlspecialchars($_POST['message']));

                if(!Comments::checkField($name) || !Comments::checkField($message)) {
                    $errors = "Поля должны быть заполнены";
                }
                
                if($errors == false) {
                    Comments::AddComments($name, $message);
                    header("Location: /");
                    exit();
                }

            }
            
            require_once ROOT . "/view/index.php";
        }
    }
?>