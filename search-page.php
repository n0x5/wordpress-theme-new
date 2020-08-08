<?php
/*
Template Name: Search Page Template
*/
?>
<?php
include_once('../../../wp-includes/wp-db.php');
include_once('../../../wp-load.php' );
?>

<p><a href="/">Home</a></p>

<?php
echo "<form method='post' action='/?page_id=20794'>";
echo "<div><input type='text' name='fname' placeholder='File name'>";
echo "<input type='submit'>";
echo "</div>";
echo "</form>";
?>


<?php
if(isset($_GET['fname'])) {
    $srch = $_GET['fname'];
} else {
    $srch = $_POST["fname"];;

echo "search term: $srch <br><br>";
}
?>

<title><?php echo "$srch results page"; ?></title>
<p><?php echo "<a href='/?page_id=20794&fname=$srch'>/?page_id=20794&fname=$srch<a><br><br>" ?>
<?php
global $wpdb;

$result = $wpdb->get_results("SELECT * FROM  $wpdb->posts WHERE post_type = 'attachment' and post_title LIKE '%$srch%'");
$count = count($result);
echo "Images found: $count <br><br>";
foreach ( $result as $posts ) {
   echo "<a href='$posts->guid'><img height='230' src='$posts->guid' /></a>";
   echo " <a href='?p=$posts->post_parent'>?p=$posts->post_parent<a/><br><br>";
}
?>

