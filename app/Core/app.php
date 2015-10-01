<?php

class App
{
    protected $controller = 'home'; //default controller die gestart word
    protected $method = 'index'; //default method die gestart word
    protected $parameters = []; //optie zodat parameters kunnen worden doorgegeven

    public function __construct() //php5 standaard
    {

        $url = $this->parseUrl();
        //print_r($url);//voor test print opgegeven url variabelen

        if(file_exists('../app/controllers/' . $url[0] . '.php')) //pakt de juiste contoller pakt de variable uit de url per /
        {
            $this->controller = $url[0];
            unset($url[0]);
        }else{
            echo " a";
        }

        require_once '../app/controllers/' . $this->controller . '.php'; //require controller geset bij vorige functie hierboven of standaard
        //echo $this->controller;
        $this->controller = new $this->controller;
        //var_dump($this->controller);
    //echo "url=" . $url[1];
        if(isset($url[1])) //moet ingevuld zijn 2e variable uit de url bv /home/index pakt deze index
        {
            //var_dump(method_exists($this->controller, $url[1]));
            if(method_exists($this->controller, $url[1])) //check of er een method is met die naam op de controller
            {
                $this->method = $url[1]; //set variable method met current method
                unset($url[1]);
            }
        }

    }

    public function parseUrl() //exploding trimming sanatized url. geeft verschilende links in de url
    {
        if(isset($_GET['url'])){
            return $url = explode('/', filter_var(trim($_GET['url'],'/'), FILTER_SANITIZE_URL));
        }
    }
}