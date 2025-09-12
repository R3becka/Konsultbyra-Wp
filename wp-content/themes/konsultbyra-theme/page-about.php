<?php
/*
Template Name: About
*/
get_header(); ?>

<main id="main" class="site-main">
    <section class="hero">
        <div class="container">
            <h1>Om DataAI Konsult</h1>
            <p>Vi är specialister på att göra data användbart och AI tillgängligt för svenska företag</p>
        </div>
    </section>

    <!-- Company Story -->
    <section style="padding: 6rem 0; background: var(--white);">
        <div class="container">
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 4rem; align-items: center; margin-bottom: 4rem;">
                <div>
                    <h2 style="color: var(--primary-blue); margin-bottom: 2rem; font-size: 2.5rem;">Vår story</h2>
                    <p style="font-size: 1.1rem; line-height: 1.7; margin-bottom: 1.5rem; color: var(--text-dark);">
                        DataAI Konsult grundades 2022 av ett team erfarna data scientists och marketing technologists som såg ett gap på marknaden. Svenska företag hade tillgång till fantastisk data men saknade verktyg och kunskap för att använda den strategiskt.
                    </p>
                    <p style="font-size: 1.1rem; line-height: 1.7; margin-bottom: 1.5rem; color: var(--text-dark);">
                        Vi insåg att AI inte bara var en teknik för framtiden – det var något som kunde skapa omedelbar value för företag redan idag. Men bara om det implementerades rätt.
                    </p>
                    <p style="font-size: 1.1rem; line-height: 1.7; color: var(--text-dark);">
                        Sedan dess har vi hjälpt över 50 svenska företag att förvandla sin data till konkurrensfördelar och använda AI för att automatisera och optimera sina processer.
                    </p>
                </div>
                <div style="background: var(--light-blue); padding: 3rem; border-radius: 12px; text-align: center;">
                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 2rem;">
                        <div>
                            <div style="font-size: 3rem; font-weight: bold; color: var(--primary-blue); margin-bottom: 0.5rem;">50+</div>
                            <div style="color: var(--text-dark);">Nöjda kunder</div>
                        </div>
                        <div>
                            <div style="font-size: 3rem; font-weight: bold; color: var(--primary-blue); margin-bottom: 0.5rem;">2M+</div>
                            <div style="color: var(--text-dark);">Datapunkter analyserade</div>
                        </div>
                        <div>
                            <div style="font-size: 3rem; font-weight: bold; color: var(--primary-blue); margin-bottom: 0.5rem;">180%</div>
                            <div style="color: var(--text-dark);">Avg ROI increase</div>
                        </div>
                        <div>
                            <div style="font-size: 3rem; font-weight: bold; color: var(--primary-blue); margin-bottom: 0.5rem;">24/7</div>
                            <div style="color: var(--text-dark);">AI-system igång</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section style="padding: 6rem 0; background: var(--gray-100);">
        <div class="container">
            <h2 style="text-align: center; margin-bottom: 4rem; color: var(--text-dark); font-size: 2.5rem;">Vårt team</h2>
            
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 3rem;">
                <!-- Team Member 1 -->
                <div style="background: var(--white); border-radius: 12px; padding: 2rem; text-align: center; box-shadow: 0 5px 15px rgba(0,0,0,0.08);">
                    <div style="width: 100px; height: 100px; background: var(--primary-blue); border-radius: 50%; margin: 0 auto 1.5rem; display: flex; align-items: center; justify-content: center; color: white; font-size: 2rem; font-weight: bold;">AL</div>
                    <h3 style="color: var(--primary-blue); margin-bottom: 0.5rem;">Anna Lindberg</h3>
                    <p style="color: var(--secondary-blue); font-weight: 600; margin-bottom: 1rem;">Lead Data Scientist & AI Strategist</p>
                    <p style="color: var(--text-light); line-height: 1.6; margin-bottom: 1.5rem;">
                        8 års erfarenhet från Google och Spotify. Expert på machine learning, predictive analytics och AI-implementation i stor skala.
                    </p>
                    <div style="color: var(--text-light); font-size: 0.9rem;">
                        <strong>Expertområden:</strong> AI/ML, Python, TensorFlow, Advanced Analytics
                    </div>
                </div>

                <!-- Team Member 2 -->
                <div style="background: var(--white); border-radius: 12px; padding: 2rem; text-align: center; box-shadow: 0 5px 15px rgba(0,0,0,0.08);">
                    <div style="width: 100px; height: 100px; background: var(--secondary-blue); border-radius: 50%; margin: 0 auto 1.5rem; display: flex; align-items: center; justify-content: center; color: white; font-size: 2rem; font-weight: bold;">MK</div>
                    <h3 style="color: var(--primary-blue); margin-bottom: 0.5rem;">Marcus Karlsson</h3>
                    <p style="color: var(--secondary-blue); font-weight: 600; margin-bottom: 1rem;">Senior Integration Specialist</p>
                    <p style="color: var(--text-light); line-height: 1.6; margin-bottom: 1.5rem;">
                        Teknisk lead med fokus på marketing technology stack. Har byggt integrationslösningar för 100+ företag.
                    </p>
                    <div style="color: var(--text-light); font-size: 0.9rem;">
                        <strong>Expertområden:</strong> GTM, GA4, CRM, Marketing Automation
                    </div>
                </div>

                <!-- Team Member 3 -->
                <div style="background: var(--white); border-radius: 12px; padding: 2rem; text-align: center; box-shadow: 0 5px 15px rgba(0,0,0,0.08);">
                    <div style="width: 100px; height: 100px; background: var(--accent-blue); border-radius: 50%; margin: 0 auto 1.5rem; display: flex; align-items: center; justify-content: center; color: white; font-size: 2rem; font-weight: bold;">SP</div>
                    <h3 style="color: var(--primary-blue); margin-bottom: 0.5rem;">Sofia Pettersson</h3>
                    <p style="color: var(--secondary-blue); font-weight: 600; margin-bottom: 1rem;">Data Visualization Expert</p>
                    <p style="color: var(--text-light); line-height: 1.6; margin-bottom: 1.5rem;">
                        Förvandlar komplex data till tydliga insights. Expert på Looker, Tableau och custom dashboard-lösningar.
                    </p>
                    <div style="color: var(--text-light); font-size: 0.9rem;">
                        <strong>Expertområden:</strong> Looker, Data Viz, Dashboard Design, BI
                    </div>
                </div>

                <!-- Team Member 4 -->
                <div style="background: var(--white); border-radius: 12px; padding: 2rem; text-align: center; box-shadow: 0 5px 15px rgba(0,0,0,0.08);">
                    <div style="width: 100px; height: 100px; background: var(--dark-blue); border-radius: 50%; margin: 0 auto 1.5rem; display: flex; align-items: center; justify-content: center; color: white; font-size: 2rem; font-weight: bold;">JH</div>
                    <h3 style="color: var(--primary-blue); margin-bottom: 0.5rem;">Johan Hansson</h3>
                    <p style="color: var(--secondary-blue); font-weight: 600; margin-bottom: 1rem;">E-commerce & Conversion Specialist</p>
                    <p style="color: var(--text-light); line-height: 1.6; margin-bottom: 1.5rem;">
                        Shopify Plus expert som optimerat över 200 webshops. Specialiserad på conversion rate optimization och AI-driven personalisering.
                    </p>
                    <div style="color: var(--text-light); font-size: 0.9rem;">
                        <strong>Expertområden:</strong> Shopify Plus, CRO, A/B-testing, E-commerce Analytics
                    </div>
                </div>

                <!-- Team Member 5 -->
                <div style="background: var(--white); border-radius: 12px; padding: 2rem; text-align: center; box-shadow: 0 5px 15px rgba(0,0,0,0.08);">
                    <div style="width: 100px; height: 100px; background: var(--primary-blue); border-radius: 50%; margin: 0 auto 1.5rem; display: flex; align-items: center; justify-content: center; color: white; font-size: 2rem; font-weight: bold;">EW</div>
                    <h3 style="color: var(--primary-blue); margin-bottom: 0.5rem;">Emma Wallin</h3>
                    <p style="color: var(--secondary-blue); font-weight: 600; margin-bottom: 1rem;">Marketing Technology Consultant</p>
                    <p style="color: var(--text-light); line-height: 1.6; margin-bottom: 1.5rem;">
                        Strateg inom marketing automation med djup förståelse för customer journey mapping och lead nurturing.
                    </p>
                    <div style="color: var(--text-light); font-size: 0.9rem;">
                        <strong>Expertområden:</strong> Marketing Automation, CRM Strategy, Lead Generation
                    </div>
                </div>

                <!-- Team Member 6 -->
                <div style="background: var(--white); border-radius: 12px; padding: 2rem; text-align: center; box-shadow: 0 5px 15px rgba(0,0,0,0.08);">
                    <div style="width: 100px; height: 100px; background: var(--secondary-blue); border-radius: 50%; margin: 0 auto 1.5rem; display: flex; align-items: center; justify-content: center; color: white; font-size: 2rem; font-weight: bold;">DA</div>
                    <h3 style="color: var(--primary-blue); margin-bottom: 0.5rem;">David Andersson</h3>
                    <p style="color: var(--secondary-blue); font-weight: 600; margin-bottom: 1rem;">Performance Marketing & AI Ads Specialist</p>
                    <p style="color: var(--text-light); line-height: 1.6; margin-bottom: 1.5rem;">
                        Google Ads och Facebook Ads expert med fokus på AI-driven kampanjoptimering och advanced attribution modeling.
                    </p>
                    <div style="color: var(--text-light); font-size: 0.9rem;">
                        <strong>Expertområden:</strong> Google Ads, Meta Ads, Smart Bidding, Attribution
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Values Section -->
    <section style="padding: 6rem 0; background: var(--primary-blue); color: var(--white);">
        <div class="container">
            <h2 style="text-align: center; margin-bottom: 4rem; color: var(--white); font-size: 2.5rem;">Våra värderingar</h2>
            
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 3rem;">
                <div style="text-align: center;">
                    <div style="width: 80px; height: 80px; background: rgba(255,255,255,0.1); border-radius: 50%; margin: 0 auto 1.5rem; display: flex; align-items: center; justify-content: center; font-size: 2rem;">📊</div>
                    <h3 style="margin-bottom: 1rem; color: var(--white);">Data-first mindset</h3>
                    <p style="opacity: 0.9; line-height: 1.6;">Varje beslut och rekommendation bygger på solid data och beprövade metoder. Vi gissar aldrig.</p>
                </div>
                
                <div style="text-align: center;">
                    <div style="width: 80px; height: 80px; background: rgba(255,255,255,0.1); border-radius: 50%; margin: 0 auto 1.5rem; display: flex; align-items: center; justify-content: center; font-size: 2rem;">🤖</div>
                    <h3 style="margin-bottom: 1rem; color: var(--white);">AI för alla</h3>
                    <p style="opacity: 0.9; line-height: 1.6;">Vi demokratiserar AI-teknologi och gör den tillgänglig för företag i alla storlekar och branscher.</p>
                </div>
                
                <div style="text-align: center;">
                    <div style="width: 80px; height: 80px; background: rgba(255,255,255,0.1); border-radius: 50%; margin: 0 auto 1.5rem; display: flex; align-items: center; justify-content: center; font-size: 2rem;">🎯</div>
                    <h3 style="margin-bottom: 1rem; color: var(--white);">Resultatfokus</h3>
                    <p style="opacity: 0.9; line-height: 1.6;">Vi mäter vår framgång på era resultat. Vårt mål är att skapa mätbar och hållbar tillväxt.</p>
                </div>
                
                <div style="text-align: center;">
                    <div style="width: 80px; height: 80px; background: rgba(255,255,255,0.1); border-radius: 50%; margin: 0 auto 1.5rem; display: flex; align-items: center; justify-content: center; font-size: 2rem;">🤝</div>
                    <h3 style="margin-bottom: 1rem; color: var(--white);">Partnership</h3>
                    <p style="opacity: 0.9; line-height: 1.6;">Vi ser oss som en förlängning av ert team, inte bara som externa konsulter. Ert success är vårt success.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section style="padding: 6rem 0; background: var(--white);">
        <div class="container" style="text-align: center;">
            <h2 style="margin-bottom: 1.5rem; color: var(--primary-blue);">Redo att träffa teamet?</h2>
            <p style="font-size: 1.1rem; margin-bottom: 2.5rem; color: var(--text-light); max-width: 600px; margin-left: auto; margin-right: auto;">
                Vi skulle älska att höra om era utmaningar och visa hur vi kan hjälpa er att lösa dem med data och AI.
            </p>
            <a href="<?php echo home_url('/kontakt'); ?>" class="cta-button">Boka ett möte</a>
        </div>
    </section>
</main>

<?php get_footer(); ?>