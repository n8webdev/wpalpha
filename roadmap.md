# Web Brochure

## Installation

* Download wordpress core files from wordpress.org;
* Install MAMP;
* Create a new folder for the project under 'MAMP/htdocs/<projectName>';
* Copy wordpress core file (NOT the folder) into the project's folder;
* Start MAMP and open application page;
* Check port, username and password displayed at the left side;
* Rename wp-config-sample.php' on project's folder to wp-config;
* Open it with a text editor and edit MySQL settings => DB_NAME, user, password & port;
* Go to MAMP application page on the browser and open PHPMyAdmin;
* Create a new database with the same name set to MySQL settings in wp-congif.php file;
* Access localhost/<project> and install wordpress on your project;

## Authentication Unique Keys and Salts

* wp-config file brings a link to a url that auto generates such info on line 44;
* Access the link, copy the info and paste it into wp-config file;
* It will require user to login again.

## Plugins
* Always pay attention to number of installations, review, last update and compatibility with WP version;
* Install and activate:
    * Contact form 7;
    * Email Address Encoder;
    * Google Analyticator;
    * WP Google Maps
* Test Email Address Encoder by typing an email on the page.

## Editing
* Edit text on main page on pages/Sample Page (edit);
* Insert an image;
* Go to Appearance/Customize and do some editing using the theme's tools;

## Pages
* Create the Following pages:
    * About;
    * Contact Us;
    * Portfolio.
* Create a menu (under appearance);

## Email Form
* Click on Contacts;
* Edit contact form 1 and save it;
* Copy shortcode and paste it into Contact Us page

## Maps
* Click on Maps;
* Create one, copy the shortcode and paste it into wherever it's cool;
* note: WP Google Map Plugin is a better plugin.

## Analytics
* Sign in to analytics;
* Create new project and get tracking ID;
* Sign in from plugin and activate options;
* note: Google Analytics by MonsterInsigths is an option.

# Blog Style
## Modify Home Page and Import Sample
* Download Theme Unit Test xml;
* Copy file to prject root folder;
* On the admin panel, click on Tools/Import;
* Import WordPress and run it;
* Upload and Import theme-unit-test.xml;
* Check Download and import file attachments box and hit submit.

## Display most recent posts on the front page
* Go to Settings/Reading;
* Set Front page displays to latest posts and adjust the amount of posts;
* In case any post is too long, add the 'readmore' to the post itself by editing it.

## Changing the Theme
* Go to Appearance/Themes and select a new one;
* Create 3 new Posts and add a feature image (right column) to each;
* Create a new Category (Photographs);
* Using 'Quick Edit' categorize these new posts;
* Unable 'sticky' for sticy post;
* Add lorem ipsum text to the posts;
* Take care of featured image's ratio if needed;
* Go to media, choose an image and edit it accordingly;

## Customizing the theme's appearance
* Go to Appearance/customize;
* Select 'Featured content', choose a layout and a tag name;
* Go to each post and add the tag name for the featured content.

## Create a Portfolio
* Select a page and go to 'Edit';
* Select Add Media then Create Gallery;
* Select the images;
* Adjust Gallery settings.

## Category Navigation (taxonomy)
* Go to customize/widgets;
* Add a widget => category;
* Empty categories won't be shown.

## Tag Navigation
* Go to customize/tags;
* Create or Edit a tag;
* Go to any post and add one or more tags to it (right column);
* Customize/widgets will allow the 'Tag Cloud' to be added.

# Site Migration
## Plugin Oriented
### Backup
* Install All-In-One WP Migration plugin;
* Export Project using the plugin;
* Save the backup somewhere.

### New Project
* Create a new project following standard step-by-step guide;
* Initialize project;
* Install All-In-One WP Migration plugin;
* Import backup;
* Save permalink settings twice;
* Test website.

## Manual Approach
### New Project
* Create a new folder and keep it empty;
* Copy all the files from the project to be migrated directly to the newly created folder for New Project;

