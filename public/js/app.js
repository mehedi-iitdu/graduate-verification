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

(function webpackMissingModule() { throw new Error("Cannot find module \"/home/jubair/graduate-verification/resources/assets/js/app.js\""); }());
module.exports = __webpack_require__(1);


/***/ }),
/* 1 */
/***/ (function(module, exports) {

throw new Error("Module build failed: ModuleBuildError: Module build failed: \n\tbackground: $light-grey;\n            ^\n      Undefined variable: \"$light-grey\".\n      in /home/jubair/graduate-verification/resources/assets/sass/_custom.scss (line 10, column 14)\n    at runLoaders (/home/jubair/graduate-verification/node_modules/webpack/lib/NormalModule.js:195:19)\n    at /home/jubair/graduate-verification/node_modules/loader-runner/lib/LoaderRunner.js:364:11\n    at /home/jubair/graduate-verification/node_modules/loader-runner/lib/LoaderRunner.js:230:18\n    at context.callback (/home/jubair/graduate-verification/node_modules/loader-runner/lib/LoaderRunner.js:111:13)\n    at Object.asyncSassJobQueue.push [as callback] (/home/jubair/graduate-verification/node_modules/sass-loader/lib/loader.js:55:13)\n    at Object.<anonymous> (/home/jubair/graduate-verification/node_modules/sass-loader/node_modules/async/dist/async.js:2244:31)\n    at Object.callback (/home/jubair/graduate-verification/node_modules/sass-loader/node_modules/async/dist/async.js:906:16)\n    at options.error (/home/jubair/graduate-verification/node_modules/node-sass/lib/index.js:294:32)");

/***/ })
/******/ ]);