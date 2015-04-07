<?php
   require_once dirname(__FILE__) . "/class.countify.php";
   $countify = new Countify;
   echo $countify->post_likes("https://www.facebook.com/username/posts/post_id"); // Min 1 Like Required xD
   /* 
   echo $countify->photo_likes("569448453189619");
   echo $countify->page_likes("MicrosoftIndia");
   echo $countify->youtube_views("Yl7Dlo9MNuo");  // Youtube Count 
   echo $countify->instagram_followers("instagram");  // Instagram Username ~ Return Followers Count
   echo $countify->instagram_likes("https://instagram.com/p/0GxfObTYMz/");  // Instagram Image URL ~ Return Likes Count
   echo $countify->twitter_followers("twitter");  // Twitter Username ~ Return Followers Count
   echo $countify->twitter_retweet("https://twitter.com/twitter/status/532235053883858944");  // Twitter Status ~ Return Retweets Count 
   echo $countify->twitter_fav("https://twitter.com/twitter/status/532235053883858944");   // Twitter Status ~ Return Fav Count
   */
?>
