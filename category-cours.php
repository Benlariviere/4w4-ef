<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package theme4w4
 */
 
get_header();
?>
 
    <main id="primary" class="site-main">
 
        <?php if ( have_posts() ) : ?>
 
            <header class="page-header">
    
                <?php
                // the_archive_title( '<h1 class="page-title">', '</h1>' );
                echo '<h1 class="page-title">' . single_cat_title( '', false ) . '</h1>';
                the_archive_description( '<div class="archive-description">', '</div>' );
        
                ?>  
            
            </header><!-- .page-header -->
            <section class="session">
            <?php
            /* Start the Loop */
 
            while ( have_posts() ) :
                the_post();
                
                convertirTableau($tPropriété);
 
                $precedent = "XXXXXX";
 
                get_template_part( 'template-parts/content', 'cours-session' );
				if ($tPropriété['session'] != $precedent): 
					if ("XXXXXX" != $precedent)	: ?>
						</section>
						
						<?php endif; ?>
					<?php endif; ?>	
					<h2><?php echo $tPropriété['session'] ?></h2>
					<section <?php echo class_composant($tPropriété['session']) ?>>
				<?php endif ?>	

				<?php if (in_array($tPropriété['session']) ) : 
						get_template_part( 'template-parts/content', 'cours-carrousel' ); 
						
				endif;	
				$precedent = $tPropriété['session'];
 
            endwhile;?>
 
            </section>
 
        <?php endif; ?>
        
 
    </main><!-- #main -->
 
<?php
// get_sidebar();
get_footer();
 
function convertirTableau(&$tPropriété)
{
    /*
    $titre = get_the_title(); 
    // 582-1W1 Mise en page Web (75h)
    $sigle = substr($titre, 0, 7);
    $nbHeure = substr($titre,-4,3);
    $titrePartiel =substr($titre,8,-6);
    $session = substr($titre, 4,1);
    // $contenu = get_the_content();
    // $resume = substr($contenu, 0, 200);
    $typeCours = get_field('type_de_cours');
*/
 
    $tPropriété['titre'] = get_the_title(); 
    $tPropriété['sigle'] = substr($tPropriété['titre'], 0, 7);
    $tPropriété['nbHeure'] = substr($tPropriété['titre'],-4,3);
    $tPropriété['titrePartiel'] = substr($tPropriété['titre'],8,-6);
    $tPropriété['session'] = substr($tPropriété['titre'], 4,1);
    $tPropriété['typeCours'] = get_field('type_de_cours');
}