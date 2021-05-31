<?php 

/*
 * Input Weights 
 *          BIAS -> b -->           
 * 
 *  i1  ->  w1 (i1*w1) -->
 *  i2  ->  w2 (i2*w2) -->
 *  i3  ->  w3 (i3*w3) -->   SIGMA(i1*w1...iN*wN)+w0*x0 -> y  
 *  i4  ->  w4 (i4*w4) -->
 *  i5  ->  w5 (i5*w5) -->
 *  
 * 
 * desired putput d(n) =  |  +1 if x(n) e set A
 *                        |  -1 if x(n) e set B
 * 
 */


class Neuron{
    
    public array $axons = array();
    public int $axonsCount;
    public float $axonWeight;
    public int $axonInput;
    public float $bias;
    
     function __construct(int $axonCount,float $bias) {
        $this->axonsCount = $axonCount;
        $this->bias = $bias;
        $this->axonWeight = 0.1;
        
        for($i = 1; $i<=$axonCount; $i++){
            $this->axons[$i] = $this->axonWeight;
        }
         
        
    }
        
        
    
    
 
    
    
    function set_axonWeight($weight){
        $this->axonWeight = $weight;
    }
    
    function get_axonWeight(){
        return $this->$axonWeight;
    }
    
    function set_axonInput($input){
        $this->$axonInput = $input;
}
    
    function get_axonInput(){
        return $this->$axonInput;
    }

    function set_bias($arg){
        $this->bias= $arg;
    }
    
    function get_bias(){
        return $this->bias;
    }

    function sigma_function($input){
        
        foreach ($this->axons as $item){
            $this->axons[$item] = $this->axons[$item]*$this->axonInput+ $this->bias;
            
        }
    }






    
}














?>