// Bootstrap & Popper.js
try {
  window.Popper = require('popper.js').default;
  window.$ = window.jQuery = require('jquery');

  require('bootstrap');
} catch (e) {}


// Lbc
import LazyLoad from "vanilla-lazyload";
import Prism from 'prismjs'

require('prismjs/components/prism-haxe')

let codes = document.querySelectorAll('.prism-code')
codes.forEach((code) => {
  code.innerHTML = Prism.highlight(code.innerText, Prism.languages.haxe, 'haxe');
})

let lazyLoadInstance = new LazyLoad({
  elements_selector: '[data-lazy="true"]'
})

// Lbc components
require('./components/stripe-nav')

// Lbc theme liara
require('../../themes/liara/assets/js/app')
