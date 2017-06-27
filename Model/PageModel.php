<?php
namespace Model;


use Helper\DB;
use Helper\Model;

class PageModel extends Model
{
    /**
     * @param $data
     * @return bool
     */
    public function add(array $data)
    {
        $sql = "INSERT INTO
                    `messagerie`
                    (
                      `nom`,
                      `prenom`,
                      `mail`,
                      `message`
                    
                    ) VALUES (
                      :nom,
                      :prenom,
                      :mail,
                      :message
                    );
                    
                    
        ";
        $stmt = DB::get()->prepare($sql);
        $stmt->bindValue(":nom", $data['nom']);
        $stmt->bindValue(":prenom", $data['prenom']);
        $stmt->bindValue(":mail", $data['mail']);
        $stmt->bindValue(":message", $data['message']);
        $stmt->execute();


        return true;
    }

}


