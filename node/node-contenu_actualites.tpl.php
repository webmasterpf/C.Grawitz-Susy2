<!--______________NODE TPL POUR TdC CONTENU ACTUALITES CUSTOM________________ -->
<div class="node <?php print $classes; ?>" id="node-<?php print $node->nid; ?>">
  <div class="node-inner">
<!--______________COLONNE GAUCHE 1________________ -->
  <!-- <pre> <?php //print_r($node); ?> </pre>-->   <!-- listage des variables du $content -->
<div  class="actualites_content_G1">


       <?php
           global $theme_path;
              include ($theme_path.'/includes/inc_actu_complement.php');
              ?>


       <?php
           global $theme_path;
              include ($theme_path.'/includes/regions_inc/inc_region_col_1.php');
              ?>
 
      
</div>
<br/>
<!--______________COLONNE GAUCHE 2________________ -->
<div id="colonne-2" class="actualites_content_G2">
         <?php if ($title): /*insertion du titre de la page et style differencié*/?>
     <h1 class="titre_actualites_content"><?php print $title; ?></h1>
     <br clear="all"/>
    <?php endif; ?>
     

     <?php if ($submitted): ?>
      <span class="submitted"><?php print $submitted; ?></span>
    <?php endif; ?>

        <?php if ($node->field_video_rp[0]['view']): ?>
        <div id="bloc-video-actualites">
                   <?php  print $node->field_video_rp[0]['view'] /*Video*/ ?>
        </div>
           <?php endif;?>


 <?php if ($node->field_fichier_audio_rp[0]['view']): ?>
        <div id="bloc-audio-actualites">
                   <?php  print $node->field_fichier_audio_rp[0]['view'] /*audio*/ ?>
        </div>
           <?php endif;?>





       <?php
           global $theme_path;
              include ($theme_path.'/includes/regions_inc/inc_region_col_2.php');
              ?>
     <!-- retour haut selon resolution de l'ecran 
          <a href="#general" id="retour_haut">Haut de page</a>-->
</div>
<!--______________COLONNE GAUCHE 3________________ -->
   
<div id="colonne-3" class="actualites_content_G3">
     <?php print $picture; ?>

   

    <div class="content">
 <?php
     /*insertion du contenu du corps de la page*/
      print $node->content['body']['#value'];

      ?>
       

         

          <?php if ($node->field_choix_galerie_vdl[0]['view']): ?>
        <div id="bloc-galerie-vdl">
           <?php  print $node->field_choix_galerie_vdl[0]['view'] /*galerie*/ ?>
        </div>
           <?php endif;?>


    </div>

    <?php if ($terms): ?>
      <div class="taxonomy"><?php //print $terms; ?></div>
    <?php endif;?>

    <?php if ($links): ?>
      <div class="links"> <?php //print $links; ?></div>
    <?php endif; ?>

</div>
   

  </div> <!-- /node-inner -->
</div> <!-- /node-->
<!--______________FIN NODE TPL CUSTOM________________ -->