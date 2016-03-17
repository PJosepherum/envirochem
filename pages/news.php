<?php
if ( isset ($_GET['c']) )    {
    
    if ($_GET['c'] == 'latest')  {
        
        echo '<div class="fullblock">';       
        echo '<h1>Latest news</h1>';
        echo '</div>';
        
    }  elseif (is_numeric($_GET['c'])) {
        
        $id = htmlentities($_GET['c'], ENT_QUOTES);
        $result = mysql_query("SELECT * FROM news_categories WHERE id=" . $id . " LIMIT 1");
        if ( $result ) {
            $category = mysql_fetch_array($result);
            echo '<div class="fullblock">';       
            echo '<h1>' . $category['title'] . '</h1>';
            echo '</div>';
        }
        
    } else {
            echo '<div class="fullblock">';       
            echo '<h1>Category not found</h1>';
            echo '</div>';   
    }
    
} elseif(isset($_GET['a'])) {
    
        echo '<div class="fullblock">';       
        echo '<h1>Article</h1>';
        echo '</div>';  
    
} else {
    
        echo '<div class="fullblock">';       
        echo '<h1>Latest news</h1>';
        echo '</div>';  
    
}
?>
 
 <div class="rightblock">
	<h2>Categories</h2>
    <ul class="servicelist">
    <?php
        if ( $_GET['c'] == 'latest' ) {
            echo '<li class="active"><a href="?p=news&amp;c=latest">Latest news</a></li>';
        } elseif (!isset($_GET['c']) && !isset($_GET['a'])) {
            echo '<li class="active"><a href="?p=news&amp;c=latest">Latest news</a></li>';
        } else {
            echo '<li><a href="?p=news&amp;c=latest">Latest news</a></li>'; 
        }

        $result = mysql_query("SELECT * FROM news_categories");
        if ( $result ) {
            while ($category = mysql_fetch_array($result))   {
            
                if ( $_GET['c'] == $category['id'] ) {
                    echo '<li class="active"><a href="?p=news&amp;c=' . $category['id'] . '">' . $category['title'] . '</a></li>';
                } else {
                    echo '<li><a href="?p=news&amp;c=' . $category['id'] . '">' . $category['title'] . '</a></li>';
                }            
            }
        } else {
                echo '<li>No categories found</li>';  
        }
    ?>
    </ul> 
</div>
<div class="altrightblock">
	<h1>Calendar</h1>
    <ul class="list">
        <li>No upcoming events</li>
    </ul>
</div>

<?php
    $comments = 0;
	if ( isset($_GET['a']) )	{
        $ida = $_GET['a'];
		if( is_numeric($ida) ) {
		    $result = mysql_query("SELECT * FROM news_articles WHERE id=" . $ida . "");
            $comments = 1;
        } else {
            $result = 0; 
        }
    } elseif ( isset($_GET['c']) )	{
         $idc = $_GET['c'];
         if ( is_numeric($idc) ) {
            $result = mysql_query("SELECT * FROM news_articles WHERE categoryid=" . $idc . " ORDER BY timestamp DESC");
        } elseif ($idc == "latest")  {
            $result = mysql_query("SELECT * FROM news_articles ORDER BY timestamp DESC LIMIT 1");
        } else {
            $result = mysql_query("SELECT * FROM new_sarticles ORDER BY timestamp DESC LIMIT 1");
        }
    }  else {
        $result = mysql_query("SELECT * FROM news_articles ORDER BY timestamp DESC LIMIT 1");
    }
    
    if ( mysql_num_rows($result) > 0 ) {
         while ($article = mysql_fetch_array($result))   {
        
            $userresult = mysql_query("SELECT * FROM users WHERE id='" . $article['userid'] . "'");
            $users = mysql_fetch_array($userresult);
            
            $categoryresult = mysql_query("SELECT * FROM news_categories WHERE id='" . $article['categoryid'] . "'");
            $category = mysql_fetch_array($categoryresult);
        
            // Fix the date format
            $date = $article['timestamp'];
            // We'll remove certain characters for backward compatibility
            // YYYY-MM-DD HH:MM:SS
            $date = str_replace('-', '', $date);
            $date = str_replace(':', '', $date);
            $date = str_replace(' ', '', $date);
            // YYYYMMDDHHMMSS
            $date = getdate( mktime(
                substr($date, 8, 2),
                substr($date, 10, 2),
                substr($date, 12, 2),
                substr($date, 4, 2),
                substr($date, 6, 2),
                substr($date, 0, 4)
            ));

            echo '<div class="leftblock">';
                echo '<h2>' . $article['title'] . '</h2>';
                echo $article['body'];
                echo '<div class="newsfooter">';
                    echo '<ul class="newsright">';
                        echo '<li>' . $date['mday'] . ' ' . $date['month'] . ' ' . $date['year'] . ' by <a href="mailto:' . $users['email'] .'">' . $users['name'] . '</a></li>';
                    echo '</ul>';
                    echo '<ul class="newsleft">';
                        echo '<li><a href="?p=news&amp;c=' . $article['categoryid'] . '">' . $category['title'] . '</a></li><li><a href="?p=news&amp;a=' . $article['id'] . '">0 comments</a></li>';
                    echo '</ul>';
                echo '</div>';
            if ($comments)   {
                    echo '<h1>Comments</h1>';
                    echo '<h3>No comments</h3>';                   
            }
            echo '</div>';
            
        }
    } else {
        echo '<div class="leftblock">';
        echo '<h2>No article found</h2>';
        echo '</div>';
    }      
    

?>