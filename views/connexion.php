
<!-- Division pour le contenu principal -->
    <div id="contenu">         
      <img src="images/KeepCoins.jpg" alt="logo" width="300">
      <form id="frmConnexion" action="index.php?uc=connexion&action=connexion" method="post">
      <div class="corpsForm">
        <input type="hidden" name="etape" id="etape" value="validerConnexion" />
      <p>
        <label for="txtLogin" accesskey="n">* Login : </label>
        <input type="text" id="txtLogin" name="txtLogin" maxlength="20" size="15" value="" title="Entrez votre login" />
      </p>
      <p>
        <label for="txtMdp" accesskey="m">* Mot de passe : </label>
        <input type="password" id="txtMdp" name="txtMdp" maxlength="8" size="15" value=""  title="Entrez votre mot de passe"/>
      </p>
      <p>
        <label for="txtRole" accesskey="m">Rôle : </label>
        <select name="txtRole" id="txtRole" />
                        <option value="apprenant">Apprenant</option>
                        <option value="intervenant">Intervenant</option>
                        <option value="responsable">Responsable</option>
                    </select>
      </p>
      </div>
      <div class="piedForm">
      <p>
        <input type="submit" id="ok" value="Valider" />
        <input type="reset" id="annuler" value="Effacer" />
      </p> 
      </div>
      </form>
    </div>
    
