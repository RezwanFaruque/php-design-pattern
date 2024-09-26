<?php 

namespace App;

interface playing{
    public function play($str);
}


class Cricket implements playing{

    public function play($str){
        echo $str ." is Playing cricket";
    }
}


class Football implements playing{

    public function play($str){
        echo $str." is  Playing football";
    }
}


class Playprocess {

    private $playprocess; 

    public function __construct($input){
        $this->playprocess = $input;
    }

    public function processing(playing $play){

        return $this->playprocess = $play->play($this->playprocess);

    }
}