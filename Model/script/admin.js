var urls = './php/adminBD.php'

var liste_etudiant = function () {
    $.ajax({
      url: urls,
      method: "POST",
      dataType: "JSON",
      data: { ALL_STUDENTS: "ALL_STUDENTS" },
      success: function (reponse) {
        var liste_etd = "";
  
        for (var i = 0; i < reponse.length; i++) {
          var val = reponse[i];

            liste_etd +=
                            " <tr> "+
                                "<td> "+i+" </td>"+
                                "<td> "+val.nom_etd+" "+val.prenom_etd+" </td>"+
                                "<td> "+val.contact_etd+" </td>"+
                                "<td> "+val.email_etd+" </td>"+
                                "<td> "+val.num_cin+" </td>"+
                                "<td> "+val.dernier_diplome_etd+" </td>"+
                                '<td><a class="btn btn-info btn_affiche"  data-id="'+val.id_etudiant+'" >Look</a><a class="btn btn-info btn_modif"  data-id="'+val.id_etudiant+'" style="margin-left:5px;">Edit</a><a class="btn btn-danger btn_suppr" data-id="'+val.id_etudiant+'" style="margin-left:5px;">Del</a></td>'+
                            "</tr>";
           
            
        }
  
        $(".liste_etd").html(liste_etd);
        $(".detail_etd").html("");
      },
    });
  };

var supprimer_etudiant = function (id_etd) {
    $.ajax({
      url: urls,
      method: "POST",
      data: { DELETE_STUDENTS: "DELETE_STUDENTS" , id : id_etd },
      success: function (reponse) {
        liste_etudiant();
      
            alert("supperession success")
            liste_etudiant();
        
  
      },
    });
  };

