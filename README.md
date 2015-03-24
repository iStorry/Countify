# Countify !

## Requirements

- PHP 5.2.x or higher
-
- cURL
- 
### Initialize the class
```php
<?php
    require_once dirname(__FILE__) . "/class.countify.php";
    $countify = new Countify;
    echo $countify->instagram_followers("instagram");
?>
```