### Database
* Create a new database;
* Export data from original project;
* Save it somewhere;
* Import the .sql file to New Project's database;
* Edit wp-options by changing the site url;
* Edit wp-config to connect to the New Project's database;

### Check Database
* Access the database and go to search;
* Look for the url of the old project => %<old-project> (the exact phrase in all the tables);
* Edit manually in case of just a few matches;
* IF there are a lot of matches install and use 'Search and replace' plugin;

## Staging Development
### Hosting Services
* Create a new installation exactly alike the project to be hosted;
* Upload the backup and use the hosting server's staging feature to do it.

### Local Staging
* Create a Local New Project;
* Export the project's backup;
* Extract it to the just created local folder;
* Do all the editing needed, then upload the project to the live server.

## Changing theme and updating live site
### Hands-on
* Export live site backup;
* Download new theme (wordpress.com/themes/affinity);
* Create a new project, upload the backup and make it available online;
* Upload the theme (.zip);
* Increase upload capacity if needed:
    * Open HTACCESS file;
    * Add the line: php_value upload_max_filesize 8M;
* Change whatever it is then export the project's file;
* Upload the new project to the live environment.
* note: this will overwrite the live database. Therefore, this is NOT the best approach for blog-like pages.

# Child Themes
## Manual Approach
* Select the project on which you'll work;
* Create a folder for the child theme under the 'themes' directory named as \<parent-theme\>-child;
* Under the new folder, create a style.css file;
* Go to codex.wordpress.org/Child_Themes and copy the commented css code;
* Paste it to style.css and edit the Theme Name (<parent-theme> child) and Template (<parent-theme>);
* Create a functions.php file;
* Go to codex.wordpress.org/Child_Themes and copy the commented PHP code;
* Paste it to functions.php;
* Refresh the page, activate the child theme and check if it works (it should);
* Apply some css changes to the child so as to check if style.css works.

## Plugin Approach
* Install 'Child Theme Configurator' plugin;
* Click on Tools/Child Themes;
* Select 'Create a NEW child theme;
* Select the parent theme and click 'Analyze';
* Edit the Theme's name accordingly;
* Check oprion 8 (first configuration only);
* Click on Preview;
* Edit style.css locally;
* Test it.

## Admin Dashboard
* Create a backup of the current activated theme;
* Look for a snippet to do what you want;
* For removing the 'Users' menu from dashboard add the following code to the 'functions.php' file of your CHILD theme:
```
    <?php
        function remove_menus(){
            remove_menu_page( 'users.php' );                  //Users
        }
        add_action( 'admin_menu', 'remove_menus' );
    ?>
```

# Using a Framework (Genesis in this case)
```
    <p>note: The available themes are already child themes and can be updated following along with the parent (framework's) theme.</p>
```
## Set-up
* Go to student sandbox and login;
* Activate Parallax Pro Theme;

## Editing
* Open the customizer;
* Change logo, featured pictures and what else you want to;

### Images
* Open a page which contain one or more images;
* Click on the picture and then on the edit icon;
* Under 'Advanced', remove or add the classes pull-left/right.

### Footer
* Go to Plugins and activate Genesis Simple Edits;
* Go to Genesis/Simple edits;
* Edit accordingly

### Extra
* Open up the Customizer;
* Edit:
    * Page Layout;
    * Content Archives (Display Post Excerpts add the readmore link automatically);
    * Whatever other widget or page content desired.

## Custom change without editing the css
* Activate the Simple Custom CSS plugin;
* Go to Appearance/ Custom CSS and edit accordingly.

# Editing the functions.php file safely
```
    <p>note: Use WPCLIPS plugin for the Genesis-like frameworks' themes.</p>
```

## Select the Project
* Open the 'live-site' project locally;
* Install the 'Code Snippets' plugin;
* Go to Snipptes/ Add new;

## Change the WordPress Admin Panel Login Logo
### Image
* Create new Snippet;
* Name it as 'Login Logo';
* Go to codex.wordpress.org/Customizing_the_Login_Form for a reference;
* Copy the PHP snippet;
* Paste it to the 'Login Logo' snippet;
* Edit the 'background-image' url under the css code so as to contain the name of your new logo file;
* Get an 80 x 80px image and save it to a folder called 'images' under the CURRENT THEME'S folder;
* Save the snippet and activate it;
* Give it a shot, it should work!

