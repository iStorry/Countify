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
}
?>
