  <div data-role="page" data-theme="a" id="page_mainScreen">
    <div data-role="header" data-position="inline" data-theme="a">
      <h1>Accueil</h1>
      <div data-role="controlgroup" data-type="horizontal" data-mini="true" class="ui-btn-right">
        <a data-role="button" data-inline="true" data-icon="recycle" data-iconpos="notext" data-mini="true" >Rafraichir</a>
        <a href="addList.html" data-role="button" data-inline="true" data-icon="plus" data-iconpos="notext" data-mini="true" >Ajouter une liste</a>
        <a href="#popupMenu" data-role="button" data-rel="popup" data-inline="true" data-icon="bars" data-iconpos="notext" data-mini="true" data-transition="slidedown">Menu</a>
          <div data-role="popup" id="popupMenu" data-theme="b">
            <ul data-role="listview" data-inset="true" style="min-width:210px;">
              <li data-role="list-divider">Menu</li>
            <!--  <li><a href="afficherProfil.html">Afficher profil</a></li> -->
                 <li>   <?php echo $this->Html->link('Affffficher profil',array('controller' => 'Users','action' => 'profil')); ?></li>
            <!--  <li><a href="#popupDisconnect" data-rel="popup" data-transition="flow">Déconnexion</a></li> -->
          <li>   <?php echo $this->Html->link('Déconnexionnn',array('controller' => 'Users','action' => 'logout')); ?></li>

            </ul> 
          </div>
        <a href="#popupDisconnect" data-role="button" data-rel="popup" data-inline="true" data-icon="back" data-iconpos="notext" data-mini="true" >Déconnexion</a>
          <div data-role="popup" id="popupDisconnect" data-position-to="window"  data-overlay-theme="b" data-theme="b" data-dismissible="false" style="max-width:400px;">
            <div data-role="header" data-theme="a"><h1>Déconnexion</h1></div>
            <div role="main" class="ui-content">
              <h3 class="ui-title">Voulez-vous vraiment vous déconnecter ?</h3>
              <a href="#" data-role="button" data-inline="true" data-icon="delete" data-rel="back">Annuler</a>
            <!--  <a href="connexion.html" data-role="button" data-inline="true" data-icon="check">Valider</a> -->
             <?php echo $this->Html->link('Valider',array('controller' => 'Users','action' => 'logout'),array('data-role'=>'button','data-inline'=>true,'data-icon'=>'check')); ?>
             
            </div>
          </div>
        </div>
    </div>

    
    <div data-role="content">
      <?php echo $this->Session->flash(); ?>
      <h4 class="ui-bar ui-bar-a">Aujourd'hui</h4>
      Anniversaire de Paul-Edward <a href="afficherListe.html" data-role="button" data-inline="true" data-icon="carat-r" data-iconpos="notext" data-mini="true" >Consulter la liste</a><br/>
      Emploi du temps <a href="afficherListe.html" data-role="button" data-inline="true" data-icon="carat-r" data-iconpos="notext" data-mini="true" >Consulter la liste</a><br/>
      <h4 class="ui-bar ui-bar-a">Demain</h4>
      Piquenique géant Pépinière Nancy <a href="afficherListe.html" data-role="button" data-inline="true" data-icon="carat-r" data-iconpos="notext" data-mini="true" >Consulter la liste</a><br/>
    </div>
  </div>