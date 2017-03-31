<div class="container">
<div class="row">
    <div class="col-lg-12">
        <h2 class="titleRed">Formulaire de candidature</h2>
    </div>                      
</div>
<div class="row">
    <div class="col-lg-10">
    </div>                      
    <div class="col-lg-2">
        <p><span class="obligatoire" style="font-size: 35px;">*</span> : Champs obligatoires.</p>
    </div> 
</div>

<!-- Début du formulaire -->
<div class="row">
    <div class="col-lg-12 cadre_formulaire">

    <form action="./index.php?action=valider" method="POST">

    <!-- Début du slider contenant des formulaires avec des boutons "suivant" - "précédent" pour passer aux étapes d'inscriptions suivantes. -->

        <div class="row">
            <div class="slider">
                <ul>
                    <!-- première li -->
                    <li id="li1">
                        <div class="row">
                            <div class="col-lg-12">
                                <h2 class="titleBlue"><span class="obligatoire" style="font-size: 35px;">*</span>Campus</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 selectCampus" style="text-align: center;padding-top: 10px;">
                                    <input type="radio" name="idSite" value=4>
                                    <label>Nantes</label>
                                    <input type="radio" name="idSite" value=1>
                                    <label>Angers</label>
                                    <input type="radio" name="idSite" value=5>
                                    <label>Rennes</label>
                                    <input type="radio" name="idSite" value=3>
                                    <label>Laval</label>
                                    <input type="radio" name="idSite" value=6>
                                    <label>Le Mans</label>
                                    <input type="radio" name="idSite" value=2>
                                    <label>Caen</label>                                   
                                    <input type="radio" name="idSite" value=7>
                                    <label>Paris</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <h2 class="titleBlue">Informations</h2>
                            </div>
                        </div>
                            <div class="row">
                                <div class="col-lg-12 selectInfo1">
                                    <label><span class="obligatoire">*</span>Civilité</label>
                                    <select name="civ" required>
                                        <option value="Monsieur">Monsieur</option>
                                        <option value="Madame">Madame</option>
                                    </select>
                                    <label><span class="obligatoire">*</span>Nom :</label>
                                    <input type="text" name="nom" required placeholder="Nom...">
                                    <label><span class="obligatoire">*</span>Prenom :</label>
                                    <input type="text" name="prenom" required placeholder="Prenom...">
                                    <label><span class="obligatoire">*</span>Nationalité :</label>
                                    <input type="text" name="nationalite" required placeholder="Nationalité...">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 selectInfo2">
                                    <label><span class="obligatoire">*</span>Date de naissance :</label>
                                    <input type="date" name="dateNaissance" required>
                                    <label><span class="obligatoire">*</span>Ville :</label>
                                    <input type="text" name="ville" required placeholder="Ville actuelle...">
                                    <label><span class="obligatoire">*</span>Code postal :</label>
                                    <input type="text" name="cp" required placeholder="Ex: 54000 ...">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 selectInfo3">
                                    <label><span class="obligatoire">*</span>Téléphone :</label>
                                    <input type="text" name="tel" required placeholder="Ex: 07 .. .. .. ..">
                                    <label><span class="obligatoire">*</span>E-mail :</label>
                                    <input type="email" name="email" required placeholder="E-mail actuel...">
                                    <label><span class="obligatoire">*</span>Confirmation E-mail :</label>
                                    <input type="email" name="emailConfirm" required placeholder="Confirmation de l'e-mail...">
                                </div>
                            </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <span class="suivant pull-right next1" style="margin-top: 20px;">Suivant</span>
                            </div>
                        </div>
                    </li>
                    <!-- deuxième li -->
                    <li id="li2" style="visibility: hidden;">
                        <div class="row">
                            <div class="col-lg-12">
                                <h2 class="titleBlue1"><span class="obligatoire" style="font-size: 35px;">*</span>Situation</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 selectSituation">
                                    <input type="radio" name="idStatut" value=7 id="trigger1">
                                    <label>En formation</label>                                    
                                    <input type="radio" name="idStatut" value=9>
                                    <label>Salarié</label>
                                    <input type="radio" name="idStatut" value=5>
                                    <label>Demandeur d'emploi</label>
                                    <div class="col-lg-12">
                                        <div style="display:none;" id="hidden1">
                                            <label>Dans quel etablissement</label>
                                            <input type="text" name="etabOrigine" placeholder="Quel établissement ?...">
                                            <br>
                                            <label>Dernier diplôme obtenu</label>
                                            <input type="text" name="diplomeObtenu" placeholder="Dernier dîplome en date...">
                                        </div>
                                    </div>        
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <h2 class="titleBlue1">Disponibilité</h2>
                            </div>
                        </div>
                        <div class="row selectDispo">
                            <div class="col-lg-12">
                                <input type="radio" name="disponibilite">
                                <label>Dès maintenant</label>
                                <input type="radio" name="disponibilite">
                                <label>Après la fin de ma formation en cours</label>
                                <label style="padding-left: 25px;">Autre :</label>
                                <input type="radio" style="margin-left:0px;" name="disponibilite" id="trigger2">
                                <input type="text" style="display:none;margin-left: 0px;" name="disponibilite" id="hidden2" placeholder="En quelques mots...">
                            </div>
                        </div>
                        <div class="row rowPad" style="padding-top: 90px;">
                            <div class="col-lg-12">
                                <span class="precedent pull-left previous1">Précédent</span>
                                <span class="suivant1 suivant pull-right next2">Suivant</span>
                            </div>
                        </div>
                    </li>
                    <!-- troisième li -->
                    <li id="li3" style="visibility: hidden;">
                        <div class="row">
                            <div class="col-lg-12">
                                <h2 class="formation titleBlue2"><span class="obligatoire" style="font-size: 35px;">*</span>Formation</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="selectFormation1 col-lg-12 selectFormation">
                                <div class="radio-inline">
                                    <label><input type="radio" name="idFormation" value=10>IT Start</label>
                                </div>
                                <div class="radio-inline">
                                    <label> <input type="radio" name="idFormation" value=9>DIGISTART</label>
                                </div>
                                <div class="radio-inline">
                                    <label><input type="radio" name="idFormation" value=8>BTS SIO</label>
                                </div>
                                <div class="radio-inline">
                                    <label><input type="radio" name="idFormation" value=12>Developpeur logiciel</label>
                                </div>
                                <div class="radio-inline">
                                    <label><input type="radio" name="idFormation" value=15>Technicien supérieur en support informatique</label>
                                </div>

                                <div class="radio-inline">
                                    <label><input type="radio" name="idFormation" value=13>Responsable infrastructure système et réseaux</label>
                                </div>
                                
                                <div class="radio-inline">
                                    <label><input type="radio" name="idFormation" value=6>WEB MASTER et DESIGNER</label>
                                </div>
                                
                                <div class="radio-inline">
                                    <label><input type="radio" name="idFormation" value=1>Chef de projet en conception de système informatique</label> 
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <h2 class="imie titleBlue2">Je connais l'imie</h2>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12" style="text-align: center; padding: 10px;">
                                        <label>Comment ?</label>
                                        <input type="text" name="sourceInfo" placeholder="En quelques mots...">
                                </div>
                            </div>
                            <div class="row pad">
                                <div class="col-lg-12">
                                    <span class="precedent1 precedent pull-left previous2">Précédent</span>
                                    <input class="terminer pull-right" type="submit" name="action" value="valider">
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        </form>
    </div>
</div>
</div>


