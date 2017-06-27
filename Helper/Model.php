<?php
namespace Helper;

abstract class Model
{
    public function errorManagement(\PDOStatement $stmt, $msg = 'Marche pas!')
    {
        if ($stmt->errorCode() !== '000000') {
            throw new \PDOException(debug_backtrace()[1]['class'].'::'.debug_backtrace()[1]['function']. ' '.$msg);
        }
    }
}