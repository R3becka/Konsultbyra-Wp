<?php
/*
Template Name: AI Approach
*/
get_header(); ?>

<main id="main" class="site-main">
    <section class="hero">
        <div class="container">
            <h1>Vår AI-approach</h1>
            <p>Så använder vi artificiell intelligens för att ge er konkurrensfördelar redan idag – och förbereder er för framtiden</p>
        </div>
    </section>

    <!-- Current vs Future -->
    <section style="padding: 6rem 0; background: var(--gray-100);">
        <div class="container">
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 4rem; margin-bottom: 4rem;">
                <div>
                    <h2 style="color: var(--primary-blue); margin-bottom: 2rem;">AI idag (2024)</h2>
                    <div style="background: var(--white); padding: 2rem; border-radius: 12px; box-shadow: 0 5px 15px rgba(0,0,0,0.08);">
                        <h3 style="margin-bottom: 1rem;">Vad vi använder nu:</h3>
                        <ul style="line-height: 1.8; color: var(--text-light);">
                            <li><strong>Prediktiv analys</strong> - Förutsäg kundbeteende och trends</li>
                            <li><strong>Intelligent segmentering</strong> - AI väljer optimala målgrupper</li>
                            <li><strong>Automatisk budoptimering</strong> - AI justerar era annonsbud i realtid</li>
                            <li><strong>Content personalisering</strong> - Dynamiskt innehåll för varje besökare</li>
                            <li><strong>Chatbots & support</strong> - AI-driven kundservice 24/7</li>
                            <li><strong>Fraud detection</strong> - Automatisk upptäckt av suspekt aktivitet</li>
                        </ul>
                    </div>
                </div>
                <div>
                    <h2 style="color: var(--secondary-blue); margin-bottom: 2rem;">AI imorgon (2025+)</h2>
                    <div style="background: var(--white); padding: 2rem; border-radius: 12px; box-shadow: 0 5px 15px rgba(0,0,0,0.08);">
                        <h3 style="margin-bottom: 1rem;">Vad som kommer:</h3>
                        <ul style="line-height: 1.8; color: var(--text-light);">
                            <li><strong>Autonomous marketing</strong> - AI sköter hela kampanjer självständigt</li>
                            <li><strong>Real-time personalization</strong> - Omedelbar anpassning av hela upplevelsen</li>
                            <li><strong>Voice & visual search</strong> - Multimodal sökupplevelser</li>
                            <li><strong>Predictive inventory</strong> - AI förutsäger och beställer lager</li>
                            <li><strong>Dynamic pricing</strong> - Priser som justeras automatiskt</li>
                            <li><strong>AI-generated content</strong> - Automatiskt skapad text, bilder och video</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Timeline -->
    <section class="timeline" style="background: var(--white);">
        <div class="container">
            <h2 style="text-align: center; margin-bottom: 4rem; color: var(--text-dark);">AI-evolutionen: En 30-månaders roadmap</h2>
            
            <div class="timeline-container">
                <div class="timeline-item">
                    <div class="timeline-content">
                        <div class="timeline-date">6 månader</div>
                        <h3>Grundläggande AI-implementation</h3>
                        <p>Vi implementerar AI-baserad analys och grundläggande automatisering. Era data börjar ge prediktiva insights och ni får automatiska rekommendationer för optimering.</p>
                        <ul style="margin-top: 1rem; color: var(--text-light);">
                            <li>AI-driven audience segmentation</li>
                            <li>Automatisk A/B-testning</li>
                            <li>Prediktiva modeller för kundbeteende</li>
                            <li>Smart bid management för annonser</li>
                        </ul>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-content">
                        <div class="timeline-date">18 månader</div>
                        <h3>Avancerad AI-integration</h3>
                        <p>AI blir en naturlig del av era processer. Personalisering på djupet, intelligent automation och AI som proaktivt föreslår strategiska förändringar.</p>
                        <ul style="margin-top: 1rem; color: var(--text-light);">
                            <li>Real-time personalization på hela sajten</li>
                            <li>AI-genererade produktrekommendationer</li>
                            <li>Automatiserade email-kampanjer med AI-content</li>
                            <li>Predictive customer lifetime value</li>
                        </ul>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-content">
                        <div class="timeline-date">30 månader</div>
                        <h3>AI-first organisation</h3>
                        <p>Er organisation är fullständigt AI-driven. Autonomous systems hanterar rutinuppgifter medan AI ger strategiska insights som driver innovation och tillväxt.</p>
                        <ul style="margin-top: 1rem; color: var(--text-light);">
                            <li>Fully autonomous marketing campaigns</li>
                            <li>AI-powered business intelligence</li>
                            <li>Intelligent supply chain management</li>
                            <li>AI-assisterad produktutveckling</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Start Now -->
    <section style="padding: 6rem 0; background: var(--primary-blue); color: var(--white);">
        <div class="container" style="text-align: center;">
            <h2 style="margin-bottom: 2rem;">Varför börja med AI redan nu?</h2>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 2rem; margin-top: 3rem;">
                <div>
                    <h3 style="color: var(--white); margin-bottom: 1rem;">Konkurrensfördelar</h3>
                    <p>Företag som implementerar AI tidigt får bestående fördelar. Vänta inte tills alla andra har kommit ikapp.</p>
                </div>
                <div>
                    <h3 style="color: var(--white); margin-bottom: 1rem;">Dataförsprång</h3>
                    <p>Ju tidigare ni börjar samla kvalitetsdata, desto bättre blir era AI-modeller. Data från idag är guld imorgon.</p>
                </div>
                <div>
                    <h3 style="color: var(--white); margin-bottom: 1rem;">Lärande organisation</h3>
                    <p>Era team behöver tid att lära sig arbeta med AI. Börja bygga den kompetensen redan idag.</p>
                </div>
            </div>
            <a href="<?php echo home_url('/kontakt'); ?>" class="cta-button" style="background: var(--white); color: var(--primary-blue); margin-top: 3rem;">Starta er AI-resa idag</a>
        </div>
    </section>
</main>

<?php get_footer(); ?>