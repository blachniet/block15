# Block 15

**Block 15** is WordPress theme built for [Brian Lachniet's website](http://blachniet.com).
It is a child theme of [Twenty Fifteen](https://wordpress.org/themes/twentyfifteen).

![Block 15](https://raw.githubusercontent.com/blachniet/block15/master/screenshot.jpg)

## Features

Below is a list of some of the differences between this theme and it's parent:

- Added logo to sidebar/header
- Changed font to [Roboto](http://www.google.com/fonts/specimen/Roboto)
- Added [highlight.js](https://highlightjs.org/) for syntax highlighting
- Increased size of social icons
- Hid category links in post footers
- Added custom footer
- Increased nav menu font size
- Changed `pre` background color
- Disabled comments - added share on Twitter button instead
- Added a footer menu

## Release Steps

This is mostly just a reminder for me of the steps involved in releasing a new
version.

1. Update the version in [style.css](style.css).
1. Commit changes.
1. Tag, build and publish.

    ```sh
    git tag v0.2
    git archive --format=zip --prefix=block15/ -o block15.0.2.zip v0.2
    gh release create v0.2 block15.0.2.zip
    ```

## Quick Specs

- Colors:
  - Dark Gray: #333
  - Dark Blue: #007acc

From [Twenty Fifteen](https://wordpress.org/themes/twentyfifteen):

- The main content width is 660px.
- The sidebar width is 248px.
- Featured Images are 825px wide by 510px high.
