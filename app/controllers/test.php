<?php
//var_dump("expression");
class Test extends Controller
{
    public function index($a = '')
    {
        echo $a;
        echo "/test/index";
        //var_dump('/home/index');
    }
    public function bier()
    {
        echo'functie bier in class test';
    }
}
