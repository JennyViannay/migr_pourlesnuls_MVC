<?php

namespace App\Controller;

use App\Model\ArticleManager;

class HomeController extends AbstractController
{

    public function index()
    {
        $user = [
            'name' => 'Jenny',
            'password' => '1234',
            'is_connected' => false
        ];
        $error = [];

        $articleManager = new ArticleManager();
        $articles = $articleManager->selectAll();

       if($_SERVER['REQUEST_METHOD'] === 'POST'){
           if(!empty($_POST['name']) && !empty($_POST['password'])) {
                if($_POST['name'] === $user['name']){
                    if($_POST['password'] === $user['password']){
                        $user['is_connected'] = true;
                    } else {
                        $error['password'] = "Password incorrect";
                    }
                } else {
                    $error['name'] = "User not found";
                }
           } else {
            $error['form'] = "Tous les champs sont requis";
           }
       }

        return $this->twig->render('Home/index.html.twig', [
            'articles' => $articles,
            'user' => $user,
            'error' => $error,
        ]);
    }
}
