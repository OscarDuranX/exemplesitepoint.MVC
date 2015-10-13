<?php
/**
 * Created by PhpStorm.
 * User: oscar
 * Date: 13/10/15
 * Time: 20:58
 */
class Model
{
    public $string;

    public function __construct(){
        $this->string = "MVC + PHP = Awesome!";
    }
}

class View
{
    private $model;
    private $controller;

    public function __construct($controller,$model) {
        $this->model = $model;
    }

    public function read(){
        return '<p><a href="main.php?action=clicked">' . $this->model->string . '</a></p>';
    }

}
class Controller
{
    private $model;

    public function __construct($model) {
        $this->model = $model;
    }

    public function clicked()
    {
        $this->model->string = "Updated Data, thanks to MVC and PHP";
    }
}


$model = new Model();
$controller = new Controller($model);
$view = new View($controller, $model);

if(isset($_GET['action']) && !empty($_GET['action'])){
    $controller->{$_GET['action']}();
}

echo $view->read();

