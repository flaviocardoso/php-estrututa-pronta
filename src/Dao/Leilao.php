<?php 
namespace Flavio\Test;

class Leilao
{
    private $con;

    public function __construct(\PDO $con)
    {
        $this->con = $con;   
    }
}