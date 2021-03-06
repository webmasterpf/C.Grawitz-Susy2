<?php
/* Ce template permet la création d'un layout multicolonne pour le spages de base, en permettant la disposition facile
 * des champs CCK custom, si nécessaires pour une page de base.
*/?>
<!--______________NODE TPL POUR node-page_vdl.tpl CUSTOM________________ -->
<div class="node <?php print $classes; ?>" id="node-<?php print $node->nid; ?>">
    <div class="node-inner">
        <!--______________COLONNE 1________________ -->
 <div id="colonne-1" class="col1_layout_9_3 page-liste">
          <?php if ($title): /*copier le titre dans la colonne desirée*/?>
            <h1 class="titre_page_vdl"><?php print $title; ?></h1>
            <?php endif; ?>
            
            <?php print $picture; ?>

            <?php if ($submitted): ?>
            <span class="submitted"><?php print $submitted; ?></span>
            <?php endif; ?>

            <div class="content">
                <?php   print $node->content['body']['#value'];/*déplacer le contenu dans la colonne désirée*/ ?>
                
              <?php /*inclusion d'une vue via un champ viewreference*/
              if ($node->field_choix_liste[0]['view']): ?>
            <div id="bloc_liste_vdl">
                    <?php  print $node->field_choix_liste[0]['view']  ?>
            </div>
            <?php endif;?>  
    
             <?php
           global $theme_path;
              include ($theme_path.'/includes/regions_inc/inc_region_col_1.php');
              ?>
                </div><!-- /content -->
        </div><!-- /colonne1 -->
        <!--______________COLONNE 2________________ -->
         <!-- <pre> <?php //print_r($node); ?> </pre>-->   <!-- listage des variables du $content -->
 <div id="colonne-2" class="col2_layout_9_3 page-liste">

                <?php
                global $theme_path;
              include ($theme_path.'/includes/dedicates_inc/inc_vue_grawitz_actus.php');
              ?>

                    <?php
           global $theme_path;
              include ($theme_path.'/includes/regions_inc/inc_region_col_2.php');
              ?>

            

        </div><!-- /colonne2 -->

        

        <?php if ($terms): ?>
        <div class="taxonomy"><?php //print $terms; ?></div>
        <?php endif;?>

        <?php if ($links): ?>
        <div class="links"> <?php //print $links; ?></div>
        <?php endif; ?>

    </div> <!-- /node-inner -->
</div> <!-- /node-->