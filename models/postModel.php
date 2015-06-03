<?php

class postModel extends Model {

    public function __construct() {
        parent::__construct();
    }

    public function getPosts() {
        $post = $this->_db->query("select * from posts ");

        return $post->fetchall();
    }

    public function insertarPost($titulo, $cuerpo) {
        $this->_db->prepare("insert into posts values (null,:titulo,:cuerpo,null)")
                ->execute(
                        array(
                            ':titulo' => $titulo,
                            ':cuerpo' => $cuerpo
        ));
    }

}
