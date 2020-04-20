<?php 

namespace Models;


abstract class Model {

    protected $pdo;
    protected $table; 

    public function __construct(){
        $this->pdo = \Database::getPdo();
    }

    public function find(int $id) {

        $query = $this->pdo->prepare("SELECT * FROM {$this->table} WHERE id = :id");
        $query->execute(['id' => $id]);
        $item = $query->fetch();
        return $item;
    }

    public function delete(int $id):void {

        $query = $this->pdo->prepare("DELETE FROM {$this->table} WHERE id = :id");
        $query->execute(['id' => $id]);
    }

    
    public function findAll(?string $order = ""): array {
        $sql = "SELECT * FROM {$this->table}" ;
        if ($order){
            $sql .= " ORDER BY ".$order ;
        }
        $resultats = $this->pdo->query($sql);
        
      // On fouille le résultat pour en extraire les données réelles
        return $articles = $resultats->fetchAll();
    }

}