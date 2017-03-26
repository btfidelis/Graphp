<?php namespace Graphp\App\Lt;

/**
* @author Bruno Fidelis
* I know, php still doest not let me name this List ¬¬
*/
interface IList 
{
    public function add($element, $index = null);
    public function next();
}