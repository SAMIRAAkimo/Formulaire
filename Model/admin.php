

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administration</title>

    <link rel="stylesheet" href="../Assert/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="inscription.css">
</head>
<body>

<div class="row col-md-3" id="decon">

    <select class="custom-select" name="" id="triage">
        <option value="" selected="selected" disabled="disabled" id="trier" style="font-family: georgia; color:blue;">Trier par:</option>
        <option value="5" style="font-family: georgia;">Nom</option>
        <option value="0" style="font-family: georgia;">Parcours</option>
        <option value="1" style="font-family: georgia;">Année d'étude</option>
        <option value="2" style="font-family: georgia;">Serie du baccalauréat</option>
        <option value="3" style="font-family: georgia;">Date de naissance</option>
        <option value="4" style="font-family: georgia;">Adresse</option>
    </select>
    
</div>

</div>
    <div class="container " style="height: 50%;">
        <div class="row" style="height: 50%;">
            <div class="col-md-12" style="height: 50%;" >
            <a class="btn btn-primary" style="color:black; border-radius:8px; font-family:georgia; text-align:center; margin-bottom: 30px;" href="../index.php" id="deconnexion">Log Out</a>

                <table class="table table-bordered table-responsive" style="height: 50%;">
                    <thead class=" text-center bg-primary">
                       <tr>
                        <th style="width:5%; font-family: georgia;" > N° </th>
                        <th style="width:20%; font-family: georgia;">Nom et Prenom</th>
                        <th style="width:10%; font-family: georgia;">Contact</th>
                        <th style="width:20%; font-family: georgia;">Email</th>
                        <th style="width:15; font-family: georgia;">CIN</th>
                        <th style="width:10%; font-family: georgia;">Dèrnier diplôme obtenu</th>
                        <td style="width:20%; font-family: georgia;">Options</td>
                       </tr>
                    </thead>
            
                    <tbody class="liste_etd">
                       
                    </tbody>
                </table>

            </div>
           
        </div>
    </div>

    <div class="card col-md-4">
        <h3>Détails</h3>

    </div>
    <div class="container">
        <div class="card col">
            <div class="detail_etd">
            </div>
        </div>
    </div>

  
   <div id="scroll"></div> 
</body>

<script src="../Assert/jquery/jquery.min.js"></script>
<script src="script/admin.js"></script>

</html>