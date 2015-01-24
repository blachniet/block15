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

## Release Steps

This is mostly just a reminder for me of the steps involved in releasing a new
version.

1. Update the version in [style.css](style.css)
2. Update the version in the [CHANGELOG.md](CHANGELOG.md)
3. Commit changes
4. Tag the repo
5. Build the archive

```
git archive --format=zip --prefix=block15/ -o block15.0.2.zip v0.2
```

6. Draft the release on GitHub
