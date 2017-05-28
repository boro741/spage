<link href="style.css" rel="stylesheet" type="text/css">
<?php
    require_once 'meekrodb.2.3.class.php';
    DB::$user = 'localhost';
    DB::$dbName = 'MicroBlog';

    DB::debugMode();

    $microBlog = $_POST['microBlog'];
    
    DB::insert('MicroBLog',array('post' => $microBlog));

    
?>

<?php
    require_once 'meekrodb.2.3.class.php';
    DB::$user = 'localhost';
    DB::$dbName = 'MicroBlog';
    $results = DB::query("SELECT post FROM MicroBlog");
    foreach($results as $row){
        echo "<div class='microBlog'>". $row['post'] . "</div>";
    }
?>




