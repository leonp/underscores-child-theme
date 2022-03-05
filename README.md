# Underscores child theme

A child of the WordPress Underscores theme that removes extraneous javascript and CSS.

## Usage

1. Create your Underscores theme
2. Create a child theme
3. Copy the `functions.php`, `style.css`, `footer.php` and `header.php` to your child theme folder
4. Update the appropriate file names and handles in `functions.php` and `style.css`

## What it does

- Deregisters:
  - Block editor scripts and styles
  - wpemoji scripts and styles
  - wp svg injection after `body`
  - Underscores’ navigation script
- Removes:
  - Navigation toggle button in `header.php`
  - Credits in `footer.php`



