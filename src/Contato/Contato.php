<?php
/**
 * Esta pagina esta é da classe de contato
 * esta classe é utilizada 
 * para ser feita a realização do crud por meio
 * de Orientação de Objetios
 * 
 */
namespace Agenda\Contato;

use Agenda\Acessores;

class Contato extends Acessores
{
    protected $id;
    protected $usuario_id;
    protected $nome;
    protected $email;
    protected $telefone;
}