<?php $link = "taches"; ?>
<?php include 'header.php'; ?>
<?php include 'menu.php'; ?>

<?php
    $listTaches = new Taches;

    if((isset($_GET['delete']))):
        $id = $_GET['delete'];
        $listTaches->deleteTache($id);
    endif;

    if((isset($_GET['validate']))):
        $id = $_GET['validate'];
        $listTaches->validateTache($id);
    endif;

    if((isset($_GET['unvalidate']))):
        $id = $_GET['unvalidate'];
        $listTaches->unvalidateTache($id);
    endif;

    if((isset($_POST['issue'])) && (isset($_POST['name'])) && (isset($_POST['description'])) && (isset($_POST['status'])) && (!empty($_POST['issue']))):
        $tacheName = $_POST['issue'];
        $tacheClient = $_POST['name'];
        $tacheDescription = $_POST['description'];
        $tacheStatus = $_POST['status'];

        $listTaches->setTache($tacheName, $tacheClient, $tacheDescription, $tacheStatus);
    endif;
?>

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
                Liste de vos tâches
            </div>
            <a href="#" class="cta-green">+</a>

            <?php
                $getTaches = $listTaches->getTaches();
            ?>
            <div class="content">
                <a href="taches.php?filterBy=all" class="filter all active">Tous</a>
                <a href="taches.php?filterBy=validate" class="filter validate">Validés</a>

                <div class="no-validate">
                    <?php $i = 0; foreach ($getTaches as $tache): ?>
                            <?php if($tache['validate'] == ''):?>
                            <article class="taches <?php echo $tache['importance']; ?>">
                                <div class="container-title">
                                    <div class="title">
                                        <?php echo $tache['title']; ?>
                                    </div>
                                    <div class="name">
                                        pour <?php echo $tache['client']; ?>
                                    </div>
                                </div>
                                <ul class="actions">
                                    <li class="validate">
                                        <a href="taches.php?validate=<?php echo $tache['id']; ?>">Valider</a>
                                    </li>
                                    <li class="delete">
                                        <a href="taches.php?delete=<?php echo $tache['id']; ?>">Delete</a>
                                    </li>
                                </ul>
                                <div class="description-tache">
                                    <?php echo $tache['description']; ?>
                                </div>
                            </article>
                        <?php $i++; endif; ?>
                    <?php endforeach; ?>
                    <?php if($i == 0): ?>
                        <div class="message-empty">
                            Aucunes tâches n'est à faire
                        </div>
                    <?php endif; ?>
                </div>
                <div class="validate-tache">
                    <?php $o = 0; foreach ($getTaches as $tache): ?>
                            <?php if($tache['validate'] == '1'): $o++;?>
                            <article class="taches leger">
                                <div class="container-title">
                                    <div class="title">
                                        <?php echo $tache['title']; ?>
                                    </div>
                                    <div class="name">
                                        pour <?php echo $tache['client']; ?>
                                    </div>
                                </div>
                                <ul class="actions">
                                    <li class="validate">
                                        <a href="taches.php?unvalidate=<?php echo $tache['id']; ?>">Non valider</a>
                                    </li>
                                    <li class="delete">
                                        <a href="taches.php?delete=<?php echo $tache['id']; ?>">Delete</a>
                                    </li>
                                </ul>
                                <div class="description-tache">
                                    <?php echo $tache['description']; ?>
                                </div>
                            </article>
                        <?php endif; ?>
                    <?php endforeach; ?>
                    <?php if($o == 0): ?>
                        <div class="message-empty">
                            Aucunes tâches n'est validées
                        </div>
                    <?php endif; ?>
                </div>
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
