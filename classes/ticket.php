<?php

class Ticket{
    private $tick_ID;
    private $tick_titulo;
    private $tick_cliente;
    private $tick_responsavel;
    private $tick_situacao;
    private $tick_prioridade;
    private $tick_criacao;
    private $tick_departamento;

    function novoCodigo($quem_solicitou)
    {
      include '../conexao.php';
      $consulta = $bd->query("select max(tick_ID) + 1 as novo from tare");
      if (!$consulta) {
        $_SESSION['tipo'] = 'Erro de Banco de dados.';
        $_SESSION['mensagem'] = '<p class="text-danger">Não foi possível gerar um novo código: .' . $bd->error . '</p>';
        header("Location: ../menu.php?tp_tela=cad_tickets");
      } else {
        if ($consulta->num_rows > 0) {
          while ($tikBD = $consulta->fetch_object()) {
            if ($tikBD->tick_ID == $tick_ID) {
              if ($quem_solicitou == 'sistema'){
                if ($tikBD->novo <= 0) {
                  return 1;
                } else {
                  return $tikBD->novo;
                }
              } elseif ($quem_solicitou == 'usuario'){
                if ($tikBD->novo <= 0) {
                  header("Location: ../menu.php?tp_tela=cad_tickets&id_ticket=1");
                } else {
                  header("Location: ../menu.php?tp_tela=cad_tickets&id_ticket={$tikBD->novo}");
                }
              }
            }
          }
        }
      }
    }

    public function consultaTickets()
  {
    include 'conexao.php';
    $i = 0;
    $tarefas = array();
    $consulta = $bd->query("select * from tick");
    if (!$consulta) {
      $_SESSION['tipo'] = 'Erro de Banco de dados.';
      $_SESSION['mensagem'] = '<p class="text-danger">Não foi possível consultar as tarefas: .' . $bd->error . '</p>';
      header("Location: ../menu.php?tp_tela=cad_tickets");
    } else {
      if ($consulta->num_rows > 0) {
        while ($tikBD = $consulta->fetch_object()) {
          $ticket = new Ticket();
          $ticket->setTick_ID($tikBD->tick_ID);
          $ticket->setTick_titulo($tikBD->tick_titulo);
          $ticket->setTick_cliente($tikBD->tick_cliente);
          $ticket->setTick_responsavel($tikBD->tick_responsavel);
          $ticket->setTick_situacao($tikBD->tick_situacao);
          $ticket->setTick_prioridade($tikBD->tick_prioridade);
          $ticket->setTick_criacao($tikBD->tick_criacao);
          $ticket->setTick_departamento($tikBD->tick_departamento);
          $tickets[$i] = $ticket;
          $i++;
        }
        return $tickets;
      } else {
        return null;
      }
    }
  }

  function consultaTicket($tick_titulo)
  {
    include 'conexao.php';
    $ticket = new Ticket();
    $consulta = $bd->query("select * from tick");
    if (!$consulta) {
      $_SESSION['tipo'] = 'Erro de Banco de dados.';
      $_SESSION['mensagem'] = '<p class="text-danger">Não foi possível consultar a tarefa: .' . $bd->error . '</p>';
      header("Location: ../menu.php?tp_tela=cad_tickets");
    } else {
      if ($consulta->num_rows > 0) {
        while ($tikBD = $consulta->fetch_object()) {
          if ($tikBD->tick_ID == $tick_ID) {
            $ticket->setTick_titulo($tikBD->tick_titulo);
            $ticket->setTick_cliente($tikBD->tick_cliente);
            $ticket->setTick_responsavel($tikBD->tick_responsavel);
            $ticket->setTick_situacao($tikBD->tick_situacao);
            $ticket->setTick_prioridade($tikBD->tick_prioridade);
            $ticket->setTick_criacao($tikBD->tick_criacao);
            $ticket->setTick_departamento($tikBD->tick_departamento);
            return $ticket;
          }
        }
        return $ticket;
      } else {
        return new Ticket();
      }
    }
  }

