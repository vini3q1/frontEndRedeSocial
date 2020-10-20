<?php

	class Fornecedor
	{
		public $conexao = "";
		public $idusuario = "";
		public $fornecedor = "";

		public function GetAll()
		{
            $qry = 	"
               SELECT idfornecedor,
                        fornecedor
				FROM fornecedor";
			//echo $qry;
			$result = mysqli_query($this->conexao,$qry);
			return $result;
		}


		public function DadosUsuario()
		{
			$au = $this->GetAll();
			while($du = mysqli_fetch_array($au,MYSQLI_ASSOC))
			{
				$this->idfornecedor = $du["idfornecedor"];
				$this->fornecedor = $du["fornecedor"];
			}
		}
	}
?>