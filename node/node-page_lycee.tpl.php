<?php
/* Ce template permet la création d'un layout multicolonne pour les pages de base, en permettant la disposition facile
 * des champs CCK custom, si nécessaires pour une page de base.
*/?>
<!--______________NODE TPL POUR PAGE.TPL CUSTOM________________ -->
<div class="node <?php print $classes; ?>" id="node-<?php print $node->nid; ?>">
    <div class="node-inner">
        <!--______________COLONNE 1________________ -->
   
        <div id="colonne-1" class="col1_layout_3_6_3 page-lycee">
            <?php if ($title): /*copier le titre dans la colonne desirée*/?>
            <h1 class="titre-lycee"><?php print $title; ?></h1>
            <?php endif; ?>
        <?php  print $node->field_image_deco_lycee[0]['view'] /*Image deco page lycee*/ ?>
            <?php 
  //$theme_path = drupal_get_path('theme', 'NOM_THEME');
  global $theme_path;
include($theme_path .'/includes/regions_inc/inc_region_col_1.php');
?>
        </div><!-- /colonne1 -->
        <!--______________COLONNE 2________________ -->
         <!-- <pre> <?php //print_r($node); ?> </pre>-->   <!-- listage des variables du $content -->
        <div id="colonne-2" class="col2_layout_3_6_3 page-lycee">

            <?php print $picture; ?>

            <?php if ($submitted): ?>
            <span class="submitted"><?php print $submitted; ?></span>
            <?php endif; ?>

            <div class="content">
                <?php   print $node->content['body']['#value'];/*déplacer le contenu dans la colonne désirée*/ ?>
                
      <?php if ($node->field_video_lycee[0]['view']): ?>
        <div id="video-plycee">
            <?php  print $node->field_video_lycee[0]['view'];?>
        </div>
           <?php endif;?>
           <?php 
  //$theme_path = drupal_get_path('theme', 'NOM_THEME');
  global $theme_path;
include($theme_path .'/includes/regions_inc/inc_region_col_2.php');
?>     
            </div>
        </div><!-- /colonne2-->
          <!--______________COLONNE 3________________ -->
        <div id="colonne-3" class="col3_layout_3_6_3 page-lycee">
           <?php if ($node->field_fichier_joint_lycee[0]['view'] 
                OR $node->field_lien_page_lycee[0]['view']): ?>
        <div id="fichier-joint-plycee">
            <h3>Utile</h3>
           <?php  print $node->field_fichier_joint_lycee[0]['view'];?>
             <?php  print $node->field_lien_page_lycee[0]['view'];?>

        </div>
           <?php endif;?>
   
        
          <?php
                global $theme_path;
              include ($theme_path.'/includes/dedicates_inc/inc_vue_grawitz_actus.php');
              ?>
                       <?php 
  //$theme_path = drupal_get_path('theme', 'NOM_THEME');
  global $theme_path;
include($theme_path .'/includes/regions_inc/inc_region_col_3.php');
?>

        </div><!-- /colonne3 -->

      

        <?php if ($terms): ?>
        <div class="taxonomy"><?php //print $terms; ?></div>
        <?php endif;?>

        <?php if ($links): ?>
        <div class="links"> <?php //print $links; ?></div>
        <?php endif; ?>

    </div> <!-- /node-inner -->
</div> <!-- /node-->