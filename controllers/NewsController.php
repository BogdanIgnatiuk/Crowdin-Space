<?php
include_once ROOT.'/models/News.php';

class NewsController {
    
    public function actionIndex(){ 
        
        $newsList = array();
        $newsList = News::getNewsList();
        
        require_once(ROOT.'/views/homepage/index.php');
        
        
        return true;                          
    } 

    public function actionView($id){ 
        
        if ($id) {
            
            $newsItem = News::getNewsItemById($id);
            
            require_once(ROOT.'/views/article/index.php');
            
        }  
        return true;                        
    }
    
    public function actionAddForm() {
    
        require_once(ROOT.'/views/addArticle/index.php');
        
        return true;
        
    }
    
     public function actionAdd() {

        News::addNewArticle();
        
        header("Location: home");
        
        return true;
        
    }
    
    
    
    
}
?>