### Redirect
* Go to the reference page and copy the snippet for my_login_logo_url;
* Paste it to the 'Login Logo' snippet and edit the website's title;
* Change the scope of the snippet to 'Run everywhere'.
* Test it!

# Plugins
## General view
* Check out premium.wpmudev.org > Plugins and browse through the many options available;
* Note that most of them are installed on your sandbox;
* Check the Ultimate Branding plugin. It allows the dev to remove WP Branding from the whole app and replace it with his or the client's, as well as eliminating unecessary menu items;
* Check out WPMU DEV Dashboard for a personilized version of the Admin Dashboard;
* Defender, Hummingbird, Popup Pro 2, Membership 2 Pro and Snapshot Pro are also very good options. 

## Envato Market
### Payed Features
* Access envato.com and go to the Codecanyon/ wordpress page;
* Search for 'popup' and do a little tour with LayeredPopups;
* Access themeforest/ wordpress and browse through thousands of different themes;
* Create an account and/or browse through the pages to get Free Files and hollidays discounts;

### Free Features
* Evaluate the Following criterias:
    * Amount of Active Installations;
    * Compatibility with current version of WP;
    * Users ratings;
    * Support Page comments.

## Performance and Speed Test
* Install P3 plugin;
* Run a scan using the plugin;
* View Results;
* Deactivate plugings that don't need to be active for the page to load (such as All-in-one WP);
* Run the scan again;
* Install Responsive Lightbox by dFactory plugin.
* Deactivate Child Theme Configurator;
* Run the scan;
* Install WP Tiles;
* Setup a gallery and activate wp-tiles on it;
* Run the scan again.

## Soliloquy
* Install the Soliloquy lite plugin;
* Create new slider;
* Select images;
* Copy one of the shortcodes and paste it into the page you want the slider to be shown;
* Edit settings accordingly.

# Corporate Style WebSite
## Setup
* Open the students sandbox and navigate to My Sites;
* Add new;
* Name the site including the word 'executive' for easily finding it later;
* Login to the new website;
* Download demo data;
* Activate the theme;
* Select tools/import;
* Import executive-pro.xml file;
* Setup your user as author of the content to be created and check the 'Download and Import file attachements' box.

## Customisation
* Remove the widgets from Home page (slider, top and footer);
* Activate Regenerate Thumbnails plugin;
* Select tools/ Regen. thumbnails and execute the plugin;
* Activate Genesis Responsive Slider;
* Go to Customize;
### Home - Slider
* Add a Genesis Responsive Slider widget to Home Slider widget area;
* Back to the dashboard, go to Genesis/ slider settings;
* Configure it to show Posts from all taxonomies and terms;
* Delete the Hello, world! post;
* Check if the slider is working properly;
### Home - Top
* Open up the Home - Top widget area;
* Add the Genesis Featured Pages widgets to it;
* Setup the widget as follows:
    * Title: Development;
    * Page: Development;
    * Show featured image: 300px x 100px;
    * Show page title: false;
    * Shwo content: true;
    * Character limit: 150;
    * More text: 'Read more >>'.
