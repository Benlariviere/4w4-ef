<?php
/**
 * Template part l'affichage des bloc de cours dans front-page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package theme4w4
 */
global $tPropriété;
?>
<p><?php echo $tPropriété['session']; ?></p>
<article id="cours">
 <div id="cours-info">
<div id="premierText"><?php echo $tPropriété['typeCours'];  ?></div>
<div id="deuxiemeText"><?php echo $tPropriété['sigle'] ; ?></div>
<div id="troisiemeText"><?php echo $tPropriété['nbHeure'] ; ?></div>
</div>
</article>