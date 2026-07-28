<?php
/**
 * Template Name: Podstrona Galeria Realizacji
 *
 * @package HiGloss2026
 */

get_header();
?>

<main style="padding: 9rem 0 6rem;">
    <div class="hg-container">
        <div style="text-align: center; margin-bottom: 3.5rem;">
            <div style="display: inline-block; padding: 0.35rem 1rem; background: rgba(255, 0, 85, 0.1); border: 1px solid #ff0055; color: #ff0055; font-weight: 800; font-size: 0.8rem; letter-spacing: 0.1em; text-transform: uppercase; margin-bottom: 1.5rem;">
                PORTFOLIO PROJECT SHOWCASE
            </div>
            <h1 style="font-family: var(--font-heading); font-size: clamp(2.5rem, 4.5vw, 3.8rem); font-weight: 900; color: #ffffff; text-transform: uppercase;">
                GALERIA REALIZACJI HI-GLOSS
            </h1>
        </div>

        <div class="hg-grid hg-grid-3">
            <div style="background: var(--bg-card); border: 2px solid #ff0055; overflow: hidden;">
                <img src="https://images.unsplash.com/photo-1617814076367-b759c7d7e738?auto=format&fit=crop&w=800&q=80" alt="Audi A7" style="width: 100%; height: 230px; object-fit: cover;">
                <div style="padding: 1.5rem;">
                    <span style="font-size: 0.75rem; color: #ff0055; font-weight: 800; text-transform: uppercase;">Zmiana Koloru</span>
                    <h3 style="font-family: var(--font-heading); font-size: 1.2rem; color: #ffffff; margin-top: 0.2rem; text-transform: uppercase;">Audi A7 - Niebieski Połysk Avery</h3>
                </div>
            </div>

            <div style="background: var(--bg-card); border: 2px solid #ff0055; overflow: hidden;">
                <img src="https://images.unsplash.com/photo-1618843479313-40f8afb4b4d8?auto=format&fit=crop&w=800&q=80" alt="Mercedes S" style="width: 100%; height: 230px; object-fit: cover;">
                <div style="padding: 1.5rem;">
                    <span style="font-size: 0.75rem; color: #ff0055; font-weight: 800; text-transform: uppercase;">Zmiana Koloru</span>
                    <h3 style="font-family: var(--font-heading); font-size: 1.2rem; color: #ffffff; margin-top: 0.2rem; text-transform: uppercase;">Mercedes S - Czarna Satyna 3M</h3>
                </div>
            </div>

            <div style="background: var(--bg-card); border: 2px solid #ff0055; overflow: hidden;">
                <img src="https://images.unsplash.com/photo-1503376780353-7e6692767b70?auto=format&fit=crop&w=800&q=80" alt="Porsche Panamera" style="width: 100%; height: 230px; object-fit: cover;">
                <div style="padding: 1.5rem;">
                    <span style="font-size: 0.75rem; color: #ff0055; font-weight: 800; text-transform: uppercase;">Bezbarwne PPF</span>
                    <h3 style="font-family: var(--font-heading); font-size: 1.2rem; color: #ffffff; margin-top: 0.2rem; text-transform: uppercase;">Porsche Panamera - Zabezpieczenie PPF</h3>
                </div>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>
