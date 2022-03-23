/**
 * Singleton Pattern
 */
var mySingleton = (function () {
  // Instance stores a reference to the Singleton
  var instance;

  function init() {
    // Singleton
    // Private methods and variables
    function privateMethod() {
      console.log('I am private');
    }
    var privateVariable = 'Im also private';
    var privateRandomNumber = Math.random();

    return {
      // Public methods and variables
      publicMethod: function () {
        console.log('The public can see me!');
      },
      publicProperty: 'I am also public',
      getRandomNumber: function () {
        return privateRandomNumber;
      },
    };
  }

  return {
    // Get the Singleton instance if one exists
    // or create one if it doesn't
    getInstance: function () {
      if (!instance) {
        instance = init();
      }
      return instance;
    },
  };
})();

/**
 * Singleton using JavaScript Classes
 *
 * [ES2015+] We used new keyword const for immutable constant declaration
 * [SE2015+] We used new keyword let, which declares a block scope local variable
 * [ES2015+] We used new arrow function syntax
 * [ES2015+] Below we used new class declaration, using keyword class
 * [ES2015+] We used new constructor method and method declaration
 * [ES2015+] Classes are syntactic sugar over JavaScript's prototype-based inheritance
 * [ES2015+] We have new pattern implementation with new keywords import and export
 */

// Instance stores a reference to the Singleton
let instance;

// Private methods and variables
const privateMethod = () => {
  console.log('I am private');
};
const privateVariable = 'Im also private';
const randomNumber = Math.random();

// Singleton
class MySingletonClass {
  // Get the Singleton instance if one exists
  // or create one if it doesn't
  constructor() {
    if (!instance) {
      // Public property
      this.publicProperty = 'I am also public';
      instance = this;
    }

    return instance;
  }

  // Public methods
  publicMethod() {
    console.log('The public can see me!');
  }

  getRandomNumber() {
    return randomNumber;
  }
}
// [ES2015+] Default export module, without name
// export default MySingletonClass;

const singleAClass = new MySingletonClass();
const singleBClass = new MySingletonClass();
console.log(singleAClass.getRandomNumber() === singleBClass.getRandomNumber());
var singleA = mySingleton.getInstance();
var singleB = mySingleton.getInstance();
console.log(singleA.getRandomNumber() === singleB.getRandomNumber()); // true

/**
 * Singleton - Example 2
 */
var SingletonTester = (function () {
  // options: an object containing configuration options for the singleton
  // e.g var options = { name: "test", pointX: 5};
  function Singleton(options) {
    // set options to the options supplied
    // or an empty object if none are provided
    options = options || {};

    // set some properties for our singleton
    this.name = 'SingletonTester';
    this.pointX = options.pointX || 6;
    this.pointY = options.pointY || 10;
  }
  // our instance holder
  var instance;
  // an emulation of static variables and methods
  var _static = {
    name: 'SingletonTester',
    // Method for getting an instance. It returns
    // a singleton instance of a singleton object
    getInstance: function (options) {
      if (instance === undefined) {
        instance = new Singleton(options);
      }
      return instance;
    },
  };
  return _static;
})();

/**
 * Singleton Pattern - Example 2 using Classes
 * 
 * [ES2015+] We used new keyword const for immutable constant declaration
 * [SE2015+] We used new keyword let, which declares a block scope local variable
 * [ES2015+] We used new arrow function syntax
 * [ES2015+] Below we used new class declaration, using keyword class
 * [ES2015+] We used new constructor method and method declaration
 * [ES2015+] Classes are syntactic sugar over JavaScript's prototype-based inheritance
 */

// options: an object containing configuration options for the singleton
// e.g const options = { name: "test", pointX: 5};
class SingletonClass {
  constructor(options) {
    // set options to the options supplied
    // or an empty object if none are provided
    options = options || {};
    // set some properties for our singleton
    this.name = 'SingletonTester';
    this.pointX = options.pointX || 6;
    this.pointY = options.pointY || 10;
  }
}

// our instance holder
let instanceClass;

// an emulation of static variables and methods
const SingletonTesterClass = {
  name: 'SingletonTester',
  // Method for getting an instance. It returns
  // a singleton instance of a singleton object
  getInstance(options) {
    if (instanceClass === undefined) {
      instanceClass = new SingletonClass(options);
    }

    return instanceClass;
  },
};

const singletonTestClass = SingletonTesterClass.getInstance({
  pointX: 7,
});
var singletonTest = SingletonTester.getInstance({
  pointX: 7,
});

// Log the output of pointX just to verify it is correct
// Outputs: 7
console.log(singletonTest.pointX);
console.log(singletonTest.pointX);
