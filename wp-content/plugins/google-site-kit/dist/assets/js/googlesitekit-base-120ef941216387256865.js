(window.__googlesitekit_webpackJsonp=window.__googlesitekit_webpackJsonp||[]).push([[5],{1079:function(t,r,e){"use strict";e.r(r);var n=e(85),o=document.querySelector("#wp-admin-bar-logout a");o||(o=document.querySelector(".sidebar__me-signout button")),o&&o.addEventListener("click",(function(){Object(n.a)()}))},85:function(t,r,e){"use strict";(function(t){e.d(r,"a",(function(){return c})),e.d(r,"b",(function(){return l}));var n=e(14),o=e.n(n);function a(t,r){var e="undefined"!=typeof Symbol&&t[Symbol.iterator]||t["@@iterator"];if(!e){if(Array.isArray(t)||(e=function(t,r){if(!t)return;if("string"==typeof t)return i(t,r);var e=Object.prototype.toString.call(t).slice(8,-1);"Object"===e&&t.constructor&&(e=t.constructor.name);if("Map"===e||"Set"===e)return Array.from(t);if("Arguments"===e||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(e))return i(t,r)}(t))||r&&t&&"number"==typeof t.length){e&&(t=e);var n=0,o=function(){};return{s:o,n:function(){return n>=t.length?{done:!0}:{done:!1,value:t[n++]}},e:function(t){throw t},f:o}}throw new TypeError("Invalid attempt to iterate non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}var a,c=!0,u=!1;return{s:function(){e=e.call(t)},n:function(){var t=e.next();return c=t.done,t},e:function(t){u=!0,a=t},f:function(){try{c||null==e.return||e.return()}finally{if(u)throw a}}}}function i(t,r){(null==r||r>t.length)&&(r=t.length);for(var e=0,n=new Array(r);e<r;e++)n[e]=t[e];return n}var c=function(){t.localStorage&&t.localStorage.clear(),t.sessionStorage&&t.sessionStorage.clear()},u=function(t){for(var r=location.search.substr(1).split("&"),e={},n=0;n<r.length;n++)e[r[n].split("=")[0]]=decodeURIComponent(r[n].split("=")[1]);return t?e.hasOwnProperty(t)?decodeURIComponent(e[t].replace(/\+/g," ")):"":e},l=function(t){var r=arguments.length>1&&void 0!==arguments[1]?arguments[1]:location,e=new URL(r.href);if(t)return e.searchParams&&e.searchParams.get?e.searchParams.get(t):u(t);var n,i={},c=a(e.searchParams.entries());try{for(c.s();!(n=c.n()).done;){var l=o()(n.value,2),s=l[0],f=l[1];i[s]=f}}catch(t){c.e(t)}finally{c.f()}return i}}).call(this,e(21))}},[[1079,1,0]]]);