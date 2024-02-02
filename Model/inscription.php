<html>

<head>
    <meta charset="utf-8">
    <title>Institut Superieur de Technologie D'Antsiranana-Inscription</title>
    <link rel="stylesheet" href="../Assert/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../Assert/sweetalert2/sweetalert2.min.css">
    <link rel="stylesheet" href="../Assert/toastr/toastr.min.css">
    <link rel="stylesheet" href="inscription.css">

</head>

<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="logo">
                        <img src="../image/ist-d.png" width="150px;" height="150px;" alt="">
                    </div>
                </div>
                <div class="col-md-9">
                    <div>
                        <h3>INSCRIPTION D'ENTREE A L'INSTITUT SUPERIEUR DE TECHNOLOGIE D'ANTSIRANANA</h3>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="container"></div>
    <div class="row">
        <div class="col-md-3" id="ist">
            <form action="" class="form-group" enctype='multipart/form-data' id="addform">
                <label for="ecole">ECOLE</label>
                <select name="ecole" id="ch-ecole" class="obligatoire ecole">
                    <option value="" selected="selected" disabled="disabled" required> </option>
                    <option value="EGI" class="egi" id="egi" class="egi form-control">EGI</option>
                    <option value="EGMCS" class="egmcs" id="egmcs">EGMCS</option>
                    <option value="EGCGN" class="egcgn" id="egcgn">EGCGN</option>
                </select>
        </div>

        <div class="col-md-3" id="ist">
                <label for="parcours">PARCOURS</label>
                <select name="parcours" id="parcours" class="obligatoire parcours" required>
                    <option value="parcours" class="parcours form-control"></option>
                </select>
        </div>

        <div class="col-md-3" id="ist">
                <label for="année-uni">ANNEE UNIVERSITAIRE</label>
                <select name="anne_univ" id="anne_univ" class="obligatoire anne_univ" required>
                    <option value="" selected="selected" disabled="disabled"> </option>
                    <option value="2020-2021" class="anne_unv form-control">2020-2021</option>
                    <option value="2021-2022" class="anne_unv form-control">2021-2022</option>
                    <option value="2022-2023" class="anne_unv form-control">2022-2023</option>
                </select>
        </div>
        <div class="col-md-3" id="ist">
                <label for="">ANNEE D'ETUDE</label>
                <select name="anne_etude" id="anne_etude" class="obligatoire anne_etude" required>
                    <option value="" selected="selected" disabled="disabled"> </option>
                    <option value="L1" class="anne_etd form-control">L1</option>
                    <option value="L2" class="anne_etd form-control">L2</option>
                    <option value="L3" class="anne_etd form-control">L3</option>
                    <option value="M1" class="anne_etd form-control">M1</option>
                    <option value="M2" class="anne_etd form-control">M2</option>
                </select>
        </div>
    </div>
    </div>



    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div>
                        <legend>Renseignement sur l'étudiant</legend>
                    </div>
                        <div class="form-group">
                            <label for="">Nom</label>
                            <input type="text" class="obligatoire nom form-control" name="nom" id="nom" required>
                        </div>

                        <div class="form-group">
                            <label for="">Prenom</label>
                            <input type="text" class="prenom form-control obligatoire" name="prenom" id="prenom" required>
                        </div>
                        <div class="form-group">
                            <label for="">Date de naissance</label>
                            <input type="date" class="obligatoire date_nais form-control" name="date_nais" id="date_nais" required>
                        </div>
                        <div class="form-group">
                            <label for="">Lieu de naissance</label>
                            <input type="text" class="obligatoire lieu_nais form-control" required="required" name="lieu_nais" id="lieu_nais">
                        </div>
                        <div class="form-group">
                            <label for="">Sexe</label><br>
                            <input type="radio" name="sexe" class="obligatoire sexe" id="sexe" value="homme" required>Homme
                            <input type="radio" name="sexe" class="obligatoire sexe" id="sexe" value="femme" required>Femme
                        </div>
                        <div class="form-group">
                            <label for="">Contact</label>
                            <input type="number" class="obligatoire contact form-control" maxlength="10" name="contact" id="contact" required>
                        </div>
                        <div class="form-group">
                            <label for="">Adresse email</label>
                            <input type="mail" class="obligatoire email form-control" name="email" id="email" placeholder="aaaa@gmail.com" required>
                        </div>
                        <div class="form-group">
                            <label for="">Adresse</label>
                            <input type="text" class="obligatoire adresse form-control" name="adresse" id="adresse"
                                placeholder="Votre adresse exacte" required>
                        </div>
                        <div class="form-group">
                            <label for="">Nationalitée:</label>
                            <select name="nationalite" id="nationalite" required class="obligatoire">
                                <option value="" selected="selected" disabled="disabled"> </option>
                                <option class="nationalite form-control" value="Malagasy" id="nationalite">Malagasy
                                </option>
                                <option class="nationalite form-control" value="Etranger" id="nationalite">Etranger(ère)
                                </option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">CIN</label>
                            <input type="text" class="obligatoire cin form-control" name="cin" id="cin" placeholder="Votre numero CIN" required>
                        </div>
                        <div class="form-group">
                            <label for="">Date et lieu d'obtention CIN</label>
                            <input type="text" class="obligatoire date_lieu_obt_cin form-control" name="date_lieu_obt_cin" id="date_lieu_obt_cin" required>
                        </div>
                        <div class="form-group">
                            <label for="">Baccalauréat</label>
                            <select name="bacc" id="bacc" class="bacc" required class="obligatoire">
                                <option value="" selected="selected" disabled="disabled"> </option>
                                <option value="Enseignement general" class="form-control">Enseignement général</option>
                                <option value="Technique" class="form-control">Technique</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Série ou Spécialité</label>
                            <input type="text" class="obligatoire serie form-control" name="serie" id="serie"
                                placeholder="Série/Spécialité Baccalauréat" required>
                        </div>
                        <div class="form-group">
                            <label for="">Mention</label>
                            <select name="mention" id="mention" class="obligatoire mention" required>
                                <option value="" selected="selected" disabled="disabled"> </option>
                                <option value="Tres-Bien" class="form-control">Très-Bien</option>
                                <option value="Bien" class="form-control">Bien</option>
                                <option value="Assez-Bien" class="form-control">Assez-Bien</option>
                                <option value="Passable" class="form-control">Passable</option>
                            </select>

                        </div>
                        <div class="form-group">
                            <label for="">Anné d'obtention</label>
                            <input type="number" class="obligatoire anne_obt form-control" name="anne_obt" id="anne_obt" required>
                        </div>
                        <div class="form-group">
                            <label for="">Lieu d'obtention</label>
                            <input type="text" class="obligatoire lieu_obt form-control" name="lieu_obt" id="lieu_obt"
                                placeholder="Lieu d'obtention Baccalauréat" required>
                        </div>
                        <div class="form-group">
                            <label for="">Dernier diplôme obtenu</label>
                            <input type="text" class="obligatoire diplome form-control" name="diplome" id="diplome"
                                placeholder="Dernier diplôme obtenu" required>
                        </div>
                </div>

            </div>

            <div class="col-md-6">
                <div class="card">
                    <div>
                        <legend>Renseignements sur les parents</legend>
                    </div>
                        <div class="form-group">
                            <label for="">Fils/Fille de</label>
                            <input type="text" class="obligatoire nom_pere form-control" name="nom_pere" id="nom_pere" required placeholder="Nom du père">
                        </div>
                        <div class="form-group">
                            <label for="">Et de</label>
                            <input type="text" class="obligatoire nom_mere form-control" name="nom_mere" id="nom_mere" required placeholder="Nom de la mère">
                        </div>
                        <div class="form-group">
                            <label for="">Profession</label>
                            <input type="text" class="obligatoire prof_pere form-control" name="prof_pere" id="prof_pere"
                                placeholder="Profession du père" required>
                        </div>
                        <div class="form-group">
                            <label for="">Profession </label>
                            <input type="text" class="obligatoire prof_mere form-control" name="prof_mere" id="prof_mere"
                                placeholder="Profession de la mère" required>
                        </div>
                        <div class="form-group">
                            <label for="">Adresse des parents</label>
                            <input type="text" class="obligatoire adresse_parent form-control" name="adresse_parent" id="adresse_parent"
                                placeholder="Adresse des parents" required>
                        </div>
                        <div class="form-group">
                            <label for="">Ville</label>
                            <input type="text" class="obligatoire ville form-control" name="ville" id="ville" required>
                        </div>
                        <div class="form-group">
                            <label for="">Contact des parents </label>
                            <input type="number" class="obligatoire cnt_parent form-control" maxlength="10" name="cnt_parent" required id="cnt_parent">
                        </div>
                        <div class="form-group">
                            <label for="">En cas d'urgence prévenir</label>
                            <input type="text" class="obligatoire urgence form-control" name="urgence" id="urgence"
                                placeholder="En cas d'urgence qui prévenir?" required>
                        </div>
                        <div class="form-group">
                            <label for="">Adresse</label>
                            <input type="text" class="obligatoire adresse_urgence form-control" name="adresse_urgence" id="adresse_urgence"
                                placeholder="Adresse exacte" required>
                        </div>
                        <div class="form-group">
                            <label for="">Contact</label>
                            <input type="number" class="obligatoire cnt_urgence form-control" maxlength="10" name="cnt_urgence" required id="cnt_urgence">
                        </div>
                        <div class="form-group">
                            <label for="">Groupe sanguin de l'étudiant(e)</label>
                            <input type="text" class="groupe_s form-control" name="groupe_s" id="groupe_s"
                                placeholder="Votre groupe sanguin (facultatif)" required>
                        </div>
                        <div class="form-group">
                            <label for="">Renseignements complémentaires</label>
                            <input type="textarea" class="renseign form-control" name="renseign" id="renseign" required placeholder="Facultatif">
                        </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <article class="col-md-12">
                <legend>Suivi de droit d'inscription</legend>
            </article>
            <div class="col-md-3">
                    <label for="">Paiement:</label>
                    <label for="">Première tranche ou Totalité</label>
                    <label for="">Deuxième tranche</label>
            </div>
            <div class="col-md-3">
                    <label for="">N° du reçu de paiement de droit </label>
                    <input type="text" class="obligatoire num_recu1 form-control" name="num_recu1" id="num_recu1"
                        placeholder="Numero de reçu de paiement de droit" required>
                    <input type="text" class="num_recu2 form-control" name="num_recu2" id="num_recu2"
                        placeholder="Numero de reçu de paiement de droit" required>
            </div>
            <div class="col-md-3">
                    <label for="">Date de paiement de droit </label>
                    <input type="date" class="obligatoire date_paye1 form-control" name="date_paye1" id="date_paye1" required>
                    <input type="date" class="date_paye2 form-control" name="date_paye2" id="date_paye2" required>

            
            </div>
            <div class="col-md-3">
    
                    <label for="">Montant(Ar)</label>
                    <input type="text" class="obligatoire montant1 form-control" name="montant1" id="montant1" placeholder="Montant payé en Ariary" required>
                    <input type="text" class=" montant2 form-control" name="montant2" id="montant2" placeholder="Montant payé en Ariary" required>

                
            </div>
            <div class="col-md-6">
                <p>Veuillez scanner votre reçu de paiement de droit et le joindre ici (jpg, png)</p>
            </div>
            <div class="col-md-6">
                    <input type="file" class="obligatoire recu_scan form-control" id="recu_scan" name="recu_scaner">
                
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p class="nb">Veuillez remplir correctement ce formulaire pour eviter d'erreur sur votre enregistrement!
                </p>
            </div>
            <div class="col-md-12">
                <a class="btn_save btn btn-primary" id="btn_save">Enregistrer</a>
            </div>
        </div>
    </div>
</form>
</body>
<hr>
<footer>
    <p> Antsiranana 2022</p>
</footer>

<script src="../Assert/jquery/jquery.min.js"></script>
<script src="../Assert/sweetalert2/sweetalert2.min.js"></script>
<script src=" ../Assert/toastr/toastr.min.js"></script>
<script src="./script/formulaireScript.js"></script>
<script src="./script/Element.js"></script>
<script>

$('#btn_save').addClass('disabled');
$('.obligatoire').on('keyup' , function () {
    $('.obligatoire').each(function(index ){
            if($(this).val() == null || $(this).val().trim() == ""){
                empty = true;
                $(this).addClass("is-invalid");
               
            }else{
                $(this).removeClass("is-invalid");
                $('.btn_save').removeClass('disabled');
                $(this).removeClass("is-invalid");
            }
        });
})


</script>
</html>