/**
 * CommonJs Module Pattern Template
 */
var myNamespace = (function () {
  var myPrivateVar, myPrivateMethod;
  // A private counter variable
  myPrivateVar = 0;
  // A private function which logs any arguments
  myPrivateMethod = function (foo) {
    console.log(foo);
  };

  return {
    // A public variable
    myPublicVar: 'foo',
    // A public function utilizing privates
    myPublicFunction: function (bar) {
      myPrivateVar++;
      myPrivateMethod(bar);
    },
  };
})();

/**
 * ES2015+ Module Pattern Template
 * 
 * [ES2015+] We have new pattern implementation with new keywords import and export
 * [ES2015+] The import statement is used to import bindings which are exported by another module.
 * [SE2015+] We used new keyword let, which declares a block scope local variable
 * [ES2015+] We used new keyword const for immutable constant declaration
 */
// A private counter variable
let myPrivateVar = 0;
// A private function which logs any arguments
// [ES2015+] Parentheses are optional when there is only one parameter
const myPrivateMethod = foo => {
  console.log(foo);
};

const myNamespaceES2015 = {
  // A public variable
  myPublicVar: 'foo',
  // A public function utilizing privates
  myPublicFunction(bar) {
    // Increment our private counter
    myPrivateVar++;
    // Call our private method using bar
    myPrivateMethod(bar);
  },
};

/**
 * Class Module Pattern Template
 * 
 * [ES2015+] We have new pattern implementation with WeakMap()
 * [ES2015+] The WeakMap object is a collection of key/value pairs in which the keys are weakly referenced.
 * [SE2015+] We used new keyword let, which declares a block scope local variable
 * [ES2015+] We used new keyword const for immutable constant declaration
 * [ES2015+] Below we used new class declaration, using keyword class
 * [ES2015+] We used new constructor method and method declaration
 */

const myPrivateVar = new WeakMap();
const myPrivateMethod = new WeakMap();

class MyNamespaceClass {
    constructor() {
        // A private counter variable
        myPrivateVar.set(this, 0);
        // A private function which logs any arguments
        myPrivateMethod.set(this, foo => console.log(foo));
        // A public variable
        this.myPublicVar = 'foo';
    }
    // A public function utilizing privates
    myPublicFunction(bar) {
        let privateVar = myPrivateVar.get(this);
        const privateMethod = myPrivateMethod.get(this);
        // Increment our private counter
        privateVar++;
        myPrivateVar.set(this, privateVar);
        // Call our private method using bar
        privateMethod(bar);
    }
}

// [ES2015+] Default export module, without name
export default myNamespaceES2015;
export default MyNamespaceClass;