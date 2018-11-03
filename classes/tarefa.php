<?php
class Tarefa
{
  private $tare_codi;
  private $tare_titu;
  private $tare_desc;
  private $tare_stat;

  function novoCodigo($quem_solicitou)
  {
    include '../conexao.php';
    $consulta = $bd->query("select max(tare_codi) + 1 as novo from tare");
    if (!$consulta) {
      $_SESSION['tipo'] = 'Erro de Banco de dados.';
      $_SESSION['mensagem'] = '<p class="text-danger">Não foi possível gerar um novo código: .' . $bd->error . '</p>';
      header("Location: ../menu.php?tp_tela=cad_tarefas");
    } else {
      if ($consulta->num_rows > 0) {
        while ($tarBD = $consulta->fetch_object()) {
          if ($tarBD->tare_codi == $tare_codi) {
            if ($quem_solicitou == 'sistema'){
              return $tarBD->novo;
            } elseif ($quem_solicitou == 'usuario'){
              header("Location: ../menu.php?tp_tela=cad_tarefas&id_tarefa={$tarBD->novo}");
            }

          }
        }
      }
    }
  }

  public function consultaTarefas()
  {
    include 'conexao.php';
    $i = 0;
    $tarefas = array();
    $consulta = $bd->query("select * from tare");
    if (!$consulta) {
      $_SESSION['tipo'] = 'Erro de Banco de dados.';
      $_SESSION['mensagem'] = '<p class="text-danger">Não foi possível consultar as tarefas: .' . $bd->error . '</p>';
      header("Location: ../menu.php?tp_tela=cad_tarefas");
    } else {
      if ($consulta->num_rows > 0) {
        while ($tarBD = $consulta->fetch_object()) {
          $tarefa = new Tarefa();
          $tarefa->setTare_codi($tarBD->tare_codi);
          $tarefa->setTare_titu($tarBD->tare_titu);
          $tarefa->setTare_desc($tarBD->tare_desc);
          $tarefa->setTare_stat($tarBD->tare_stat);
          $tarefas[$i] = $tarefa;
          $i++;
        }
        return $tarefas;
      }
    }
  }

  function consultaTarefa($tare_codi)
  {
    include 'conexao.php';
    $tarefa = new Tarefa();
    $consulta = $bd->query("select * from tare");
    if (!$consulta) {
      $_SESSION['tipo'] = 'Erro de Banco de dados.';
      $_SESSION['mensagem'] = '<p class="text-danger">Não foi possível consultar a tarefa: .' . $bd->error . '</p>';
      header("Location: ../menu.php?tp_tela=cad_tarefas");
    } else {
      if ($consulta->num_rows > 0) {
        while ($tarBD = $consulta->fetch_object()) {
          if ($tarBD->tare_codi == $tare_codi) {
            $tarefa->setTare_codi($tarBD->tare_codi);
            $tarefa->setTare_titu($tarBD->tare_titu);
            $tarefa->setTare_desc($tarBD->tare_desc);
            $tarefa->setTare_stat($tarBD->tare_stat);
            return $tarefa;
          }
        }
        return $tarefa;
      } else {
        return new Tarefa();
      }
    }
  }

