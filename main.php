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
        return "<p>" . $this->model->string . "</p>";
    }

}
class Controller
{
    private $model;

    public function __construct($model) {
        $this->model = $model;
    }
}


$model = new Model();
$controller = new Controller($model);
$view = new View($controller, $model);
echo $view->read();