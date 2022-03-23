/**
 * The Module Pattern using an IIFE
 */
var testModule = (function () {
  var counter = 0;
  return {
    incrementCounter: function () {
      return counter++;
    },
    resetCounter: function () {
      console.log('counter value prior to reset: ' + counter);
      counter = 0;
    },
  };
})();

/**
 * The Module Pattern using a Class [ES2015]
 * 
 * [ES2015+] We have new pattern implementation with WeakMap()
 * [ES2015+] The WeakMap object is a collection of key/value pairs in which the keys are weakly referenced.
 * [SE2015+] We used new keyword let, which declares a block scope local variable
 * [ES2015+] We used new keyword const for immutable constant declaration
 * [ES2015+] Below we used new class declaration, using keyword class
 * [ES2015+] We used new constructor method and method declaration
 */
let _counter = new WeakMap();

class Module {
    constructor() {
        _counter.set(this, 0);
    }
    incrementCounter() {
        let counter = _counter.get(this);
        counter++;
        _counter.set(this, counter);

        return _counter.get(this);
    }
    resetCounter() {
        console.log(`counter value prior to reset: ${_counter.get(this)}`);
        _counter.set(this, 0);
    }
}

const testModuleClass = new Module();

/**
 * The Module Pattern using Import/Export
 */
// [ES2015+] We have new pattern implementation with new keywords import and export
// [ES2015+] The import statement is used to import bindings which are exported by another module.
// [SE2015+] We used new keyword let, which declares a block scope local variable
// [ES2015+] We used new keyword const for immutable constant declaration

let counter = 0;

const testModuleCode = {
  incrementCounter() {
    return counter++;
  },
  resetCounter() {
    console.log(`counter value prior to reset: ${counter}`);
    counter = 0;
  },
};

// [ES2015+] Default export module, without name
// export default testModuleCode;
// import testModuleImportExport from '../module';

// Usage:

// Increment our counter
testModule.incrementCounter();
testModuleClass.incrementCounter();
testModuleCode.incrementCounter();
// Check the counter value and reset
// Outputs: counter value prior to reset: 1
testModule.resetCounter();
testModuleClass.resetCounter();
testModuleCode.resetCounter();
