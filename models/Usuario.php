<?php
	//Vai ser usada para manipular os dados da nossa tabela usuarios do banco
	class Usuario
	{
		private $id;
		private $nome;
		private $email;

		public function getId(){
			return $this->id;
		}

		public function setId($id){
			$this->id = $id;
		}

		public function getNome(){
			return $this->nome;
		}

		public function setNome($nome){
			$this->nome = $nome;
		}


		public function getEmail(){
			return $this->email;
		}

		public function setEmail($email){
			$this->email = $email;
		}
	}

	interface UsuarioDAO
	{
		public function add(Usuario $u); //Create
		public function findAll(); //Retorna uma lista
		public function findByEmail($email); //Retorna um registro
		public function findById($id); //Retorna um registro
		public function update(Usuario $u);
		public function delete($id);
	}