<?php
/**
 * Custom Search Form Template
 *
 * @package HiGloss2026
 */
?>

<form role="search" method="get" class="hg-search-form" action="<?php echo esc_url(home_url('/')); ?>" style="display: flex; width: 100%; border: 2px solid #25aae1; background: #0b0e17; border-radius: 0 !important; overflow: hidden; box-shadow: 0 10px 25px rgba(0,0,0,0.7);">
    <input type="search" class="hg-search-field" placeholder="Szukaj usługi (np. PPF, 3M, dechroming)..." value="<?php echo get_search_query(); ?>" name="s" style="flex: 1; background: transparent; border: none; padding: 0.9rem 1.2rem; color: #ffffff; font-family: 'Montserrat', sans-serif; font-size: 0.95rem; outline: none; border-radius: 0 !important;" required />
    <button type="submit" class="hg-search-submit" style="background: #25aae1; color: #000000; border: none; padding: 0.9rem 1.6rem; font-family: 'Montserrat', sans-serif; font-weight: 900; font-size: 0.88rem; text-transform: uppercase; cursor: pointer; letter-spacing: 0.08em; border-radius: 0 !important; transition: background 0.3s ease;">
        SZUKAJ
    </button>
</form>
