/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(1);

/***/ }),
/* 1 */
/***/ (function(module, exports, __webpack_require__) {


var content = __webpack_require__(2);

if(typeof content === 'string') content = [[module.i, content, '']];

var transform;
var insertInto;



var options = {"hmr":true}

options.transform = transform
options.insertInto = undefined;

var update = __webpack_require__(4)(content, options);

if(content.locals) module.exports = content.locals;

if(false) {
	module.hot.accept("!!../node_modules/css-loader/dist/cjs.js!../node_modules/sass-loader/lib/loader.js!./style.scss", function() {
		var newContent = require("!!../node_modules/css-loader/dist/cjs.js!../node_modules/sass-loader/lib/loader.js!./style.scss");

		if(typeof newContent === 'string') newContent = [[module.id, newContent, '']];

		var locals = (function(a, b) {
			var key, idx = 0;

			for(key in a) {
				if(!b || a[key] !== b[key]) return false;
				idx++;
			}

			for(key in b) idx--;

			return idx === 0;
		}(content.locals, newContent.locals));

		if(!locals) throw new Error('Aborting CSS HMR due to changed css-modules locals.');

		update(newContent);
	});

	module.hot.dispose(function() { update(); });
}

/***/ }),
/* 2 */
/***/ (function(module, exports, __webpack_require__) {

exports = module.exports = __webpack_require__(3)(false);
// Module
exports.push([module.i, "/*!\nTheme Name: NocStudioX\nTheme URI: http://underscores.me/\nAuthor: Underscores.me\nAuthor URI: http://underscores.me/\nDescription: Description\nVersion: 1.0.0\nLicense: GNU General Public License v2 or later\nLicense URI: LICENSE\nText Domain: nocstudiox\nTags: custom-background, custom-logo, custom-menu, featured-images, threaded-comments, translation-ready\n\nThis theme, like WordPress, is licensed under the GPL.\nUse it to make something cool, have fun, and share what you've learned with others.\n\nNocStudioX is based on Underscores https://underscores.me/, (C) 2012-2017 Automattic, Inc.\nUnderscores is distributed under the terms of the GNU GPL v2 or later.\n\nNormalizing styles have been helped along thanks to the fine work of\nNicolas Gallagher and Jonathan Neal https://necolas.github.io/normalize.css/\n*/\n/*--------------------------------------------------------------\n>>> TABLE OF CONTENTS:\n----------------------------------------------------------------\n#Fonts\n# Normalize\n# Typography\n# Elements\n# Forms\n# Navigation\n\t## Links\n\t## Menus\n# Accessibility\n# Alignments\n# Clearings\n# Widgets\n# Content\n\t## Posts and pages\n\t## Comments\n# Infinite scroll\n# Media\n\t## Captions\n\t## Galleries\n--------------------------------------------------------------*/\n/*---------------------------------------------------------------\n#Fonts\n---------------------------------------------------------------*/\n@font-face {\n  font-family: \"Belinda\";\n  src: url(\"//db.onlinewebfonts.com/t/f6a8b2423790ec81bbbd18662bbc7f03.eot\");\n  src: url(\"//db.onlinewebfonts.com/t/f6a8b2423790ec81bbbd18662bbc7f03.eot?#iefix\") format(\"embedded-opentype\"), url(\"//db.onlinewebfonts.com/t/f6a8b2423790ec81bbbd18662bbc7f03.woff2\") format(\"woff2\"), url(\"//db.onlinewebfonts.com/t/f6a8b2423790ec81bbbd18662bbc7f03.woff\") format(\"woff\"), url(\"//db.onlinewebfonts.com/t/f6a8b2423790ec81bbbd18662bbc7f03.ttf\") format(\"truetype\"), url(\"//db.onlinewebfonts.com/t/f6a8b2423790ec81bbbd18662bbc7f03.svg#BelindaW00-Regular\") format(\"svg\"); }\n\n/*--------------------------------------------------------------\n# Normalize\n--------------------------------------------------------------*/\n/*! normalize.css v8.0.0 | MIT License | github.com/necolas/normalize.css */\n/* Document\n\t ========================================================================== */\n/**\n * 1. Correct the line height in all browsers.\n * 2. Prevent adjustments of font size after orientation changes in iOS.\n */\nhtml {\n  line-height: 1.15;\n  /* 1 */\n  -webkit-text-size-adjust: 100%;\n  /* 2 */ }\n\n/* Sections\n\t ========================================================================== */\n/**\n * Remove the margin in all browsers.\n */\nbody {\n  margin: 0; }\n\n/**\n * Correct the font size and margin on `h1` elements within `section` and\n * `article` contexts in Chrome, Firefox, and Safari.\n */\nh1 {\n  font-size: 2em;\n  margin: 0.67em 0; }\n\n/* Grouping content\n\t ========================================================================== */\n/**\n * 1. Add the correct box sizing in Firefox.\n * 2. Show the overflow in Edge and IE.\n */\nhr {\n  box-sizing: content-box;\n  /* 1 */\n  height: 0;\n  /* 1 */\n  overflow: visible;\n  /* 2 */ }\n\n/**\n * 1. Correct the inheritance and scaling of font size in all browsers.\n * 2. Correct the odd `em` font sizing in all browsers.\n */\npre {\n  font-family: monospace, monospace;\n  /* 1 */\n  font-size: 1em;\n  /* 2 */ }\n\n/* Text-level semantics\n\t ========================================================================== */\n/**\n * Remove the gray background on active links in IE 10.\n */\na {\n  background-color: transparent; }\n\n/**\n * 1. Remove the bottom border in Chrome 57-\n * 2. Add the correct text decoration in Chrome, Edge, IE, Opera, and Safari.\n */\nabbr[title] {\n  border-bottom: none;\n  /* 1 */\n  text-decoration: underline;\n  /* 2 */\n  text-decoration: underline dotted;\n  /* 2 */ }\n\n/**\n * Add the correct font weight in Chrome, Edge, and Safari.\n */\nb,\nstrong {\n  font-weight: bolder; }\n\n/**\n * 1. Correct the inheritance and scaling of font size in all browsers.\n * 2. Correct the odd `em` font sizing in all browsers.\n */\ncode,\nkbd,\nsamp {\n  font-family: monospace, monospace;\n  /* 1 */\n  font-size: 1em;\n  /* 2 */ }\n\n/**\n * Add the correct font size in all browsers.\n */\nsmall {\n  font-size: 80%; }\n\n/**\n * Prevent `sub` and `sup` elements from affecting the line height in\n * all browsers.\n */\nsub,\nsup {\n  font-size: 75%;\n  line-height: 0;\n  position: relative;\n  vertical-align: baseline; }\n\nsub {\n  bottom: -0.25em; }\n\nsup {\n  top: -0.5em; }\n\n/* Embedded content\n\t ========================================================================== */\n/**\n * Remove the border on images inside links in IE 10.\n */\nimg {\n  border-style: none; }\n\n/* Forms\n\t ========================================================================== */\n/**\n * 1. Change the font styles in all browsers.\n * 2. Remove the margin in Firefox and Safari.\n */\nbutton,\ninput,\noptgroup,\nselect,\ntextarea {\n  font-family: inherit;\n  /* 1 */\n  font-size: 100%;\n  /* 1 */\n  line-height: 1.15;\n  /* 1 */\n  margin: 0;\n  /* 2 */ }\n\n/**\n * Show the overflow in IE.\n * 1. Show the overflow in Edge.\n */\nbutton,\ninput {\n  /* 1 */\n  overflow: visible; }\n\n/**\n * Remove the inheritance of text transform in Edge, Firefox, and IE.\n * 1. Remove the inheritance of text transform in Firefox.\n */\nbutton,\nselect {\n  /* 1 */\n  text-transform: none; }\n\n/**\n * Correct the inability to style clickable types in iOS and Safari.\n */\nbutton,\n[type=\"button\"],\n[type=\"reset\"],\n[type=\"submit\"] {\n  -webkit-appearance: button; }\n\n/**\n * Remove the inner border and padding in Firefox.\n */\nbutton::-moz-focus-inner,\n[type=\"button\"]::-moz-focus-inner,\n[type=\"reset\"]::-moz-focus-inner,\n[type=\"submit\"]::-moz-focus-inner {\n  border-style: none;\n  padding: 0; }\n\n/**\n * Restore the focus styles unset by the previous rule.\n */\nbutton:-moz-focusring,\n[type=\"button\"]:-moz-focusring,\n[type=\"reset\"]:-moz-focusring,\n[type=\"submit\"]:-moz-focusring {\n  outline: 1px dotted ButtonText; }\n\n/**\n * Correct the padding in Firefox.\n */\nfieldset {\n  padding: 0.35em 0.75em 0.625em; }\n\n/**\n * 1. Correct the text wrapping in Edge and IE.\n * 2. Correct the color inheritance from `fieldset` elements in IE.\n * 3. Remove the padding so developers are not caught out when they zero out\n *\t\t`fieldset` elements in all browsers.\n */\nlegend {\n  box-sizing: border-box;\n  /* 1 */\n  color: inherit;\n  /* 2 */\n  display: table;\n  /* 1 */\n  max-width: 100%;\n  /* 1 */\n  padding: 0;\n  /* 3 */\n  white-space: normal;\n  /* 1 */ }\n\n/**\n * Add the correct vertical alignment in Chrome, Firefox, and Opera.\n */\nprogress {\n  vertical-align: baseline; }\n\n/**\n * Remove the default vertical scrollbar in IE 10+.\n */\ntextarea {\n  overflow: auto; }\n\n/**\n * 1. Add the correct box sizing in IE 10.\n * 2. Remove the padding in IE 10.\n */\n[type=\"checkbox\"],\n[type=\"radio\"] {\n  box-sizing: border-box;\n  /* 1 */\n  padding: 0;\n  /* 2 */ }\n\n/**\n * Correct the cursor style of increment and decrement buttons in Chrome.\n */\n[type=\"number\"]::-webkit-inner-spin-button,\n[type=\"number\"]::-webkit-outer-spin-button {\n  height: auto; }\n\n/**\n * 1. Correct the odd appearance in Chrome and Safari.\n * 2. Correct the outline style in Safari.\n */\n[type=\"search\"] {\n  -webkit-appearance: textfield;\n  /* 1 */\n  outline-offset: -2px;\n  /* 2 */ }\n\n/**\n * Remove the inner padding in Chrome and Safari on macOS.\n */\n[type=\"search\"]::-webkit-search-decoration {\n  -webkit-appearance: none; }\n\n/**\n * 1. Correct the inability to style clickable types in iOS and Safari.\n * 2. Change font properties to `inherit` in Safari.\n */\n::-webkit-file-upload-button {\n  -webkit-appearance: button;\n  /* 1 */\n  font: inherit;\n  /* 2 */ }\n\n/* Interactive\n\t ========================================================================== */\n/*\n * Add the correct display in Edge, IE 10+, and Firefox.\n */\ndetails {\n  display: block; }\n\n/*\n * Add the correct display in all browsers.\n */\nsummary {\n  display: list-item; }\n\n/* Misc\n\t ========================================================================== */\n/**\n * Add the correct display in IE 10+.\n */\ntemplate {\n  display: none; }\n\n/**\n * Add the correct display in IE 10.\n */\n[hidden] {\n  display: none; }\n\n/*--------------------------------------------------------------\n# Typography\n--------------------------------------------------------------*/\nbody,\nbutton,\ninput,\nselect,\noptgroup,\ntextarea {\n  color: #404040;\n  font-family: sans-serif;\n  font-size: 16px;\n  font-size: 1rem;\n  line-height: 1.5; }\n\nh1, h2, h3, h4, h5, h6 {\n  clear: both; }\n\np {\n  margin-bottom: 1.5em; }\n\ndfn, cite, em, i {\n  font-style: italic; }\n\nblockquote {\n  margin: 0 1.5em; }\n\naddress {\n  margin: 0 0 1.5em; }\n\npre {\n  background: #eee;\n  font-family: \"Courier 10 Pitch\", Courier, monospace;\n  font-size: 15px;\n  font-size: 0.9375rem;\n  line-height: 1.6;\n  margin-bottom: 1.6em;\n  max-width: 100%;\n  overflow: auto;\n  padding: 1.6em; }\n\ncode, kbd, tt, var {\n  font-family: Monaco, Consolas, \"Andale Mono\", \"DejaVu Sans Mono\", monospace;\n  font-size: 15px;\n  font-size: 0.9375rem; }\n\nabbr, acronym {\n  border-bottom: 1px dotted #666;\n  cursor: help; }\n\nmark, ins {\n  background: #fff9c0;\n  text-decoration: none; }\n\nbig {\n  font-size: 125%; }\n\n/*--------------------------------------------------------------\n# Elements\n--------------------------------------------------------------*/\nhtml {\n  box-sizing: border-box; }\n\n*,\n*:before,\n*:after {\n  /* Inherit box-sizing to make it easier to change the property for components that leverage other behavior; see https://css-tricks.com/inheriting-box-sizing-probably-slightly-better-best-practice/ */\n  box-sizing: inherit; }\n\nbody {\n  background: #fff;\n  /* Fallback for when there is no custom background color defined. */ }\n\nhr {\n  background-color: #ccc;\n  border: 0;\n  height: 1px;\n  margin-bottom: 1.5em; }\n\nul, ol {\n  margin: 0 0 1.5em 3em; }\n\nul {\n  list-style: disc; }\n\nol {\n  list-style: decimal; }\n\nli > ul,\nli > ol {\n  margin-bottom: 0;\n  margin-left: 1.5em; }\n\ndt {\n  font-weight: bold; }\n\ndd {\n  margin: 0 1.5em 1.5em; }\n\nimg {\n  height: auto;\n  /* Make sure images are scaled correctly. */\n  max-width: 100%;\n  /* Adhere to container width. */ }\n\nfigure {\n  margin: 1em 0;\n  /* Extra wide images within figure tags don't overflow the content area. */ }\n\ntable {\n  margin: 0 0 1.5em;\n  width: 100%; }\n\n/*--------------------------------------------------------------\n# Forms\n--------------------------------------------------------------*/\nbutton,\ninput[type=\"button\"],\ninput[type=\"reset\"],\ninput[type=\"submit\"] {\n  border: 1px solid;\n  border-color: #ccc #ccc #bbb;\n  border-radius: 3px;\n  background: #e6e6e6;\n  color: rgba(0, 0, 0, 0.8);\n  font-size: 12px;\n  font-size: 0.75rem;\n  line-height: 1;\n  padding: .6em 1em .4em; }\n  button:hover,\n  input[type=\"button\"]:hover,\n  input[type=\"reset\"]:hover,\n  input[type=\"submit\"]:hover {\n    border-color: #ccc #bbb #aaa; }\n  button:active, button:focus,\n  input[type=\"button\"]:active,\n  input[type=\"button\"]:focus,\n  input[type=\"reset\"]:active,\n  input[type=\"reset\"]:focus,\n  input[type=\"submit\"]:active,\n  input[type=\"submit\"]:focus {\n    border-color: #aaa #bbb #bbb; }\n\ninput[type=\"text\"],\ninput[type=\"email\"],\ninput[type=\"url\"],\ninput[type=\"password\"],\ninput[type=\"search\"],\ninput[type=\"number\"],\ninput[type=\"tel\"],\ninput[type=\"range\"],\ninput[type=\"date\"],\ninput[type=\"month\"],\ninput[type=\"week\"],\ninput[type=\"time\"],\ninput[type=\"datetime\"],\ninput[type=\"datetime-local\"],\ninput[type=\"color\"],\ntextarea {\n  color: #666;\n  border: 1px solid #ccc;\n  border-radius: 3px;\n  padding: 3px; }\n  input[type=\"text\"]:focus,\n  input[type=\"email\"]:focus,\n  input[type=\"url\"]:focus,\n  input[type=\"password\"]:focus,\n  input[type=\"search\"]:focus,\n  input[type=\"number\"]:focus,\n  input[type=\"tel\"]:focus,\n  input[type=\"range\"]:focus,\n  input[type=\"date\"]:focus,\n  input[type=\"month\"]:focus,\n  input[type=\"week\"]:focus,\n  input[type=\"time\"]:focus,\n  input[type=\"datetime\"]:focus,\n  input[type=\"datetime-local\"]:focus,\n  input[type=\"color\"]:focus,\n  textarea:focus {\n    color: #111; }\n\nselect {\n  border: 1px solid #ccc; }\n\ntextarea {\n  width: 100%; }\n\n/*--------------------------------------------------------------\n# Navigation\n--------------------------------------------------------------*/\n/*--------------------------------------------------------------\n## Links\n--------------------------------------------------------------*/\na {\n  color: royalblue; }\n  a:visited {\n    color: purple; }\n  a:hover, a:focus, a:active {\n    color: midnightblue; }\n  a:focus {\n    outline: thin dotted; }\n  a:hover, a:active {\n    outline: 0; }\n\n/*--------------------------------------------------------------\n## Menus\n--------------------------------------------------------------*/\n.main-navigation {\n  clear: both;\n  display: block;\n  float: left;\n  width: 100%; }\n  .main-navigation ul {\n    display: none;\n    list-style: none;\n    margin: 0;\n    padding-left: 0; }\n    .main-navigation ul ul {\n      box-shadow: 0 3px 3px rgba(0, 0, 0, 0.2);\n      float: left;\n      position: absolute;\n      top: 100%;\n      left: -999em;\n      z-index: 99999; }\n      .main-navigation ul ul ul {\n        left: -999em;\n        top: 0; }\n      .main-navigation ul ul li:hover > ul,\n      .main-navigation ul ul li.focus > ul {\n        left: 100%; }\n      .main-navigation ul ul a {\n        width: 200px; }\n    .main-navigation ul li:hover > ul,\n    .main-navigation ul li.focus > ul {\n      left: auto; }\n  .main-navigation li {\n    float: left;\n    position: relative; }\n  .main-navigation a {\n    display: block;\n    text-decoration: none; }\n\n/* Small menu. */\n.menu-toggle,\n.main-navigation.toggled ul {\n  display: block; }\n\n@media screen and (min-width: 37.5em) {\n  .menu-toggle {\n    display: none; }\n  .main-navigation ul {\n    display: block; } }\n\n.site-main .comment-navigation, .site-main\n.posts-navigation, .site-main\n.post-navigation {\n  margin: 0 0 1.5em;\n  overflow: hidden; }\n\n.comment-navigation .nav-previous,\n.posts-navigation .nav-previous,\n.post-navigation .nav-previous {\n  float: left;\n  width: 50%; }\n\n.comment-navigation .nav-next,\n.posts-navigation .nav-next,\n.post-navigation .nav-next {\n  float: right;\n  text-align: right;\n  width: 50%; }\n\n/*--------------------------------------------------------------\n# Accessibility\n--------------------------------------------------------------*/\n/* Text meant only for screen readers. */\n.screen-reader-text {\n  border: 0;\n  clip: rect(1px, 1px, 1px, 1px);\n  clip-path: inset(50%);\n  height: 1px;\n  margin: -1px;\n  overflow: hidden;\n  padding: 0;\n  position: absolute !important;\n  width: 1px;\n  word-wrap: normal !important;\n  /* Many screen reader and browser combinations announce broken words as they would appear visually. */ }\n  .screen-reader-text:focus {\n    background-color: #f1f1f1;\n    border-radius: 3px;\n    box-shadow: 0 0 2px 2px rgba(0, 0, 0, 0.6);\n    clip: auto !important;\n    clip-path: none;\n    color: #21759b;\n    display: block;\n    font-size: 14px;\n    font-size: 0.875rem;\n    font-weight: bold;\n    height: auto;\n    left: 5px;\n    line-height: normal;\n    padding: 15px 23px 14px;\n    text-decoration: none;\n    top: 5px;\n    width: auto;\n    z-index: 100000;\n    /* Above WP toolbar. */ }\n\n/* Do not show the outline on the skip link target. */\n#content[tabindex=\"-1\"]:focus {\n  outline: 0; }\n\n/*--------------------------------------------------------------\n# Alignments\n--------------------------------------------------------------*/\n.alignleft {\n  display: inline;\n  float: left;\n  margin-right: 1.5em; }\n\n.alignright {\n  display: inline;\n  float: right;\n  margin-left: 1.5em; }\n\n.aligncenter {\n  clear: both;\n  display: block;\n  margin-left: auto;\n  margin-right: auto; }\n\n/*--------------------------------------------------------------\n# Clearings\n--------------------------------------------------------------*/\n.clear:before,\n.clear:after,\n.entry-content:before,\n.entry-content:after,\n.comment-content:before,\n.comment-content:after,\n.site-header:before,\n.site-header:after,\n.site-content:before,\n.site-content:after,\n.site-footer:before,\n.site-footer:after {\n  content: \"\";\n  display: table;\n  table-layout: fixed; }\n\n.clear:after,\n.entry-content:after,\n.comment-content:after,\n.site-header:after,\n.site-content:after,\n.site-footer:after {\n  clear: both; }\n\n/*--------------------------------------------------------------\n# Widgets\n--------------------------------------------------------------*/\n.widget {\n  margin: 0 0 1.5em;\n  /* Make sure select elements fit in widgets. */ }\n  .widget select {\n    max-width: 100%; }\n\n/*--------------------------------------------------------------\n# Content\n--------------------------------------------------------------*/\n/*--------------------------------------------------------------\n## Posts and pages\n--------------------------------------------------------------*/\n.sticky {\n  display: block; }\n\n.post,\n.page {\n  margin: 0 0 1.5em; }\n\n.updated:not(.published) {\n  display: none; }\n\n.page-content,\n.entry-content,\n.entry-summary {\n  margin: 1.5em 0 0; }\n\n.page-links {\n  clear: both;\n  margin: 0 0 1.5em; }\n\n/*--------------------------------------------------------------\n## Comments\n--------------------------------------------------------------*/\n.comment-content a {\n  word-wrap: break-word; }\n\n.bypostauthor {\n  display: block; }\n\n/*--------------------------------------------------------------\n# Infinite scroll\n--------------------------------------------------------------*/\n/* Globally hidden elements when Infinite Scroll is supported and in use. */\n.infinite-scroll .posts-navigation,\n.infinite-scroll.neverending .site-footer {\n  /* Theme Footer (when set to scrolling) */\n  display: none; }\n\n/* When Infinite Scroll has reached its end we need to re-display elements that were hidden (via .neverending) before. */\n.infinity-end.neverending .site-footer {\n  display: block; }\n\n/*--------------------------------------------------------------\n# Media\n--------------------------------------------------------------*/\n.page-content .wp-smiley,\n.entry-content .wp-smiley,\n.comment-content .wp-smiley {\n  border: none;\n  margin-bottom: 0;\n  margin-top: 0;\n  padding: 0; }\n\n/* Make sure embeds and iframes fit their containers. */\nembed,\niframe,\nobject {\n  max-width: 100%; }\n\n/* Make sure logo link wraps around logo image. */\n.custom-logo-link {\n  display: inline-block; }\n\n/*--------------------------------------------------------------\n## Captions\n--------------------------------------------------------------*/\n.wp-caption {\n  margin-bottom: 1.5em;\n  max-width: 100%; }\n  .wp-caption img[class*=\"wp-image-\"] {\n    display: block;\n    margin-left: auto;\n    margin-right: auto; }\n  .wp-caption .wp-caption-text {\n    margin: 0.8075em 0; }\n\n.wp-caption-text {\n  text-align: center; }\n\n/*--------------------------------------------------------------\n## Galleries\n--------------------------------------------------------------*/\n.gallery {\n  margin-bottom: 1.5em; }\n\n.gallery-item {\n  display: inline-block;\n  text-align: center;\n  vertical-align: top;\n  width: 100%; }\n  .gallery-columns-2 .gallery-item {\n    max-width: 50%; }\n  .gallery-columns-3 .gallery-item {\n    max-width: 33.33%; }\n  .gallery-columns-4 .gallery-item {\n    max-width: 25%; }\n  .gallery-columns-5 .gallery-item {\n    max-width: 20%; }\n  .gallery-columns-6 .gallery-item {\n    max-width: 16.66%; }\n  .gallery-columns-7 .gallery-item {\n    max-width: 14.28%; }\n  .gallery-columns-8 .gallery-item {\n    max-width: 12.5%; }\n  .gallery-columns-9 .gallery-item {\n    max-width: 11.11%; }\n\n.gallery-caption {\n  display: block; }\n", ""]);



/***/ }),
/* 3 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


/*
  MIT License http://www.opensource.org/licenses/mit-license.php
  Author Tobias Koppers @sokra
*/
// css base code, injected by the css-loader
module.exports = function (useSourceMap) {
  var list = []; // return the list of modules as css string

  list.toString = function toString() {
    return this.map(function (item) {
      var content = cssWithMappingToString(item, useSourceMap);

      if (item[2]) {
        return '@media ' + item[2] + '{' + content + '}';
      } else {
        return content;
      }
    }).join('');
  }; // import a list of modules into the list


  list.i = function (modules, mediaQuery) {
    if (typeof modules === 'string') {
      modules = [[null, modules, '']];
    }

    var alreadyImportedModules = {};

    for (var i = 0; i < this.length; i++) {
      var id = this[i][0];

      if (id != null) {
        alreadyImportedModules[id] = true;
      }
    }

    for (i = 0; i < modules.length; i++) {
      var item = modules[i]; // skip already imported module
      // this implementation is not 100% perfect for weird media query combinations
      // when a module is imported multiple times with different media queries.
      // I hope this will never occur (Hey this way we have smaller bundles)

      if (item[0] == null || !alreadyImportedModules[item[0]]) {
        if (mediaQuery && !item[2]) {
          item[2] = mediaQuery;
        } else if (mediaQuery) {
          item[2] = '(' + item[2] + ') and (' + mediaQuery + ')';
        }

        list.push(item);
      }
    }
  };

  return list;
};

