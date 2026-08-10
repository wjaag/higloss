<?php
/**
 * The template for displaying comments
 *
 * @package HiGloss2026
 */

if (post_password_required()) {
    return;
}
?>

<div id="comments" class="comments-area" style="margin-top: 3rem; background: #0d111a; border: 1px solid rgba(255,255,255,0.15); border-radius: 0 !important; padding: 2rem;">

    <?php if (have_comments()) : ?>
        <h3 class="comments-title" style="font-family: var(--font-heading); font-size: 1.3rem; color: #ffffff; text-transform: uppercase; margin-bottom: 1.5rem; border-bottom: 2px solid #25aae1; padding-bottom: 0.5rem;">
            Komentarze (<?php echo get_comments_number(); ?>)
        </h3>

        <ol class="comment-list" style="list-style: none; padding: 0; margin: 0 0 2rem 0;">
            <?php
            wp_list_comments(array(
                'style'       => 'ol',
                'short_ping'  => true,
                'avatar_size' => 48,
            ));
            ?>
        </ol>

        <?php the_comments_navigation(); ?>

    <?php endif; ?>

    <?php if (!comments_open() && get_comments_number() && post_type_supports(get_post_type(), 'comments')) : ?>
        <p class="no-comments" style="color: #94a3b8; font-style: italic;">Komentarze dla tego wpisu są wyłączone.</p>
    <?php endif; ?>

    <?php comment_form(array(
        'class_form'           => 'hg-comment-form',
        'title_reply'          => 'ZOSTAW KOMENTARZ / ZAPYTANIE',
        'title_reply_to'       => 'ODPOWIEDZ DO %s',
        'class_submit'         => 'hg-btn hg-btn-cyan',
        'submit_button'        => '<input name="%1$s" type="submit" id="%2$s" class="%3$s" value="%4$s" style="padding: 0.8rem 1.6rem; font-weight: 800; border-radius: 0 !important; cursor: pointer;" />',
    )); ?>

</div>
