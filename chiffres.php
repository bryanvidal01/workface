<?php $link = "chiffre"; ?>
<?php include 'header.php'; ?>
<?php include 'menu.php'; ?>
<?php
$getChiffres = new Chiffre;
if(isset($_POST['is_submit'])):?>
    <?php $getChiffres->setChiffre($_POST); ?>
<?php endif; ?>
<?php
    $allChiffres = $getChiffres->getChiffre();
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
                Chiffre d'affaire 2016
            </div>
            <div class="content">
                <div style="width:100%">
        			<div>
        				<canvas id="canvas" height="200"></canvas>
        			</div>
        		</div>
                <div class="center">
                    <?php foreach ($allChiffres as $chiffre):  ?>
                        <form class="chiffreSet" action="chiffres.php" method="post">
                            <label><span class="label"><?php echo $chiffre['mois']; ?></span>
                                <input type="text" name="montant" value="<?php echo $chiffre['montant']; ?>">
                            </label>
                            <input type="hidden" name="is_submit" value="<?php echo $chiffre['id']; ?>">
                            <input type="submit" value="+">
                        </form>
                    <?php endforeach; ?>
                </div>
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


        <script>
            var randomScalingFactor = function(){ return Math.round(Math.random()*100)};
            var lineChartData = {
                 labels : [
                     <?php foreach ($allChiffres as $chiffre):  ?>
                        "<?php echo $chiffre['mois']; ?>",
                     <?php endforeach; ?>
                 ],
                datasets : [
                    {
                        label: "My Second dataset",
                        fillColor : "rgba(57,194,131,0.1)",
                        strokeColor : "rgba(57,194,131,0.7)",
                        pointColor : "rgba(57,194,131,1)",
                        pointStrokeColor : "#fff",
                        pointHighlightFill : "#fff",
                        pointHighlightStroke : "rgba(57,194,131,1)",
                        data : [
                            <?php foreach ($allChiffres as $chiffre):  ?>
                               "<?php echo $chiffre['montant']; ?>",
                            <?php endforeach; ?>
                        ]
                    }
                ]

            }

            window.onload = function(){
                var ctx = document.getElementById("canvas").getContext("2d");
                window.myLine = new Chart(ctx).Line(lineChartData, {
                    responsive: true
                });
            }


            </script>

    </body>
</html>
