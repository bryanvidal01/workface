<?php $link = "veille"; ?>
<?php include 'header.php'; ?>
<?php include 'menu.php'; ?>
        <div class="container-form">
            <a href="#" class="close">
                x
            </a>
            <form class="form" action="taches.php" method="post">
                <div class="title-form">
                    Ajout d'une tache
                </div>
                <input type="text" name="issue" placeholder="Nom de l'issue">
                <input type="text" name="name" placeholder="Nom du client" value="">
                <textarea name="description" placeholder="Description issue"></textarea>
                <select class="" name="status">
                    <option value="important">Importante</option>
                    <option value="moyen">Normal</option>
                    <option value="leger">Secondaire</option>
                </select>
                <input type="submit" value="Enregistrer">
            </form>
        </div>
        <div class="container-center">
            <div class="title-page">
                Veille du jour
            </div>
            <a href="#" class="cta-green">+</a>

            <div class="content content-veille">
                <h1 class="title-veille">Awwward</h1>
                <?php

                $feed_awwward = "http://feeds.feedburner.com/awwwards-sites-of-the-day";

                function getFeed($feed_url) {

                    $content = file_get_contents($feed_url);
                    $x = new SimpleXmlElement($content);

                    foreach($x->channel->item as $entry) {
                     echo "<div class='veille-link' title='$entry->title'>" . $entry->description . "</div>";
                    }

                }
                getFeed($feed_awwward);

                ?>
                <h1 class="title-veille">Site Inspire</h1>

                <?php
                    $feed_sp = "http://feeds2.feedburner.com/Siteinspire";
                    getFeed($feed_sp);
                ?>

                <div class="clearfix"></div>
            </div>
        </div>
        <div class="container-notes">
            <div class="title-note">
                Notes
            </div>

            <?php $i =0; while ($i <= 3) { ?>
            <article class="note">
                <a href="" class="delete">
                    x
                </a>
                Lorem in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
            </article>
            <?php $i++; } ?>

            <form class="addNote">
                <textarea name="name" placeholder="Pense bête..."></textarea>
            </form>
        </div>
    </body>
</html>
