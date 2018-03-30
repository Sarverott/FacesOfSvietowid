<?php 
	/*
	** ###### Names Of Odin v1.0.0 ######
	** by Adam Borucki (Sarverott) 2018
	** MIT Licence
	*/
	class namesGenotype{
		private $nameslength;
		private $nameseed=[];
		public $namesspace=array();
		public function __construct($len=10){
			$this->nameslength=$len;
			for($i=0;$i<$this->nameslength;$i++){
				if($i==0){
					$this->nameseed[]=rand(0,25);
				}else{
					$this->nameseed[]=rand(0,25);
				}
			}
		}
		private function letter_alg($notfirst, $x, $seed){
			$var=0;
			if($x%2==0){
				$var=$seed-round($x/2);
			}else{
				$var=$seed+$x-round(($x-1)/2);
			}
			if($var<0){
				$var+=26;
			}elseif($var>=26){
				$var%=26;
			}
			if($var<26&&$var>=0){
				return chr($var+97);
			}
		}
		public function get_name($index){
			if(!isset($this->namesspace[$index])){
				$this->namesspace[$index]="";
				for($i=0;$i<$this->nameslength;$i++){
					$this->namesspace[$index]=$this->letter_alg($i,round($index/(pow(26, $i)))%26,$this->nameseed[$i]).$this->namesspace[$index];
				}
			}
			return $this->namesspace[$index];
		}
	}
?>