  function gravarTicket(Ticket $Obj)
  {
    require('../conexao.php');
    session_start();
    $existe_registro = false;
    $ticket = new Ticket();
    if ($Obj->getTick_ID() == '--') {
      $Obj->setTick_ID($Obj->novoCodigo('sistema'));
    }
    $consulta = $bd->query("select * from tare where tare_codi = '{$Obj->getTick_ID()}' ");
    if (!$consulta) {
      $_SESSION['tipo'] = 'Erro de Banco de dados.';
      $_SESSION['mensagem'] = '<p class="text-danger">Não foi possível realizar a gravação do registro: .' . $bd->error . '</p>';
      header("Location: ../menu.php?tp_tela=cad_tickets");
    } else {
      if ($consulta->num_rows > 0) {
        // while ($tikBD = $consulta->fetch_object()) {
          $existe_registro = true;
        // }
      }
      if (!$existe_registro){//inclusão
        
        $resultado = $bd->query("insert into tick 
                                (tick_titulo,tick_cliente,tick_responsavel,tick_situacao,tick_prioridade,tick_criacao,tick_departamento)
                                        values
                                ({$Obj->getTick_ID()},
                                '{$Obj->getTick_titulo()}',
                                 {$Obj->getTick_cliente()},
                                '{$Obj->getTick_responsavel()}',
                                '{$Obj->getTick_situacao()}',
                                 {$Obj->getTick_prioridade()},
                                '{$Obj->getTick_criacao()}',
                                '{$Obj->getTick_departamento()}')");
        if (!$resultado) {
          $_SESSION['tipo'] = 'Erro de Banco de dados.';
          $_SESSION['mensagem'] = '<p class="text-danger">Não foi possível cadastrar: .' . $bd->error . '</p>';
          header("Location: ../menu.php?tp_tela=cad_tickets");
        } else {
          $_SESSION['tipo'] = 'Cadastro.';
          $_SESSION['mensagem'] = '<p class="text-success">Cadastro realizado com sucesso.</p>';
          header("Location: ../menu.php?tp_tela=cad_tickets&id_ticket={$Obj->getTick_ID()}");
        }
      } else { //alteração
        $resultado = $bd->query("update tare
                                set tick_titulo = '{$Obj->getTick_titulo()}',
                                    tick_cliente =  {$Obj->getTick_cliente()},
                                    tick_responsavel = '{$Obj->getTick_responsavel()}',
                                    tick_situacao = '{$Obj->getTick_situacao()}',
                                    tick_prioridade = {$Obj->getTick_prioridade()},
                                    tick_criacao = '{$Obj->getTick_criacao()}',
                                    tick_departamento = '{$Obj->getTick_departamento()}'
                                where 
                                    tick_ID = {$Obj->getTick_ID()}");
        if (!$resultado) {
          $_SESSION['tipo'] = 'Erro de Banco de dados.';
          $_SESSION['mensagem'] = '<p class="text-danger">Não foi possível cadastrar: .' . $bd->error . '</p>';
          header("Location: ../menu.php?tp_tela=cad_tickets&id_ticket={$Obj->getTick_ID()}");
        } else {
          $_SESSION['tipo'] = 'Cadastro';
          $_SESSION['mensagem'] = '<p class="text-success">Alteração realizada com sucesso.</p>';
          header("Location: ../menu.php?tp_tela=cad_tickets");
        }
      }
    }
  }

  function excluirTicket($tick_ID)
  {
    require('../conexao.php');
    session_start();
    $resultado;
    $resultado = $bd->query("delete from tick where tick_ID = {$tick_ID} ");
    if (!$resultado) {
      $_SESSION['tipo'] = 'Erro de Banco de dados.';
      $_SESSION['mensagem'] = '<p class="text-danger">Não foi possível exluir o registro: .' . $bd->error . '</p>';
      header("Location: ../menu.php?tp_tela=cad_tickets&id_ticket={$tick_ID}");
    } else {
      $_SESSION['tipo'] = 'Exclusão.';
      $_SESSION['mensagem'] = '<p class="text-success">Exclusão realizada com sucesso.</p>';
      header("Location: ../menu.php?tp_tela=cad_tickets");
    }
    header("Location: ../menu.php?tp_tela=cad_tickets");
  }

  public function __construct()
  {
    $this->setTick_ID('--');
    $this->setTick_titulo('');
    $this->setTick_cliente(null);
    $this->setTick_responsavel('');
    $this->setTick_situacao('');
    $this->setTick_prioridade(null);
    $this->setTick_criacao('');
    $this->setTick_departamento('');
  }

    public function getTick_titulo()
    {
        return $this->tick_titulo;
    }

    public function setTick_titulo($tick_titulo)
    {
        $this->tick_titulo = $tick_titulo;

        return $this;
    }

    public function getTick_cliente()
    {
        return $this->tick_cliente;
    }

    public function setTick_cliente($tick_cliente)
    {
        $this->tick_cliente = $tick_cliente;

        return $this;
    }

    public function getTick_responsavel()
    {
        return $this->tick_responsavel;
    }

    public function setTick_responsavel($tick_responsavel)
    {
        $this->tick_responsavel = $tick_responsavel;

        return $this;
    }
 
    public function getTick_situacao()
    {
        return $this->tick_situacao;
    }

    public function setTick_situacao($tick_situacao)
    {
        $this->tick_situacao = $tick_situacao;

        return $this;
    }

    public function getTick_prioridade()
    {
        return $this->tick_prioridade;
    }

    public function setTick_prioridade($tick_prioridade)
    {
        $this->tick_prioridade = $tick_prioridade;

        return $this;
    }

    public function getTick_criacao()
    {
        return $this->tick_criacao;
    }

    public function setTick_criacao($tick_criacao)
    {
        $this->tick_criacao = $tick_criacao;

        return $this;
    }

    public function getTick_departamento()
    {
        return $this->tick_departamento;
    }

    public function setTick_departamento($tick_departamento)
    {
        $this->tick_departamento = $tick_departamento;

        return $this;
    }

    public function getTick_ID()
    {
        return $this->tick_ID;
    }

    public function setTick_ID($tick_ID)
    {
        $this->tick_ID = $tick_ID;

        return $this;
    }
}
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['op'])) {
    $operacao = $_POST['op'];
    if (method_exists('Ticket', $operacao)) {
      $objTicket = new Ticket;
      if ($operacao == 'gravarTicket') {
        $objTicket->setTick_ID((isset($_POST['tick_ID']) ? $_POST['tick_ID'] : '--'));
        $objTicket->setTick_titulo((isset($_POST['tick_titulo']) ? $_POST['tick_titulo'] : ''));
        $objTicket->setTick_cliente((isset($_POST['tick_cliente']) ? $_POST['tick_cliente'] : null));
        $objTicket->setTick_responsavel((isset($_POST['tick_responsavel']) ? $_POST['tick_responsavel'] : ''));
        $objTicket->setTick_situacao((isset($_POST['tick_situacao']) ? $_POST['tick_situacao'] : ''));
        $objTicket->setTick_prioridade((isset($_POST['tick_prioridade']) ? $_POST['tick_prioridade'] : null));
        $objTicket->setTick_criacao((isset($_POST['tick_criacao']) ? $_POST['tick_criacao'] : ''));
        $objTicket->setTick_departamento((isset($_POST['tick_departamento']) ? $_POST['tick_departamento'] : ''));
        $objTicket->$operacao($objTicket);
      } elseif ($operacao == 'excluirTicket') {
        $objTicket->$operacao($_GET['id_ticket']);
      } elseif ($operacao == 'novoCodigo') {
        $objTicket->$operacao('usuario');
      } else {
        $objTicket->$operacao();
      }
    }
  }