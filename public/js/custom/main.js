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
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 1);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/custom/main.js":
/*!*************************************!*\
  !*** ./resources/js/custom/main.js ***!
  \*************************************/
/*! no static exports found */
/***/ (function(module, exports) {

var url = $("meta[name='base-url']").attr("content");
$(document).ready(function () {
  console.log('test'); //** Initializer */

  window.initPage = function initAdminVendors() {
    axios.get(url + "api/list").then(function (response) {
      var list = response.data;
      console.log(list);
      var my_list = $(".list-unstyled");
      $.each(list, function (i, data) {
        my_list.append("<li> <a href='' class='update edit-modal' data-toggle='modal' data-target='#update_list' id='view_list' data-value='" + data.id + "'>" + data.list + "</li>");
      });
    })["catch"](function (error) {
      console.log(error);
    });
  }; //** Get all data*/


  initPage(); //** Insert data */

  $("#add").click(function (e) {
    e.preventDefault();
    var list = $("#list").val();
    axios.post(url + "api/list", {
      list: list
    }).then(function (response) {
      alert(response.data.message);
      $('#list').val('');
      location.reload();
    });
  }); //** View data */

  $('.list-unstyled').on('click', '.edit-modal', function () {
    var id = $(this).data("value"); //alert(id);

    axios.get(url + "api/list/" + id).then(function (response) {
      //alert(response.data.message);
      console.log(response.data.list);
      $('#edit_list').val(response.data.list);
      $('#edit_id').val(response.data.id);
    });
  }); //** Update data */

  $("#update").click(function (e) {
    e.preventDefault();
    var list = $("#edit_list").val();
    var id = $("#edit_id").val();
    axios.put(url + "api/list/" + id, {
      list: list
    }).then(function (response) {
      alert(response.data.message);
      $('#list').val('');
      location.reload();
    });
  }); //** Delete data */

  $("#delete").click(function (e) {
    e.preventDefault();
    var id = $("#edit_id").val();
    axios["delete"](url + "api/list/" + id).then(function (response) {
      alert(response.data.message);
      $('#list').val('');
      location.reload();
    });
  });
});

/***/ }),

/***/ 1:
/*!*******************************************!*\
  !*** multi ./resources/js/custom/main.js ***!
  \*******************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! C:\laragon\www\im-test\resources\js\custom\main.js */"./resources/js/custom/main.js");


/***/ })

/******/ });