<?php $link = "clients"; ?>

<?php include 'header.php'; ?>
<?php include 'menu.php'; ?>
        <div class="container-center">
            <div class="title-page">
                Liste de vos clients
            </div>
            <a href="#" class="cta-green">+</a>

            <div class="content">
                <?php $i =0; while ($i <= 9) { ?>
                    <article class="client">
                        <div class="avatar"></div>
                        <div class="content-client">
                            <div class="name">
                                Nicolas Cailloux
                            </div>
                            <div class="info">
                                nicolascailloux@gmail.com
                            </div>
                            <div class="info">
                                06.26.75.79.94
                            </div>
                            <a href="#" class="link green-link">
                                Message
                            </a>
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
