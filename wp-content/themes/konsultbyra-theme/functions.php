<?php

// Theme setup
function konsultbyra_theme_setup() {
    // Add theme support
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));

    // Register navigation menus
    register_nav_menus(array(
        'primary' => 'Primary Menu',
        'footer' => 'Footer Menu',
    ));
}
add_action('after_setup_theme', 'konsultbyra_theme_setup');

// Enqueue styles and scripts
function konsultbyra_scripts() {
    wp_enqueue_style('konsultbyra-style', get_stylesheet_uri(), array(), '1.0.0');
    
    // Add custom JavaScript if needed
    wp_enqueue_script('konsultbyra-script', get_template_directory_uri() . '/js/main.js', array('jquery'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'konsultbyra_scripts');

// Custom post types and fields can be added here
function create_custom_post_types() {
    // Services post type
    register_post_type('services', array(
        'labels' => array(
            'name' => 'Tjänster',
            'singular_name' => 'Tjänst',
            'add_new' => 'Lägg till ny',
            'add_new_item' => 'Lägg till ny tjänst',
            'edit_item' => 'Redigera tjänst',
        ),
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-star-filled',
        'supports' => array('title', 'editor', 'thumbnail'),
        'rewrite' => array('slug' => 'tjanster'),
    ));

    // Team members post type
    register_post_type('team', array(
        'labels' => array(
            'name' => 'Team',
            'singular_name' => 'Teammedlem',
            'add_new' => 'Lägg till ny',
            'add_new_item' => 'Lägg till ny teammedlem',
            'edit_item' => 'Redigera teammedlem',
        ),
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-groups',
        'supports' => array('title', 'editor', 'thumbnail'),
        'rewrite' => array('slug' => 'team'),
    ));

    // Case studies post type
    register_post_type('case_studies', array(
        'labels' => array(
            'name' => 'Fallstudier',
            'singular_name' => 'Fallstudie',
            'add_new' => 'Lägg till ny',
            'add_new_item' => 'Lägg till ny fallstudie',
            'edit_item' => 'Redigera fallstudie',
        ),
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-portfolio',
        'supports' => array('title', 'editor', 'thumbnail'),
        'rewrite' => array('slug' => 'fallstudier'),
    ));
}
add_action('init', 'create_custom_post_types');

// Custom menu fallback
function konsultbyra_fallback_menu() {
    echo '<ul>';
    echo '<li><a href="' . home_url() . '">Hem</a></li>';
    echo '<li><a href="' . home_url('/tjanster') . '">Tjänster</a></li>';
    echo '<li><a href="' . home_url('/ai-approach') . '">AI-approach</a></li>';
    echo '<li><a href="' . home_url('/fallstudier') . '">Fallstudier</a></li>';
    echo '<li><a href="' . home_url('/om-oss') . '">Om oss</a></li>';
    echo '<li><a href="' . home_url('/kontakt') . '">Kontakt</a></li>';
    echo '</ul>';
}

// Add custom body classes
function konsultbyra_body_classes($classes) {
    if (is_page_template('page-home.php')) {
        $classes[] = 'home-page';
    }
    if (is_page_template('page-services.php')) {
        $classes[] = 'services-page';
    }
    return $classes;
}
add_filter('body_class', 'konsultbyra_body_classes');

// Auto-setup content when theme is activated
function konsultbyra_auto_setup() {
    // Only run once
    if (get_option('konsultbyra_setup_complete')) {
        return;
    }

    // Give WordPress a moment to finish theme activation
    wp_schedule_single_event(time() + 2, 'konsultbyra_delayed_setup');
}
add_action('after_switch_theme', 'konsultbyra_auto_setup');

// Delayed setup to ensure theme is fully activated
function konsultbyra_delayed_setup() {
    konsultbyra_create_all_content();
}
add_action('konsultbyra_delayed_setup', 'konsultbyra_delayed_setup');

// Main content creation function
function konsultbyra_create_all_content() {
    // Prevent running multiple times
    if (get_option('konsultbyra_setup_complete')) {
        return;
    }

    // Set up basic WordPress settings first
    update_option('blogdescription', 'Vi hjälper företag att bli datadrivna med AI som assistent');
    update_option('default_comment_status', 'closed');
    update_option('default_ping_status', 'closed');

    // Remove default content
    konsultbyra_remove_default_content();

    // Create all pages
    $pages = konsultbyra_create_pages();

    // Create navigation menu
    konsultbyra_create_menu($pages);

    // Mark as complete
    update_option('konsultbyra_setup_complete', true);
}

// Create all pages
function konsultbyra_create_pages() {
    $pages_data = array(
        array(
            'title' => 'Hem',
            'slug' => '',
            'template' => 'page-home.php',
            'is_front' => true,
            'key' => 'home'
        ),
        array(
            'title' => 'Tjänster',
            'slug' => 'tjanster',
            'template' => 'page-services.php',
            'key' => 'services'
        ),
        array(
            'title' => 'AI Approach',
            'slug' => 'ai-approach',
            'template' => 'page-ai-approach.php',
            'key' => 'ai-approach'
        ),
        array(
            'title' => 'Fallstudier',
            'slug' => 'fallstudier',
            'template' => 'page-case-studies.php',
            'key' => 'case-studies'
        ),
        array(
            'title' => 'Om oss',
            'slug' => 'om-oss',
            'template' => 'page-about.php',
            'key' => 'about'
        ),
        array(
            'title' => 'Kontakt',
            'slug' => 'kontakt',
            'template' => 'page-contact.php',
            'key' => 'contact'
        )
    );

    $created_pages = array();

    foreach ($pages_data as $page) {
        // Check if page already exists
        $existing_page = null;
        if ($page['slug']) {
            $existing_page = get_page_by_path($page['slug']);
        } else {
            // For homepage, check by title
            $existing_page = get_page_by_title($page['title']);
        }

        if (!$existing_page) {
            // Create new page
            $page_args = array(
                'post_title' => $page['title'],
                'post_content' => '', // Content comes from template
                'post_status' => 'publish',
                'post_type' => 'page',
                'post_author' => 1,
                'comment_status' => 'closed',
                'ping_status' => 'closed'
            );

            if ($page['slug']) {
                $page_args['post_name'] = $page['slug'];
            }

            $page_id = wp_insert_post($page_args);

            if ($page_id && !is_wp_error($page_id)) {
                // Set page template
                update_post_meta($page_id, '_wp_page_template', $page['template']);
                
                // Set as front page if specified
                if (isset($page['is_front']) && $page['is_front']) {
                    update_option('show_on_front', 'page');
                    update_option('page_on_front', $page_id);
                }

                $created_pages[$page['key']] = $page_id;
            }
        } else {
            // Page exists, just update template and set as front if needed
            update_post_meta($existing_page->ID, '_wp_page_template', $page['template']);
            
            if (isset($page['is_front']) && $page['is_front']) {
                update_option('show_on_front', 'page');
                update_option('page_on_front', $existing_page->ID);
            }
            
            $created_pages[$page['key']] = $existing_page->ID;
        }
    }

    return $created_pages;
}

// Create navigation menu
function konsultbyra_create_menu($pages) {
    // Delete existing menu if it exists
    $existing_menu = wp_get_nav_menu_object('Primary Menu');
    if ($existing_menu) {
        wp_delete_nav_menu($existing_menu->term_id);
    }

    // Create new menu
    $menu_id = wp_create_nav_menu('Primary Menu');
    
    if (!is_wp_error($menu_id)) {
        $menu_items = array(
            array('title' => 'Hem', 'page_key' => 'home'),
            array('title' => 'Tjänster', 'page_key' => 'services'),
            array('title' => 'AI Approach', 'page_key' => 'ai-approach'),
            array('title' => 'Fallstudier', 'page_key' => 'case-studies'),
            array('title' => 'Om oss', 'page_key' => 'about'),
            array('title' => 'Kontakt', 'page_key' => 'contact')
        );

        foreach ($menu_items as $position => $item) {
            if (isset($pages[$item['page_key']])) {
                wp_update_nav_menu_item($menu_id, 0, array(
                    'menu-item-title' => $item['title'],
                    'menu-item-object' => 'page',
                    'menu-item-object-id' => $pages[$item['page_key']],
                    'menu-item-type' => 'post_type',
                    'menu-item-status' => 'publish',
                    'menu-item-position' => $position + 1
                ));
            }
        }

        // Assign menu to location
        $locations = get_theme_mod('nav_menu_locations', array());
        $locations['primary'] = $menu_id;
        set_theme_mod('nav_menu_locations', $locations);
    }
}

// Remove default WordPress content
function konsultbyra_remove_default_content() {
    // Remove "Hello World" post
    $hello_world_posts = get_posts(array(
        'post_type' => 'post',
        'meta_query' => array(
            array(
                'key' => '_wp_old_slug',
                'value' => 'hello-world'
            )
        ),
        'numberposts' => 1
    ));

    // If not found by meta, try by slug
    if (empty($hello_world_posts)) {
        $hello_world_posts = get_posts(array(
            'name' => 'hello-world',
            'post_type' => 'post',
            'numberposts' => 1
        ));
    }

    if (!empty($hello_world_posts)) {
        wp_delete_post($hello_world_posts[0]->ID, true);
    }

    // Remove "Sample Page"
    $sample_page = get_page_by_title('Sample Page');
    if ($sample_page) {
        wp_delete_post($sample_page->ID, true);
    }

    // Remove default comments
    $comments = get_comments(array('number' => 5));
    foreach ($comments as $comment) {
        wp_delete_comment($comment->comment_ID, true);
    }
}

// Add admin notice for setup
function konsultbyra_admin_notice() {
    $screen = get_current_screen();
    if (!get_option('konsultbyra_setup_complete') && current_user_can('manage_options')) {
        echo '<div class="notice notice-success is-dismissible">';
        echo '<p><strong>🎉 DataAI Konsult Theme Activated!</strong></p>';
        echo '<p>Your consultancy website content will be set up automatically. ';
        echo '<a href="' . home_url() . '" target="_blank">View your website</a> or ';
        echo '<a href="' . admin_url('admin.php?page=konsultbyra-setup') . '">manually run setup</a> if needed.</p>';
        echo '</div>';
        
        // Auto-run setup if not completed
        konsultbyra_create_all_content();
    }
}
add_action('admin_notices', 'konsultbyra_admin_notice');

// Add simple admin page for manual setup
function konsultbyra_admin_menu() {
    add_theme_page(
        'DataAI Konsult Setup',
        'Website Setup',
        'manage_options',
        'konsultbyra-setup',
        'konsultbyra_setup_page'
    );
}
add_action('admin_menu', 'konsultbyra_admin_menu');

// Setup page content
function konsultbyra_setup_page() {
    echo '<div class="wrap">';
    echo '<h1>🚀 DataAI Konsult Website Setup</h1>';
    
    // Check if setup action was triggered
    if (isset($_POST['run_setup']) || isset($_GET['action']) && $_GET['action'] === 'setup_now') {
        echo '<div style="background: #f0f0f1; padding: 20px; margin: 20px 0; border-radius: 5px;">';
        echo '<h2>Setting up your website...</h2>';
        echo '<div id="setup-log" style="font-family: monospace; background: white; padding: 15px; border: 1px solid #ccc; max-height: 400px; overflow-y: auto;">';
        
        // Force run setup and show progress
        delete_option('konsultbyra_setup_complete');
        konsultbyra_create_all_content_with_log();
        
        echo '</div>';
        echo '<p><strong>✅ Setup completed!</strong> <a href="' . home_url() . '" target="_blank">View your website</a></p>';
        echo '</div>';
        
        return;
    }
    
    if (get_option('konsultbyra_setup_complete')) {
        echo '<div class="notice notice-success"><p><strong>✅ Your website is already set up!</strong></p></div>';
        echo '<h2>Your DataAI Konsult Website</h2>';
        echo '<p>All pages, menus, and content have been created.</p>';
        echo '<ul>';
        echo '<li>🏠 <strong>Homepage:</strong> Hero section with company messaging</li>';
        echo '<li>🛠️ <strong>Services:</strong> 6 detailed service offerings</li>';
        echo '<li>🤖 <strong>AI Approach:</strong> Timeline and strategy</li>';
        echo '<li>📊 <strong>Case Studies:</strong> Client success stories</li>';
        echo '<li>👥 <strong>About:</strong> Team and company information</li>';
        echo '<li>📞 <strong>Contact:</strong> Contact form and details</li>';
        echo '</ul>';
        echo '<p><a href="' . home_url() . '" class="button button-primary" target="_blank">🌐 View Your Website</a> ';
        echo '<a href="' . admin_url('customize.php') . '" class="button">🎨 Customize</a></p>';
        
        echo '<hr><h3>Re-run Setup</h3>';
        echo '<p>If you need to recreate pages or menus:</p>';
        echo '<form method="post" style="display:inline;">';
        echo '<input type="submit" name="run_setup" class="button button-secondary" value="🔄 Re-run Setup" onclick="return confirm(\'This will recreate all pages and menus. Continue?\');">';
        echo '</form>';
    } else {
        echo '<div class="notice notice-info"><p><strong>Ready to set up your consultancy website!</strong></p></div>';
        echo '<p>This will create:</p>';
        echo '<ul>';
        echo '<li>✅ Homepage with hero section and company messaging</li>';
        echo '<li>✅ Services page with 6 detailed service offerings</li>';
        echo '<li>✅ AI Approach page with timeline and strategy</li>';
        echo '<li>✅ Case Studies page with client success stories</li>';
        echo '<li>✅ About page with team information</li>';
        echo '<li>✅ Contact page with form and details</li>';
        echo '<li>✅ Navigation menu connecting all pages</li>';
        echo '<li>✅ Static homepage configuration</li>';
        echo '<li>✅ Professional blue/tech styling</li>';
        echo '<li>✅ Remove default WordPress content</li>';
        echo '</ul>';
        echo '<br>';
        echo '<form method="post">';
        echo '<input type="submit" name="run_setup" class="button button-primary button-hero" value="🚀 Create All Content Now" style="font-size: 16px; padding: 15px 30px;">';
        echo '</form>';
        echo '<br><br>';
        echo '<p><strong>Direct Link:</strong> <a href="' . admin_url('admin.php?page=konsultbyra-setup&action=setup_now') . '">Click here to run setup</a></p>';
    }
    echo '</div>';
}

// Enhanced content creation with logging
function konsultbyra_create_all_content_with_log() {
    echo "🚀 Starting DataAI Konsult website setup...\n\n";
    
    // Set up basic WordPress settings first
    update_option('blogdescription', 'Vi hjälper företag att bli datadrivna med AI som assistent');
    update_option('default_comment_status', 'closed');
    update_option('default_ping_status', 'closed');
    echo "⚙️ Updated WordPress settings\n";

    // Remove default content first
    echo "\n🧹 Cleaning up default content:\n";
    
    // Remove "Hello World" post and variations
    $posts_to_remove = get_posts(array(
        'post_type' => 'post',
        'numberposts' => -1,
        'post_status' => 'any'
    ));
    
    foreach ($posts_to_remove as $post) {
        wp_delete_post($post->ID, true);
        echo "  ✅ Removed post: " . $post->post_title . "\n";
    }

    // Remove default pages
    $pages_to_remove = array('Sample Page', 'Exempelsida', 'Integritetspolicy', 'Privacy Policy');
    foreach ($pages_to_remove as $page_title) {
        $page = get_page_by_title($page_title);
        if ($page) {
            wp_delete_post($page->ID, true);
            echo "  ✅ Removed page: " . $page_title . "\n";
        }
    }

    // Remove comments
    $comments = get_comments();
    foreach ($comments as $comment) {
        wp_delete_comment($comment->comment_ID, true);
    }
    echo "  ✅ Removed default comments\n";

    // Create all pages
    echo "\n📄 Creating consultancy pages:\n";
    $pages = konsultbyra_create_pages_with_log();

    // Create navigation menu
    echo "\n🧭 Setting up navigation:\n";
    konsultbyra_create_menu_with_log($pages);

    // Mark as complete
    update_option('konsultbyra_setup_complete', true);
    echo "\n🎉 Website setup completed successfully!\n";
    echo "Visit your new website: " . home_url() . "\n";
}

// Enhanced page creation with logging
function konsultbyra_create_pages_with_log() {
    $pages_data = array(
        array(
            'title' => 'Hem',
            'slug' => '',
            'template' => 'page-home.php',
            'is_front' => true,
            'key' => 'home'
        ),
        array(
            'title' => 'Tjänster',
            'slug' => 'tjanster',
            'template' => 'page-services.php',
            'key' => 'services'
        ),
        array(
            'title' => 'AI Approach',
            'slug' => 'ai-approach',
            'template' => 'page-ai-approach.php',
            'key' => 'ai-approach'
        ),
        array(
            'title' => 'Fallstudier',
            'slug' => 'fallstudier',
            'template' => 'page-case-studies.php',
            'key' => 'case-studies'
        ),
        array(
            'title' => 'Om oss',
            'slug' => 'om-oss',
            'template' => 'page-about.php',
            'key' => 'about'
        ),
        array(
            'title' => 'Kontakt',
            'slug' => 'kontakt',
            'template' => 'page-contact.php',
            'key' => 'contact'
        )
    );

    $created_pages = array();

    foreach ($pages_data as $page) {
        // Create the page
        $page_args = array(
            'post_title' => $page['title'],
            'post_content' => '', // Content comes from template
            'post_status' => 'publish',
            'post_type' => 'page',
            'post_author' => get_current_user_id(),
            'comment_status' => 'closed',
            'ping_status' => 'closed'
        );

        if ($page['slug']) {
            $page_args['post_name'] = $page['slug'];
        }

        $page_id = wp_insert_post($page_args);

        if ($page_id && !is_wp_error($page_id)) {
            // Set page template
            update_post_meta($page_id, '_wp_page_template', $page['template']);
            
            // Set as front page if specified
            if (isset($page['is_front']) && $page['is_front']) {
                update_option('show_on_front', 'page');
                update_option('page_on_front', $page_id);
                echo "  🏠 Created homepage: " . $page['title'] . " (ID: $page_id)\n";
            } else {
                echo "  ✅ Created page: " . $page['title'] . " (ID: $page_id)\n";
            }

            $created_pages[$page['key']] = $page_id;
        } else {
            echo "  ❌ Failed to create page: " . $page['title'] . "\n";
        }
    }

    return $created_pages;
}

// Enhanced menu creation with logging
function konsultbyra_create_menu_with_log($pages) {
    // Delete existing menu if it exists
    $existing_menu = wp_get_nav_menu_object('Primary Menu');
    if ($existing_menu) {
        wp_delete_nav_menu($existing_menu->term_id);
        echo "  🗑️ Removed existing menu\n";
    }

    // Create new menu
    $menu_id = wp_create_nav_menu('Primary Menu');
    
    if (!is_wp_error($menu_id)) {
        echo "  ✅ Created 'Primary Menu'\n";
        
        $menu_items = array(
            array('title' => 'Hem', 'page_key' => 'home'),
            array('title' => 'Tjänster', 'page_key' => 'services'),
            array('title' => 'AI Approach', 'page_key' => 'ai-approach'),
            array('title' => 'Fallstudier', 'page_key' => 'case-studies'),
            array('title' => 'Om oss', 'page_key' => 'about'),
            array('title' => 'Kontakt', 'page_key' => 'contact')
        );

        foreach ($menu_items as $position => $item) {
            if (isset($pages[$item['page_key']])) {
                $menu_item_id = wp_update_nav_menu_item($menu_id, 0, array(
                    'menu-item-title' => $item['title'],
                    'menu-item-object' => 'page',
                    'menu-item-object-id' => $pages[$item['page_key']],
                    'menu-item-type' => 'post_type',
                    'menu-item-status' => 'publish',
                    'menu-item-position' => $position + 1
                ));
                
                if (!is_wp_error($menu_item_id)) {
                    echo "    ➕ Added menu item: " . $item['title'] . "\n";
                }
            }
        }

        // Assign menu to location
        $locations = get_theme_mod('nav_menu_locations', array());
        $locations['primary'] = $menu_id;
        set_theme_mod('nav_menu_locations', $locations);
        echo "  🎯 Assigned menu to primary location\n";
    } else {
        echo "  ❌ Failed to create menu\n";
    }
}
?>