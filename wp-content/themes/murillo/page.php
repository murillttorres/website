<?php get_header();?>

<div class="page-banner">
    <h1><?php the_title(); ?></h1>
    <p><?php the_field('subtitulo'); ?></p>
    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAABmJLR0QA/wD/AP+gvaeTAAAA20lEQVRoge3XOQ7CMBRF0WyCCPa/E6iYGlywnEuBXWChj5N4FO9KkVLE9j9ylWlSSimllFLqbwOOwA2YW88SB8zAHTilfHzhnesJ4xHOz3ZOWbADHn7BEzhUmHPpTPu1C5thViOMDapjNiOMjaphsiGMDYtjsiOMjYthiiGMA7JjiiOMg7JhqiGMAzdjqiOMg1djmiGMARZjmiOMQZIx3SCMgX5iukOElmC6RYRSMN0jQhZmGEToG2Y4RIjPvzkXvXfz15lUdAtj3UScv5mrf8a6CaWUUkoppbrtBWnjz9Xa11cNAAAAAElFTkSuQmCC">
</div>

<div class="container page">
    <div class="page-txt">
        <?php the_content(); ?>
    </div>
</div>
<?php get_template_part( 'partials/content', 'patrono' ); ?>

<?php get_footer();?>