function cssWithMappingToString(item, useSourceMap) {
  var content = item[1] || '';
  var cssMapping = item[3];

  if (!cssMapping) {
    return content;
  }

  if (useSourceMap && typeof btoa === 'function') {
    var sourceMapping = toComment(cssMapping);
    var sourceURLs = cssMapping.sources.map(function (source) {
      return '/*# sourceURL=' + cssMapping.sourceRoot + source + ' */';
    });
    return [content].concat(sourceURLs).concat([sourceMapping]).join('\n');
  }

  return [content].join('\n');
} // Adapted from convert-source-map (MIT)


function toComment(sourceMap) {
  // eslint-disable-next-line no-undef
  var base64 = btoa(unescape(encodeURIComponent(JSON.stringify(sourceMap))));
  var data = 'sourceMappingURL=data:application/json;charset=utf-8;base64,' + base64;
  return '/*# ' + data + ' */';
}

/***/ }),
/* 4 */
/***/ (function(module, exports, __webpack_require__) {

/*
	MIT License http://www.opensource.org/licenses/mit-license.php
	Author Tobias Koppers @sokra
*/

var stylesInDom = {};

var	memoize = function (fn) {
	var memo;

	return function () {
		if (typeof memo === "undefined") memo = fn.apply(this, arguments);
		return memo;
	};
};

var isOldIE = memoize(function () {
	// Test for IE <= 9 as proposed by Browserhacks
	// @see http://browserhacks.com/#hack-e71d8692f65334173fee715c222cb805
	// Tests for existence of standard globals is to allow style-loader
	// to operate correctly into non-standard environments
	// @see https://github.com/webpack-contrib/style-loader/issues/177
	return window && document && document.all && !window.atob;
});

var getTarget = function (target, parent) {
  if (parent){
    return parent.querySelector(target);
  }
  return document.querySelector(target);
};

var getElement = (function (fn) {
	var memo = {};

	return function(target, parent) {
                // If passing function in options, then use it for resolve "head" element.
                // Useful for Shadow Root style i.e
                // {
                //   insertInto: function () { return document.querySelector("#foo").shadowRoot }
                // }
                if (typeof target === 'function') {
                        return target();
                }
                if (typeof memo[target] === "undefined") {
			var styleTarget = getTarget.call(this, target, parent);
			// Special case to return head of iframe instead of iframe itself
			if (window.HTMLIFrameElement && styleTarget instanceof window.HTMLIFrameElement) {
				try {
					// This will throw an exception if access to iframe is blocked
					// due to cross-origin restrictions
					styleTarget = styleTarget.contentDocument.head;
				} catch(e) {
					styleTarget = null;
				}
			}
			memo[target] = styleTarget;
		}
		return memo[target]
	};
})();

var singleton = null;
var	singletonCounter = 0;
var	stylesInsertedAtTop = [];

var	fixUrls = __webpack_require__(5);

module.exports = function(list, options) {
	if (typeof DEBUG !== "undefined" && DEBUG) {
		if (typeof document !== "object") throw new Error("The style-loader cannot be used in a non-browser environment");
	}

	options = options || {};

	options.attrs = typeof options.attrs === "object" ? options.attrs : {};

	// Force single-tag solution on IE6-9, which has a hard limit on the # of <style>
	// tags it will allow on a page
	if (!options.singleton && typeof options.singleton !== "boolean") options.singleton = isOldIE();

	// By default, add <style> tags to the <head> element
        if (!options.insertInto) options.insertInto = "head";

	// By default, add <style> tags to the bottom of the target
	if (!options.insertAt) options.insertAt = "bottom";

	var styles = listToStyles(list, options);

	addStylesToDom(styles, options);

	return function update (newList) {
		var mayRemove = [];

		for (var i = 0; i < styles.length; i++) {
			var item = styles[i];
			var domStyle = stylesInDom[item.id];

			domStyle.refs--;
			mayRemove.push(domStyle);
		}

		if(newList) {
			var newStyles = listToStyles(newList, options);
			addStylesToDom(newStyles, options);
		}

		for (var i = 0; i < mayRemove.length; i++) {
			var domStyle = mayRemove[i];

			if(domStyle.refs === 0) {
				for (var j = 0; j < domStyle.parts.length; j++) domStyle.parts[j]();

				delete stylesInDom[domStyle.id];
			}
		}
	};
};

function addStylesToDom (styles, options) {
	for (var i = 0; i < styles.length; i++) {
		var item = styles[i];
		var domStyle = stylesInDom[item.id];

		if(domStyle) {
			domStyle.refs++;

			for(var j = 0; j < domStyle.parts.length; j++) {
				domStyle.parts[j](item.parts[j]);
			}

			for(; j < item.parts.length; j++) {
				domStyle.parts.push(addStyle(item.parts[j], options));
			}
		} else {
			var parts = [];

			for(var j = 0; j < item.parts.length; j++) {
				parts.push(addStyle(item.parts[j], options));
			}

			stylesInDom[item.id] = {id: item.id, refs: 1, parts: parts};
		}
	}
}

function listToStyles (list, options) {
	var styles = [];
	var newStyles = {};

	for (var i = 0; i < list.length; i++) {
		var item = list[i];
		var id = options.base ? item[0] + options.base : item[0];
		var css = item[1];
		var media = item[2];
		var sourceMap = item[3];
		var part = {css: css, media: media, sourceMap: sourceMap};

		if(!newStyles[id]) styles.push(newStyles[id] = {id: id, parts: [part]});
		else newStyles[id].parts.push(part);
	}

	return styles;
}

function insertStyleElement (options, style) {
	var target = getElement(options.insertInto)

	if (!target) {
		throw new Error("Couldn't find a style target. This probably means that the value for the 'insertInto' parameter is invalid.");
	}

	var lastStyleElementInsertedAtTop = stylesInsertedAtTop[stylesInsertedAtTop.length - 1];

	if (options.insertAt === "top") {
		if (!lastStyleElementInsertedAtTop) {
			target.insertBefore(style, target.firstChild);
		} else if (lastStyleElementInsertedAtTop.nextSibling) {
			target.insertBefore(style, lastStyleElementInsertedAtTop.nextSibling);
		} else {
			target.appendChild(style);
		}
		stylesInsertedAtTop.push(style);
	} else if (options.insertAt === "bottom") {
		target.appendChild(style);
	} else if (typeof options.insertAt === "object" && options.insertAt.before) {
		var nextSibling = getElement(options.insertAt.before, target);
		target.insertBefore(style, nextSibling);
	} else {
		throw new Error("[Style Loader]\n\n Invalid value for parameter 'insertAt' ('options.insertAt') found.\n Must be 'top', 'bottom', or Object.\n (https://github.com/webpack-contrib/style-loader#insertat)\n");
	}
}

function removeStyleElement (style) {
	if (style.parentNode === null) return false;
	style.parentNode.removeChild(style);

	var idx = stylesInsertedAtTop.indexOf(style);
	if(idx >= 0) {
		stylesInsertedAtTop.splice(idx, 1);
	}
}

function createStyleElement (options) {
	var style = document.createElement("style");

	if(options.attrs.type === undefined) {
		options.attrs.type = "text/css";
	}

	if(options.attrs.nonce === undefined) {
		var nonce = getNonce();
		if (nonce) {
			options.attrs.nonce = nonce;
		}
	}

	addAttrs(style, options.attrs);
	insertStyleElement(options, style);

	return style;
}

function createLinkElement (options) {
	var link = document.createElement("link");

	if(options.attrs.type === undefined) {
		options.attrs.type = "text/css";
	}
	options.attrs.rel = "stylesheet";

	addAttrs(link, options.attrs);
	insertStyleElement(options, link);

	return link;
}

function addAttrs (el, attrs) {
	Object.keys(attrs).forEach(function (key) {
		el.setAttribute(key, attrs[key]);
	});
}

function getNonce() {
	if (false) {
		return null;
	}

	return __webpack_require__.nc;
}

function addStyle (obj, options) {
	var style, update, remove, result;

	// If a transform function was defined, run it on the css
	if (options.transform && obj.css) {
	    result = typeof options.transform === 'function'
		 ? options.transform(obj.css) 
		 : options.transform.default(obj.css);

	    if (result) {
	    	// If transform returns a value, use that instead of the original css.
	    	// This allows running runtime transformations on the css.
	    	obj.css = result;
	    } else {
	    	// If the transform function returns a falsy value, don't add this css.
	    	// This allows conditional loading of css
	    	return function() {
	    		// noop
	    	};
	    }
	}

	if (options.singleton) {
		var styleIndex = singletonCounter++;

		style = singleton || (singleton = createStyleElement(options));

		update = applyToSingletonTag.bind(null, style, styleIndex, false);
		remove = applyToSingletonTag.bind(null, style, styleIndex, true);

	} else if (
		obj.sourceMap &&
		typeof URL === "function" &&
		typeof URL.createObjectURL === "function" &&
		typeof URL.revokeObjectURL === "function" &&
		typeof Blob === "function" &&
		typeof btoa === "function"
	) {
		style = createLinkElement(options);
		update = updateLink.bind(null, style, options);
		remove = function () {
			removeStyleElement(style);

			if(style.href) URL.revokeObjectURL(style.href);
		};
	} else {
		style = createStyleElement(options);
		update = applyToTag.bind(null, style);
		remove = function () {
			removeStyleElement(style);
		};
	}

	update(obj);

	return function updateStyle (newObj) {
		if (newObj) {
			if (
				newObj.css === obj.css &&
				newObj.media === obj.media &&
				newObj.sourceMap === obj.sourceMap
			) {
				return;
			}

			update(obj = newObj);
		} else {
			remove();
		}
	};
}

var replaceText = (function () {
	var textStore = [];

	return function (index, replacement) {
		textStore[index] = replacement;

		return textStore.filter(Boolean).join('\n');
	};
})();

function applyToSingletonTag (style, index, remove, obj) {
	var css = remove ? "" : obj.css;

	if (style.styleSheet) {
		style.styleSheet.cssText = replaceText(index, css);
	} else {
		var cssNode = document.createTextNode(css);
		var childNodes = style.childNodes;

		if (childNodes[index]) style.removeChild(childNodes[index]);

		if (childNodes.length) {
			style.insertBefore(cssNode, childNodes[index]);
		} else {
			style.appendChild(cssNode);
		}
	}
}

function applyToTag (style, obj) {
	var css = obj.css;
	var media = obj.media;

	if(media) {
		style.setAttribute("media", media)
	}

	if(style.styleSheet) {
		style.styleSheet.cssText = css;
	} else {
		while(style.firstChild) {
			style.removeChild(style.firstChild);
		}

		style.appendChild(document.createTextNode(css));
	}
}

function updateLink (link, options, obj) {
	var css = obj.css;
	var sourceMap = obj.sourceMap;

	/*
		If convertToAbsoluteUrls isn't defined, but sourcemaps are enabled
		and there is no publicPath defined then lets turn convertToAbsoluteUrls
		on by default.  Otherwise default to the convertToAbsoluteUrls option
		directly
	*/
	var autoFixUrls = options.convertToAbsoluteUrls === undefined && sourceMap;

	if (options.convertToAbsoluteUrls || autoFixUrls) {
		css = fixUrls(css);
	}

	if (sourceMap) {
		// http://stackoverflow.com/a/26603875
		css += "\n/*# sourceMappingURL=data:application/json;base64," + btoa(unescape(encodeURIComponent(JSON.stringify(sourceMap)))) + " */";
	}

	var blob = new Blob([css], { type: "text/css" });

	var oldSrc = link.href;

	link.href = URL.createObjectURL(blob);

	if(oldSrc) URL.revokeObjectURL(oldSrc);
}


/***/ }),
/* 5 */
/***/ (function(module, exports) {


/**
 * When source maps are enabled, `style-loader` uses a link element with a data-uri to
 * embed the css on the page. This breaks all relative urls because now they are relative to a
 * bundle instead of the current page.
 *
 * One solution is to only use full urls, but that may be impossible.
 *
 * Instead, this function "fixes" the relative urls to be absolute according to the current page location.
 *
 * A rudimentary test suite is located at `test/fixUrls.js` and can be run via the `npm test` command.
 *
 */

module.exports = function (css) {
  // get current location
  var location = typeof window !== "undefined" && window.location;

  if (!location) {
    throw new Error("fixUrls requires window.location");
  }

	// blank or null?
	if (!css || typeof css !== "string") {
	  return css;
  }

  var baseUrl = location.protocol + "//" + location.host;
  var currentDir = baseUrl + location.pathname.replace(/\/[^\/]*$/, "/");

	// convert each url(...)
	/*
	This regular expression is just a way to recursively match brackets within
	a string.

	 /url\s*\(  = Match on the word "url" with any whitespace after it and then a parens
	   (  = Start a capturing group
	     (?:  = Start a non-capturing group
	         [^)(]  = Match anything that isn't a parentheses
	         |  = OR
	         \(  = Match a start parentheses
	             (?:  = Start another non-capturing groups
	                 [^)(]+  = Match anything that isn't a parentheses
	                 |  = OR
	                 \(  = Match a start parentheses
	                     [^)(]*  = Match anything that isn't a parentheses
	                 \)  = Match a end parentheses
	             )  = End Group
              *\) = Match anything and then a close parens
          )  = Close non-capturing group
          *  = Match anything
       )  = Close capturing group
	 \)  = Match a close parens

	 /gi  = Get all matches, not the first.  Be case insensitive.
	 */
	var fixedCss = css.replace(/url\s*\(((?:[^)(]|\((?:[^)(]+|\([^)(]*\))*\))*)\)/gi, function(fullMatch, origUrl) {
		// strip quotes (if they exist)
		var unquotedOrigUrl = origUrl
			.trim()
			.replace(/^"(.*)"$/, function(o, $1){ return $1; })
			.replace(/^'(.*)'$/, function(o, $1){ return $1; });

		// already a full url? no change
		if (/^(#|data:|http:\/\/|https:\/\/|file:\/\/\/|\s*$)/i.test(unquotedOrigUrl)) {
		  return fullMatch;
		}

		// convert the url to a full url
		var newUrl;

		if (unquotedOrigUrl.indexOf("//") === 0) {
		  	//TODO: should we add protocol?
			newUrl = unquotedOrigUrl;
		} else if (unquotedOrigUrl.indexOf("/") === 0) {
			// path should be relative to the base url
			newUrl = baseUrl + unquotedOrigUrl; // already starts with '/'
		} else {
			// path should be relative to current directory
			newUrl = currentDir + unquotedOrigUrl.replace(/^\.\//, ""); // Strip leading './'
		}

		// send back the fixed url(...)
		return "url(" + JSON.stringify(newUrl) + ")";
	});

	// send back the fixed css
	return fixedCss;
};


/***/ })
/******/ ]);