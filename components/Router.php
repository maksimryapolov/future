<?php
    class Router
    {
        private function getURI() 
        {
            if(!empty($_SERVER['REQUEST_URI'])) {
                $homeURI = $_SERVER["REQUEST_URI"] == "/" ?  "index " : trim($_SERVER["REQUEST_URI"]);
                return trim($homeURI);
            }
        }

        public function run()
        {

            $uri = $this->getURI();
            if($uri == "index") {

                require ROOT ."/controllers/indexController.php";
                $controller = new IndexController();
                $controller->actionComments();
                
            } else {
                echo  "<h1>Страница не найдена</h1>";
            }
        }
    }
?>