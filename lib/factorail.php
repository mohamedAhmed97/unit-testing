<?php
    class factorail{   
        public function fact($i)
        {
            if($i >=1)
            {
                return $i *($this->fact($i-1));
            }
            else
            {
                return 1;
            } 
        }    
    }

?>