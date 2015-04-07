<?php
/* Class Started */
class Countify {
    public static function instagram_followers($username) {
        $file = @file_get_contents('http://instagram.com/' . $username);
        preg_match('/\"followed_by":(.*?)\,/', $file, $mfc);
        if ($mfc[1]) {
            return $mfc[1];
        } 
        else {
            return "Invalid Instagram Username";
        }
    }
    public static function instagram_likes($url) {
        $file = @file_get_contents($url);
        preg_match('/\"count":(.*?)\,/', $file, $mfc);
        if ($mfc[1]) {
            return $mfc[1];
        } 
        else {
            return "Invalid Image URL";
        }
    }
    public static function twitter_followers($username) {
        $file = @file_get_contents("https://twitter.com/" . $username);
        preg_match('/\"followers_count":(.*?)\,/', htmlspecialchars_decode($file), $mfc);
        if ($mfc[1]) {
            return $mfc[1];
        } 
        else {
            return "Invalid Twitter Username";
        }
    }
    public static function twitter_retweet($url) {
        $file = @file_get_contents($url);
        preg_match_all('/<strong>(.*?)<\/strong>/is', $file, $mfc);
        if ($mfc[1][0]) {
            return $mfc[1][0];
        } 
        else {
            return "Invalid Twitter Status";
        }
    }
    public static function twitter_fav($url) {
        $file = @file_get_contents($url);
        preg_match_all('/<strong>(.*?)<\/strong>/is', $file, $mfc);
        if ($mfc[1][1]) {
            return $mfc[1][1];
        } 
        else {
            return "Invalid Twitter Status";
        }
    }
	public static function youtube_views($video_id){
		$file = json_decode(file_get_contents("https://gdata.youtube.com/feeds/api/videos/{$video_id}?v=2&alt=json"));
		return $file->{'entry'}->{'yt$statistics'}->{'viewCount'};
	}
	public static function page_likes($page){
		$file = json_decode(file_get_contents("https://graph.facebook.com/{$page}"));
		return $file->likes;
	}
	public static function photo_likes($photo_id){
		$file = self::cURL("https://www.facebook.com/photo.php?fbid=".$photo_id);
		preg_match('/\"likecount":(.*?)\,/', $file, $mfc);
		if ($mfc[1]) {
            return $mfc[1];
        } 
        else {
            return "Invalid Photo ID";
        }
	}
	public static function post_likes($post_url){
		$file = self::cURL($post_url);
		preg_match('/\"likecount":(.*?)\,/', $file, $mfc);
		if ($mfc[1]) {
            return $mfc[1];
        } 
        else {
            return "Invalid Post";
        }
	}
	private static function cURL($url){
		   $curl = curl_init();
                   curl_setopt($curl, CURLOPT_URL, $url);
	           curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
                   curl_setopt($curl, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.1.2) Gecko/20090729 Firefox/3.5.2 GTB5');
               return $result = curl_exec($curl);
	}
}
?>
