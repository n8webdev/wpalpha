# Tips and Tricks

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
    ** Contact form 7;
    ** Email Address Encoder;
    ** Google Analyticator;
    ** WP Google Maps
* Test Email Address Encoder by typing an email on the page.

## Editing
* Edit text on main page on pages/Sample Page (edit);
* Insert an image;
* Go to Appearance/Customize and do some editing using the theme's tools;

## Pages
* Create the Following pages:
    ** About;
    ** Contact Us;
    ** Portfolio.
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