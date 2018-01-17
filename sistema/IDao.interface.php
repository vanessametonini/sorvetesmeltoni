<?php
interface IDao {
  public function inserir($objeto);
  public function alterar($objeto);
  public function excluir($objeto);
  public function listar();
  public function listarSelecionado($id);
}
?>
