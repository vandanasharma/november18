<?php
/******************************************************************************

                            Online PHP Interpreter.
                Code, Compile, Run and Debug php program online.
Write your code in this editor and press "Run" button to execute it.

*******************************************************************************/


class calculator{

    public $arr_args;
    

  public function __construct($argv)
    {
 
        // printing entire input :
        $string=implode(" ",$argv);
        echo "You have entered :\n".$string;
        echo "\n";
       //omitting non-numeric and negetive values from array 


         $argv = array_filter($argv,array($this,"datacheck"));
        //re-indexing command line argument array
             $argv = array_values($argv);
              $this->arr_args = $argv;
             
        
    }
  
    public function datacheck($arg){
       if( is_numeric($arg) && $arg>0 && $arg<1000)
       return true;
        
    }
    
    public  function sum(){
  
    
    $argv = $this->arr_args;
        echo "\nWe will ignore non-numeric, negetive and values >= 1000\n";
    
        $sum=0;
        for ($i=0;$i<count($argv);$i++)
        {
                echo $argv[$i]." ";
                $sum += $argv[$i];

        
        }
        echo  "<br>sum= ".$sum;
    }//function completed
}// class completed

    $a = new calculator($argv);
    
        if (defined('STDIN'))
        $a->sum($argv);
    
