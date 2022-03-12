<?php
    class Vector {
        private $x, $y, $z;

        public function __construct($x, $y, $z)  #Нет проверки на допустимость
        {
            if ($this->is_Number($x) && $this->is_Number($y) && $this->is_Number($z)) 
            {
                $this->x = $x; 
                $this->y = $y;
                $this->z = $z;
            } 
            else echo 'Error: invalid value entered'.PHP_EOL;;
        }

        private function is_Number($Char) 
        {
            $Char .= ''; 
            if ($Char!='')
            { $Char1 = $Char[0]; }
            else { return false; }
            if(!(($Char1 >= '0' and $Char1 <= '9')or($Char1=='-'))) 
            { return false; }
            $l=strlen($Char);
            for ($i = 1; $i < $l; $i++)
            {
                $Char1 = $Char[$i];
                if (!($Char1 >= '0' and $Char1 <= '9')) 
                    return false; 
            }
            return true;
        } 

        public function add(Vector $v1) : Vector
        {
            $v = new Vector(0, 0, 0);
            $v->x = $this->x+$v1->x;
            $v->y = $this->y+$v1->y;
            $v->z = $this->z+$v1->z;
            return $v;
        }    

        public function sub(Vector $v1) : Vector
        {
            $v = new Vector(0, 0, 0);
            $v->x = $this->x-$v1->x;
            $v->y = $this->y-$v1->y;
            $v->z = $this->z-$v1->z;
            return $v;
        }

        public function product($number) 
        {
            $v = new Vector(0, 0, 0);
            $v->x = $number*$this->x;
            $v->y = $number*$this->y;
            $v->z = $number*$this->z;
            return $v;
        }
        
        public function scalarProduct(Vector $v1)
        {
            $v = $this->x*$v1->x+$this->y*$v1->y+$this->z*$v1->z;
            return $v;
        }

        public function vectorProduct(Vector $v1) : Vector
        {
            $v = new Vector(0,0,0);
		    $v->x = (int)$this->y * (int)$v1->z - (int)$this->z * (int)$v1->y;
            $v->y = -((int)$this->x * (int)$v1->z - (int)$this->z * (int)$v1->x);
	        $v->z = (int)$this->x * (int)$v1->y - (int)$this->y * (int)$v1->x;
            return $v;
        }

        public function __toString()
        {        
            return '('.$this->x.';'.$this->y.';'.$this->z.')';
        }
    }


?>