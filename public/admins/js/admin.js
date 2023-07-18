/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/admin/modules/custom_select.js":
/*!*****************************************************!*\
  !*** ./resources/js/admin/modules/custom_select.js ***!
  \*****************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "customSelect": () => (/* binding */ customSelect)
/* harmony export */ });
function customSelect() {
  $(document).ready(function () {
    var x, i, j, l, ll, selElmnt, a, b, c;
    x = document.getElementsByClassName("custom-select");
    l = x.length;
    for (i = 0; i < l; i++) {
      selElmnt = x[i].getElementsByTagName("select")[0];
      ll = selElmnt.length;
      a = document.createElement("DIV");
      a.setAttribute("class", "select-selected");
      a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
      x[i].appendChild(a);
      b = document.createElement("DIV");
      b.setAttribute("class", "select-items select-hide");
      for (j = 1; j < ll; j++) {
        c = document.createElement("DIV");
        c.innerHTML = selElmnt.options[j].innerHTML;
        c.addEventListener("click", function (e) {
          var y, i, k, s, h, sl, yl;
          s = this.parentNode.parentNode.getElementsByTagName("select")[0];
          sl = s.length;
          h = this.parentNode.previousSibling;
          for (i = 0; i < sl; i++) {
            if (s.options[i].innerHTML == this.innerHTML) {
              s.selectedIndex = i;
              h.innerHTML = this.innerHTML;
              y = this.parentNode.getElementsByClassName("same-as-selected");
              yl = y.length;
              for (k = 0; k < yl; k++) {
                y[k].removeAttribute("class");
              }
              this.setAttribute("class", "same-as-selected");
              break;
            }
          }
          h.click();
        });
        b.appendChild(c);
      }
      x[i].appendChild(b);
      a.addEventListener("click", function (e) {
        e.stopPropagation();
        closeAllSelect(this);
        this.nextSibling.classList.toggle("select-hide");
        this.classList.toggle("select-arrow-active");
      });
    }
    function closeAllSelect(elmnt) {
      var x,
        y,
        i,
        xl,
        yl,
        arrNo = [];
      x = document.getElementsByClassName("select-items");
      y = document.getElementsByClassName("select-selected");
      xl = x.length;
      yl = y.length;
      for (i = 0; i < yl; i++) {
        if (elmnt == y[i]) {
          arrNo.push(i);
        } else {
          y[i].classList.remove("select-arrow-active");
        }
      }
      for (i = 0; i < xl; i++) {
        if (arrNo.indexOf(i)) {
          x[i].classList.add("select-hide");
        }
      }
    }
    document.addEventListener("click", closeAllSelect);
  });
}

/***/ }),

/***/ "./resources/js/admin/modules/form.js":
/*!********************************************!*\
  !*** ./resources/js/admin/modules/form.js ***!
  \********************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "form": () => (/* binding */ form)
