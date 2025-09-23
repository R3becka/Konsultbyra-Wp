<?php
/*
Template Name: Contact
*/
get_header(); ?>

<main id="main" class="site-main">
    <section class="hero">
        <div class="container">
            <h1>Kontakta oss</h1>
            <p>Redo att förvandla er data till konkurrensfördelar? Låt oss börja med ett kostnadsfritt konsultmöte eller inspirerande föreläsning.</p>
        </div>
    </section>

    <section style="padding: 6rem 0; background: var(--white);">
        <div class="container">
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 6rem; align-items: start;">
                
                <!-- Contact Form -->
                <div>
                    <h2 style="color: var(--primary-blue); margin-bottom: 2rem; font-size: 2rem;">Boka ett möte eller föreläsning</h2>
                    <p style="margin-bottom: 3rem; color: var(--text-light); font-size: 1.1rem;">
                        Berätta om era utmaningar så hjälper vi er att hitta rätt lösning. Vi erbjuder både kostnadsfria konsultationer och inspirerande föreläsningar om data och AI.
                    </p>

                    <form class="contact-form" method="post" action="#" id="contact-form">
                        <div class="form-group">
                            <label for="inquiry-type">Vad är ni intresserade av? *</label>
                            <select id="inquiry-type" name="inquiry_type" required style="width: 100%; padding: 1rem; border: 2px solid var(--light-blue); border-radius: 8px; font-size: 1rem;">
                                <option value="">Välj alternativ</option>
                                <option value="consultation">Kostnadsfri konsultation</option>
                                <option value="lecture-onsite">Föreläsning på plats</option>
                                <option value="lecture-digital">Digital föreläsning</option>
                                <option value="workshop">Workshop/utbildning</option>
                                <option value="project">Projektsamarbete</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="company-name">Företagsnamn *</label>
                            <input type="text" id="company-name" name="company_name" required>
                        </div>

                        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem;">
                            <div class="form-group">
                                <label for="first-name">Förnamn *</label>
                                <input type="text" id="first-name" name="first_name" required>
                            </div>
                            <div class="form-group">
                                <label for="last-name">Efternamn *</label>
                                <input type="text" id="last-name" name="last_name" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email">E-post *</label>
                            <input type="email" id="email" name="email" required>
                        </div>

                        <div class="form-group">
                            <label for="phone">Telefonnummer</label>
                            <input type="tel" id="phone" name="phone">
                        </div>

                        <div class="form-group">
                            <label for="company-size">Företagsstorlek</label>
                            <select id="company-size" name="company_size" style="width: 100%; padding: 1rem; border: 2px solid var(--light-blue); border-radius: 8px; font-size: 1rem;">
                                <option value="">Välj alternativ</option>
                                <option value="1-10">1-10 anställda</option>
                                <option value="11-50">11-50 anställda</option>
                                <option value="51-200">51-200 anställda</option>
                                <option value="200+">200+ anställda</option>
                            </select>
                        </div>

                        <div class="form-group" id="audience-size-group" style="display: none;">
                            <label for="audience-size">Antal deltagare (för föreläsningar)</label>
                            <select id="audience-size" name="audience_size" style="width: 100%; padding: 1rem; border: 2px solid var(--light-blue); border-radius: 8px; font-size: 1rem;">
                                <option value="">Välj alternativ</option>
                                <option value="1-20">1-20 personer</option>
                                <option value="21-50">21-50 personer</option>
                                <option value="51-100">51-100 personer</option>
                                <option value="100+">100+ personer</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="services">Vilka områden är ni intresserade av?</label>
                            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 0.5rem; margin-top: 0.5rem;">
                                <label style="display: flex; align-items: center; font-weight: normal; cursor: pointer;">
                                    <input type="checkbox" name="services[]" value="ai-strategy" style="margin-right: 0.5rem;">
                                    AI-strategi & Innovation
                                </label>
                                <label style="display: flex; align-items: center; font-weight: normal; cursor: pointer;">
                                    <input type="checkbox" name="services[]" value="data-driven" style="margin-right: 0.5rem;">
                                    Datadriven tillväxt
                                </label>
                                <label style="display: flex; align-items: center; font-weight: normal; cursor: pointer;">
                                    <input type="checkbox" name="services[]" value="gtm" style="margin-right: 0.5rem;">
                                    Datainsamling (GTM)
                                </label>
                                <label style="display: flex; align-items: center; font-weight: normal; cursor: pointer;">
                                    <input type="checkbox" name="services[]" value="analytics" style="margin-right: 0.5rem;">
                                    Analys & Visualisering
                                </label>
                                <label style="display: flex; align-items: center; font-weight: normal; cursor: pointer;">
                                    <input type="checkbox" name="services[]" value="automation" style="margin-right: 0.5rem;">
                                    Marketing Automation
                                </label>
                                <label style="display: flex; align-items: center; font-weight: normal; cursor: pointer;">
                                    <input type="checkbox" name="services[]" value="crm" style="margin-right: 0.5rem;">
                                    CRM-optimering
                                </label>
                                <label style="display: flex; align-items: center; font-weight: normal; cursor: pointer;">
                                    <input type="checkbox" name="services[]" value="ecommerce" style="margin-right: 0.5rem;">
                                    E-handel
                                </label>
                                <label style="display: flex; align-items: center; font-weight: normal; cursor: pointer;">
                                    <input type="checkbox" name="services[]" value="ads" style="margin-right: 0.5rem;">
                                    Annonssystem
                                </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="message">Berätta mer om era behov och mål</label>
                            <textarea id="message" name="message" placeholder="T.ex. Vilka är era största utmaningar? Vilket datum passar för föreläsning? Vilka resultat hoppas ni uppnå?"></textarea>
                        </div>

                        <div class="form-group">
                            <label style="display: flex; align-items: center; font-weight: normal; cursor: pointer;">
                                <input type="checkbox" name="newsletter" value="yes" style="margin-right: 0.5rem;">
                                Ja, jag vill ta emot tips och insights om data och AI (max 2 gånger per månad)
                            </label>
                        </div>

                        <button type="submit" class="cta-button" style="width: 100%; margin-top: 1rem;">
                            Skicka förfrågan
                        </button>
                    </form>
                </div>

                <!-- Contact Info -->
                <div>
                    <div style="background: var(--gray-100); padding: 3rem; border-radius: 12px; margin-bottom: 3rem;">
                        <h3 style="color: var(--primary-blue); margin-bottom: 2rem;">Kontaktinformation</h3>
                        
                        <div style="margin-bottom: 2rem;">
                            <h4 style="color: var(--text-dark); margin-bottom: 0.5rem;">📧 E-post</h4>
                            <p style="color: var(--text-light);">hej@clearstack.se</p>
                        </div>

                        <div style="margin-bottom: 2rem;">
                            <h4 style="color: var(--text-dark); margin-bottom: 0.5rem;">📞 Telefon</h4>
                            <p style="color: var(--text-light);">08-123 45 67</p>
                        </div>

                        <div style="margin-bottom: 2rem;">
                            <h4 style="color: var(--text-dark); margin-bottom: 0.5rem;">📍 Kontor</h4>
                            <p style="color: var(--text-light);">
                                Stureplan 15<br>
                                114 35 Stockholm<br>
                                Sverige
                            </p>
                        </div>

                        <div>
                            <h4 style="color: var(--text-dark); margin-bottom: 0.5rem;">🕒 Öppettider</h4>
                            <p style="color: var(--text-light);">
                                Måndag - Fredag: 08:00 - 18:00<br>
                                Helger: Stängt
                            </p>
                        </div>
                    </div>

                    <!-- Lecture Information -->
                    <div style="background: var(--accent-blue); padding: 3rem; border-radius: 12px; margin-bottom: 3rem; color: white;">
                        <h3 style="color: white; margin-bottom: 2rem;">🎤 Inspirerande föreläsningar</h3>
                        
                        <div style="margin-bottom: 2rem;">
                            <h4 style="color: white; margin-bottom: 1rem;">Populära ämnen:</h4>
                            <ul style="color: rgba(255,255,255,0.9); line-height: 1.8;">
                                <li>"AI:s framtid - Möjligheter för ert företag"</li>
                                <li>"Från data till beslut - Praktiska AI-cases"</li>
                                <li>"Datadriven tillväxt i praktiken"</li>
                                <li>"Marketing automation som fungerar"</li>
                            </ul>
                        </div>

                        <div style="background: rgba(255,255,255,0.1); padding: 1.5rem; border-radius: 8px;">
                            <p style="margin: 0; color: rgba(255,255,255,0.9); font-size: 0.9rem;">
                                <strong>Flexibelt format:</strong> 30-60 min presentation + Q&A
                                <br><strong>Målgrupp:</strong> Ledningsgrupper, säljteam, eller hela organisationen
                                <br><strong>Leverans:</strong> På plats i Stockholm eller digitalt via Teams/Zoom
                            </p>
                        </div>
                    </div>

                    <!-- What happens next -->
                    <div style="background: var(--light-blue); padding: 3rem; border-radius: 12px;">
                        <h3 style="color: var(--primary-blue); margin-bottom: 2rem;">Vad händer härnäst?</h3>
                        
                        <div style="space-y: 1.5rem;">
                            <div style="display: flex; align-items: start; margin-bottom: 1.5rem;">
                                <div style="width: 30px; height: 30px; background: var(--primary-blue); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-weight: bold; margin-right: 1rem; flex-shrink: 0;">1</div>
                                <div>
                                    <h4 style="color: var(--text-dark); margin-bottom: 0.5rem;">Vi hör av oss inom 24h</h4>
                                    <p style="color: var(--text-light); font-size: 0.9rem;">En av våra specialister kontaktar er för att diskutera era behov.</p>
                                </div>
                            </div>
                            
                            <div style="display: flex; align-items: start; margin-bottom: 1.5rem;">
                                <div style="width: 30px; height: 30px; background: var(--secondary-blue); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-weight: bold; margin-right: 1rem; flex-shrink: 0;">2</div>
                                <div>
                                    <h4 style="color: var(--text-dark); margin-bottom: 0.5rem;">Kostnadsfri konsultation eller föreläsning</h4>
                                    <p style="color: var(--text-light); font-size: 0.9rem;">Vi analyserar era behov eller inspirerar ert team med konkreta exempel.</p>
                                </div>
                            </div>
                            
                            <div style="display: flex; align-items: start;">
                                <div style="width: 30px; height: 30px; background: var(--accent-blue); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-weight: bold; margin-right: 1rem; flex-shrink: 0;">3</div>
                                <div>
                                    <h4 style="color: var(--text-dark); margin-bottom: 0.5rem;">Skräddarsydd roadmap</h4>
                                    <p style="color: var(--text-light); font-size: 0.9rem;">Ni får konkreta rekommendationer och en detaljerad plan framåt.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section style="padding: 6rem 0; background: var(--gray-100);">
        <div class="container">
            <h2 style="text-align: center; margin-bottom: 4rem; color: var(--text-dark);">Vanliga frågor</h2>
            
            <div style="max-width: 800px; margin: 0 auto;">
                <div style="background: var(--white); border-radius: 12px; padding: 2rem; margin-bottom: 1rem; box-shadow: 0 2px 10px rgba(0,0,0,0.05);">
                    <h3 style="color: var(--primary-blue); margin-bottom: 1rem;">Vad kostar era tjänster?</h3>
                    <p style="color: var(--text-dark); line-height: 1.6;">
                        Våra priser varierar beroende på projektets omfattning och komplexitet. Första konsultationen och inspirationsföreläsningar är alltid kostnadsfria. Kontinuerliga projekt börjar vanligtvis från 50 000 kr.
                    </p>
                </div>

                <div style="background: var(--white); border-radius: 12px; padding: 2rem; margin-bottom: 1rem; box-shadow: 0 2px 10px rgba(0,0,0,0.05);">
                    <h3 style="color: var(--primary-blue); margin-bottom: 1rem;">Hur lång tid tar era föreläsningar?</h3>
                    <p style="color: var(--text-dark); line-height: 1.6;">
                        Våra föreläsningar är flexibla - allt från 30 minuters inspirationspass till 90 minuters djupdykning med workshop-element. Vi anpassar innehåll och format efter era behov och tillgänglig tid.
                    </p>
                </div>

                <div style="background: var(--white); border-radius: 12px; padding: 2rem; margin-bottom: 1rem; box-shadow: 0 2px 10px rgba(0,0,0,0.05);">
                    <h3 style="color: var(--primary-blue); margin-bottom: 1rem;">Hur lång tid tar en implementation?</h3>
                    <p style="color: var(--text-dark); line-height: 1.6;">
                        Beroende på omfattning kan en grundläggande implementation ta 2-6 veckor, medan mer avancerade AI-lösningar kan ta 3-6 månader. Vi arbetar alltid iterativt så ni ser resultat redan under processens gång.
                    </p>
                </div>

                <div style="background: var(--white); border-radius: 12px; padding: 2rem; margin-bottom: 1rem; box-shadow: 0 2px 10px rgba(0,0,0,0.05);">
                    <h3 style="color: var(--primary-blue); margin-bottom: 1rem;">Arbetar ni med företag i alla storlekar?</h3>
                    <p style="color: var(--text-dark); line-height: 1.6;">
                        Ja, vi har erfarenhet av allt från startups till stora koncerner. Våra lösningar skalas efter era behov och budget. Vi anpassar även föreläsningarna efter målgrupp och företagsstorlek.
                    </p>
                </div>

                <div style="background: var(--white); border-radius: 12px; padding: 2rem; box-shadow: 0 2px 10px rgba(0,0,0,0.05);">
                    <h3 style="color: var(--primary-blue); margin-bottom: 1rem;">Kan ni hjälpa oss även efter implementation?</h3>
                    <p style="color: var(--text-dark); line-height: 1.6;">
                        Absolut! Vi erbjuder kontinuerlig support, optimering, vidareutveckling och uppföljande utbildningar. Många kunder väljer våra månadspaket för att säkerställa att systemen alltid presterar optimalt.
                    </p>
                </div>
            </div>
        </div>
    </section>
</main>

<script>
// Show/hide audience size field based on inquiry type
document.getElementById('inquiry-type').addEventListener('change', function(e) {
    const audienceGroup = document.getElementById('audience-size-group');
    const lectureOptions = ['lecture-onsite', 'lecture-digital', 'workshop'];
    
    if (lectureOptions.includes(e.target.value)) {
        audienceGroup.style.display = 'block';
    } else {
        audienceGroup.style.display = 'none';
    }
});

// Form submission
document.getElementById('contact-form').addEventListener('submit', function(e) {
    e.preventDefault();
    const inquiryType = document.getElementById('inquiry-type').value;
    
    let message = 'Tack för ert meddelande! ';
    
    if (inquiryType.includes('lecture')) {
        message += 'Vi återkommer inom 24 timmar med förslag på föreläsningsämnen och tillgängliga datum.';
    } else if (inquiryType === 'consultation') {
        message += 'Vi hör av oss inom 24 timmar för att boka er kostnadsfria konsultation.';
    } else {
        message += 'Vi hör av oss inom 24 timmar för att diskutera era behov.';
    }
    
    alert(message);
});
</script>

<?php get_footer(); ?>