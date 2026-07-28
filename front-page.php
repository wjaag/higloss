<?php
/**
 * Template Name: Color Studio Edition Landing Page
 *
 * @package HiGloss2026
 */

get_header();
?>

<!-- SECTION 1: HERO (Subtle Multi-Color Glow) -->
<section class="sec-hero">
    <div class="hg-container hg-grid hg-grid-2" style="align-items: center;">
        <div>
            <div class="hg-badge blue">
                <span style="display:inline-block; width:8px; height:8px; background:var(--color-blue); border-radius:50%;"></span>
                Studio Car Wrappingu Szczecin - Mierzyn
            </div>

            <h1 class="hg-section-title" style="font-size: clamp(2.4rem, 4.5vw, 3.8rem); margin-bottom: 1.25rem;">
                Sztuka Zmiany Koloru & <span class="blue">Ochrona PPF</span> Twojego Auta
            </h1>

            <p style="color: var(--text-muted); font-size: 1.15rem; margin-bottom: 2rem; line-height: 1.6;">
                Odkryj nową oprawę swojego pojazdu. Wykonujemy całościową zmianę koloru foliami wylewanymi (mat, satyna, połysk, carbon) oraz bezbarwne folie ochronne PPF najwyższej klasy. Zadbamy o każdy detal w ogrzewanej pracowni.
            </p>

            <div style="display: flex; gap: 1rem; flex-wrap: wrap; margin-bottom: 2.5rem;">
                <a href="#wycena" class="hg-btn hg-btn-blue">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
                    Skonfiguruj Wycenę Online
                </a>
                <a href="#paleta" class="hg-btn hg-btn-outline">
                    Odkryj Paletę Kolorów
                </a>
            </div>

            <div style="display: flex; gap: 2.5rem; padding-top: 1.5rem; border-top: 1px solid var(--border-light);">
                <div>
                    <div style="font-size: 2rem; font-weight: 800; color: var(--color-blue);">500+</div>
                    <div style="font-size: 0.85rem; color: var(--text-muted); font-weight: 700;">Odmienionych Aut</div>
                </div>
                <div>
                    <div style="font-size: 2rem; font-weight: 800; color: var(--color-teal);">10 Lat</div>
                    <div style="font-size: 0.85rem; color: var(--text-muted); font-weight: 700;">Gwarancji PPF</div>
                </div>
                <div>
                    <div style="font-size: 2rem; font-weight: 800; color: var(--color-orange);">40+</div>
                    <div style="font-size: 0.85rem; color: var(--text-muted); font-weight: 700;">Aut dla DHL & Flot</div>
                </div>
            </div>
        </div>

        <div>
            <!-- Hero Interactive Before/After Card -->
            <div class="hg-card" style="padding: 1rem; border-color: var(--color-blue);" id="przed-po">
                <div style="text-align: center; margin-bottom: 0.75rem; font-weight: 800; font-size: 0.85rem; color: var(--color-blue);">
                    ✦ PRZESUŃ SUWAK: LAKIER FABRYCZNY VS SATYNA BLACK
                </div>
                
                <div class="hg-slider-box" id="hgBeforeAfterSlider">
                    <div class="hg-slider-img hg-slider-before" style="background-image: url('https://images.unsplash.com/photo-1617814076367-b759c7d7e738?auto=format&fit=crop&w=1200&q=80');"></div>
                    <div class="hg-slider-img hg-slider-after" style="background-image: url('https://images.unsplash.com/photo-1618843479313-40f8afb4b4d8?auto=format&fit=crop&w=1200&q=80');"></div>
                    <div class="hg-slider-handle">↔</div>
                    <div class="hg-slider-badge left">Przed (Lakier)</div>
                    <div class="hg-slider-badge right">Po (Satyna)</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 2: PALETA KOLORÓW & TYPY FOLII (PALETTE SHOWCASE) -->
