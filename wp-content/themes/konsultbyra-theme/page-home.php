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
            <a href="<?php echo home_url('/?page_id=13'); ?>" class="cta-button">Läs mer om våra tjänster</a>
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
                <!-- Row 1 -->
                <div class="tech-icon">
                    <div class="tech-badge analytics">ANALYTICS</div>
                    <p>Google Tag<br>Manager</p>
                </div>
                <div class="tech-icon">
                    <div class="tech-badge platforms">PLATFORMS</div>
                    <p>Shopify</p>
                </div>
                <div class="tech-icon">
                    <div class="tech-badge ai-automation">AI AUTOMATION</div>
                    <p>Claude Code<br>& API</p>
                </div>
                <div class="tech-icon">
                    <div class="tech-badge marketing">MARKETING</div>
                    <p>Advertising<br>Platforms</p>
                </div>
                <div class="tech-icon">
                    <div class="tech-badge analytics">ANALYTICS</div>
                    <p>Google<br>Analytics 4</p>
                </div>
                <div class="tech-icon">
                    <div class="tech-badge platforms">PLATFORMS</div>
                    <p>HubSpot<br>AI Tools</p>
                </div>
                <div class="tech-icon">
                    <div class="tech-badge ai-automation">AI AUTOMATION</div>
                    <p>ChatGPT<br>& GPT API</p>
                </div>
                <div class="tech-icon">
                    <div class="tech-badge marketing">MARKETING</div>
                    <p>Midjourney AI<br>Image Generation</p>
                </div>

                <!-- Row 2 -->
                <div class="tech-icon">
                    <div class="tech-badge analytics">ANALYTICS</div>
                    <p>Google Looker</p>
                </div>
                <div class="tech-icon">
                    <div class="tech-badge platforms">PLATFORMS</div>
                    <p>CRM Systems</p>
                </div>
                <div class="tech-icon">
                    <div class="tech-badge ai-automation">AI AUTOMATION</div>
                    <p>Microsoft<br>Copilot</p>
                </div>
                <div class="tech-icon">
                    <div class="tech-badge marketing">MARKETING</div>
                    <p>Canva AI<br>Design Tools</p>
                </div>
                <div class="tech-icon">
                    <div class="tech-badge analytics">ANALYTICS</div>
                    <p>Tableau AI<br>Analytics</p>
                </div>
                <div class="tech-icon">
                    <div class="tech-badge ai-automation">AI AUTOMATION</div>
                    <p>Zapier AI<br>Automation</p>
                </div>
                <div class="tech-icon">
                    <div class="tech-badge analytics">ANALYTICS</div>
                    <p>Microsoft<br>Power BI AI</p>
                </div>
                <div class="tech-icon">
                    <div class="tech-badge marketing">MARKETING</div>
                    <p>Copy.ai AI<br>Copywriting</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Value Proposition -->
    <section class="value-prop">
        <div class="container">
            <h2>Så hjälper vi dig samla in, analysera och använda din data för att växa</h2>
            <p>De flesta företag använder sin data för att rapportera det som redan har hänt. Men data kan vara så mycket mer – den kan visa vägen framåt.</p>

            <p>Vi hjälper er att strukturera, effektivisera och förädla er data med hjälp av AI-lösningar som faktiskt driver beslut, effektivitet och tillväxt.</p>

            <p>När ni använder er data som en intelligent motor för utveckling, istället för bara en backspegel, och låter AI upptäcka mönster som människor lätt kan missa.
Öppnas helt nya möjligheter för er verksamhet.</p>
        </div>
    </section>
</main>

<?php get_footer(); ?>