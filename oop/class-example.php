<?php

    class Comment{
        public $username;
        public $text;
        public $likes;
        public $dislikes;

        function __construct(string $_username, string $text, int $_likes, int $_dislikes ){
            $this->_username = $_username;
            $this->text = $text;
            $this->_likes = $_likes;
            $this->_dislikes = $_dislikes;
        }

        function display_comment(){
            return "{$this->_username} ; {$this->text} <br> likes: {$this->_likes} dislikes {$this->_dislikes}";
        }
    }

    $c1 = new Comment("nur" , "great" , 5 , 2);

    echo $c1->display_comment();
?>