<section id="paleta" class="sec-colors">
    <div class="hg-container">
        <div style="text-align: center; margin-bottom: 3.5rem;">
            <div class="hg-badge purple">WYKOŃCZENIA FOLII</div>
            <h2 class="hg-section-title">Paleta <span class="purple">Kolorów & Tekstur</span></h2>
            <p style="color: var(--text-muted); font-size: 1.1rem; max-width: 600px; margin: 0 auto;">
                Pracujemy na certyfikowanych foliach 3M Wrap, Avery Dennison oraz XPEL. Wybierz swój unikalny styl.
            </p>
        </div>

        <div class="hg-grid hg-grid-3">
            <div class="hg-color-card" style="background: linear-gradient(135deg, #1e3a8a 0%, #2563eb 100%);">
                <div>
                    <span style="font-size: 0.75rem; font-weight: 800; text-transform: uppercase; background: rgba(255,255,255,0.2); padding: 2px 8px; border-radius: 4px;">Avery Dennison</span>
                    <h3 style="font-size: 1.3rem; font-weight: 800; margin-top: 0.5rem;">Sapphire Blue Gloss</h3>
                </div>
                <div style="font-size: 0.85rem; opacity: 0.9;">Głęboki, szlachetny błękit w wysokim połysku.</div>
            </div>

            <div class="hg-color-card" style="background: linear-gradient(135deg, #0f172a 0%, #334155 100%);">
                <div>
                    <span style="font-size: 0.75rem; font-weight: 800; text-transform: uppercase; background: rgba(255,255,255,0.2); padding: 2px 8px; border-radius: 4px;">3M 2080</span>
                    <h3 style="font-size: 1.3rem; font-weight: 800; margin-top: 0.5rem;">Czarna Satyna Black</h3>
                </div>
                <div style="font-size: 0.85rem; opacity: 0.9;">Aksamitna, matowa elegancja dla aut luksusowych.</div>
            </div>

            <div class="hg-color-card" style="background: linear-gradient(135deg, #064e3b 0%, #059669 100%);">
                <div>
                    <span style="font-size: 0.75rem; font-weight: 800; text-transform: uppercase; background: rgba(255,255,255,0.2); padding: 2px 8px; border-radius: 4px;">Avery Dennison</span>
                    <h3 style="font-size: 1.3rem; font-weight: 800; margin-top: 0.5rem;">Emerald Matte Green</h3>
                </div>
                <div style="font-size: 0.85rem; opacity: 0.9;">Rasowa, wojskowa lub wyścigowa zieleń w macie.</div>
            </div>

            <div class="hg-color-card" style="background: linear-gradient(135deg, #581c87 0%, #7c3aed 100%);">
                <div>
                    <span style="font-size: 0.75rem; font-weight: 800; text-transform: uppercase; background: rgba(255,255,255,0.2); padding: 2px 8px; border-radius: 4px;">KPMF Series</span>
                    <h3 style="font-size: 1.3rem; font-weight: 800; margin-top: 0.5rem;">Velvet Purple Metalic</h3>
                </div>
                <div style="font-size: 0.85rem; opacity: 0.9;">Ekstrawagancki fiolet o bogatej strukturze ziarna.</div>
            </div>

            <div class="hg-color-card" style="background: linear-gradient(135deg, #be123c 0%, #ff0076 50%, #2563eb 100%);">
                <div>
                    <span style="font-size: 0.75rem; font-weight: 800; text-transform: uppercase; background: rgba(255,255,255,0.2); padding: 2px 8px; border-radius: 4px;">Hexis Skintac</span>
                    <h3 style="font-size: 1.3rem; font-weight: 800; margin-top: 0.5rem;">Kameleon Iridescent</h3>
                </div>
                <div style="font-size: 0.85rem; opacity: 0.9;">Przejścia tonalne zmieniające się w słońcu.</div>
            </div>

            <div class="hg-color-card" style="background: repeating-linear-gradient(45deg, #111, #111 4px, #222 4px, #333 8px);">
                <div>
                    <span style="font-size: 0.75rem; font-weight: 800; text-transform: uppercase; background: rgba(255,255,255,0.2); padding: 2px 8px; border-radius: 4px;">3M Carbon</span>
                    <h3 style="font-size: 1.3rem; font-weight: 800; margin-top: 0.5rem;">Carbon 3D / Monza</h3>
                </div>
                <div style="font-size: 0.85rem; opacity: 0.9;">Struktura prawdziwego włókna węglowego na dach/maskę.</div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 3: USŁUGI (DISTINCT COLOR THEMES) -->
