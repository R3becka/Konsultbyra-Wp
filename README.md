# DataAI Konsult - WordPress Website

A complete WordPress website for a data technology consultancy with AI focus, built with Docker for easy development.

## 🚀 Features

- **Professional Design**: Modern, tech-focused design with blue color scheme
- **Responsive Layout**: Works perfectly on desktop, tablet, and mobile
- **Complete Website Structure**:
  - Homepage with hero section, approach, tech stack, and value proposition
  - Services page with 6 detailed service offerings
  - AI Approach page with timeline and roadmap
  - Case Studies with fictional client success stories
  - About page with team presentation and company values
  - Contact page with form and company information

## 🛠 Tech Stack

- **WordPress**: Latest version
- **MySQL 5.7**: Database
- **Docker**: Containerized development environment
- **phpMyAdmin**: Database management
- **Custom Theme**: "Konsultbyrå Data & AI"

## 📋 Prerequisites

- Docker Desktop installed and running
- Git (for version control)
- Modern web browser

## 🚀 Quick Start

### Option 1: Using the setup script (Windows)
```bash
./setup.bat
```

### Option 2: Manual setup
```bash
# Clone or download this project
# Navigate to project directory

# Start the Docker environment
docker-compose up -d

# Wait 30-60 seconds for WordPress to initialize
```

## 🔗 Access Points

After starting the containers:

- **Website**: http://localhost:8080
- **WordPress Admin**: http://localhost:8080/wp-admin
- **phpMyAdmin**: http://localhost:8081

## 🎨 WordPress Setup

### Initial WordPress Installation
1. Visit http://localhost:8080
2. Complete WordPress installation:
   - Database Name: `wordpress`
   - Username: `wordpress`
   - Password: `wordpress`
   - Database Host: `db`
3. Create your admin account (remember the credentials!)

### Create Your Consultancy Website

**Step 1: Activate the Theme**
1. Go to WordPress Admin: http://localhost:8080/wp-admin
2. Navigate to **Appearance → Themes**
3. Click **Activate** on "Konsultbyrå Data & AI" theme

**Step 2: Create All Content**
1. In WordPress Admin, go to **Appearance → Website Setup**
2. Click the big **🚀 Create All Content Now** button
3. Watch the setup process create all pages with live logging
4. Click **View your website** when completed

**Alternative: Direct Link**
- http://localhost:8080/wp-admin/admin.php?page=konsultbyra-setup&action=setup_now

**What Gets Created:**
- ✅ Homepage with hero section and company messaging  
- ✅ Services page with 6 detailed offerings (GTM, GA4+Looker, etc.)
- ✅ AI Approach page with evolution timeline
- ✅ Case Studies with fictional client success stories
- ✅ About page with team profiles and company story
- ✅ Contact page with forms and company information
- ✅ Navigation menu connecting all pages
- ✅ Static homepage configuration
- ✅ Professional blue/tech styling
- ✅ Removes default WordPress content (Exempelsida, etc.)

### What Gets Set Up Automatically
- ✅ Theme activation
- ✅ All 6 pages created with proper templates
- ✅ Navigation menu with all links
- ✅ Static homepage configuration
- ✅ Removal of default WordPress content
- ✅ Professional styling and content

## 📁 Project Structure

```
konsultbyra-projekt/
├── docker-compose.yml          # Docker configuration
├── README.md                   # This file
├── setup.bat                   # Windows setup script
└── wp-content/
    └── themes/
        └── konsultbyra-theme/
            ├── style.css       # Main stylesheet
            ├── functions.php   # WordPress functions
            ├── index.php       # Main template
            ├── header.php      # Header template
            ├── footer.php      # Footer template
            ├── page-home.php   # Homepage template
            ├── page-services.php           # Services template
            ├── page-ai-approach.php        # AI Approach template
            ├── page-case-studies.php       # Case Studies template
            ├── page-about.php              # About template
            ├── page-contact.php            # Contact template
            └── js/
                └── main.js     # JavaScript functionality
```

## 🎯 Website Content

### Services Offered
1. **Datainsamling (GTM)** - Google Tag Manager setup and tracking
2. **Analys & Visualisering (GA4 + Looker)** - Analytics and dashboards  
3. **Marketing Automation** - Automated marketing workflows
4. **CRM** - Customer relationship management systems
5. **E-handel** - E-commerce optimization and tracking
6. **Annonssystem** - AI-driven advertising campaigns

### Key Pages
- **Homepage**: Hero section, approach, tech stack icons, value proposition
- **Services**: Detailed service descriptions and benefits
- **AI Approach**: 6/18/30 month AI evolution timeline
- **Case Studies**: 2 fictional success stories with metrics
- **About**: Team profiles, company story, values
- **Contact**: Contact form, company info, FAQ section

## 🛠 Development

### Making Changes
- Edit theme files in `wp-content/themes/konsultbyra-theme/`
- Changes are reflected immediately (no rebuild needed)
- Custom CSS in `style.css`
- JavaScript functionality in `js/main.js`

### Database Access
- Use phpMyAdmin at http://localhost:8081
- Username: `root`
- Password: `rootpassword`

### Stopping the Environment
```bash
docker-compose down
```

### Restarting
```bash
docker-compose up -d
```

## 🎨 Design Features

- **Color Scheme**: Professional blue tones (#1e40af primary, #3b82f6 secondary)
- **Typography**: Inter font family for modern look
- **Components**: Cards, buttons, forms, timelines, grids
- **Animations**: Scroll-triggered animations for engagement
- **Responsive**: Mobile-first responsive design
- **Accessibility**: Semantic HTML and proper contrast ratios

## 📞 Contact Information (Fictional)

- **Company**: DataAI Konsult
- **Email**: hej@dataai-konsult.se
- **Phone**: 08-123 45 67
- **Address**: Stureplan 15, 114 35 Stockholm

## 🔧 Troubleshooting

### Docker Issues
- Ensure Docker Desktop is running
- Check port availability (8080, 8081)
- Try `docker-compose down` then `docker-compose up -d`

### WordPress Issues
- Clear browser cache
- Check database connection in wp-config.php
- Ensure theme is activated

### Permission Issues
- Make sure Docker has access to the project folder
- On Windows, check Docker Desktop → Settings → Resources → File Sharing

## 📝 License

This project is for educational/demonstration purposes. WordPress and all used plugins/themes retain their respective licenses.