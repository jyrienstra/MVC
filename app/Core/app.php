<?php

class App
{
    protected $controller = 'home'; //default controller die gestart word
    protected $method = 'index'; //default method die gestart word
    protected $parameters = []; //optie zodat parameters kunnen worden doorgegeven

    public function __construct() //php5 standaard
    {
        echo "test";
       print_r($this->parseUrl()); //testen kan al met ?url=test

        if(file_exists('../app/controllers/x.php' . $url[0] . 'php'))
        {

        }
    }

    protected function parseUrl() //exploding trimming sanatized url. geeft verschilende links in de url
    {
        if(isset($_GET['url'])){ //let op htaccesfile zo aanpassen zodat url gepost word als url
            //testen kan al met ?url=test
            echo $_GET['url'];
            return $url = explode(filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
        }
    }
}