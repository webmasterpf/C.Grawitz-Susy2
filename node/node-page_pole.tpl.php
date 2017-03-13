<?php
/* Ce template permet la création d'un layout multicolonne pour les pages de base,
 * en permettant la disposition facile
 * des champs CCK custom, si nécessaires pour une page de base.
*/?>
<!--______________NODE TPL POUR PAGE.TPL CUSTOM________________ -->
<div class="node <?php print $classes; ?>" id="node-<?php print $node->nid; ?>">
    <div class="node-inner">
           <?php if ($title): /*insertion du titre de la page et style differencié*/?>
     <h1 class="titre_pole_content"><?php print $title; ?></h1>
    
    <?php endif; ?>

    <?php print $picture; ?>

    <?php if ($submitted): ?>
      <span class="submitted"><?php print $submitted; ?></span>
    <?php endif; ?>

          <div class="content">
                <?php   print $node->content['body']['#value'];/*déplacer le contenu dans la colonne désirée*/ ?>
            </div>
      <br clear="all"/>
        <!--______________COLONNE 1________________ -->
        <?php /* choix du layout selon nombre de colonne
         * .col1_layout_200_590_200{} .col1_layout_330_all{} .col1_layout_18_56_25{}
         * .col2_layout_200_590_200{} .col2_layout_330_all{} .col2_layout_18_56_25{}
         * .col3_layout_200_590_200{} .col3_layout_330_all{} .col3_layout_18_56_25{}
         */?>
        <div id="colonne-1" class="layout_3col_all4 page-pole">
       <?php
           global $theme_path;
              include ($theme_path.'/includes/regions_inc/inc_region_pole_G.php');
              ?>
    
                <?php
//           global $theme_path;
//              include ($theme_path.'/includes/dedicates_inc/inc_pole_liste_MRSP.php');
              ?>
        </div>
        <!--______________COLONNE 2________________ -->
         <!-- <pre> <?php //print_r($node); ?> </pre>-->   <!-- listage des variables du $content -->
         <div id="colonne-2" class="layout_3col_all4 page-pole">

             <?php
           global $theme_path;
              include ($theme_path.'/includes/regions_inc/inc_region_pole_C.php');
              ?>
               <?php
//           global $theme_path;
//              include ($theme_path.'/includes/dedicates_inc/inc_pole_liste_MSAC.php');
              ?>

        </div>

        <!--______________COLONNE 3________________ -->
         <div id="colonne-3" class="layout_3col_all4last page-pole">
             <?php
           global $theme_path;
              include ($theme_path.'/includes/regions_inc/inc_region_pole_D.php');
              ?>
           <?php
//           global $theme_path;
//              include ($theme_path.'/includes/dedicates_inc/inc_pole_liste_FC.php');
              ?>
        </div>

        <?php if ($terms): ?>
        <div class="taxonomy"><?php //print $terms; ?></div>
        <?php endif;?>

        <?php if ($links): ?>
        <div class="links"> <?php //print $links; ?></div>
        <?php endif; ?>

    </div> <!-- /node-inner -->
</div> <!-- /node-->