<?php
require_once("../../config/config.php");

if(isset($_POST["INSERTION"])){
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $date_nais = $_POST["date_nais"];
    $lieu_nais = $_POST["lieu_nais"];
    $sexe = $_POST["sexe"];
    $contact = $_POST["contact"];
    $email = $_POST["email"];
    $adresse = $_POST["adresse"];
    $nationalite = $_POST["nationalite"];
    $cin = $_POST["cin"];
    $date_lieu_obt_cin = $_POST["date_lieu_obt_cin"];
    $bacc = $_POST["bacc"];
    $serie = $_POST["serie"];
    $mention = $_POST["mention"];
    $anne_obt = $_POST["anne_obt"];
    $lieu_obt = $_POST["lieu_obt"];
    $diplome = $_POST["diplome"];
    $nom_pere = $_POST["nom_pere"];
    $nom_mere = $_POST["nom_mere"];
    $prof_pere = $_POST["prof_pere"];
    $prof_mere = $_POST["prof_mere"];
    $adresse_parent = $_POST["adresse_parent"];
    $ville = $_POST["ville"];
    $cnt_parent = $_POST["cnt_parent"];
    $urgence = $_POST["urgence"];
    $adresse_urgence = $_POST["adresse_urgence"];
    $cnt_urgence = $_POST["cnt_urgence"];
    $groupe_s = $_POST["groupe_s"];
    $renseign = $_POST["renseign"];
    $num_recu1 = $_POST["num_recu1"];
    $num_recu2 = $_POST["num_recu2"];
    $date_paye1 = $_POST["date_paye1"];
    $date_paye2 = $_POST["date_paye2"];
    $montant1 = $_POST["montant1"];
    $montant2 = $_POST["montant2"];
    $ecole = $_POST["ecole"];
    $parcours = $_POST["parcours"];
    $anne_univ = $_POST["anne_univ"];
    $anne_etude = $_POST["anne_etude"];
    $name_image = $_FILES["recu_scaner"]["name"];
    $location_image = $_FILES["recu_scaner"]["tmp_name"];

    $location = "../../image/photo/".$name_image;

    $file_extention = pathinfo($location,PATHINFO_EXTENSION );
    $file_extention = strtolower($file_extention);
    $img_move = "";

    $sql = "show table status like 'etudiant'";
    $requette = $con_bd->query($sql);
    $max_id = "";

    if ($requette->num_rows >0) {
        $row = $requette->fetch_assoc();
        $max_id = $row['Auto_increment'];
    }
    if ($_FILES["recu_scaner"]["size"]>0){
        $img_move = $max_id .".". $file_extention;
        $importation = "../../image/photo/".$img_move;
        move_uploaded_file($location_image,$importation);
    }
    $img_move = $max_id .".". $file_extention;

 $query = "INSERT INTO `etudiant`(`nom_etd`, `prenom_etd`, `date_nais`, `lieu_nais`, `sexe`, `contact_etd`, 
     `email_etd`, `adresse_etd`, `nationalite`, `num_cin`, `date_lieu_obt_cin`, `bacc_etd`, `serie_specialite`, `mention_bacc`, 
     `anne_obt_bacc`, `lieu_obt_bacc`, `dernier_diplome_etd`, `nom_pere`, `nom_mere`, `metier_pere`, `metier_mere`,
      `adresse_parent`, `ville_parent`, `contact_parent`, `nom_urgence`, `adresse_urgence`, `contact_urgence`,
       `g_sanguin_etd`, `renseign`, `num_recu1`, `num_recu2`, `date_paye1`, `date_paye2`, `montant1`, `montant2`,
        `recu_scaner`, `ecole`, `parcours`, `anne_univ`, `anne_etude`) 
     VALUES ('$nom','$prenom','$date_nais','$lieu_nais','$sexe','$contact','$email','$adresse','$nationalite',
     '$cin','$date_lieu_obt_cin','$bacc','$serie','$mention','$anne_obt','$lieu_obt',' $diplome',' $nom_pere','$nom_mere','$prof_pere',
     '$prof_mere','$adresse_parent','$ville','$cnt_parent','$urgence','$adresse_urgence','$cnt_urgence','$groupe_s','$renseign',
     '$num_recu1','$num_recu2','$date_paye1','$date_paye2','$montant1','$montant2','$img_move', '$ecole', '$parcours', '$anne_univ', '$anne_etude')";
      $con_bd->query($query);


    
      if($con_bd->affected_rows > 0){
        if ($_FILES["recu_scaner"]["size"]>0){
            $importation = "../../image/photo/".$img_move;
            move_uploaded_file($location_image,$importation);
        }
          echo "success";
      }else{
          echo "erreur";
     }
}
