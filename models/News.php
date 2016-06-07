<?php

    class News {
    
        public static function getNewsItemById ($id) {
            
            $id = intval($id);
            
            if($id) {
            
                $host = 'localhost';
                $dbname = 'blog';
                $user = 'root';
                $password = '';
                $link = mysqli_connect($host, $user, $password, $dbname);
                
                
                $query = "SELECT * FROM articles WHERE id = $id";
                
                $result = mysqli_query($link, $query);
            
                $newsItem = mysqli_fetch_array($result, MYSQLI_ASSOC);

                return $newsItem;    
            }
            
        }
     
        
        public static function getNewsList () {
        
            $host = 'localhost';
            $dbname = 'blog';
            $user = 'root';
            $password = '';
            $link = mysqli_connect($host, $user, $password, $dbname);
            
            $newsList = array();
            $query = 'SELECT id, title, content, date FROM articles ORDER BY date DESC LIMIT 10';
            
            $result = mysqli_query($link, $query);
            
            $i = 0;
            while($row = mysqli_fetch_array($result))  {
            
            $newsList[$i]['id'] = $row['id'];    
            $newsList[$i]['title'] = $row['title'];    
            $newsList[$i]['date'] = $row['date'];    
            $newsList[$i]['content'] = $row['content'];
            $i++;    
            }
            
            
            
            return $newsList;
            
        }
        
        public static function addNewArticle () {
            
            $host = 'localhost';
            $dbname = 'blog';
            $user = 'root';
            $password = '';
            $link = mysqli_connect($host, $user, $password, $dbname);            
            
            
            $title = trim(strip_tags($_POST['title']));
            $content = trim(strip_tags($_POST['content']));
            $date = trim(strip_tags($_POST['date']));
        
            
            $t = "INSERT INTO articles (title, date, content) VALUES ('%s', '%s', '%s')";
            
        $query = sprintf($t, mysqli_real_escape_string($link, $title), mysqli_real_escape_string($link, $date), mysqli_real_escape_string($link, $content) );
            
             $result = mysqli_query($link, $query);
            
            return true;
        
        }
    }

?>