<section id="uslugi" class="sec-services">
    <div class="hg-container">
        <div style="text-align: center; margin-bottom: 3.5rem;">
            <div class="hg-badge teal">OFERTA STUDIO</div>
            <h2 class="hg-section-title">Nasz Sektor <span class="teal">Usługowy</span></h2>
        </div>

        <div class="hg-grid hg-grid-4">
            <div class="hg-card theme-blue">
                <div style="width: 44px; height: 44px; background: var(--color-blue-subtle); border-radius: var(--radius-sm); display: flex; align-items: center; justify-content: center; margin-bottom: 1.25rem; color: var(--color-blue);">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                </div>
                <h3 style="font-size: 1.2rem; font-weight: 800; color: var(--text-dark); margin-bottom: 0.75rem;">Zmiana Koloru Auta</h3>
                <p style="color: var(--text-muted); font-size: 0.95rem; margin-bottom: 1.25rem;">
                    Całościowe oklejanie karoserii foliami wylewanymi (Mat, Połysk, Satyna, Carbon) z profesjonalnym demontażem klamek, lamp i zderzaków.
                </p>
                <a href="#wycena" style="color: var(--color-blue); font-weight: 800; font-size: 0.85rem;">Wylicz wycenę &rarr;</a>
            </div>

            <div class="hg-card theme-teal">
                <div style="width: 44px; height: 44px; background: var(--color-teal-subtle); border-radius: var(--radius-sm); display: flex; align-items: center; justify-content: center; margin-bottom: 1.25rem; color: var(--color-teal);">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1v7z"/></svg>
                </div>
                <h3 style="font-size: 1.2rem; font-weight: 800; color: var(--text-dark); margin-bottom: 0.75rem;">Bezbarwne PPF</h3>
                <p style="color: var(--text-muted); font-size: 0.95rem; margin-bottom: 1.25rem;">
                    Niewidzialna folia ochronna poliuretanowa z samoregeneracją. 100% ochrony przed odpryskami kamieni i zarysowaniami.
                </p>
                <a href="#wycena" style="color: var(--color-teal); font-weight: 800; font-size: 0.85rem;">Pakiety PPF &rarr;</a>
            </div>

            <div class="hg-card theme-orange">
                <div style="width: 44px; height: 44px; background: var(--color-orange-subtle); border-radius: var(--radius-sm); display: flex; align-items: center; justify-content: center; margin-bottom: 1.25rem; color: var(--color-orange);">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="1" y="3" width="15" height="13"/><polygon points="16 8 20 8 23 11 23 16 16 16 16 8"/><circle cx="5.5" cy="18.5" r="2.5"/><circle cx="18.5" cy="18.5" r="2.5"/></svg>
                </div>
                <h3 style="font-size: 1.2rem; font-weight: 800; color: var(--text-dark); margin-bottom: 0.75rem;">Reklama & Floty</h3>
                <p style="color: var(--text-muted); font-size: 0.95rem; margin-bottom: 1.25rem;">
                    Mobilna reklama wizualna dla firm. Własny park maszyn drukujących i tnących. Braliśmy udział w oklejaniu floty DHL (40 aut) oraz Warty.
                </p>
                <a href="#wycena" style="color: var(--color-orange); font-weight: 800; font-size: 0.85rem;">Branding Floty &rarr;</a>
            </div>

            <div class="hg-card theme-purple">
                <div style="width: 44px; height: 44px; background: var(--color-purple-subtle); border-radius: var(--radius-sm); display: flex; align-items: center; justify-content: center; margin-bottom: 1.25rem; color: var(--color-purple);">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20"/><path d="M2 12h20"/></svg>
                </div>
                <h3 style="font-size: 1.2rem; font-weight: 800; color: var(--text-dark); margin-bottom: 0.75rem;">Detailing & Szyby</h3>
                <p style="color: var(--text-muted); font-size: 0.95rem; margin-bottom: 1.25rem;">
                    Naprawy blacharsko-lakiernicze przed oklejeniem, przyciemnianie szyb, dechroming, oklejanie wnętrz i konserwacja folii.
                </p>
                <a href="#wycena" style="color: var(--color-purple); font-weight: 800; font-size: 0.85rem;">Dodatki &rarr;</a>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 4: SZYBKA WYCENA & KONTAKT -->
