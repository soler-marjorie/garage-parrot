<?php

namespace App\Controllers;

class Controller{

    public function route(): void
    {
        if(isset($_GET['controller'])){
            switch ($_GET['controller']) {
                case 'page':
                    //charger controleur page
                    
                    break;

                case 'horaire':
                    //charger controleur horaire
                    
                    break;

                default:
                    throw new \Exception("Le controleur n'existe pas");
                    break;
            }
        } else {
            //Chargement la page d'accueil si pas de controleur dans l'url
            $pageController = new PageController();
            $pageController->home();
        }
    }catch(\Exception $e){
        $this->render('errors/default', [
            'error' => $e->getMessage()
        ]);
    }

    

    protected function render(string $path, array $params = []):void
    {
        $filePath = _ROOTPATH_.'/templates/'.$path.'.php';

        try {
            if (!file_exists($filePath)) {
                throw new \Exception("Fichier non trouvé : ".$filePath);
            } else {
                // Extrait chaque ligne du tableau et crée des variables pour chacune
                extract($params);
                require_once $filePath;
            }
        }catch(\Exception $e) {
            $this->render('errors/default', [
                'error' => $e->getMessage()
            ]);
        }

    }
}
