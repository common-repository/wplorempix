=== Plugin Name ===
Contributors: bigbadboy
Author link: http://pointandstare.com
Donate link: http://wordpressfoundation.org/donate/
Tags: placeholder, pictures, images, wordpress
Requires at least: 3.0
Tested up to: 3.
Stable tag: 1.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

== Description ==

WPLoremPix WordPress plugin that pulls in random placeholder images based on http://lorempixel.com
Can be used in any page or post as well as a sidebar widget.

If kittens are more your thing, check out the other plugin WPKittehPix:
http://wordpress.org/extend/plugins/wpkittehpix/

== Installation ==

Upload in normal way, to your `/wp-content/plugins/` folder.   

1. Upload `wplorempix` folder to your `/wp-content/plugins/` directory
2. Activate the plugin
3. Add the shortcode and optional attributes to any post, page or text widget to display the placeholder image

= Shortcodes =
The most basic shortcode that can be added is `[wplorempix]`.

This will display a random abstract image at 800px.

= Optional attributes =
Attributes that can be set - with examples:

* Width : width=200
* Height : height=200
* Hue - turns image into greyscale : hue=g
* Genre - displays images from particular genre - see below for full list : genre=sports
* Dummytext - adds vertical text to the left side - note: no spaces between words : dummytext=mytext 
* Picno - adds specific picture number between 1 and 10 : picno=1

To use the full set of attributes you might use something like:
`[wplorempix width=200 height=200 hue=g genre=transport dummytext=mytext picno=10]`

= Genres: =
* abstract
* animals
* city
* food
* nightlife
* fashion
* people
* nature
* sports
* technics
* transport

== Changelog ==

= v1.0 =
* Premier release