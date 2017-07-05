=== Simple Post Views Counter ===

Contributors: RSPublishing
Tags: post views, hits, counter, post, view, postviews, view counter, views, total, hits counter, hit counter, pageviews
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=39JEX9DQXCDJY
Requires at least: 2.7
Tested up to: 4.2.2
Stable tag: 1.6
License: GPLv2
License URI: http://www.gnu.org/licenses/gpl-2.0.html

This plugin will enable you to display how many times a post has been viewed in total. The total views are displayed in entry meta of each post.

== Description ==

This plugin counts and displays all views in each post (globally throughout your site) and saves it to the database. 
The views are counted each time a page or post is requested/refreshed (unique and non-unique visitors) and is displayed in the entry meta of each post.

= About = 

The Simple Post Views Counter plugin is maintained by [YOOPlugins.com](http://yooplugins.com/)

== Installation ==

1. Download the file
2. Upload and extract the contents of this file to your wp-content/plugins/folder
3. Activate the Simple Post Views Counter in your dashboard
4. Add this code exactly as you see it to your themes content.php file (just before the closing </footer> tag:  `<?php echo 'This post has been viewed'; ?> <?php echo_views(get_the_ID()); ?> <?php echo'times'; ?>`
5. Please refer to the included images to see where exactly you need to paste the code.
6. Done! Your posts will now show the total views

== Screenshots ==

1. Database table created by plugin
2. Pasting the code snippet into your theme's content.php file
3. The output of the plugin

== Frequently Asked Questions ==

= How do I integrate the plugin into my posts? =

Simply add the following piece of code to your theme's content.php file: `<?php echo 'This post has been viewed'; ?> <?php echo_views(get_the_ID()); ?> <?php echo'times'; ?>` just before the closing </footer> tag

__Notes__

= Uninstalling the plugin =

Should you decide to remove the plugin, please make sure that you manually drop the database table that was created when installing the plugin.


= Statistics =

Should you need to "pull" view count statistics, please do so by using your Sql database export fucntion. We are looking at extending this function in an update.

= The Code Snippet to add to your content.php file =

`<?php echo 'This post has been viewed'; ?> <?php echo_views(get_the_ID()); ?> <?php echo'times'; ?>`


== Feedback, Help, and Suggestions ==

Do you need help installing getting this plugin to function correctly? Would you like us to install the plugin for you? Just email us: rcstoltz@gmail.com with email subject: Simple Post Views Counter or visit us at [YOOPlugins](http://yooplugins.com/)

== Upgrade Notice ==

= Version 1.6 = 

== Changelog ==

= Version 1.0 =

First Release Version

= 1.2 =

* tested compatibility with v3.7.1
* added blank index file to trunk (security)
* included donation link
* corrected author name
* included temp banner
* updated keywords
* updated readme

= 1.3 =

* tested compatibility with v4.0
* changed code for theme integration
* changed url and support links
* added new screenshots
* general housekeeping

= 1.5 =
* tested compatibility with core 4.1.2
* modified code snippet for proper theme integration
* added rating link and settings page
* modified reference screenshots
* updated version number
* changed support email
* general housekeeping
* added icons

= 1.5.1 =
* fixed bug in uninstall hook that responsible for undefined offset error in debug log (typo)
* added settings.php page (failed to load with last update)

= 1.6 =
* tested compatibility with core 4.2.2
* added banner and icon assets
* updated version number
* general housekeeping