/* harmony export */ });
function form() {
  $(document).ready(function () {
    // CHECKBOX
    $("#tm_checkbox").on("click", function () {
      if ($(this).is(":checked")) {
        $(".tm_checkbox_label").addClass("checked");
      } else {
        $(".tm_checkbox_label").removeClass("checked");
      }
    });
    if ($("#tm_checkbox").is(":checked")) {
      $(".tm_checkbox_label").addClass("checked");
    } else {
      if ($(".tm_checkbox_label").hasClass("checked")) {
        $(".tm_checkbox_label").removeClass("checked");
      }
    }

    // CHECKBOX
    $("#ru_checkbox").on("click", function () {
      if ($(this).is(":checked")) {
        $(".ru_checkbox_label").addClass("checked");
      } else {
        $(".ru_checkbox_label").removeClass("checked");
      }
    });
    if ($("#ru_checkbox").is(":checked")) {
      $(".ru_checkbox_label").addClass("checked");
    } else {
      if ($(".ru_checkbox_label").hasClass("checked")) {
        $(".ru_checkbox_label").removeClass("checked");
      }
    }

    // CHECKBOX
    $("#en_checkbox").on("click", function () {
      if ($(this).is(":checked")) {
        $(".en_checkbox_label").addClass("checked");
      } else {
        $(".en_checkbox_label").removeClass("checked");
      }
    });
    if ($("#en_checkbox").is(":checked")) {
      $(".en_checkbox_label").addClass("checked");
    } else {
      if ($(".en_checkbox_label").hasClass("checked")) {
        $(".en_checkbox_label").removeClass("checked");
      }
    }

    // CHECKBOX
    $("#counter_checkbox").on("click", function () {
      if ($(this).is(":checked")) {
        $(".counter_checkbox_label").addClass("checked");
      } else {
        $(".counter_checkbox_label").removeClass("checked");
      }
    });
    if ($("#counter_checkbox").is(":checked")) {
      $(".counter_checkbox_label").addClass("checked");
    } else {
      if ($(".counter_checkbox_label").hasClass("checked")) {
        $(".counter_checkbox_label").removeClass("checked");
      }
    }

    // custom input type="file"
    $("#file-1").on("change", function () {
      var arrayFiles = this.files,
        formItem = this.parentNode,
        listFiles = document.createElement("ul"),
        li = "";
      if (formItem.querySelector(".list-files")) {
        formItem.querySelector(".list-files").remove();
      }
      listFiles.className = "list-files";
      for (var i = 0; i < arrayFiles.length; i++) {
        li += "<li>" + arrayFiles[i].name + "</li>";
      }
      listFiles.innerHTML = li;
      formItem.appendChild(listFiles);
    });

    // custom input type="file"
    $("#file-2").on("change", function () {
      var arrayFiles = this.files,
        formItem = this.parentNode,
        listFiles = document.createElement("ul"),
        li = "";
      if (formItem.querySelector(".list-files")) {
        formItem.querySelector(".list-files").remove();
      }
      listFiles.className = "list-files";
      for (var i = 0; i < arrayFiles.length; i++) {
        li += "<li>" + arrayFiles[i].name + "</li>";
      }
      listFiles.innerHTML = li;
      formItem.appendChild(listFiles);
    });

    // custom input type="file"
    $("#file-3").on("change", function () {
      var arrayFiles = this.files,
        formItem = this.parentNode,
        listFiles = document.createElement("ul"),
        li = "";
      if (formItem.querySelector(".list-files")) {
        formItem.querySelector(".list-files").remove();
      }
      listFiles.className = "list-files";
      for (var i = 0; i < arrayFiles.length; i++) {
        li += "<li>" + arrayFiles[i].name + "</li>";
      }
      listFiles.innerHTML = li;
      formItem.appendChild(listFiles);
    });

    // custom input type="file"
    $("#file-4").on("change", function () {
      var arrayFiles = this.files,
        formItem = this.parentNode,
        listFiles = document.createElement("ul"),
        li = "";
      if (formItem.querySelector(".list-files")) {
        formItem.querySelector(".list-files").remove();
      }
      listFiles.className = "list-files";
      for (var i = 0; i < arrayFiles.length; i++) {
        li += "<li>" + arrayFiles[i].name + "</li>";
      }
      listFiles.innerHTML = li;
      formItem.appendChild(listFiles);
    });

    $("#file-5").on("change", function () {
      var arrayFiles = this.files,
        formItem = this.parentNode,
        listFiles = document.createElement("ul"),
        li = "";
      if (formItem.querySelector(".list-files")) {
        formItem.querySelector(".list-files").remove();
      }
      listFiles.className = "list-files";
      for (var i = 0; i < arrayFiles.length; i++) {
        li += "<li>" + arrayFiles[i].name + "</li>";
      }
      listFiles.innerHTML = li;
      formItem.appendChild(listFiles);
    });

    $("#file-6").on("change", function () {
      var arrayFiles = this.files,
        formItem = this.parentNode,
        listFiles = document.createElement("ul"),
        li = "";
      if (formItem.querySelector(".list-files")) {
        formItem.querySelector(".list-files").remove();
      }
      listFiles.className = "list-files";
      for (var i = 0; i < arrayFiles.length; i++) {
        li += "<li>" + arrayFiles[i].name + "</li>";
      }
      listFiles.innerHTML = li;
      formItem.appendChild(listFiles);
    });

    // ckeditor
    ClassicEditor.create(document.querySelector("#editor-1"))["catch"](function (error) {
      console.error(error);
    });

    // ckeditor
    ClassicEditor.create(document.querySelector("#editor-2"))["catch"](function (error) {
      console.error(error);
    });

    // ckeditor
    ClassicEditor.create(document.querySelector("#editor-3"))["catch"](function (error) {
      console.error(error);
    });

    // ckeditor
    ClassicEditor.create(document.querySelector("#editor-4"))["catch"](function (error) {
      console.error(error);
    });

    // ckeditor
    ClassicEditor.create(document.querySelector("#editor-5"))["catch"](function (error) {
      console.error(error);
    });

    // ckeditor
    ClassicEditor.create(document.querySelector("#editor-6"))["catch"](function (error) {
      console.error(error);
    });

    // ckeditor
    ClassicEditor.create(document.querySelector("#editor-7"))["catch"](function (error) {
      console.error(error);
    });

    // ckeditor
    ClassicEditor.create(document.querySelector("#editor-8"))["catch"](function (error) {
      console.error(error);
    });

    // ckeditor
    ClassicEditor.create(document.querySelector("#editor-9"))["catch"](function (error) {
      console.error(error);
    });

    // ckeditor
    ClassicEditor.create(document.querySelector("#editor-10"))["catch"](function (error) {
      console.error(error);
    });

    // ckeditor
    ClassicEditor.create(document.querySelector("#editor-11"))["catch"](function (error) {
      console.error(error);
    });

    // ckeditor
    ClassicEditor.create(document.querySelector("#editor-12"))["catch"](function (error) {
      console.error(error);
    });

    // ckeditor
    ClassicEditor.create(document.querySelector("#editor-13"))["catch"](function (error) {
      console.error(error);
    });

    // ckeditor
    ClassicEditor.create(document.querySelector("#editor-14"))["catch"](function (error) {
      console.error(error);
    });

    // ckeditor
    ClassicEditor.create(document.querySelector("#editor-15"))["catch"](function (error) {
      console.error(error);
    });
  });
}

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/define property getters */
/******/ 	(() => {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = (exports, definition) => {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/************************************************************************/
var __webpack_exports__ = {};
// This entry need to be wrapped in an IIFE because it need to be isolated against other modules in the chunk.
(() => {
/*!*************************************!*\
  !*** ./resources/js/admin/admin.js ***!
  \*************************************/
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _modules_form_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./modules/form.js */ "./resources/js/admin/modules/form.js");
/* harmony import */ var _modules_custom_select_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./modules/custom_select.js */ "./resources/js/admin/modules/custom_select.js");
// import * as flsFunctions from './modules/functions.js'



// flsFunctions.isWebp()
_modules_form_js__WEBPACK_IMPORTED_MODULE_0__.form();
_modules_custom_select_js__WEBPACK_IMPORTED_MODULE_1__.customSelect();
})();

/******/ })()
;