* Save and Publish;
* Add two pages more.
### Home - Call to action
* Add a Text Widget to the Call to Action widget area;
* Fill up title and content areas' text accordingly;
### Home - middle
* Add the Genesis Featured Pages widgets to it;
* Add 3 widgets different from the Home - Top widget area;
### Footer
* Configure such area to look just like the demo page (https://demo.studiopress.com/executive/).

## Special CSS classes
* Executive Pro Gists...
* Go to GitHub Gists and look for studiopress/call-to-action-banner.html;
* Copy the snippet;
* Paste it into the Contact Us widget and edit it accordingly;
* Go to the 'Column Classes' page and view its source code;
* Copy the code for a 'third of a page' column;
* Create a new page;
* Name it as Three columns;
* Open the 'text' editing tab;
* Paste the snippet;
* Change the Layout so it excludes the sidebar.

## Navigation, Header and Footer
* Go to appearance/ menus and create a new one;
* Name it as Executive menu;
* Add to it the pages:
    * Home;
    * Development;
    * Design;
    * Telecommunications;
    * Contact us;
* Go to appearance/ widgets;
* Set the Custom Menu in the Header Right widget area to Executive menu;
* Go to customize;
* Set a new image to the Header Image widget area;
* Activate the Genesis Simple Edits plugin;
* Go to Genesis/ Simple edits;
* Edit it accordingly.

## Custom Post Types and Taxonomies
### Portfolio Archive
* Go to Portfolio/ archive settings;
* Add a header and a description;
* Check the new look of the page.
* note: creating custom post types inside of a theme is a risk since they will be lost in case of an update. The best practice is to use a plugin to do such thing. Exemples are:
    * Custompress (premium plugin by wpmudev);
    * Custom post type UI (free by webdev studios)

## Featured Post Widgets and Blog Archive
* Go to the sticky post and uncheck the sticky option under the visibility property (top-right box);
* Get 6 1600px wide images from the live-site dir (wp-content/uploads/2011/07) and save them to another folder;
* Get the Slider images from the demo site and do the same;
* Upload them to the media gallery;
* Set the images appropriately to the posts/images as featured images.
* Change the Responsive Slider to show pages included by ID (get the ID of the wished pages);
* Change the Home - Top widget area to display posts as follows:
    * All categories;
    * 1 post to show;
    * Offset 1 related to the current featured post from the second widget on;
    * Show Featured image;
    * Show post title;
    * Limit content to 130 chars.
* Do the same to the Home - middle area;
* Create a new page with the Blog template;
* Add it to the menu;
* Configure it to show featured images and entry excerpts on Genesis/ Theme settings.

## Contact form and customisation
* Activate contact form 7 and contact form 7 popup message plugins;
* Go to contact/ contact form 1;
* Add a phone number field to the form and make it rquired;
* Go to the tab Mail and add this new info to the email template;
* Go to Popup Message Addons and select one template;
* Get the shortcode for the form and past it to the contact page.

# Cafe Pro Theme
## Initial Setup
* Create a new site and name it as Cafe Pro;
* Activate the Cafe Pro theme;
* Import specific data;
* Add some content to the 'Before content' widget area.

## Menu configuration
* Go to appearance/ menus;
* Select the 'Primary Navigation' menu;
* Edit the path to the widget areas (change it from /cafe/... to /...) for About, Menu, Mission, Mantra and Location;
* Set its location to Primary Navigation Menu;
* Set the Footer Navigation Menu to Secondary Navigation (Menus/ manage locations).

## Pages Layout
* Go to Genesis/ Theme settings;
* Change the Layout to full-width.

## Customize Home Page
* Select the widget area Front Page 2;
* Remove the current widget;
* Add 5 Genesis Featured Pages widgets with the following settings:
    * Show page content limited to 150 chars;
    * No image shown;
    * Don't show page title;
    * Set titles manually;
    * Add the Read More >> text.
* In case you want to change the size of the featured image go to Settings/ media and set it to 300x100;
* Get Images from wptavern.com (https://wptavern.com/13-sources-for-free-public-domain-and-cc0-licensed-images);
* Regenerate Thumbnails plugin activated and ran;
* Refresh the page and see the result.
* Go to customize/ colors;
* Change the accent and get the hexa code;
* Go to Footer 1/ simple social icons/ and paste it to hover color.
* Add recent posts to footer 2;
* Add a text widget to footer 3;

## Custom Post Types with Custompress
* Activate CustomPress plugin;
* Go to the CustomPress/ Photograph;
* Edit the supports to include Title, Editor, Thumbnail and Excerpt;
* Support Tags only;
* Map Meta Capabilities to true;
* Labels:
    * Photographs;
    * Photograph;
    * Add new;
    * Add new Photograph;
    * Edit Photograph;
    * New Photograph;
    * View Photograph;
    * Search Photographs;
    * No photographs found;
    * No photographs found in trash;
    * Parent Photograph;
    * Photograph information.
* Menu position 20;
* Has an archive => true;
* Custom slug => photographs;
* EP mask = none;
* Add post type;
* Add new Taxonomy;
* Name it as photo_type;
* Available for photograph;
* Labels following the custom post type pattern (last three options must be left blank);
* Show admin column;
* Hierarchical to true;
* Add taxonomy type;
* Custom Fields to be used in Photograph:
    * Camera:;
    * Lens:;
    * Date taken: (with Date Picker).
* Save it.

## Implement the new custom type
* Add new Photograph;
* Create 4 posts with tags and custom fields;
* Open the /photographs page;
* Go to Genesis/ Theme settings;
* Content Archives must display Excerpts, featured image 300x300;
* Change the medium thumbnail size to 600x600 and Regenerate with the plugin;
* Go to CustomPress/ settings;
* On "Archive" pages, display these post types: photographs;
* Click on a tag (antique), there should be at least one post there.

## Home Page Content and Conditional Widgets
* Activate Custom Sidebars Pro plugin;
* Go to Appearance/ widgets;
* Create new sidebar called Image data;
* Add a text widget to it (Title: Image Data);
* Go to Custom Types and copy the shortcode for Custom Fields;
* Paste it to the new sidebar text widget;
* Click on sidebar location and set it to as footer 2 with Photograph;
* Change Background Images;
* On the Front Page 4, add for text widgets representing the categories created and set up a read more link as well as a clickable image to the category page;
* Create a new page, add the picture you want and link it to the url of the category page, then change to the Text tab and grab the code.... save the page as a draft;
* Paste the code inside the widgets in Front Page 4 widget area.

# Author Pro
## Setup Author Pro Theme and Plugin
* Create a new site called *author-cpt;
* Setup the newly created site as the main of your dashboard;
* Activate the Author Pro Theme;
* Activate the Author Pro plugin;
* Import demo content.

## Front-end Display
* Open up the Customizer;
* Set 'Header Navigation Menu' as Header Menu and 'Secondary Navigation Menu' as Secondary Menu;
* Edit Header Menu so as to have only:
    * Typography;
    * Sample Page (and sub-menus);
    * Contact Page;
    * Buy this theme.
* Save and Publish;
* Open the Library and select a book;
* Type in any featured text and see how it is displayed on the website;
* Go to Library/ Series;
* Type in some text to work as Archive Headline and Intro text;
* Check the result;
* Go to Appearance/ Menus and check the box 'CSS classes' under the Screen Options tab;
* Select the Secondary Menu to edit and apply the class 'highlight' to whatever menu item you want to be float-right.

## Author Pro Homepage and Book Widgets
### Front Page 1
* Set 1 Featured Page widget here.

## Front Page 2
* Set 4 Featured Books widget here.

## Front Page 3
* Set 1 Featured Post widget here.

## Front Page 4
* Set 3 Text Widgets with reviews/ testimonials here.

## Front Page 5
* Set 1 Featured Page (about the author) widget here.

## Footer
### Footer 1
* Go to customiser and get the accent color hexa code;
* Open the widgets editor and change the social icons settings as follows:
    * Hover color as the accent;
    * Size and border radius 90px;
### Footer 2
* Go to media and change the thumbnails to 200px x 200px and deactivate the Cropping;
* Regenerate the thumbnails;
* Set a Featured Book with thumbnail, title and price aligned to center to this widget area;

## Changing Themes and preserving CPT data
* Activate the Interior Pro Theme;
* Edit the widgets and page layout so as to match the demo site.

# Email Setup
## Site Setup
* Install a fresh WP installation on a live server (under a directory by choice);

## Account Setup
* Create and validate an account on MailChimp;

## Forms
* Create an 'Embedded Form' for the a given list;
* Copy the text;
* Go to Appearance/ widgets and create a text widget;
* Paste the code and save it;
* Optionally, delete the <style> content so that the form inherits the theme' style;
