<?php
/*
Template Name: About
*/
get_header(); ?>

<main id="main" class="site-main">
    <section class="hero">
        <div class="container">
            <h1>Om ClearStack Konsultbyrå</h1>
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
                        Vi är specialister som träffades genom avancerad datateknisk utbildning och upptäckte en gemensam vision: AI förändrar fundamentalt hur företag hanterar data. Medan andra såg AI som framtidsteknologi, insåg vi att transformationen redan var igång.
                    </p>
                    <p style="font-size: 1.1rem; line-height: 1.7; margin-bottom: 1.5rem; color: var(--text-dark);">
                        Vår expertis ligger i att förstå teknologisk evolution över tid. Vi ser hur företag utvecklas från traditionella dataverktyg till AI-förstärkta system – en resa som typiskt sträcker sig över 6-30 månader. Från AI-assisterad analys och automation till fullt integrerade AI-drivna tech stacks.
                    </p>
                    <p style="font-size: 1.1rem; line-height: 1.7; color: var(--text-dark);">
                        ClearStack Konsultbyrå grundades för att hjälpa svenska företag navigera denna teknologiska transformation. Vi kombinerar beprövade verktyg som GTM, GA4 och CRM-system med framväxande AI-kapaciteter, och implementerar aktivt AI-lösningar och systemintegrationer för våra klienter.
                    </p>
                </div>
                <div style="background: var(--light-blue); padding: 3rem; border-radius: 12px; text-align: center;">
                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 2rem;">
                        <div>
                            <div style="font-size: 3rem; font-weight: bold; color: var(--primary-blue); margin-bottom: 0.5rem;">6-30</div>
                            <div style="color: var(--text-dark);">Månaders transformation</div>
                        </div>
                        <div>
                            <div style="font-size: 3rem; font-weight: bold; color: var(--primary-blue); margin-bottom: 0.5rem;">15+</div>
                            <div style="color: var(--text-dark);">AI-integrationer</div>
                        </div>
                        <div>
                            <div style="font-size: 3rem; font-weight: bold; color: var(--primary-blue); margin-bottom: 0.5rem;">200%</div>
                            <div style="color: var(--text-dark);">Dataeffektivitet</div>
                        </div>
                        <div>
                            <div style="font-size: 3rem; font-weight: bold; color: var(--primary-blue); margin-bottom: 0.5rem;">100+</div>
                            <div style="color: var(--text-dark);">System migrationer</div>
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
            <?php
            // Team members data with custom field keys
            $team_members = array(
                array(
                    'key' => 'emma_kronkvist',
                    'initials' => 'EK',
                    'name' => 'Emma Kronkvist',
                    'title' => 'Lead Customer Data Platform Specialist',
                    'description' => 'Expert på CDP-implementation och dataarkitektur. Specialiserad på att bygga robusta kunddata-plattformar som förenar data från alla touchpoints och säkerställer GDPR-compliance.',
                    'expertise' => 'CDP, Data Architecture, GDPR, Customer Journey Analytics',
                    'bg_color' => 'var(--primary-blue)'
                ),
                array(
                    'key' => 'natthasuda_suksod',
                    'initials' => 'NS',
                    'name' => 'Natthasuda Suksod',
                    'title' => 'Marketing Automation & CRM Consultant',
                    'description' => 'Teknisk strateg inom marketing automation och CRM-system. Expert på att designa automatiserade kundresor som konverterar och bygger långsiktiga kundrelationer.',
                    'expertise' => 'Marketing Automation, CRM Development, Lead Nurturing',
                    'bg_color' => 'var(--secondary-blue)'
                ),
                array(
                    'key' => 'nazret_mengstu',
                    'initials' => 'NM',
                    'name' => 'Nazret Tluk Mengstu',
                    'title' => 'GA4 & Analytics Implementation Expert',
                    'description' => 'Specialist på GA4-implementationer och avancerad analytics-konfiguration. Förvandlar komplexa tracking-krav till precision-datainsamling som driver affärsbeslut.',
                    'expertise' => 'GA4, Google Tag Manager, Conversion Tracking, Event Architecture',
                    'bg_color' => 'var(--accent-blue)'
                ),
                array(
                    'key' => 'martinique_lindberg',
                    'initials' => 'ML',
                    'name' => 'Martinique Rockström Lindberg',
                    'title' => 'Data Visualization & Looker Specialist',
                    'description' => 'Förvandlar komplex data till kraftfulla visuella berättelser. Expert på Looker Studio och Business Intelligence som gör data tillgänglig för alla i organisationen.',
                    'expertise' => 'Looker Studio, Data Visualization, BI Development, Dashboard Design',
                    'bg_color' => 'var(--dark-blue)'
                ),
                array(
                    'key' => 'nicolina_savmarker',
                    'initials' => 'NS',
                    'name' => 'Nicolina Sävmarker',
                    'title' => 'E-commerce Data & Performance Optimization Consultant',
                    'description' => 'E-commerce analytics expert med fokus på conversion rate optimization. Specialiserad på att optimera hela customer journey från första intryck till återköp.',
                    'expertise' => 'E-commerce Analytics, CRO, Customer Lifetime Value, Retention Analysis',
                    'bg_color' => 'var(--primary-blue)'
                ),
                array(
                    'key' => 'rebecka_hellqvist',
                    'initials' => 'RH',
                    'name' => 'Rebecka Hellqvist',
                    'title' => 'AI-Driven Advertising & Performance Marketing Specialist',
                    'description' => 'Performance marketing expert med djup kunskap inom AI-driven kampanjoptimering. Specialiserad på att maximera ROAS genom intelligent automation och avancerad attribution modeling.',
                    'expertise' => 'Google Ads Automation, Meta Ads, AI Campaign Optimization, Attribution Modeling',
                    'bg_color' => 'var(--secondary-blue)'
                )
            );

            foreach ($team_members as $member):
                // Get uploaded image for this team member
                $image_id = get_post_meta(get_the_ID(), 'team_image_' . $member['key'], true);
                $image_url = $image_id ? wp_get_attachment_image_url($image_id, 'medium') : '';

                // Special positioning class for Rebecka's photo if needed
                $position_class = ($member['key'] === 'rebecka_hellqvist') ? 'position-upper' : '';
            ?>
                <!-- Team Member: <?php echo $member['name']; ?> -->
                <div style="background: var(--white); border-radius: 12px; padding: 2rem; text-align: center; box-shadow: 0 5px 15px rgba(0,0,0,0.08);">
                    <div class="team-member-photo <?php echo $position_class; ?>" style="width: 120px; height: 120px; border-radius: 50%; margin: 0 auto 1.5rem; display: flex; align-items: center; justify-content: center; overflow: hidden; position: relative;">
                        <?php if ($image_url): ?>
                            <img src="<?php echo esc_url($image_url); ?>"
                                 alt="<?php echo esc_attr($member['name']); ?>"
                                 style="width: 100%; height: 100%; object-fit: cover; border-radius: 50%;">
                        <?php else: ?>
                            <div style="width: 100%; height: 100%; background: <?php echo $member['bg_color']; ?>; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-size: 2.2rem; font-weight: bold;">
                                <?php echo $member['initials']; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                    <h3 style="color: var(--primary-blue); margin-bottom: 0.5rem;"><?php echo $member['name']; ?></h3>
                    <p style="color: var(--secondary-blue); font-weight: 600; margin-bottom: 1rem;"><?php echo $member['title']; ?></p>
                    <p style="color: var(--text-light); line-height: 1.6; margin-bottom: 1.5rem;">
                        <?php echo $member['description']; ?>
                    </p>
                    <div style="color: var(--text-light); font-size: 0.9rem;">
                        <strong>Expertområden:</strong> <?php echo $member['expertise']; ?>
                    </div>
                </div>
            <?php endforeach; ?>
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