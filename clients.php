<?php $link = "clients"; ?>
<?php include 'header.php'; ?>
<?php include 'menu.php'; ?>

<?php
    $listClient = new Client;

    if((isset($_POST['name'])) && (isset($_POST['info'])) && (isset($_POST['email'])) && (!empty($_POST['name']))):
        $clientName = $_POST['name'];
        $clientInfo = $_POST['info'];
        $clientEmail = $_POST['email'];
        $listClient->setClient($clientName, $clientInfo, $clientEmail);
    endif;
?>
    <div class="container-form">
        <a href="#" class="close">
            x
        </a>
        <form class="form" action="clients.php" method="post">
            <div class="title-form">
                Ajout d'un client
            </div>
            <input type="text" name="name" placeholder="Nom du client" value="">
            <input type="text" name="email" placeholder="Email">
            <textarea name="info" placeholder="Information contact"></textarea>
            <input type="submit" value="Enregistrer">
        </form>
    </div>
        <div class="container-center">
            <div class="title-page">
                Liste de vos clients
            </div>
            <a href="#" class="cta-green">+</a>

            <div class="content">
                <?php
                    $getClients = $listClient->getClients();
                    foreach ($getClients as $client) { ?>

                        <article class="client">
                            <div class="avatar"></div>
                            <div class="content-client">
                                <div class="name">
                                    <?php echo $client['name'] ?>
                                </div>
                                <div class="info">
                                    <div class="name">
                                        <?php echo $client['info'] ?>
                                    </div>
                                </div>
                                <a href="mailto:<?php echo $client['email'] ?>" class="link green-link">
                                    Message
                                </a>
                            </div>
                        </article>

                    <?php }
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
