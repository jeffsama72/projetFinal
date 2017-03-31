<?php 

class ExportBase
{
		
	public function export($pdo){

    try {

		$resultat = $pdo->query('SELECT id ,Nom, prenom, date_naissance, code_postal, ville, tel, email, etab_origine, diplome_obtenu, disponibilite, date_saisie_form, source_info_imie, id_site, id_statut, id_formation, id_formation_1, id_formation_2 Civilite, Nationalite FROM fiche_visiteur');

    $chemin = '../export/'.date('Y_m_d').'.csv';

    $fp = fopen("$chemin", "w+");

    $tableau =["Y_identifant_site; Y_identifant_site2; Y_identifant_site3; identifiant_statut; Y_identifiant_annee; Y_Civilite_de_candidat; Y_Nom_de_candidat; ine_candidat; Y_Prenom_de_candidat; Nom_de_jeune_fille; Y_Nationalite_du_candidat; Y_1ère_ligne_de_l’adresse_«_courrier_»; 2ème_ligne_de_l’adresse_«_courrier_»; 3ème_ligne_de_l’adresse_«_courrier_»; 4ème_ligne_de_l’adresse_«_courrier_»; Y_Code_postal_de_l’adresse_«_courrier_»; Y_Ville_de_l’adresse_«_courrier_»; Pays_de_l’adresse_«_courrier_»; Y_Telephone_1_de_l’adresse_«_courrier_»; Telephone_2_de_l’adresse_«_courrier_»; Y_Email_de_l’adresse_«_courrier_»; cilivite_resp_legal; nom_resp_legal; prenom_resp_legal; 1ère_ligne_de_l’adresse_«_courrier_»; 2ème_ligne_de_l’adresse_«_courrier_»; 3ème_ligne_de_l’adresse_«_courrier_»; 4ème_ligne_de_l’adresse_«_courrier_»; Code_postal_de_l’adresse_«_courrier_»; Ville_de_l’adresse_«_courrier_»; Pays_de_l’adresse_«_courrier_»; Telephone_1_de_l’adresse_«_courrier_»; Telephone_2_de_l’adresse_«_courrier_»; Email_de_l’adresse_«_courrier_»; Y_date_naissance_candidat; Y_lieu_naiss_candidat; Y_departement_naiss_candidat; Y_premier_souhait; deuxieme_souhait; troisieme_souhait; Y_origine_scolaire; Y_dernier_diplome; etablissement_origine; date_saisie_formulaire; url_cv_candidat; url_lettre_motiv_candidat; observation; rp1; rp2; rp3; rp1_obs; rp2_obs; rp3_obs"];

    foreach($tableau as $entete){

       fprintf($fp, chr(0xEF).chr(0xBB).chr(0xBF));
       fputs($fp, "$entete;");

    }

    fputs($fp, "\n");

        while($donnees = $resultat->fetch()){

       $a = $donnees['Nom'];
       $b = $donnees['prenom'];
       $c= new DateTime($donnees['date_naissance']);
       $c = $c->format("d/m/Y");
       $d = $donnees['code_postal'];
       $e = $donnees['ville'];
       $f = $donnees['tel'];
       $g = $donnees['email'];
       $h = $donnees['etab_origine'];
       $i = $donnees['diplome_obtenu'];
       $j = $donnees['id'];
       $k = new DateTime($donnees['date_saisie_form']);
       $k = $k->format("d/m/Y");
       $l = $donnees['disponibilite'];
       $m = $donnees['source_info_imie'];
       $n = $donnees['id_site'];     
       $o = $donnees['id_statut'];
       $p = $donnees['id_formation'];
       $s = $donnees['Civilite'];
       $t = $donnees['Nationalite'];

       fputs($fp,"$n;;;$o;;$s;$a;;$b;;$t;;;;;$d;$e;;$f;;$g;;;;;;;;$d;$e;;$f;;$g;$c;;;$p;;;;$i;$h;$c;;;;$m;;;;;\n");

    }

    fclose($fp);
     $resultat->closeCursor();
     echo '<script>
          alert("Export réussi !");
        </script>';

     } catch(Exception $e) { 
      echo '<script>
          alert("Votre export a échoué.");
        </script>';
    }
	}


  public function envoieParMail(){

    try {

    //Récupère la liste de tous les clients en base de données
          $mail_to = "matthieu.mesn72@sfr.fr"; //Destinataire
          $from_mail = "matthieu.mesn72@sfr.fr"; //Expediteur
          $from_name = "Kenny, export"; //Votre nom, ou nom du site
          $reply_to = "matthieu.mesn72@sfr.fr"; //Adresse de réponse
          $subject = "Test export";    
          $file_name = date('Y_m_d').'.csv';     
          $path = "../export/";
          $typepiecejointe = filetype($path.$file_name);
          $data = chunk_split( base64_encode(file_get_contents($path.$file_name)) );
          //Génération du séparateur
          $boundary = md5(uniqid(time()));
          $entete = "From: $from_mail \n";
          $entete .= "Reply-to: $from_mail \n";
          $entete .= "X-Priority: 1 \n";
          $entete .= "MIME-Version: 1.0 \n";
          $entete .= "Content-Type: multipart/mixed; boundary=\"$boundary\" \n";
          $entete .= " \n";
          $message  = "--$boundary \n";
          $message .= "Content-Type: text/html; charset=\"iso-8859-1\" \n";
          $message .= "Content-Transfer-Encoding:8bit \n";
          $message .= "\n";
          $message .= "Bonjour,<br />Veuillez trouver ci-joint le ficher d'export des fiches contacts inscrites dans la base de données.<br/>Cordialement";
          $message .= "\n";
          $message .= "--$boundary \n";
          $message .= "Content-Type: $typepiecejointe; name=\"$file_name\" \n";
          $message .= "Content-Transfer-Encoding: base64 \n";
          $message .= "Content-Disposition: attachment; filename=\"$file_name\" \n";
          $message .= "\n";
          $message .= $data."\n";
          $message .= "\n";
          $message .= "--".$boundary."--";

          $envoi = mail($mail_to, $subject, $message, $entete);

          echo '<script>
          alert("Votre envoie par e-mail a été un succès.");
        </script>';

    } catch(Exception $e) {
      echo '<script>
          alert("Votre envoie par e-mail a échoué.");
        </script>';
    }

  }
}
