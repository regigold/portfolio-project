// previous and next page navigator //

<?php 
                
$pages = array(
    '1' => 'new-york-post-redesign.php',
    '2' => 'twd-landing-page.php',
    '3' => 'javascript-jquery.php'
);

$key = $_GET['key'];
$next = $key + 1;
$prev = $key - 1;

?>

<?php if ($prev >= 0): ?>
    <a href="<?php echo "show.php?key=".$prev;?>">Previous</a>
<?php endif; ?>

<?php if ($next < count($pages)): ?> 
    <a href="<?php echo "show.php?key=".$next;?>">Next</a>
<?php endif; ?>