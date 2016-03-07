<?php $link = "taches"; ?>
<?php include 'header.php'; ?>
<?php include 'menu.php'; ?>
        <div class="container-center">
            <div class="title-page">
                Liste de vos tâches
            </div>
            <a href="#" class="cta-green">+</a>

            <div class="content">
                <?php $i =0; while ($i <= 9) { ?>
                    <article class="taches moyen">
                        <div class="container-title">
                            <div class="title">
                                Intégration page 404
                            </div>
                            <div class="name">
                                pour Nicolas Cailloux
                            </div>
                        </div>
                        <ul class="actions">
                            <li class="validate">
                                <a href="#">Valider</a>
                            </li>
                            <li class="delete">
                                <a href="#">Delete</a>
                            </li>
                        </ul>
                        <div class="description-tache">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </div>
                    </article>
                <?php $i++; } ?>
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
