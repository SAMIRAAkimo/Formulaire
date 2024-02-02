<?php

require_once("../../config/config.php");


if (isset($_POST['ALL_STUDENTS'])) {

    $demande = "SELECT `id_etudiant`, `nom_etd`, `prenom_etd`, `date_nais`, `lieu_nais`, `sexe`, `contact_etd`,
     `email_etd`, `adresse_etd`, `nationalite`, `num_cin`, `date_lieu_obt_cin`, `bacc_etd`, `serie_specialite`, `mention_bacc`,
      `anne_obt_bacc`, `lieu_obt_bacc`, `dernier_diplome_etd`, `nom_pere`, `nom_mere`, `metier_pere`, 
      `metier_mere`, `adresse_parent`, `ville_parent`, `contact_parent`, `nom_urgence`, `adresse_urgence`,
       `contact_urgence`, `g_sanguin_etd`, `renseign`, `num_recu1`, `num_recu2`, `date_paye1`, `date_paye2`,
        `montant1`, `montant2`, `recu_scaner`, `ecole`, `parcours`, `anne_univ`, `anne_etude` FROM `etudiant` WHERE 1  ORDER BY `etudiant`.`nom_etd` ASC";

    $rst = $con_bd->query($demande);
    $result_obtenu = array();

    if ($rst->num_rows > 0) {
        while ($row = $rst->fetch_assoc()) {
            $result_obtenu[] = $row;
        }
    }
    echo json_encode($result_obtenu);
}

if (isset($_POST['ONE_STUDENTS'])) {

    $id = $_POST['id'];

    $demande = "SELECT `id_etudiant`, `nom_etd`, `prenom_etd`, `date_nais`, `lieu_nais`, `sexe`, `contact_etd`,
    `email_etd`, `adresse_etd`, `nationalite`, `num_cin`, `date_lieu_obt_cin`, `bacc_etd`, `serie_specialite`, `mention_bacc`,
     `anne_obt_bacc`, `lieu_obt_bacc`, `dernier_diplome_etd`, `nom_pere`, `nom_mere`, `metier_pere`, 
     `metier_mere`, `adresse_parent`, `ville_parent`, `contact_parent`, `nom_urgence`, `adresse_urgence`,
      `contact_urgence`, `g_sanguin_etd`, `renseign`, `num_recu1`, `num_recu2`, `date_paye1`, `date_paye2`,
       `montant1`, `montant2`, `recu_scaner`, `ecole`, `parcours`, `anne_univ`, `anne_etude` FROM `etudiant` WHERE id_etudiant = '$id'";

    $rst = $con_bd->query($demande);
    $result_obtenu = array();

    if ($rst->num_rows > 0) {
        while ($row = $rst->fetch_assoc()) {
            $result_obtenu[] = $row;
        }
    }
    echo json_encode($result_obtenu);
}


if (isset($_POST['DELETE_STUDENTS'])) {

    $id = $_POST['id'];
    $demande = "DELETE FROM `etudiant` WHERE id_etudiant = '$id'";

    $con_bd->query($demande);
    if ($con_bd->affected_rows > 0) {
        echo 'Success';
    } else {
        echo "veuiller ressayer à nouveau";
    }
}


if (isset($_POST['TRIAGE'])) {

    $numero = $_POST["numero"];

    if($numero == 0){

        $triage = "parcours";

    }
    if($numero == 1){
         $triage = "anne_etude";
    }
    if($numero == 2){
         $triage = "serie_specialite";
    }
    if($numero == 3){
         $triage = "date_nais";
    }
    if($numero == 4){
         $triage = "adresse_etd";
    }
    if($numero == 5){
        $triage = "nom_etd";
   }

    $demande = "SELECT `id_etudiant`, `nom_etd`, `prenom_etd`, `date_nais`, `lieu_nais`, `sexe`, `contact_etd`,
     `email_etd`, `adresse_etd`, `nationalite`, `num_cin`, `date_lieu_obt_cin`, `bacc_etd`, `serie_specialite`, `mention_bacc`,
      `anne_obt_bacc`, `lieu_obt_bacc`, `dernier_diplome_etd`, `nom_pere`, `nom_mere`, `metier_pere`, 
      `metier_mere`, `adresse_parent`, `ville_parent`, `contact_parent`, `nom_urgence`, `adresse_urgence`,
       `contact_urgence`, `g_sanguin_etd`, `renseign`, `num_recu1`, `num_recu2`, `date_paye1`, `date_paye2`,
        `montant1`, `montant2`, `recu_scaner`, `ecole`, `parcours`, `anne_univ`,
         `anne_etude` FROM `etudiant` ORDER BY '$triage' ASC";


    $rst = $con_bd->query($demande);
    $result_obtenu = array();

    if ($rst->num_rows > 0) {
        while ($row = $rst->fetch_assoc()) {
            $result_obtenu[] = $row;
        }
    }
    echo json_encode($result_obtenu);
}
if(isset($_POST["INSERTION"])){
    $id = $_POST["id"];
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
    $recu_scan = $_POST["recu_scaner"];
    $ecole = $_POST["ecole"];
    $parcours = $_POST["parcours"];
    $anne_univ = $_POST["anne_univ"];
    $anne_etude = $_POST["anne_etude"];


    $query = "UPDATE `etudiant` SET `id_etudiant`='$id',`nom_etd`='$nom',`prenom_etd`='$prenom',
    `date_nais`='$date_nais',`lieu_nais`='$lieu_nais',`sexe`='$sexe',`contact_etd`='$contact',
    `email_etd`='$email',`adresse_etd`='adresse',`nationalite`='$nationalite',`num_cin`='$cin',
    `date_lieu_obt_cin`='$date_lieu_obt_cin',`bacc_etd`='$bacc',`serie_specialite`='$serie',
    `mention_bacc`='$mention',`anne_obt_bacc`='$anne_obt',`lieu_obt_bacc`='$lieu_obt',
    `dernier_diplome_etd`='$diplome',`nom_pere`='$nom_pere',`nom_mere`='$nom_mere',
    `metier_pere`='$prof_pere',`metier_mere`='$prof_mere',`adresse_parent`='$adresse_parent',
    `ville_parent`='$ville',`contact_parent`='[$cnt_parent',`nom_urgence`='$urgence',
    `adresse_urgence`='$adresse_urgence',`contact_urgence`='$cnt_urgence',`g_sanguin_etd`='$groupe_s',
    `renseign`='$renseign',`num_recu1`='$num_recu1',`num_recu2`='$num_recu2',`date_paye1`='$date_paye1',
    `date_paye2`='$date_paye2',`montant1`='$montant1',`montant2`='$montant2',`recu_scaner`='$recu_scan',
    `ecole`='$ecole',
    `parcours`='$parcours',`anne_univ`='$anne_univ',`anne_etude`='$anne_etude' WHERE id_etudiant = '$id'";
     $con_bd->query($query);
    
     if($con_bd->affected_rows > 0){
         echo "success";
     }else{
         echo "erreur";
     }
}