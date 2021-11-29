/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*********************************!*\
  !*** ./resources/js/rtl_app.js ***!
  \*********************************/
function _toConsumableArray(arr) { return _arrayWithoutHoles(arr) || _iterableToArray(arr) || _unsupportedIterableToArray(arr) || _nonIterableSpread(); }

function _nonIterableSpread() { throw new TypeError("Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); }

function _unsupportedIterableToArray(o, minLen) { if (!o) return; if (typeof o === "string") return _arrayLikeToArray(o, minLen); var n = Object.prototype.toString.call(o).slice(8, -1); if (n === "Object" && o.constructor) n = o.constructor.name; if (n === "Map" || n === "Set") return Array.from(o); if (n === "Arguments" || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return _arrayLikeToArray(o, minLen); }

function _iterableToArray(iter) { if (typeof Symbol !== "undefined" && iter[Symbol.iterator] != null || iter["@@iterator"] != null) return Array.from(iter); }

function _arrayWithoutHoles(arr) { if (Array.isArray(arr)) return _arrayLikeToArray(arr); }

function _arrayLikeToArray(arr, len) { if (len == null || len > arr.length) len = arr.length; for (var i = 0, arr2 = new Array(len); i < len; i++) { arr2[i] = arr[i]; } return arr2; }

var leftNav = document.querySelector('.left-nav');
var bodyContainer = document.querySelector('.body-container');
var navState = document.querySelector('.nav-state');
var listItems = document.querySelectorAll('.list-item');
var navState_close = '<i class="fas fa-arrow-alt-to-right"></i>';
var navState_open = '<i class="fas fa-arrow-alt-from-right"></i>';
var mediaQuery = window.matchMedia("(min-width: 600px)");
var btnFile = document.querySelector('.btn-file');
var textFile = document.querySelector('.text-file');
var file = document.querySelector('.file');
btnFile === null || btnFile === void 0 ? void 0 : btnFile.addEventListener('click', function (_) {
  file.click();
});
file === null || file === void 0 ? void 0 : file.addEventListener('change', function (e) {
  if (file.value) {
    textFile.textContent = file.value.split('\\').pop();
  } else {
    textFile.textContent = "No Image Chosen";
  }
});
navState === null || navState === void 0 ? void 0 : navState.addEventListener('click', function (_) {
  return toggleNavigation();
});
listItems === null || listItems === void 0 ? void 0 : listItems.forEach(function (item) {
  item.addEventListener('click', function (e) {
    var _e$target$nextElement, _e$target$nextElement2;

    if ((_e$target$nextElement = e.target.nextElementSibling) !== null && _e$target$nextElement !== void 0 && _e$target$nextElement.classList.contains('list__extend--open')) {
      openNavigation();
      return;
    }

    if ((_e$target$nextElement2 = e.target.nextElementSibling) !== null && _e$target$nextElement2 !== void 0 && _e$target$nextElement2.classList.contains("list__extend")) {
      openNavigation();
      e.target.parentElement.classList.toggle('list__item--open');
      e.target.nextElementSibling.classList.toggle('list__extend--open');
    }
  });
});
window.addEventListener('resize', function (_) {
  return closeNavigation();
});

function toggleNavigation() {
  leftNav.classList.toggle('left-nav--open');
  bodyContainer.classList.toggle('body__nav--open');
  clearOpenedNavList();
  switchNavStateIcon();
}

function closeNavigation() {
  leftNav.classList.remove('left-nav--open');
  bodyContainer.classList.remove('body__nav--open');
  clearOpenedNavList();
  switchNavStateIcon();
}

function openNavigation() {
  leftNav.classList.add('left-nav--open');
  bodyContainer.classList.add('body__nav--open');
  clearOpenedNavList();
  switchNavStateIcon();
}

function clearOpenedNavList() {
  var list1 = document.querySelectorAll('.list__extend--open');
  var list2 = document.querySelectorAll('.list__item--open');
  [].concat(_toConsumableArray(list1), _toConsumableArray(list2)).forEach(function (item) {
    item.classList.remove('list__extend--open');
    item.classList.remove('list__item--open');
  });
}

function switchNavStateIcon() {
  if (leftNav.classList.contains('left-nav--open')) navState.innerHTML = navState_close;else navState.innerHTML = navState_open;
}
/******/ })()
;