<?php

namespace App\Model;


class ArticleManager extends AbstractManager
{

    const TABLE = 'article';


    public function __construct()
    {
        parent::__construct(self::TABLE);
    }

    // SELECT ALL 
    // SELECT ONE BY ID

    public function insert(array $article): int
    {
        // prepared request
        $statement = $this->pdo->prepare("INSERT INTO " . self::TABLE . " (`title`, `author`, `img`, `content`) VALUES (:title, :author, :img, :content)");
        $statement->bindValue('title', $article['title'], \PDO::PARAM_STR);
        $statement->bindValue('author', $article['author'], \PDO::PARAM_STR);
        $statement->bindValue('img', $article['img'], \PDO::PARAM_STR);
        $statement->bindValue('content', $article['content'], \PDO::PARAM_STR);

        if ($statement->execute()) {
            return (int)$this->pdo->lastInsertId();
        }
    }

    public function delete(int $id): void
    {
        // prepared request
        $statement = $this->pdo->prepare("DELETE FROM " . self::TABLE . " WHERE id=:id");
        $statement->bindValue('id', $id, \PDO::PARAM_INT);
        $statement->execute();
    }

    public function update(array $article):bool
    {

        // prepared request
        $statement = $this->pdo->prepare("UPDATE " . self::TABLE . " SET `title` = :title, `author` = :author, `img` = :img, `content` = :content WHERE id=:id");
        $statement->bindValue('id', $article['id'], \PDO::PARAM_INT);
        $statement->bindValue('title', $article['title'], \PDO::PARAM_STR);
        $statement->bindValue('author', $article['author'], \PDO::PARAM_STR);
        $statement->bindValue('img', $article['img'], \PDO::PARAM_STR);
        $statement->bindValue('content', $article['content'], \PDO::PARAM_STR);

        return $statement->execute();
    }
}
