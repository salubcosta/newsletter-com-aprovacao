<?php

class assinardao extends db{

	public function assinar($nome, $email){

		$sql = "INSERT INTO NEWSLETTER (ID,NOME,EMAIL) VALUES(NULL,:NOME,:EMAIL);";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(':NOME',$nome);
		$sql->bindValue(':EMAIL',$email);
		$sql->execute();

		return $this->db->lastInsertId();
	}

	public function confirmar($hash){
		$sql = "UPDATE NEWSLETTER SET STATUS = 1 WHERE MD5(ID)=".$hash;
		$this->db->query($sql);
	}
}
?>