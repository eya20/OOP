 <?php 

 class Application {

    public static function process()
    {
        $controllerName = "Article";
        $task = "index";

        if(!empty($_GET['controller'])){
            // first letter will be majuscle
            $controllerName = ucfirst($_GET['controller']);
        }
        if(!empty($_GET['task'])){
            $task = $_GET['task'];
        }

        $controllerName = "\Controllers\\".$controllerName ;

        $controller = new $controllerName();
        $controller->$task();

    }
 }