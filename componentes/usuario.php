<?php

	class Usuario
	{
		public $conexao = "";
		public $idusuario = "";
		public $nome = "";
		public $login = "";
        public $senha = "";        
        public $datainsercao = "";
		public $idempresa = "";
		public $empresa = "";


		public function GetAll()
		{
            $qry = 	"
               SELECT idusuario,
                        u.nome,
                        u.login,
                        u.senha,
                        u.datainsercao,
						u.idempresa,
						e.empresa
				FROM usuario u
				INNER JOIN empresa e ON  e.idempresa = u.idempresa
                WHERE 1=1;
                    ";
			//echo $qry;
			$result = mysqli_query($this->conexao,$qry);
			return $result;
		}


		public function DadosUsuario()
		{
			$au = $this->GetAll();
			while($du = mysqli_fetch_array($au,MYSQLI_ASSOC))
			{
				$this->idusuario = $du["idusuario"];
				$this->nome = $du["nome"];
				$this->login = $du["login"];
                $this->senha = $du["senha"];
                $this->datainsercao = $du["datainsercao"];
				$this->idempresa = $du["idempresa"];
				$this->empresa = $du["empresa"];
			}
		}
	}
?>