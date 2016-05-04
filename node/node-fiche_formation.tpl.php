<!--______________NODE TPL POUR TdC FICHE FORMATION CUSTOM________________ -->
<div class="node <?php print $classes; ?>" id="node-<?php print $node->nid; ?>">
  <div class="node-inner">
<!--______________COLONNE GAUCHE 1________________ -->
  <!-- <pre> <?php //print_r($node); ?> </pre>-->   <!-- listage des variables du $content -->
<div id="colonne-1" class="col1_layout_max fiche-formation">

    <div class="colonne-1-1">
     <?php if ($title): /*insertion du titre de la page et style differencié si besoin*/?>
     <h1 class="titre_ficheform"><?php print $title; ?></h1>

    <?php endif; ?>

    <?php
           global $theme_path;
              include ($theme_path.'/includes/dedicates_inc/inc_ficheform_infos_utiles.php');
              ?>
     
  <br clear="all"/>
       <div class="taxo_ficheform">Cat&eacute;gorie : <?php print $my_taxo_ficheform; ?></div>
       </div><!-- /colonne-1-1 -->

    <div class="colonne-1-2">
          <!-- Deco page-->
      <div class="deco-ficheform">
    <?php  print $node->field_deco_ficheform[0]['view'] /*Image deco*/ ?>
      </div>
      
      
          <h2 class="philo-ficheform">
       <?php  print $node->field_philo_ficheform[0]['view'] /*Philo formation*/ ?>
          </h2>    
    </div><!-- /colonne-1-2 -->
    

       
</div><!-- /colonne-1 -->
<!--______________COLONNE GAUCHE 2________________ -->
<div id="colonne-2" class="col1_layout_6_6 fiche-formation">
    
    <div class="content">
 <?php
     /*insertion du contenu du corps de la page*/
      print $node->content['body']['#value']
      ?>
        <?php
           global $theme_path;
              include ($theme_path.'/inlcudes/regions_inc/inc_region_col_2.php');
              ?>
        </div>

</div><!-- /colonne-2 -->
<!--______________COLONNE GAUCHE 3________________ -->

<div id="colonne-3" class="col2_layout_6_6 fiche-formation">

    <div class="content">

    
         <?php  print $node->field_ficheform_2[0]['view'] /*Image deco page lycee*/ ?>
       
            
    
         <br clear="all"/>
        <?php
           global $theme_path;
              include ($theme_path.'/inlcudes/regions_inc/inc_region_col_3.php');
              ?>
    </div>

    <?php if ($terms): ?>
      <div class="taxonomy"><?php //print $terms; ?></div>
    <?php endif;?>

    <?php if ($links): ?>
      <div class="links"> <?php //print $links; ?></div>
    <?php endif; ?>

</div><!-- /colonne-3 -->
 

  </div> <!-- /node-inner -->
</div> <!-- /node-->
<!--______________FIN NODE TPL CUSTOM________________ -->