  function gravarTarefa(Tarefa $Obj)
  {
    require('../conexao.php');
    session_start();
    $existe_registro = false;
    $tarefa = new Tarefa();
    $Obj->getTare_codi();
    if ($Obj->getTare_codi() == '--') {
      $Obj->setTare_codi($Obj->novoCodigo('sistema'));
    }
    $consulta = $bd->query("select * from tare where tare_codi = '{$Obj->getTare_codi()}' ");
    if (!$consulta) {
      $_SESSION['tipo'] = 'Erro de Banco de dados.';
      $_SESSION['mensagem'] = '<p class="text-danger">Não foi possível realizar a gravação do registro: .' . $bd->error . '</p>';
      header("Location: ../menu.php?tp_tela=cad_tarefas");
    } else {
      if ($consulta->num_rows > 0) {
        while ($tarBD = $consulta->fetch_object()) {
          $existe_registro = true;
        }
      }
      if (!$existe_registro){//inclusão
        
        $resultado = $bd->query("insert into tare 
                                (tare_codi,tare_titu,tare_desc,tare_stat)
                                        values
                                ({$Obj->getTare_codi()},
                                '{$Obj->getTare_titu()}',
                                '{$Obj->getTare_desc()}',
                                '{$Obj->getTare_stat()}')");
        if (!$resultado) {
          $_SESSION['tipo'] = 'Erro de Banco de dados.';
          $_SESSION['mensagem'] = '<p class="text-danger">Não foi possível cadastrar: .' . $bd->error . '</p>';
          header("Location: ../menu.php?tp_tela=cad_tarefas");
        } else {
          $_SESSION['tipo'] = 'Cadastro.';
          $_SESSION['mensagem'] = '<p class="text-success">Cadastro realizado com sucesso.</p>';
          header("Location: ../menu.php?tp_tela=cad_tarefas&id_tarefa={$Obj->getTare_codi()}");
        }
      } else { //alteração
        $resultado = $bd->query("update tare
                                set tare_titu = '{$Obj->getTare_titu()}',
                                    tare_desc = '{$Obj->getTare_desc()}',
                                    tare_stat = '{$Obj->getTare_stat()}'
                                where 
                                    tare_codi = {$Obj->getTare_codi()} ");
        if (!$resultado) {
          $_SESSION['tipo'] = 'Erro de Banco de dados.';
          $_SESSION['mensagem'] = '<p class="text-danger">Não foi possível cadastrar: .' . $bd->error . '</p>';
          header("Location: ../menu.php?tp_tela=cad_tarefas&id_tarefa={$Obj->getTare_codi()}");
        } else {
          $_SESSION['tipo'] = 'Cadastro';
          $_SESSION['mensagem'] = '<p class="text-success">Alteração realizada com sucesso.</p>';
          header("Location: ../menu.php?tp_tela=cad_tarefas");
        }
      }
    }
  }

  function excluirTarefa($tare_codi)
  {
    require('../conexao.php');
    session_start();
    $resultado;
    $resultado = $bd->query("delete from tare where tare_codi = {$tare_codi} ");
    if (!$resultado) {
      $_SESSION['tipo'] = 'Erro de Banco de dados.';
      $_SESSION['mensagem'] = '<p class="text-danger">Não foi possível exluir o registro: .' . $bd->error . '</p>';
      header("Location: ../menu.php?tp_tela=cad_tarefas&id_tarefa={$tare_codi}");
    } else {
      $_SESSION['tipo'] = 'Exclusão.';
      $_SESSION['mensagem'] = '<p class="text-success">Exclusão realizada com sucesso.</p>';
      header("Location: ../menu.php?tp_tela=cad_tarefas");
    }
    header("Location: ../menu.php?tp_tela=cad_tarefas");
  }

  public function __construct()
  {
    $this->setTare_codi('--');
    $this->setTare_titu('');
    $this->setTare_desc('');
    $this->setTare_stat('P');
  }

  public function getTare_titu()
  {
    return $this->tare_titu;
  }

  public function setTare_titu($tare_titu)
  {
    $this->tare_titu = $tare_titu;
  }

  public function getTare_desc()
  {
    return $this->tare_desc;
  }

  public function setTare_desc($tare_desc)
  {
    $this->tare_desc = $tare_desc;
  }

  public function getTare_stat()
  {
    return $this->tare_stat;
  }

  public function setTare_stat($tare_stat)
  {
    $this->tare_stat = $tare_stat;
  }

  public function getTare_codi()
  {
    return $this->tare_codi;
  }

  public function setTare_codi($tare_codi)
  {
    $this->tare_codi = $tare_codi;
  }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['op'])) {
  $operacao = $_POST['op'];
  if (method_exists('Tarefa', $operacao)) {
    $objTatefa = new Tarefa;
    if ($operacao == 'gravarTarefa') {
      $objTatefa->setTare_codi((isset($_POST['tare_codi']) ? $_POST['tare_codi'] : '--'));
      $objTatefa->setTare_titu((isset($_POST['tare_titu']) ? $_POST['tare_titu'] : ''));
      $objTatefa->setTare_desc((isset($_POST['tare_desc']) ? $_POST['tare_desc'] : ''));
      $objTatefa->setTare_stat((isset($_POST['tare_stat']) ? $_POST['tare_stat'] : 'P'));
      $objTatefa->$operacao($objTatefa);
    } elseif ($operacao == 'excluirTarefa') {
      $objTatefa->$operacao($_GET['id_tarefa']);
    } elseif ($operacao == 'novoCodigo') {
      $objTatefa->$operacao('usuario');
    } else {
      $objTatefa->$operacao();
    }
  }
}
?> 