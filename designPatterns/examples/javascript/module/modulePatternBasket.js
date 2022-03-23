/**
 * Module Pattern: Basket Example
 */
var basketModule = (function () {
  // privates
  var basket = [];
  function doSomethingPrivate() {
    //...
  }
  function doSomethingElsePrivate() {
    //...
  }
  // Return an object exposed to the public
  return {
    // Add items to our basket
    addItem: function (values) {
      basket.push(values);
    },
    // Get the count of items in the basket
    getItemCount: function () {
      return basket.length;
    },
    // Public alias to a private function
    doSomething: doSomethingPrivate,
    // Get the total value of items in the basket
    getTotal: function () {
      var q = this.getItemCount(),
        p = 0;
      while (q--) {
        p += basket[q].price;
      }
      return p;
    },
  };
})();

/**
 * Module Pattern: Basket Example as Class
 *
 * [ES2015+] We have new pattern implementation with WeakMap()
 * [ES2015+] The WeakMap object is a collection of key/value pairs in which the keys are weakly referenced.
 * [SE2015+] We used new keyword let, which declares a block scope local variable
 * [ES2015+] We used new keyword const for immutable constant declaration
 * [ES2015+] Below we used new class declaration, using keyword class
 * [ES2015+] We used new constructor method and method declaration
 */

const basketClass = new WeakMap();
const doSomethingPrivateClass = new WeakMap();
const doSomethingElsePrivateClass = new WeakMap();

class BasketModuleClass {
  constructor() {
    // privates
    basketClass.set(this, []);
    doSomethingPrivateClass.set(this, () => {
      //...
    });
    doSomethingElsePrivateClass.set(this, () => {
      //...
    });
  }
  // Public aliases to a private functions
  doSomething() {
    doSomethingPrivateClass.get(this)();
  }
  doSomethingElse() {
    doSomethingElsePrivateClass.get(this)();
  }
  // Add items to our basket
  addItem(values) {
    const basketData = basketClass.get(this);
    basketData.push(values);
    basketClass.set(this, basketData);
  }
  // Get the count of items in the basket
  getItemCount() {
    return basketClass.get(this).length;
  }
  // Get the total value of items in the basket
  getTotal() {
    return basketClass
      .get(this)
      .reduce((currentSum, item) => item.price + currentSum, 0);
  }
}

/**
 * Module Pattern: ES2015 Module Import/Export
 * 
 * [ES2015+] We have new pattern implementation with new keywords import and export
 * [ES2015+] The import statement is used to import bindings which are exported by another module.
 * [SE2015+] We used new keyword let, which declares a block scope local variable
 * [ES2015+] We used new keyword const for immutable constant declaration
 */

// privates
let basket = [];
const doSomethingPrivate = () => {
  //...
};
const doSomethingElsePrivate = () => {
  //...
};

// Create an object exposed to the public
const basketModuleES2015 = {
  // Add items to our basket
  addItem(values) {
    basket.push(values);
  },
  // Get the count of items in the basket
  getItemCount() {
    return basket.length;
  },
  // Public alias to a private function
  doSomething() {
    doSomethingPrivate();
  },
  // Get the total value of items in the basket
  // [ES2015+] The reduce() method applies a function against an accumulator and each element in the array (from left to right) to reduce it to a single value.
  getTotal() {
    return basket.reduce((currentSum, item) => item.price + currentSum, 0);
  },
};

const basketModuleClass = new BasketModuleClass();

// basketModule returns an object with a public API we can use
basketModule.addItem({
  item: 'bread',
  price: 0.5,
});
basketModule.addItem({
  item: 'butter',
  price: 0.3,
});
basketModuleClass.addItem({
  item: 'bread',
  price: 0.5,
});
basketModuleClass.addItem({
  item: 'butter',
  price: 0.3,
});
basketModuleES2015.addItem({
  item: 'bread',
  price: 0.5,
});
basketModuleES2015.addItem({
  item: 'butter',
  price: 0.3,
});
// Outputs: 2
console.log(basketModule.getItemCount());
console.log(basketModuleClass.getItemCount());
console.log(basketModuleClass.getItemCount());
// Outputs: 0.8
console.log(basketModule.getTotal());
console.log(basketModuleClass.getTotal());
console.log(basketModuleES2015.getTotal());

// However, the following will not work:

// Outputs: undefined
// This is because the basket itself is not exposed as a part of our
// public API
console.log(basketModule.basket);
console.log(basketModuleClass.basket);
console.log(basketModuleES2015.basket);

// This shouldnt work as it only exists within the scope of our
// basketModule closure, but not in the returned public object
console.log(basket);