<section id="wycena" class="sec-contact">
    <div class="hg-container">
        <div style="text-align: center; margin-bottom: 3.5rem;">
            <div class="hg-badge orange">KONTAKT & BEZPŁATNA WYCENA</div>
            <h2 class="hg-section-title" style="color:#fff;">Napisz Do <span class="orange">Naszego Studio</span></h2>
        </div>

        <div class="hg-grid hg-grid-2">
            <!-- Form -->
            <div class="hg-card" style="background: #1e293b; border-color: rgba(255,255,255,0.1); color:#fff;" id="hgQuoteCalculator">
                <h3 style="font-size: 1.3rem; font-weight: 800; color: #fff; margin-bottom: 1.25rem;">Bezpłatna Wycena Online</h3>

                <form id="hgCalcForm">
                    <div style="margin-bottom: 1rem;">
                        <label style="display: block; font-size: 0.8rem; color: #94a3b8; margin-bottom: 0.4rem; font-weight: 700; text-transform: uppercase;">Wybierz Zakres Pracy:</label>
                        <select id="calcServiceSelect" style="width: 100%; background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.15); padding: 0.85rem; border-radius: var(--radius-sm); color: #fff; cursor: pointer;">
                            <option value="Zmiana Koloru Auta" style="background:#0f172a;">Całościowa Zmiana Koloru Auta</option>
                            <option value="Bezbarwna Folia PPF" style="background:#0f172a;">Bezbarwna Folia Ochronna PPF</option>
                            <option value="Oklejanie Reklamowe" style="background:#0f172a;">Reklama Mobilna & Floty</option>
                        </select>
                    </div>

                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; margin-bottom: 1rem;">
                        <input type="text" id="calcName" placeholder="Imię i Nazwisko" required style="background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.15); padding: 0.85rem; border-radius: var(--radius-sm); color: #fff;">
                        <input type="tel" id="calcPhone" placeholder="Numer Telefonu *" required style="background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.15); padding: 0.85rem; border-radius: var(--radius-sm); color: #fff;">
                    </div>

                    <textarea id="calcNotes" placeholder="Model auta (np. Audi A7 2022)..." rows="3" style="width: 100%; background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.15); padding: 0.85rem; border-radius: var(--radius-sm); color: #fff; margin-bottom: 1.25rem;"></textarea>

                    <button type="submit" class="hg-btn hg-btn-orange" style="width: 100%;">
                        Wyślij Specyfikację &rarr;
                    </button>
                </form>

                <div id="calcResponseMsg" style="display: none;"></div>
            </div>

            <!-- Studio Info -->
            <div class="hg-card" style="background: #1e293b; border-color: rgba(255,255,255,0.1); color:#fff; display: flex; flex-direction: column; justify-content: space-between;">
                <div>
                    <h3 style="font-size: 1.3rem; font-weight: 800; color: #fff; margin-bottom: 1.5rem;">HI-GLOSS DESIGN</h3>

                    <p style="color: #94a3b8; margin-bottom: 1rem; font-size: 0.95rem;">
                        📍 <strong>Adres Studio:</strong> ul. Podmiejska 4, 72-006 Mierzyn / Szczecin
                    </p>
                    <p style="color: #94a3b8; margin-bottom: 1rem; font-size: 0.95rem;">
                        📞 <strong>Telefon:</strong> <a href="tel:+48605088065" style="color: var(--color-orange);">605 088 065</a> / <a href="tel:+48664129023" style="color: var(--color-orange);">664 129 023</a>
                    </p>
                    <p style="color: #94a3b8; margin-bottom: 1.5rem; font-size: 0.95rem;">
                        ✉️ <strong>E-mail Biuro:</strong> <a href="mailto:biuro@hi-glossdesign.pl" style="color: var(--color-orange);">biuro@hi-glossdesign.pl</a>
                    </p>
                </div>

                <a href="https://maps.google.com/?q=Podmiejska+4+Mierzyn" target="_blank" rel="noopener" class="hg-btn hg-btn-outline" style="width: 100%; border-color: rgba(255,255,255,0.2); color:#fff; background:transparent;">
                    🗺️ Otwórz Nawigację Google Maps
                </a>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
