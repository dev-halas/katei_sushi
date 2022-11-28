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
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
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
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = "./_dev/app.js");
/******/ })
/************************************************************************/
/******/ ({

/***/ "./_dev/app.js":
/*!*********************!*\
  !*** ./_dev/app.js ***!
  \*********************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _css_styles_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./css/styles.scss */ \"./_dev/css/styles.scss\");\n/* harmony import */ var _css_styles_scss__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_css_styles_scss__WEBPACK_IMPORTED_MODULE_0__);\n\n\n__webpack_require__(/*! ./js/swiper_init */ \"./_dev/js/swiper_init.js\");\n\n__webpack_require__(/*! ./js/news */ \"./_dev/js/news.js\");\n__webpack_require__(/*! ./js/navbar */ \"./_dev/js/navbar.js\");\n__webpack_require__(/*! ./js/menu */ \"./_dev/js/menu.js\");\n\n\n\n//# sourceURL=webpack:///./_dev/app.js?");

/***/ }),

/***/ "./_dev/css/styles.scss":
/*!******************************!*\
  !*** ./_dev/css/styles.scss ***!
  \******************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

eval("// extracted by mini-css-extract-plugin\n\n//# sourceURL=webpack:///./_dev/css/styles.scss?");

/***/ }),

/***/ "./_dev/js/menu.js":
/*!*************************!*\
  !*** ./_dev/js/menu.js ***!
  \*************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("const mobile = document.querySelector('.mobile');\nconst links = document.querySelector('.menuLinks');\n\nmobile.addEventListener('click', () => {\n  mobile.classList.toggle('mobile--opened')\n  links.classList.toggle('menuLinks--opened')\n})\n\n//# sourceURL=webpack:///./_dev/js/menu.js?");

/***/ }),

/***/ "./_dev/js/navbar.js":
/*!***************************!*\
  !*** ./_dev/js/navbar.js ***!
  \***************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("const navSlide = () => {\n    const burger = document.querySelector('.hamburger');\n    const navlink = document.querySelector('.navbar__links');\n    const nav = document.querySelector('nav');\n\n    burger.addEventListener('click', () => {\n        nav.classList.toggle('hamburger--active');\n    });\n\n    navlink.addEventListener('click', () => {\n      nav.classList.toggle('hamburger--active');\n    });\n}\n\nnavSlide();\n\nvar navbar = document.querySelector('nav')\n\nwindow.onscroll = function() {\n\n  // pageYOffset or scrollY\n  if (window.pageYOffset > 100) {\n    navbar.classList.add('scrolled')\n  } else {\n    navbar.classList.remove('scrolled')\n  }\n}\n\n//# sourceURL=webpack:///./_dev/js/navbar.js?");

/***/ }),

/***/ "./_dev/js/news.js":
/*!*************************!*\
  !*** ./_dev/js/news.js ***!
  \*************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("var swiper = new Swiper('.home__newsWrapper', {\n    // Default parameters\n    slidesPerView: 4,\n    spaceBetween: 10,\n    // Responsive breakpoints\n    breakpoints: {\n        // when window width is >= 320px\n        320: {\n            slidesPerView: 1,\n            spaceBetween: 10\n        },\n        // when window width is >= 480px\n        480: {\n            slidesPerView: 1,\n            spaceBetween: 15\n        },\n        // when window width is >= 640px\n        760: {\n            slidesPerView: 1,\n            spaceBetween: 20\n        },\n        // when window width is >= 640px\n        1360: {\n            slidesPerView: 4,\n            spaceBetween: 30\n        }\n    },\n    loop: true,\n    centeredSlides: true,\n});\n\n/*\n\n\n    const gallery = document.querySelector('.newsHome');\n    const imageAll = [...document.querySelectorAll('.newsHome__single--image')];\n\n    const images = imageAll.splice(1, imageAll.length - 2);\n\n    let isDown = false;\n    let point;\n    let scrollLeft;\n\n    images.forEach(image => window.addEventListener('load', () => {\n\n        bound(image);\n\n        gallery.addEventListener('mousedown', (e) => {\n            isDown = true;\n            point = e.pageX - gallery.offsetLeft;\n            scrollLeft = gallery.scrollLeft;\n            gallery.classList.add('grabbing');\n        });\n    \n        gallery.addEventListener('mouseleave', () => {\n            isDown = false;\n        });\n    \n        gallery.addEventListener('mouseup', () => {\n            isDown = false;\n            gallery.classList.remove('grabbing');\n        });\n    \n        gallery.addEventListener('mousemove', (e) => {\n            if(!isDown) return; \n                e.preventDefault();\n                const x = e.pageX - gallery.offsetLeft;\n                const walk = x - point;\n                gallery.scrollLeft = scrollLeft - walk;\n                bound(image);\n        });\n\n        gallery.addEventListener('scroll', () => {\n            bound(image);\n        })\n        \n    }))\n\n    function bound(element) {\n        let rect = element.getBoundingClientRect()\n        if(window.innerWidth > 1000) {\n            if((rect.left > 100) && (rect.right < window.innerWidth - 90)) {\n                element.style.opacity = 1;\n            } else {\n                element.style.opacity = 0.3;\n            }\n        } else return;\n    } \n\n*/\n\n//# sourceURL=webpack:///./_dev/js/news.js?");

/***/ }),

/***/ "./_dev/js/swiper_init.js":
/*!********************************!*\
  !*** ./_dev/js/swiper_init.js ***!
  \********************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("var swiper = new Swiper('.swiper-container', {\n    loop: true,\n    keyboard: {\n        enabled: true,\n    },\n    pagination: {\n        el: '.swiper-pagination',\n        type: 'fraction',\n        clickable: true,\n    },\n    navigation: {\n        nextEl: '.swiper-button-next',\n        prevEl: '.swiper-button-prev',\n    },\n});\n\n//# sourceURL=webpack:///./_dev/js/swiper_init.js?");

/***/ })

/******/ });