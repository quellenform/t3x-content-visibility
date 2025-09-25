[![Donate](https://img.shields.io/badge/Donate-PayPal-green.svg?style=for-the-badge)](https://www.paypal.me/quellenform)
[![Latest Stable Version](https://img.shields.io/packagist/v/quellenform/t3x-content-visibility?style=for-the-badge)](https://packagist.org/packages/quellenform/t3x-content-visibility)
[![TYPO3](https://img.shields.io/badge/TYPO3-10|11|12|13-%23f49700.svg?style=for-the-badge)](https://get.typo3.org/)
[![License](https://img.shields.io/packagist/l/quellenform/t3x-content-visibility?style=for-the-badge)](https://packagist.org/packages/quellenform/t3x-content-visibility)

# Content Visibility

TYPO3 CMS Extension `content_visibility`


## What does it do?

This extension simply inserts a few CSS classes into content elements that are used to display or hide them at certain screen sizes.
The visibility of content elements can be conveniently selected via a dropdown menu in the backend.
The CSS classes can be freely configured via TypoScript and are preconfigured for use with [Twitter Bootstrap](https://getbootstrap.com/).

The extension was originally built for use in combination with *EXT:bootstrap_package*, but can also be used with *EXT:fluid_styled_content* (however, the corresponding CSS must be added manually).

> Further details on how class-controlled visibility of elements works:
> https://getbootstrap.com/docs/5.2/utilities/display/#hiding-elements


## Installation

1. Install this extension from TER or with Composer
2. Add the provided TypoScript (or Site Set) to your template
3. Use *EXT:bootstrap_package* or *EXT:fluid_styled_content* and configure your templates accordingly.
