# CS16 Retro WordPress Theme

A nostalgic WordPress theme inspired by the **Counter-Strike 1.6** user interface. This theme integrates [cs16.css](https://github.com/ekmas/cs16.css) to provide retro buttons, dialogs, sliders, progress bars, and more, while still maintaining the full power of WordPress.

## Table of Contents
- [Overview](#overview)
- [Features](#features)
- [Installation](#installation)
- [Usage & Configuration](#usage--configuration)
  - [Customizer Support](#customizer-support)
  - [Menus](#menus)
  - [Sticky Footer](#sticky-footer)
  - [Blog Page](#blog-page)
- [Planned Enhancements](#planned-enhancements)
  - [Plugin Integrations](#plugin-integrations)
  - [Theme Improvements](#theme-improvements)
- [Contributing](#contributing)
- [Credits](#credits)
- [License](#license)

---

## Overview
**CS16 Retro Theme** is designed to bring the nostalgic look and feel of Counter-Strike 1.6 right into your WordPress website. Retro color schemes, pixel fonts, and old-school UI elements evoke the feeling of being in the classic game menu, while providing a fully modern WordPress experience under the hood.

---

## Features
- **Retro UI Elements**: Buttons, inputs, checkboxes, radio fields, tooltips, progress bars, and tabs styled like CS 1.6 menus.  
- **Customizable**: Take advantage of the WordPress Customizer to adjust background and accent colors.  
- **Sticky Footer**: Uses a simple flex container strategy to keep the footer at the bottom of the screen on short pages.  
- **Responsive Layout**: Basic responsive approach for various devices.  
- **Enqueued CSS**: `cs16-custom.css` is enqueued alongside `style.css` to allow easy updates and overrides.  
- **Menu Support**: Register multiple menu locations (header, footer) for easy navigation setup.

---

## Installation
1. **Download the Theme**: Clone or download the `cs16-theme` folder into the `/wp-content/themes/` directory of your WordPress installation.
2. **Activate the Theme**: In your WordPress admin panel, go to **Appearance > Themes** and activate “CS16 Retro Theme.”
3. **Set Up Menus** (Optional): Go to **Appearance > Menus** to create and assign menus to the registered theme locations (e.g. `header-menu`, `footer-menu`).
4. **Configure Customizer** (Optional): Under **Appearance > Customize**, you can adjust the background color, accent color, etc.

---

## Usage & Configuration

### Customizer Support
- **Background Color**: Changes the main background (`--bg`) in `:root`.  
- **Accent Color**: Adjusts headers, button highlights, and major accent elements (`--accent`).  
- These options can be accessed via **Appearance > Customize**.

### Menus
- Menu locations defined in `functions.php`: `header-menu` and `footer-menu`.
- Use **Appearance > Menus** to assign a menu to either location.
- Menus display with `.cs-nav-menu` and `.cs-nav-ul` classes to inherit retro styling from `cs16.css`.

### Sticky Footer
- Implemented via a wrapper (`.site-wrapper`) set with `display: flex; flex-direction: column;` and `<main>` given `flex: 1;`. This ensures the footer stays at the bottom even on short pages.

### Blog Page
- Use the default WordPress “Posts page” setting in **Settings > Reading**, or
- Create a custom page template (`page-blog.php`) to list blog posts with a custom query, using `cs16.css` classes (e.g. `.cs-title`, `.cs-hr`, `.cs-btn`).

---

## Planned Enhancements

### Plugin Integrations
1. **Advanced Custom Fields (ACF)**  
   - Add custom fields for “Favorite Weapon,” “Player Stats,” or other game-like data to be displayed on single post or custom post type pages.
2. **Yoast SEO / Rank Math**  
   - Enhance SEO metadata, sitemaps, and analysis while maintaining the retro styling for any front-end elements they may introduce.
3. **WooCommerce**  
   - Create a store layout with retro UI elements for adding a “CS1.6 shop” vibe, featuring `.cs-btn` style “Add to Cart” buttons and `.cs-hr` separators.

### Theme Improvements
1. **Sidebar / Widget Areas**  
   - Implement an optional sidebar with widget support (`register_sidebar()`) and apply retro classes for widget headers (`.cs-title`) and content (`.cs-checkbox__label`).
2. **Comment Section Redesign**  
   - Make the comment form and thread more “retro” by styling inputs with `.cs-input`, comment submit buttons with `.cs-btn`, and headings with `.cs-title`.
3. **Pagination Styling**  
   - Replace default pagination links with `.cs-btn` elements or create a `.cs-pagination` container to provide a consistent retro design.
4. **Shortcodes or Blocks**  
   - Provide shortcodes or custom Gutenberg blocks for adding CS16-themed tooltips, progress bars, or tabs in post content.
5. **Additional Color Schemes**  
   - Offer more color palettes in the Customizer, e.g. desert, ice, or dust-themed palettes reminiscent of classic CS maps.

---

## Contributing

Contributions are welcome to make the CS16 Retro WordPress Theme even better! Here’s how you can help:

1. **Report Bugs**: If you find any issues, please [open an issue](https://github.com/your-repo-url/issues) with a detailed description and screenshots if possible.
2. **Suggest Features**: Got an idea to improve the theme? Feel free to suggest enhancements by [creating a feature request](https://github.com/your-repo-url/issues).
3. **Submit Pull Requests**: If you’re a developer, fork the repository, make your changes, and submit a pull request with a clear explanation of the update.
4. **Test and Review**: Help by testing updates and providing feedback for further improvement.

---

## Credits
- **cs16.css** by [ekmas](https://github.com/ekmas/cs16.css) for the base retro styling.  
- **ArialPixel.ttf** included in the cs16.css repository for that nostalgic, pixelated text feel.  
- WordPress.org for the CMS platform.

---

## License
This theme is released under the **MIT License**, making it open for any form of usage, distribution, or modification as long as the original authors are credited where appropriate. See the [LICENSE](./LICENSE) file for details.

---

### Final Notes
Enjoy combining WordPress with the classic Counter-Strike 1.6 vibe! Pull requests, issues, and suggestions are welcome. Feel free to [contact me](mailto:tunay@bones.com.tr) if you have any questions or improvements to share.

**Happy fragging and coding!**

