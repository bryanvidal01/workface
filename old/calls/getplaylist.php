<?php
include 'connect.php';

if ($result = $mysqli->query("SELECT `id`, `name`, `iframe` FROM `playlist`")) {
    $row = $result->fetch_row();
    foreach ($result as $item) { ?>
        <div class="iframe-article">
            <div class="title-iframe"><?php echo $item['name']; ?></div>
            <div class="url-iframe"><?php echo $item['iframe']; ?></div>
            <a href="<?php echo $item['id']; ?>" class="delete">Delete</a><br/><br/>
        </div>
    <?php }
    $result->close();
}
?>

<a href="#" class="edit-iframe">Ajouter à la playlist</a>
