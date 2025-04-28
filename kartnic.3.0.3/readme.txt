=== Kartnic ===
Contributors: Niteen Maurya
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Tags: two-columns, three-columns, one-column, right-sidebar, left-sidebar, footer-widgets, blog, e-commerce, flexible-header, full-width-template, buddypress, custom-header, custom-background, custom-menu, custom-colors, sticky-post, threaded-comments, translation-ready, featured-images, theme-options
Requires at least: 5.0
Tested up to: 6.2
Stable tag: 3.0.3

Kartnic is a lightweight WordPress theme built with a focus on speed and usability.

== Description ==
Kartnic is crafted to be a lightweight and fast WordPress theme, ensuring your site loads quickly and efficiently. A fresh install of Kartnic adds less than 10kb (gzipped) to your page size, making it an excellent choice for performance-conscious users.
We fully leverage the block editor (Gutenberg), providing you with greater control over your content creation process.
If you prefer using page builders, Kartnic is compatible with major ones like Beaver Builder and Elementor.
Our commitment to WordPress coding standards ensures compatibility with well-coded plugins, including WooCommerce.
Kartnic is fully responsive, uses valid HTML/CSS, and is translated into multiple languages by our community of users.
Some of our features include customizable color controls, dynamic typography, multiple navigation locations, and widget areas.

== Installation ==
= From within WordPress =
1. Visit "Appearance > Themes > Add New"
1. Search for "Kartnic"
1. Install and activate

== Frequently Asked Questions ==

= Is Kartnic Free? =
Yes! Kartnic is a free theme, and always will be.

= Where can I find the theme options? =
All of our options can be found in the Customizer in 'Appearance > Customize'.

= Does Kartnic have any widget areas? =
Kartnic has up to 9 widget areas which you can add widgets to in Appearance > Widgets.
 
== License ==
Kartnic is licensed under the GNU General Public License v2 or later