var select_etudiant = function (id) {
    $.ajax({
      url: urls,
      method: "POST",
      dataType: "JSON",
      data: { ONE_STUDENTS: "ONE_STUDENTS" , id: id},
      success: function (reponse) {
       
        var val = reponse[0];

       var detail_etd =  '<label for=""> <strong>NOM ET PRENOM:</strong> '+val.nom_etd+' ' +val.prenom_etd+'</label><br>'+
                      '<label for=""> <strong>DATE DE NAISSANCE:</strong>'+val.date_nais+'</label><br>'+
                      '<label for=""> <strong>LIEU DE NAISSANCE:</strong>'+val.lieu_nais+'</label><br>'+
                      '<label for=""> <strong>SEXE:</strong>'+val.sexe+'</label><br>'+
                      '<label for=""> <strong>CONTACT D\'ETUDIANT:</strong>'+val.contact_etd+'</label><br>'+
                      '<label for=""> <strong>ADRESSE EMAIL:</strong>'+val.email_etd+'</label><br>'+
                      '<label for=""> <strong>ADRESSE D\'ETUDIANT:</strong>'+val.adresse_etd+'</label><br>'+
                      '<label for=""> <strong>NATIONALITE:</strong>'+val.nationalite+'</label><br>'+
                      '<label for=""> <strong>NUMERO DE CIN:</strong>'+val.num_cin+'</label><br>'+
                      '<label for=""> <strong>DATE ET LIEU D\'OBTENTION CIN:</strong>'+val.date_lieu_obt_cin+'</label><br>'+
                      '<label for=""> <strong>BACCALAUREAT:</strong>'+val.bacc_etd+'</label><br>'+
                      '<label for=""> <strong>SERIE OU SPECIALITE:</strong>'+val.serie_specialite+'</label><br>'+
                      '<label for=""> <strong>MENTION DU BACC:</strong>'+val.mention_bacc+'</label><br>'+
                      '<label for=""> <strong>ANNEE D\'OBTENTION DU BACC:</strong>'+val.anne_obt_bacc+'</label><br>'+
                      '<label for=""> <strong>LIEU D\'OBTENTION DU BACC:</strong>'+val.lieu_obt_bacc+'</label><br>'+
                      '<label for=""> <strong>DERNIER DIPLOME OBTENU:</strong>'+val.dernier_diplome_etd+'</label><br>'+
                      '<label for=""> <strong>NOM DU PERE:</strong>'+val.nom_pere+'</label><br>'+
                      '<label for=""> <strong>NOM DE LA MERE:</strong>'+val.nom_mere+'</label><br>'+
                      '<label for=""> <strong>PROFESSION DU PERE:</strong>'+val.metier_pere+'</label><br>'+
                      '<label for=""> <strong>PROFESSION DE MERE:</strong>'+val.metier_mere+'</label><br>'+
                      '<label for=""> <strong>ADRESSE DES PARENTS:</strong>'+val.adresse_parent+'</label><br>'+
                      '<label for=""> <strong>VILLE DES PARENTS:</strong>'+val.ville_parent+'</label><br>'+
                      '<label for=""> <strong>CONTACT DES PARENTS:</strong>'+val.contact_parent+'</label><br>'+
                      '<label for=""> <strong>EN CAS D\'URGENCE PREVENIR:</strong>'+val.nom_urgence+'</label><br>'+
                      '<label for=""> <strong>ADRESSE:</strong>'+val.adresse_urgence+'</label><br>'+
                      '<label for=""> <strong>CONTACT EN CAS D\'URGENCE:</strong>'+val.contact_urgence+'</label><br>'+
                      '<label for=""> <strong>GROUPE SANGUIN D\'ETUDIANT:</strong>'+val.g_sanguin_etd+'</label><br>'+
                      '<label for=""> <strong>RENSEIGNEMENTS COMPLEMENTAIRES:</strong>'+val.renseign+'</label><br>'+
                      '<label for=""> <strong>NUMERO DE RECU 1ERE TRANCHE OU TOTALITE:</strong>'+val.num_recu1+'</label><br>'+
                      '<label for=""> <strong>NUMERO DE RECU 2EME TRANCHE:</strong>'+val.num_recu2+'</label><br>'+
                      '<label for=""> <strong>DATE DE PAIMENT DE DROIT 1ERE TRANCHE:</strong>'+val.date_paye1+'</label><br>'+
                      '<label for=""> <strong>DATE DE PAIMENT DE DROIT 2EME TRANCHE:</strong>'+val.date_paye2+'</label><br>'+
                      '<label for=""> <strong>MONTANT DU 1ERE TRANCHE:</strong>'+val.montant1+'</label><br>'+
                      '<label for=""> <strong>MONTANT DU 2EME TRANCHE:</strong>'+val.montant2+'</label><br>'+
                      '<label> <strong>RECU:</strong> </label>'+
                      '<img src="../image/photo/'+val.recu_scaner+'"><br>'+
                      '<label for=""> <strong>ECOLE:</strong>'+val.ecole+'</label><br>'+
                      '<label for=""> <strong>PARCOURS:</strong>'+val.parcours+'</label><br>'+
                      '<label for=""> <strong>ANNEE UNIVERSITAIRE:</strong>'+val.anne_univ+'</label><br>'+
                      '<label for=""> <strong>ANNEE D\'ETUDE:</strong>'+val.anne_etude+'</label><br>';
              
  console.log(detail_etd)
      window.location.href = "#scroll"
       
       
        $(".detail_etd").html(detail_etd);
      },
    });
  };

  var modif_etudiant = function (id) {
    $.ajax({
      url: urls,
      method: "POST",
      dataType: "JSON",
      data: { ONE_STUDENTS: "ONE_STUDENTS" , id: id},
      success: function (reponse) {
       
        var val = reponse[0]; 
        var ecole;
        var parcours;
  
        var each_ecole = val.ecole.toLowerCase();
  
        if (val.ecole == "EGI") {
          ecole = '<option value=""  disabled="disabled"> </option>' +
            '<option value="EGI" class="egi" id="egi" class="egi form-control" selected="selected">EGI</option>' +
            '<option value="EGMCS" class="egmcs" id="egmcs">EGMCS</option>' +
            '<option value="EGCGN" class="egcgn" id="egcgn">EGCGN</option>';
          var parcours =
            '<option class="val_egi" value="TIM">TIM</option>' +
            '<option class="val_egi" value="RT">RT</option>' +
            '<option class="val_egi"value="MEEM">MEEM</option>' +
            '<option class="val_egi" value="MEFT">MEFT</option>' +
            '<option class="val_egi" value="MSA">MSA</option>' +
            '<option class="val_egi" value="ADR">ADR</option>' +
            '<option class="val_egi" value="IRM">IRM</option>' +
            '<option class="val_egi" value="SERA">SERA</option>' +
            '<option class="val_egi" value="MURE">MURE</option>' +
            '<option class="val_egi" value="TAM">TAM</option>' +
            '<option class="val_egi" value="NTE">NTE</option>' +
            '<option class="val_egi" value="ICE">ICE</option>';
  
        }
        if (val.ecole == "EGMCS") {
          ecole = '<option value=""  disabled="disabled"> </option>' +
            '<option value="EGI" class="egi" id="egi" class="egi form-control" >EGI</option>' +
            '<option value="EGMCS" class="egmcs" id="egmcs" selected="selected">EGMCS</option>' +
            '<option value="EGCGN" class="egcgn" id="egcgn">EGCGN</option>';
  
          parcours =
            '<option class="val_egmcs" value="TBA">TBA</option>' +
            '<option class="val_egmcs" value="TGH">TGH</option>' +
            '<option class="val_egmcs" value="COM">COM</option>' +
            '<option class="val_egmcs" value="GFC">GFC</option>' +
            '<option class="val_egmcs" value="DPT">DPT</option>' +
            '<option class="val_egmcs" value="CCA">CCA</option>' +
            '<option class="val_egmcs" value="TCI">TCI</option>' +
            '<option class="val_egmcs" value="CGC">CGC</option>' +
            '<option class="val_egmcs" value="MEO">MEO</option>' +
            '<option class="val_egmcs" value="FOAD">FOAD-MEO</option>';
        }
        if (val.ecole == "EGCGN") {
          ecole = '<option value=""  disabled="disabled"> </option>' +
            '<option value="EGI" class="egi" id="egi" class="egi form-control" >EGI</option>' +
            '<option value="EGMCS" class="egmcs" id="egmcs" >EGMCS</option>' +
            '<option value="EGCGN" class="egcgn" id="egcgn" selected="selected">EGCGN</option>';
  
          parcours = '<option class="val_egcgn" value="">TECNA</option>' +
            '<option class="val_egcgn" value="BAT">BAT</option>' +
            '<option class="val_egcgn" value="TP">TP</option>' +
            '<option class="val_egcgn" value="CCI">CCI</option>' +
            '<option class="val_egcgn" value="TAN">TAN</option>';
  
        }
        
        
        if(val.sexe=="homme"){
          var sexe =  ' <label for="">Sexe</label><br>' +
                      '<input type="radio" name="sexe" class="sexe" id="sexe" value="homme" selected="selected">H' +
                      '<input type="radio" name="sexe" class="sexe" id="sexe" value="femme">F';  
        }else{
        
            var sexe =  ' <label for="">Sexe</label><br>' +
                        '<input type="radio" name="sexe" class="sexe" id="sexe" value="homme" >H' +
                        '<input type="radio" name="sexe" class="sexe" id="sexe" value="femme" selected="selected">F';  
        }
  
        if(val.nationalite=="Malagasy"){
          var nationalite = 
          '<option class="nationalite form-control" value="Malagasy" id="nationalite" selected="selected">Malagasy' +'</option>' +
          '<option class="nationalite form-control" value="Etranger" id="nationalite">Etranger(ère)' +'</option>' ;
        }else{
        
            var nationalite =  
            '<option class="nationalite form-control" value="Malagasy" id="nationalite">Malagasy' +'</option>' +
            '<option class="nationalite form-control" value="Etranger" id="nationalite" selected="selected">Etranger(ère)' +'</option>';  
        }
  
        var detail_etd =

  
          '    <div class="container">' +
          '       <div class="row">' +
                '        <div class="col-md-3" id="ist">' +
                '            <form action="" class="form-group" enctype="multipart/form-data" id="addform">' +
                '                <label for="ecole">ECOLE</label>' +
                '                <select name="ecole" id="ch-ecole" class="ecole">' + ecole + '</select>' +
                '        </div>' +
  
                '        <div class="col-md-3" id="ist">' +
                '                <label for="parcours">PARCOURS</label>' +
                '                <select name="parcours" id="parcours" class="parcours">' + parcours + ' </select>' +
                '        </div>' +
  
                '        <div class="col-md-3" id="ist">' +
                '                <label for="année-uni">ANNEE UNIVERSITAIRE</label>' +
                '                <select name="anne_univ" id="anne_unv" class="anne_univ">' +val.anne_univ+ '</select>' +
                '        </div>' +
                '        <div class="col-md-3" id="ist">' +
                '                <label for="">ANNEE D\'ETUDE</label>' +
                '                <select name="anne_etude" id="anne_etd" class="anne_etude">' + val.anne_etude + '</select>' +
                '        </div>' +
          '       </div>' +
          '    </div>' +






'    <div class="container">'+
'        <div class="row">'+
'            <div class="col-md-6">'+
'                <div class="card">'+
  '                    <div>'+
  '                        <legend>Renseignement sur l\'étudiant</legend>'+
  '                            <input type="text" class="id form-control d-none" id="id" value="'+id+'">'+
  '                    </div>'+
  '                        <div class="form-group">'+
  '                            <label for="">Nom</label>'+
  '                            <input type="text" class="nom form-control" name="nom" id="nom" value="'+val.nom_etd+'">'+
  '                        </div>'+

  '                        <div class="form-group">'+
  '                            <label for="">Prenom</label>'+
  '                            <input type="text" class="prenom form-control" name="prenom" id="prenom" value="'+val.prenom_etd+'">'+
  '                        </div>'+
  '                        <div class="form-group">'+
  '                            <label for="">Date de naissance</label>'+
  '                            <input type="date" class="date_nais form-control" name="date_nais" id="date_nais" value="'+val.date_nais+'">'+
  '                        </div>'+
  '                        <div class="form-group">'+
  '                            <label for="">Lieu de naissance</label>'+
  '                            <input type="text" class="lieu_nais form-control" name="lieu_nais" id="lieu_nais" value="'+val.lieu_nais+'">'+
  '                        </div>'+
  '                        <div class="form-group">'+sexe+'</div>'+
  '                        <div class="form-group">'+
  '                            <label for="">Contact</label>'+
  '                            <input type="tel" class="contact form-control" name="contact" id="contact" value="'+val.contact_etd+'">'+
  '                        </div>'+
  '                        <div class="form-group">'+
  '                            <label for="">Adresse email</label>'+
  '                            <input type="mail" class="email form-control" name="email" id="email" placeholder="aaaa@gmail.com" value="'+val.email_etd+'">'+
  '                        </div>'+
  '                        <div class="form-group">'+
  '                            <label for="">Adresse</label>'+
  '                            <input type="text" class="adresse form-control" name="adresse" id="adresse"'+
  '                                placeholder="Votre adresse exacte" value="'+val.adresse_etd+'">'+
  '                        </div>'+
  '                        <div class="form-group">'+
  '                            <label for="">Nationalitée:</label>'+
  '                            <select name="nationalite" id="nationalite">'+nationalite+ '</select>'+
  '                        </div>'+
  '                        <div class="form-group">'+
  '                            <label for="">CIN</label>'+
  '                            <input type="text" class="cin form-control" name="cin" id="cin" placeholder="Votre numero CIN" value="'+val.num_cin+'">'+
  '                        </div>'+
  '                        <div class="form-group">'+
  '                            <label for="">Date et lieu d\'obtention CIN</label>'+
  '                            <input type="text" class="date_lieu_obt_cin form-control" name="date_lieu_obt_cin" id="date_lieu_obt_cin" value="'+val.date_lieu_obt_cin+'">'+
  '                        </div>'+
  '                        <div class="form-group">' +
  '                            <label for="">Baccalauréat</label>' +
    '                            <select name="bacc" id="bacc" class="bacc">' +val.bacc_etd +'</select>' +
                          '</div>'+
  '                        <div class="form-group">'+
  '                            <label for="">Série ou Spécialité</label>'+
  '                            <input type="text" class="serie form-control" name="serie" id="serie"'+
  '                                placeholder="Série/Spécialité Baccalauréat" value="'+val.serie_specialite+'">'+
  '                        </div>'+
  '                        <div class="form-group">' +
  '                            <label for="">Mention</label>' +
  '                            <select name="mention" id="mention" class="mention">' +val.mention_bacc +'</select>' +

  '                        </div>' +
  '                        <div class="form-group">'+
  '                            <label for="">Anné d\'obtention</label>'+
  '                            <input type="number" class="anne_obt form-control" name="anne_obt" id="anne_obt" value="'+val.anne_obt_bacc+'">'+
  '                        </div>'+
  '                        <div class="form-group">'+
  '                            <label for="">Lieu d\'obtention</label>'+
  '                            <input type="text" class="lieu_obt form-control" name="lieu_obt" id="lieu_obt"'+
  '                                placeholder="Lieu d\'obtention Baccalauréat" value="'+val.lieu_obt_bacc+'">'+
  '                        </div>'+
  '                        <div class="form-group">'+
  '                            <label for="">Dernier diplôme obtenu</label>'+
  '                            <input type="text" class="diplome form-control" name="diplome" id="diplome"'+
  '                                placeholder="Dernier diplôme obtenu" value="'+val.dernier_diplome_etd+'">'+
  '                        </div>'+
'                </div>'+

'            </div>'+

'      <div class="col-md-6">'+
'            <div class="card">'+
'                  <div>'+
'                        <legend>Renseignements sur les parents</legend>'+
'                  </div>'+
'                        <div class="form-group">'+
'                            <label for="">Fils/Fille de</label>'+
'                            <input type="text" class="nom_pere form-control" name="nom_pere" id="nom_pere" placeholder="Nom du père" value="'+val.nom_pere+'">'+
'                        </div>'+
'                        <div class="form-group">'+
'                            <label for="">Et de</label>'+
'                            <input type="text" class="nom_mere form-control" name="nom_mere" id="nom_mere" placeholder="Nom de la mère" value="'+val.nom_mere+'">'+
'                        </div>'+
'                        <div class="form-group">'+
'                            <label for="">Profession</label>'+
'                            <input type="text" class="prof_pere form-control" name="prof_pere" id="prof_pere"'+
'                                placeholder="Profession du père" value="'+val.metier_pere+'">'+
'                        </div>'+
'                        <div class="form-group">'+
'                            <label for="">Profession </label>'+
'                            <input type="text" class="prof_mere form-control" name="prof_mere" id="prof_mere"'+
'                                placeholder="Profession de la mère" value="'+val.metier_mere+'">'+
'                        </div>'+
'                        <div class="form-group">'+
'                            <label for="">Adresse des parents</label>'+
'                            <input type="text" class="adresse_parent form-control" name="adresse_parent" id="adresse_parent"'+
'                                placeholder="Adresse des parents" value="'+val.adresse_parent+'">'+
'                        </div>'+
'                        <div class="form-group">'+
'                            <label for="">Ville</label>'+
'                            <input type="text" class="ville form-control" ville id="ville" value="'+val.ville_parent+'">'+
'                        </div>'+
'                        <div class="form-group">'+
'                            <label for="">Contact des parents </label>'+
'                            <input type="tel" class="cnt_parent form-control" name="cnt_parent" id="cnt_parent" value="'+val.contact_parent+'">'+
'                        </div>'+
'                        <div class="form-group">'+
'                            <label for="">En cas d\'urgence prévenir</label>'+
'                            <input type="text" class="urgence form-control" name="urgence" id="urgence"'+
'                                placeholder="En cas d\'urgence qui prévenir?" value="'+val.nom_urgence+'">'+
'                        </div>'+
'                        <div class="form-group">'+
'                            <label for="">Adresse</label>'+
'                            <input type="text" class="adresse_urgence form-control" name="adresse_urgence"  id="adresse_urgence"'+
'                                placeholder="Adresse exacte" value="'+val.adresse_urgence+'">'+
'                        </div>'+
'                        <div class="form-group">'+
'                            <label for="">Contact</label>'+
'                            <input type="tel" class="cnt_urgence form-control" name="cnt_urgence" id="cnt_urgence" value="'+val.contact_urgence+'">'+
'                        </div>'+
'                        <div class="form-group">'+
'                            <label for="">Groupe sanguin de l\'étudiant(e)</label>'+
'                            <input type="text" class="groupe_s form-control" name="groupe_s" id="groupe_s"'+
'                                placeholder="Votre groupe sanguin (facultatif)" value="'+val.g_sanguin_etd+'">'+
'                        </div>'+
'                        <div class="form-group">'+
'                            <label for="">Renseignements complémentaires</label>'+
'                            <input type="textarea" name="renseign" class="renseign form-control" id="renseign" placeholder="Facultatif" value="'+val.renseign+'">'+
'                        </div>'+
'                </div>'+
'            </div>'+
'        </div>'+
'    </div>'+
'    <div class="container">'+
'        <div class="row">'+
'            <article class="col-md-12">'+
'                <legend>Suivi de droit d\'inscription</legend>'+
'            </article>'+
'            <div class="col-md-3">'+
'                    <label for="">Paiement:</label>'+
'                    <label for="">Première tranche ou Totalité</label>'+
'                    <label for="">Deuxième tranche</label>'+
'            </div>'+
'            <div class="col-md-3">'+
'                    <label for="">N° du reçu de paiement de droit </label>'+
'                    <input type="text" name="num_recu1" class="num_recu1 form-control" id="num_recu1"'+
'                        placeholder="Numero de reçu de paiement de droit" value="'+val.num_recu1+'">'+
'                    <input type="text" name="num_recu2" class="num_recu2 form-control" id="num_recu2"'+
'                        placeholder="Numero de reçu de paiement de droit" value="'+val.num_recu2+'">'+
'            </div>'+
'            <div class="col-md-3">'+
'                    <label for="">Date de paiement de droit </label>'+
'                    <input type="date" name="date_paye1" class="date_paye1 form-control" id="date_paye1" value="'+val.date_paye1+'">'+
'                    <input type="date" name="date_paye2" class="date_paye2 form-control" id="date_paye2" value="'+val.date_paye2+'">'+
'            </div>'+
'            <div class="col-md-3">'+
'                    <label for="">Montant(Ar)</label>'+
'                    <input type="text" name="montant1" class="montant1 form-control" id="montant1" value="'+val.montant1+'" placeholder="Montant payé en Ariary">'+
'                    <input type="text" name="montant2" class="montant2 form-control" id="montant2" value="'+val.montant2+'" placeholder="Montant payé en Ariary">'+
'            </div>'+
'            <div class="col-md-6">'+
'                <p>Veuillez scanner votre reçu de paiement de droit et le joindre ici (jpg, png)</p>'+
'            </div>'+
'            <div class="col-md-6">'+
'                    <input type="file"  name="recu_scaner" class="recu_scan form-control" id="recu_scan" enctype="multipart/form-data" value="'+val.recu_scaner+'">'+
'            </div>'+
'        </div>'+
'    </div>'+

'    <div class="container">'+
'        <div class="row">'+
'            <div class="col-md-12">'+
'                <p class="nb">Veuillez remplir correctement ce formulaire pour eviter d\'erreur sur votre enregistrement!'+
'                </p>'+
'            </div>'+
'            <div class="col-md-12">'+
'                <a class="btn_save btn btn-primary" id="btn_save">Enregistrer</a>'+
'            </div>'+
          '</form>'+
'        </div>'+
'    </div>';



$(".detail_etd").html(detail_etd);
        
$('.val_' + each_ecole).each(function () {
  if ($(this).val() == val.parcours) {

    $(this).attr('selected', true);
  }
});

window.location.href = "#scroll"

},
});
};


