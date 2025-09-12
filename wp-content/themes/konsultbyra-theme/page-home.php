<?php
/*
Template Name: Homepage
*/
get_header(); ?>

<main id="main" class="site-main">
    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <h1>Vi hjälper företag att bli datadrivna – med AI som assistent</h1>
            <p>Genom smart datainsamling, kraftfull analys och AI-driven automatisering hjälper vi er att fatta bättre beslut och växa snabbare.</p>
            <a href="<?php echo home_url('/tjanster'); ?>" class="cta-button">Läs mer om våra tjänster</a>
        </div>
    </section>

    <!-- Approach Section -->
    <section class="approach">
        <div class="container">
            <h2>Vårt tillvägagångssätt</h2>
            <div class="approach-grid">
                <div class="approach-card">
                    <h3>Datadrivet</h3>
                    <p>Vi bygger beslut på faktisk data, inte gissningar. Varje rekommendation backas upp av solid analys och mätbara resultat.</p>
                </div>
                <div class="approach-card">
                    <h3>AI-först</h3>
                    <p>Artificiell intelligens är inte framtiden – det är nuet. Vi integrerar AI i alla processer för att maximera effektivitet och noggrannhet.</p>
                </div>
                <div class="approach-card">
                    <h3>Mätbara resultat</h3>
                    <p>Allt vi gör kan mätas och optimeras. Vi levererar konkreta förbättringar som syns i er bottom line.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Tech Stack -->
    <section class="tech-stack">
        <div class="container">
            <h2>Teknologier vi använder</h2>
            <div class="tech-icons">
                <div class="tech-icon">
                    <div style="width: 50px; height: 50px; background: #4285f4; margin: 0 auto 1rem; border-radius: 8px; display: flex; align-items: center; justify-content: center; color: white; font-weight: bold;">GTM</div>
                    <p>Google Tag Manager</p>
                </div>
                <div class="tech-icon">
                    <div style="width: 50px; height: 50px; background: #ff6f00; margin: 0 auto 1rem; border-radius: 8px; display: flex; align-items: center; justify-content: center; color: white; font-weight: bold;">GA4</div>
                    <p>Google Analytics 4</p>
                </div>
                <div class="tech-icon">
                    <div style="width: 50px; height: 50px; background: #4285f4; margin: 0 auto 1rem; border-radius: 8px; display: flex; align-items: center; justify-content: center; color: white; font-weight: bold;">LKR</div>
                    <p>Google Looker</p>
                </div>
                <div class="tech-icon">
                    <div style="width: 50px; height: 50px; background: #0056b3; margin: 0 auto 1rem; border-radius: 8px; display: flex; align-items: center; justify-content: center; color: white; font-weight: bold;">CRM</div>
                    <p>CRM Systems</p>
                </div>
                <div class="tech-icon">
                    <div style="width: 50px; height: 50px; background: #96bf47; margin: 0 auto 1rem; border-radius: 8px; display: flex; align-items: center; justify-content: center; color: white; font-weight: bold;">SHP</div>
                    <p>Shopify</p>
                </div>
                <div class="tech-icon">
                    <div style="width: 50px; height: 50px; background: #1877f2; margin: 0 auto 1rem; border-radius: 8px; display: flex; align-items: center; justify-content: center; color: white; font-weight: bold;">ADS</div>
                    <p>Advertising Platforms</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Value Proposition -->
    <section class="value-prop">
        <div class="container">
            <h2>Så hjälper vi dig samla in, analysera och använda din data för att växa</h2>
            <p>Vi tar hand om hela kedjan – från datainsamling till actionable insights som driver tillväxt</p>
        </div>
    </section>
</main>

<?php get_footer(); ?>