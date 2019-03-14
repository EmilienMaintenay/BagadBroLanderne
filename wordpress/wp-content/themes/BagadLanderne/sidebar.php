
<div class="col-sm-2  blog-sidebar" style="background-color:white; margin-top:20px;">
    <div class="sidebar-module sidebar-module-inset">
        <!--Affiche l'agenda du bagad, un lien vers le Google sheets du tableau des sorties-->
        <h2>Agenda</h2>
        <?php
            //Permet de récupérer le fichier CSV qui contient les infos sur les sorties
            $dates = file_get_contents('https://docs.google.com/spreadsheets/d/e/2PACX-1vQpxoO9_MqQN6_Mc9IAA4emLkbab250xHY3DPmYos5_zxrYz0r_xqlFgPJScgNr77wlU0e6qr_Ncwkv/pub?gid=0&single=true&output=csv');
            //Le tableau qui contient l'entiéretée du fichier, afin d'en traiter ses données
            $agenda=array();
            $agenda=explode("\n",$dates);
            //Le tableau qui contient tous les noms des sorties 
            $nom=array();
            $nom=explode(",",$agenda[1]);
            //Le tableau qui contient les dates de chaques sorties
            $date=array();
            $date=explode(",",$agenda[2]);
            //Les deux tableau sont liés par leur index, car l'élément 1 du tableau date est à associer avec l'élément 1 du tableau nom, etc...
            //Pour les 5 premiers éléments, afficher leurs informations
            //La variable démarre à 41 car le google sheet est fait comme cela pour l'instant, les 40 premiéres colonnes sont apparement utilisées pour des anciennes données (invisible sur le google sheet)
            for($k=41;$k/*count($nom) (pour prendre l'ensemble des sorties)*/<46;$k++){
                echo '<p style="font-size:17px;">'.$nom[$k].'</p>';
                echo '<p style="font-size:15px;"> Le '.$date[$k].'</p>';
            }
            echo '<hr/>'
        ?>
    </div> 
</div><!– /.blog-sidebar –>