$(document).ready(function () {

    liste_etudiant();

    $(document).on('click', '.btn_modif', function () {
       
      var id = $(this).data('id');
    
        modif_etudiant(id)
    
    })

    $(document).on('click', '.btn_affiche', function () {
       
      var id = $(this).data('id');
    
        select_etudiant(id)
    
    })

    $(document).on("click", "#btn_save" , function () {

      var formulaire = $("#addform")[0];
      var formData = new FormData(formulaire);
      formData.append("INSERTION", "INSERTION");  
      



      $.ajax({

        url:"php/formulaireBD.php",
        type:"post",
        data: formData,
        cache: false,
        processData: false,
        contentType: false,
        success: function(reponse){
            
            alert(reponse)
            
        }


      })
  })

    $(document).on('click', '.btn_suppr', function () {
      
      var id = $(this).data('id');
    
        supprimer_etudiant(id)
    
    })

    $(document).on('change', '#triage', function () {
      
      var numero = $(this).val();
      
      $.ajax({
        url: urls,
        method: "POST",
        dataType: "JSON",
        data: { TRIAGE: "TRIAGE" , numero: numero},
        success: function (reponse) {
          
          var liste_etd = "";
  
          for (var i = 0; i < reponse.length; i++) {
            var val = reponse[i];
  
              liste_etd +=
                              " <tr> "+
                                  "<td> "+i+" </td>"+
                                  "<td> "+val.nom_etd+" "+val.prenom_etd+" </td>"+
                                  "<td> "+val.contact_etd+" </td>"+
                                  "<td> "+val.email_etd+" </td>"+
                                  "<td> "+val.num_cin+" </td>"+
                                  "<td> "+val.dernier_diplome_etd+" </td>"+
                                  '<td><a class="btn btn-info btn_affiche"  data-id="'+val.id_etudiant+'">Look</a><a class="btn btn-info btn_modif"  data-id="'+val.id_etudiant+'">Modifier</a><a class="btn btn-danger btn_suppr" data-id="'+val.id_etudiant+'">Supprimer</a></td>'+
                              "</tr>";
             
              
          }
    
          $(".liste_etd").html(liste_etd);
    
        },
      });
        
    
    })
})