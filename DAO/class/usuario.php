<?php

class Usuario {

    private $idusuario;
    private $deslogin;
    private $dessenha;
    private $dtcadastro;

    public function getIdusuario() {
        return $this->idusuario;

    }

    public function setIdusuario($value) {
        $this->idusuario = $value;

    }

    public function getDeslogin() {
        return $this->deslogin;

    }

    public function setDeslogin($value) {
        $this->deslogin = $value;

    }

    public function getDessenha() {
        return $this->dessenha;

    }

    public function setDessenha($value) {
        $this->dessenha = $value;

    }

    public function getDtcadastro() {
        return $this->dtcadastro;

    }

    public function setDtcadastro($value) {
        $this->dtcadastro = $value;

    }

    public function loadById($id) {

        $sql = new Sql();

        $results = $sql->select("SELECT * FROM tb_usuarios
      WHERE idusuario = :ID", array(
            ":ID" => $id,
        ));

        if (count($results) > 0) {

            $this->setData($result[0]);

        }

    }

    public static function getList() {

        $sql = new Sql();

        return $sql->select("SELECT * FROM tb_usuarios ORDER BY deslogin;");

    }

    public static function search($login) {

        $sql = new Sql();

        return $sql->select("SELECT * FROM tb_usuarios where deslogin LIKE :SEARCH ORDER BY deslogin", array(
            ":SEARCH" => "%" . $login . "%",
        ));
    }

    public function login($usuario, $senha) {

        $sql = new Sql();

        $results = $sql->select("SELECT * FROM tb_usuarios
      WHERE deslogin = :USUARIO AND dessenha = :SENHA", array(
            ":USUARIO" => $usuario,
            ":SENHA" => $senha,
        ));

        if (count($results) > 0) {

            $this->setData($results[0]);

        } else {
            throw new Exception("Login e/ou senha inválidos");
        }

    }

    public function setData($data) {

        $this->setIdusuario($data['idusuario']);
        $this->setDeslogin($data['deslogin']);
        $this->setDessenha($data['dessenha']);
        $this->setDtcadastro(new DateTime($data['dtcadastro']));
    }

    public function insert() {

        $sql = new Sql();

        $results = $sql->select("CALL sp_usuario_insert(:USUARIO, :SENHA)", array(
            ":USUARIO" => $this->getDeslogin(),
            ":SENHA" => $this->getDessenha(),
        ));

        if (count($results) > 0) {

            $this->setData($results[0]);
        }
    }

    public function __construct($usuario = "", $senha = ""){
        $this->setDeslogin($usuario);
        $this->setDessenha($senha);
    }

    public function update($usuario, $senha){
        
        $this->setDeslogin($usuario);
        $this->setDessenha($senha);

        $sql = new Sql();

        $sql->query("UPDATE tb_usuarios SET deslogin = :USUARIO, dessenha = :SENHA where idusuario = :ID", array(
            ":USUARIO"=>$this->getDeslogin(),
            ":SENHA"=>$this->getDessenha(),
            ":ID"=>$this->getIdusuario(),
        ));
    }

    public function __toString() {

        return json_encode(array(
            "idusuario" => $this->getIdusuario(),
            "deslogin" => $this->getDeslogin(),
            "dessenha" => $this->getDessenha(),
            "dtcadastro" => $this->getDtcadastro()->format("d/m/a H:i:s"),

        ));
    }

}
