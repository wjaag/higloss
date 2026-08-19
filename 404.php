<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package HiGloss2026
 */

get_header();
?>

<main style="padding: 9rem 0 6rem; flex: 1; display: flex; align-items: center;">
    <div class="hg-container">
        
        <div style="max-width: 800px; margin: 0 auto; text-align: center;">
            
            <!-- 404 GLOW BADGE -->
            <div style="display: inline-block; padding: 0.5rem 1.5rem; background: rgba(37, 170, 225, 0.1); border: 2px solid #25aae1; color: #25aae1; font-weight: 900; font-size: 1rem; letter-spacing: 0.15em; text-transform: uppercase; margin-bottom: 2rem;">
                BŁĄD 404 &bull; STRONA NIE ISTNIEJE
            </div>

            <h1 style="font-family: var(--font-heading, 'Montserrat', sans-serif); font-size: clamp(3rem, 8vw, 6rem); font-weight: 900; color: #ffffff; text-transform: uppercase; line-height: 1; margin-bottom: 1.5rem; text-shadow: 0 10px 30px rgba(0,0,0,0.9);">
                SZUKANA STRONA <span style="color: #25aae1;">NIE ZOSTAŁA ZNALEZIONA</span>
            </h1>

            <p style="color: #cbd5e1; font-size: 1.15rem; line-height: 1.8; margin-bottom: 2.5rem; max-width: 650px; margin-left: auto; margin-right: auto;">
                Przepraszamy, ale podany adres URL nie istnieje lub strona została przeniesiona pod inny adres. Skorzystaj z poniższego wyszukiwania lub przejdź do najważniejszych sekcji studio **HI-GLOSS DESIGN**.
            </p>

            <!-- SEARCH FORM -->
            <div style="max-width: 500px; margin: 0 auto 3rem auto;">
                <?php get_search_form(); ?>
            </div>

            <!-- ACTION BUTTONS -->
            <div style="display: flex; gap: 1.25rem; justify-content: center; flex-wrap: wrap;">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="hg-btn hg-btn-cyan" style="padding: 1rem 2rem; font-size: 0.95rem; font-weight: 900;">
                    <svg class="hg-ui-icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M20 12H4M10 6l-6 6 6 6"/></svg> STRONA GŁÓWNA
                </a>
                <a href="<?php echo esc_url(home_url('/oferta')); ?>" class="hg-btn" style="background: rgba(255,153,0,0.15); color: #ff9900; border: 2px solid #ff9900; padding: 1rem 2rem; font-size: 0.95rem; font-weight: 900;">
                    PEŁNA OFERTA <svg class="hg-ui-icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M4 12h16M14 6l6 6-6 6"/></svg>
                </a>
                <a href="<?php echo esc_url(home_url('/kontakt')); ?>" class="hg-btn hg-btn-outline" style="padding: 1rem 2rem; font-size: 0.95rem; font-weight: 900;">
                    <svg class="hg-ui-icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6A19.79 19.79 0 0 1 2.12 7.18 2 2 0 0 1 4.11 5h3a2 2 0 0 1 2 1.72c.13.96.36 1.9.7 2.81a2 2 0 0 1-.45 2.11L8.09 12.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.91.34 1.85.57 2.81.7A2 2 0 0 1 22 16.92z"/></svg> KONTAKT
                </a>
            </div>

        </div>

    </div>
</main>

<?php get_footer(); ?>
