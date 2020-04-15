<?php

namespace App\Controller;

use App\Model\ArticleManager;

class ArticleController extends AbstractController
{

    // public function index()
    // {
    //     $articleManager = new ArticleManager();
    //     $articles = $articleManager->selectAll();

    //     return $this->twig->render('Article/index.html.twig', 
    //     ['articles' => $articles]);
    // }


   
    // public function show(int $id)
    // {
    //     $itemManager = new ItemManager();
    //     $item = $itemManager->selectOneById($id);

    //     return $this->twig->render('Item/show.html.twig', ['item' => $item]);
    // }


    
    // public function add()
    // {

    //     if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //         $itemManager = new ItemManager();
    //         $item = [
    //             'title' => $_POST['title'],
    //         ];
    //         $id = $itemManager->insert($item);
    //         header('Location:/item/show/' . $id);
    //     }

    //     return $this->twig->render('Item/add.html.twig');
    // }


   
    // public function delete(int $id)
    // {
    //     $itemManager = new ItemManager();
    //     $itemManager->delete($id);
    //     header('Location:/item/index');
    // }
}