More details [here](http://www.gnu.org/licenses/gpl-2.0.html).


== Changelog ==

= 3.0.3 =

Improved: Added customizable footer width options, allowing users to select between "Full" and "Contained" width for the footer.
Improved: Introduced customizable inner footer width options, with choices for "Full" and "Contained" layouts.
Improved: Added a setting to control the number of footer widgets (1–6), offering more flexibility in the footer design.
Enhanced: Integrated WordPress Customizer settings for easy customization of footer layouts and widgets.
Fixed: Ensured proper functionality and UI for footer widget controls in the WordPress Customizer.
Improved: Added customizable blog content type with options for "Single" or "Full Content" display.
Improved: Enabled customizable blog excerpt length (between 10 to 200 words).
Improved: Added a setting to change the "Read More" label in blog posts.
Improved: Added an option to display "Read More" as a button.
Improved: Added a setting to toggle the display of post date, author, categories, tags, and comment count.
Improved: Added a customizable option to toggle the display of featured images in blog posts.
Improved: Added settings for controlling the location and alignment of featured images (above or below title, left, center, right).
Improved: Allowed users to choose the featured image size (Full, Medium, or Large).
Improved: Added an option to display posts in columns (with a customizable number of columns from 1 to 6).
Improved: Introduced a setting to make the first post in the blog feed a featured post.
Enhanced: Added a notice and a button in the WordPress Customizer if the Kartnic Premium plugin is not active, promoting additional options in the premium version.
Improved: Added customizable container width options, with control over container width (700px–2000px) using up/down arrows.
Improved: Introduced a setting for adjusting the separating space between content elements in the container.
Improved: Added a setting to control the content separator (in em units), allowing control over space between featured image, title, content, and entry meta.
Improved: Introduced a choice between separate containers or a single container for the content layout.
Improved: Added customizable padding options (top, right, bottom, left) for the content area in the container.
Improved: Added customizable header presets with options for "Navigation Right" and "Navigation Left".
Improved: Added settings for header width, with options for "Full" or "Contained" layout.
Improved: Added setting to customize the inner header width (Full or Contained).
Improved: Added header alignment settings, allowing users to align the header content to the left, center, or right.
Improved: Introduced custom CSS to dynamically change header alignment based on user settings.
Improved: Added setting for primary navigation font size with the ability to customize the font size via the WordPress Customizer.
Improved: Added mobile menu breakpoint setting with a customizable CSS length (px, em, rem, etc.), making mobile optimization more flexible.
Improved: Added padding and height customization for menu items and sub-menu items (left padding, height, and sub-menu width) to improve menu flexibility.
Improved: Ensured all user inputs for mobile menu breakpoint, padding, and height are sanitized for safety and correct display.
Improved: Integration of WordPress Customizer for real-time preview and better control over the theme’s layout.
Improved: Updated the documentation for easier navigation of new customizer settings.
 
= 3.0.2 =

Improved: Updated typography settings across the site, including font size, weight, letter spacing, and line height for headers (H1 to H6) and paragraphs.
Improved: Applied new font families to the headers and paragraphs to align with the brand's visual identity.
Improved: Adjusted base font sizes to improve readability and overall layout consistency across different devices.
Enhanced: Updated color settings for various site elements, including site container, buttons, navigation, and post sections, ensuring a more cohesive color scheme.
Enhanced: Improved contrast for button text and navigation links to meet accessibility standards.
Fixed: Refined color settings for mobile views to ensure consistency with desktop layouts.
Fixed: Ensured color accessibility for visually impaired users by providing sufficient contrast between text and background colors.

= 3.0.1 =
Improved: Conditional rendering of the footer; now only displayed when footer widgets are active.
Improved: Applied display: flex; to header menu items for better alignment and spacing.
Fixed: Footer now hides when empty, removing unnecessary white space.

= 3.0 =
Improved: Added clickable links for post title, featured image, and author name in the `search.php` template to enhance user navigation.
Improved: Updated the search button and form to handle tab and click interactions, making it easier to open and close the search form with the keyboard and mouse.
Added: Focus trapping within the search form to ensure users remain within the form when navigating with the tab key.
Enhanced: Added event listeners to handle search form toggling on space and enter key presses for improved accessibility.
Fixed: Implemented code to track and return focus to the last focused element when the search form is closed.
Enhanced: Updated mobile menu behavior to shift focus to the mobile menu button after closing the search form.

= 2.9 =
Improved: Added focus trapping to the search form, keeping keyboard navigation within it when open.
Added: New flag (shouldFocusOnMobileMenu) to shift focus to the mobile menu button after closing the search form.
Fixed: Keyboard accessibility for Space and Enter keys to toggle and submit the search form correctly.
Enhanced: Focus management for search form and mobile menu button, improving accessibility for keyboard and mobile users.

= 2.8 =
Improved: Post navigation now hides completely when there is no previous or next post available.
Fixed: CSS for post navigation now only applies when navigation exists, preventing unnecessary styling.
Added: Dynamic class (no-post-navigation) added to hide post navigation if no posts exist for navigation.
Enhanced: Pagination functionality now conditionally displays only if a previous or next post is available.
Fixed: Improved tab key navigation behavior for post navigation, ensuring no focus shift when navigation is hidden.

= 2.7 =
- Improved: Mobile menu toggle functionality with JavaScript and CSS.
- Fixed: Sub-menus open only on arrow click.
- Added: Right-aligned arrow and button in the navigation menu.
- Enhanced: Desktop navigation with tab key support for sub-menus.
- Fixed: Header logo display issues.

= 2.6 =
Improved: Padding in the `.inside-header` class for better alignment.
Added: Option to show/hide the author card in the customizer under General Settings.
Updated: Function name in `single.php` to `kartnic_display_author_card` for displaying the author card.
Fixed: Error related to undefined function `display_author_card`.
Fixed: Provided a unique prefix for everything the Theme defines in the public namespace, including options, functions, global variables, constants, post meta, wp_enqueue_script/style handle names, add_image_size names, wp_script_add_data keys, slugs/ids for new categories created with register_block_pattern_category, etc. Theme nav menu locations and sidebar IDs are exceptions.
Fixed: Keyboard navigation issues.
Fixed: Links within content must be underlined.
Fixed: Added `if ( is_admin() ) return $length;` in `functions.php` at line 276.
Fixed: Escaped output in `functions.php` at line 287.
Fixed: Used the Enqueue API in `header.php` at line 13.
Fixed: Escaped `home_url` in `header.php`.
Fixed: Toggle mobile menu visibility on space bar and enter key press.
Fixed: Disabled toggle functionality on click outside the menu.
ixed: Search form functionality to open on Enter or Space key press without immediate submission.

= 2.5 =
Improved: Page PHP content and sidebar made dynamic.
Improved: Various CSS changes for better styling.
Improved: Header background color set to default white.
Fixed: Content list alignment issues.
Added: About Author section in posts.
Added: Author profile template (author.php).

= 2.4 =
Improved: Performance optimizations for faster load times. 
Improved: Compatibility with the latest version.
Fixed: Minor CSS issues for better cross-browser compatibility. 
Fixed: Bug with the mobile menu not displaying correctly.

= 2.3 =
Fixed: Back to top button functionality.
Fixed: Style issues in CSS.
Fixed: Display of skip link.
Fixed: Comment section issues.
Fixed: Prefix usage in code.

= 2.2 =
Added: control for blog excerpt length in the Customizer.
Added: a notice and button below the excerpt length control to promote the premium version.
Improved: accessibility by ensuring visual keyboard focus highlighting for navigation menus, form fields, submit buttons, and text links.
Fixed: various minor bugs and improved overall theme performance.

= 2.1 =
Added: Left sidebar in the sidebar section
Added: Right sidebar option in the sidebar section
Added: No sidebar option in the sidebar section
Added: Excerpt Length section in the blog section
Added: Blog and sidebar sections in the customize panel
Fixed: CSS sidebar issue
Fixed: Excerpt issue
Fixed: Header logo
Fixed: Header title
Fixed: Header description
Modified: Pagination element clear issue

= 2.0 =
Added: A div element to the main section to enhance structure and layout.
Fixed: Several minor bugs to improve overall functionality and performance.
Fixed: Corrected an HTML syntax error to ensure proper rendering.
Modified: Updated the id attribute of an HTML tag for better identification and styling.

= 1.9 =
Added: Pagination feature for better navigation between posts.
Fixed: Various bugs to improve overall functionality.
Modified: CSS for enhanced visual appearance and user experience.

= 1.8 =
Added: Minor UI improvements.
Added: Updated documentation.
Added: Support for the “Back to Top” button.
Fixed: Minor bugs.
Fixed: Improved compatibility with the latest WordPress version.

= 1.7 =
Added: New customization options.
Added: Support for custom block patterns and styles.
Fixed: Compatibility issues with the latest WordPress version.

= 1.6 =
Changed: Improved theme performance.
Changed: Enhanced theme responsiveness.
Fixed: Resolved minor bugs.

= 1.5 =
Added: New widgets for footer areas.
Added: Support for custom post navigation settings in the customizer.
Fixed: CSS issues.

= 1.4 =
Changed: Updated theme options.
Changed: Improved header and footer design.
Fixed: Issues with image galleries.
Fixed: Resolved JavaScript errors.

= 1.3 =
Added: New page templates.
Added: Support for excerpts on pages.
Fixed: Installation issues.
Fixed: Improved compatibility with plugins.

= 1.2 =
Added: A new homepage layout.
Added: Support for editor styles.
Fixed: Minor bugs.

= 1.1 =
Added: Initial release of the Kartnic WordPress Theme.
