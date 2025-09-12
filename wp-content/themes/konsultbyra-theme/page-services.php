<?php
/*
Template Name: Services
*/
get_header(); ?>

<main id="main" class="site-main">
    <section class="hero">
        <div class="container">
            <h1>Våra tjänster</h1>
            <p>Vi erbjuder heltäckande datalösningar som hjälper er att samla in, analysera och använda data för att växa</p>
        </div>
    </section>

    <section style="padding: 6rem 0; background: var(--white);">
        <div class="container">
            <div class="services-grid">
                <div class="service-card">
                    <h3>Datainsamling (GTM)</h3>
                    <p><strong>Vi hjälper dig sätta upp korrekt mätning</strong></p>
                    <p>Google Tag Manager-implementation som fångar all viktig data från din webbplats och appar. Vi säkerställer att ni får kvalitetsdata från dag ett.</p>
                    <ul style="margin-top: 1rem; padding-left: 1.5rem; color: var(--text-light);">
                        <li>GTM-konfiguration och setup</li>
                        <li>Event tracking och konverteringsmätning</li>
                        <li>E-commerce tracking</li>
                        <li>Custom dimensions och metrics</li>
                    </ul>
                </div>

                <div class="service-card">
                    <h3>Analys & Visualisering (GA4 + Looker)</h3>
                    <p><strong>Vi gör datan begriplig med dashboards</strong></p>
                    <p>Kraftfulla dashboards i Google Looker som förvandlar rådata till actionable insights. Ni får tydliga visualiseringar som driver bättre beslut.</p>
                    <ul style="margin-top: 1rem; padding-left: 1.5rem; color: var(--text-light);">
                        <li>GA4 advanced configuration</li>
                        <li>Custom Looker dashboards</li>
                        <li>Automated reporting</li>
                        <li>Data modeling och transformation</li>
                    </ul>
                </div>

                <div class="service-card">
                    <h3>Marketing Automation</h3>
                    <p><strong>Vi bygger flöden som når rätt kund vid rätt tidpunkt</strong></p>
                    <p>Intelligenta automatiseringar som personaliserar kundresan. AI-driven segmentering och messaging som ökar engagement och konverteringar.</p>
                    <ul style="margin-top: 1rem; padding-left: 1.5rem; color: var(--text-light);">
                        <li>Email marketing automation</li>
                        <li>Lead nurturing workflows</li>
                        <li>Behavioral triggers</li>
                        <li>AI-baserad personalisering</li>
                    </ul>
                </div>

                <div class="service-card">
                    <h3>CRM</h3>
                    <p><strong>Vi strukturerar kundresan och gör sälj/support enklare</strong></p>
                    <p>CRM-system som samlar all kunddata på ett ställe. Integration med era verktyg för en sömlös kundupplevelse och effektivare säljprocesser.</p>
                    <ul style="margin-top: 1rem; padding-left: 1.5rem; color: var(--text-light);">
                        <li>CRM implementation och migration</li>
                        <li>Sales pipeline optimization</li>
                        <li>Customer journey mapping</li>
                        <li>Integration med andra system</li>
                    </ul>
                </div>

                <div class="service-card">
                    <h3>E-handel</h3>
                    <p><strong>Vi hjälper dig mäta och optimera konverteringen i din webshop</strong></p>
                    <p>E-handelslösningar som fokuserar på konvertering. Från Shopify-optimering till avancerad produktanalys som ökar er försäljning.</p>
                    <ul style="margin-top: 1rem; padding-left: 1.5rem; color: var(--text-light);">
                        <li>Shopify Plus implementation</li>
                        <li>Conversion rate optimization</li>
                        <li>Product performance analysis</li>
                        <li>Customer lifetime value tracking</li>
                    </ul>
                </div>

                <div class="service-card">
                    <h3>Annonssystem</h3>
                    <p><strong>Vi sätter upp kampanjer och låter AI optimera dem</strong></p>
                    <p>AI-driven annonsering på Google, Facebook och andra plattformar. Automatisk budoptimering och targeting som maximerar er ROAS.</p>
                    <ul style="margin-top: 1rem; padding-left: 1.5rem; color: var(--text-light);">
                        <li>Google Ads och Facebook Ads setup</li>
                        <li>AI-baserad budoptimering</li>
                        <li>Advanced audience targeting</li>
                        <li>Cross-platform attribution</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="value-prop">
        <div class="container">
            <h2>Redo att komma igång?</h2>
            <p>Låt oss hjälpa er att bli mer datadrivna. Boka ett kostnadsfritt konsultmöte redan idag.</p>
            <a href="<?php echo home_url('/kontakt'); ?>" class="cta-button" style="background: var(--white); color: var(--dark-blue); margin-top: 2rem;">Boka ett möte</a>
        </div>
    </section>
</main>

<?php get_footer(); ?>