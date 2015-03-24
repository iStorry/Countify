<?php
   require_once dirname(__FILE__) . "/class.countify.php";
   $countify = new Countify;
   echo $countify->instagram_followers("instagram");  // Instagram Username ~ Return Followers Count
   /*
   echo $countify->instagram_likes("https://instagram.com/p/0GxfObTYMz/");  // Instagram Image URL ~ Return Likes Count
   echo $countify->twitter_followers("twitter");  // Twitter Username ~ Return Followers Count
   echo $countify->twitter_retweet("https://twitter.com/twitter/status/532235053883858944");   // Twitter Status URL ~ Return Retweets Count 
   echo $countify->twitter_fav("https://twitter.com/twitter/status/532235053883858944");   // Twitter Status URL ~ Return Fav Count
   */
?>
