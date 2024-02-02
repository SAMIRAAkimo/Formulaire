$(document).ready(function(){

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
                
                if(reponse.indexOf("success")>-1){
                    showSuccedWal("Information enregistrer avec succès")
                }else
                showErrorWal("Information non enregistrer")
               
                
            }


        })
    })
    



    $(document).on("click", "#egi" , function () {

        var egi = 
        
        '<option >Selectionner</option>'+
        '<option value="TIM">TIM</option>'+
        '<option value="RT">RT</option>'+
        '<option value="MEEM">MEEM</option>'+
        '<option value="MEFT">MEFT</option>'+
        '<option value="MSA">MSA</option>'+
        '<option value="ADR">ADR</option>'+
        '<option value="IRM">IRM</option>'+
        '<option value="SERA">SERA</option>'+
        '<option value="MURE">MURE</option>'+
        '<option value="TAM">TAM</option>'+
        '<option value="NTE">NTE</option>'+
        '<option value="ICE">ICE</option>';

        $("#parcours").html(egi)

      
    })
    $(document).on("click", "#egmcs" , function () {
        var egmcs = 
        '<option >Selectionner</option>'+
        '<option value="TBA">TBA</option>'+
        '<option value="TGH">TGH</option>'+
        '<option value="COM">COM</option>'+
        '<option value="GFC">GFC</option>'+
        '<option value="DPT">DPT</option>'+
        '<option value="CCA">CCA</option>'+
        '<option value="TCI">TCI</option>'+
        '<option value="CGC">CGC</option>'+
        '<option value="MEO">MEO</option>'+
        '<option value="FOAD6MEO">FOAD-MEO</option>';
        $("#parcours").html(egmcs)

      
    })
    $(document).on("click", "#egcgn" , function () {
        var egcgn = 
        '<option >Selectionner</option>'+
        '<option value="TECNA">TECNA</option>'+
        '<option value="BAT">BAT</option>'+
        '<option value="TP">TP</option>'+
        '<option value="CCI">CCI</option>'+
        '<option value="TAN">TAN</option>';
        $("#parcours").html(egcgn)

      
    })


})



