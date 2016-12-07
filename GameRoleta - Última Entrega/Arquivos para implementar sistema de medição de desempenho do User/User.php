<?php  
	class User{
		private $userName;
		private $idade;
		private $level;
		private $dificuldade;
		private $xp;

		public function __construct($userName, $idade){
			$this-> userName = $userName;
			$this-> idade = $idade;
			$this-> level = 1;
			$this-> dificuldade = "Easy";
			$this-> xp = 0;
		}

		public function getUserName(){
			return $this-> userName;
		}
		public function getIdade(){
			return $this-> idade;
		}
		public function getDificuldade(){
			$nivelDeDificuldade;

			if(strcasecmp($this-> dificuldade, "easy") == 0){
				$nivelDeDificuldade = 1.5;
			}
			else if(strcasecmp($this-> dificuldade, "medium") == 0){
				$nivelDeDificuldade = 2;
			}
			else{
				$nivelDeDificuldade = 2.5;
			}

			return $nivelDeDificuldade;
		}
		public function getXp(){
			return $this-> xp;
		}
		public function getLevel(){
			if($this-> getXp() > 4){
				$level = (int) ($this-> getXp() * 2) / 5;
			}
			else{
				$level = $this-> level;
			}

			return $level;
		}

		public function setUserName($userName){
			$this-> userName = $userName;
		}
		public function setIdade($idade){
			$this-> idade = $idade;
		}
		public function setLevel($level){
			$this-> level = $level;
		}
		public function setDificuldade($dificuldade){
			$this-> dificuldade = $dificuldade;
		}
		public function setXp($xp){
			$this-> xp = (($this-> xp + $xp) * $this-> getDificuldade());
		}

		public function toString(){
			return "Nome: " . $this-> getUserName() .
				   "<br>Idade: " . $this-> getIdade() .
				   "<br>Level: " . $this-> getLevel() .
				   "<br>Dificuldade: " . $this-> dificuldade .
				   "<br>Xp: " . $this-> getXp();
		} 
	}
?>