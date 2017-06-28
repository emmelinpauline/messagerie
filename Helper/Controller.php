<?php
namespace Helper;

class Controller
{
    /**
     * Cette fonction permet de générer les pages à travers le "templating" natif
     * @param string $fileName
     * @param array $data
     * @return string
     */
    public function render($fileName, $data = [])
    {
        if (!file_exists(APP_DIR_VIEW . $fileName)) {
            // le chemin de la vue ne correspond pas à un fichier existant
            throw new \InvalidArgumentException('Fichier de vue ' . $fileName . ' non trouvé');
        }
        ob_start();
        require APP_DIR_VIEW . $fileName;

    }

    public function goHome($msg = false)
    {
        $msgParam = '';
        if(false !== $msg){
            $msgParam = '&err='.$msg;
        }
        header('Location: ./?a=admin'.$msgParam);
        exit;
    }



    public function verif_ParamGet($param = 'id')
    {
        if (!isset($_GET[$param]) || trim($_GET[$param]) === '') {
            header("Location: ./?a=400");
            exit;
        }

        return $_GET[$param];
    }


}