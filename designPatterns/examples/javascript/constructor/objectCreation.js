// Creating an empty Object
var newObject = {};
var newObject = new Object();

// Four ways to assign values to an Object

/**
 * 1. Dot syntax
 */
// Set Properties
newObject.someKey = 'Hello World';
// Get Properties
var key = newObject.someKey;

/**
 * 2. Square Bracket Notation
 */
// Set Properties
newObject['someKey'] = 'Hello World';
// Get Properties
var key = newObject['someKey'];

/**
 * 3. Object.defineProperty
 */
// Set Properties
const defineProp = function (obj, key, value) {
  const config = {
    value: value,
    writable: true,
    enumerable: true,
    configurable: true,
  };
  Object.defineProperty(obj, key, config);
};
// To use, we then create a new empty "person" object
const person = Object.create(Object.prototype);
// Populate the object with properties
defineProp(person, 'car', 'Delorean');
defineProp(person, 'dateOfBirth', '1981');
defineProp(person, 'hasBeard', false);
console.log(person); // Outputs: Object {car: "Delorean", dateOfBirth: "1981", hasBeard: false}

/**
 * 4. Object.defineProperties
 */
// Set properties
Object.defineProperties(newObject, {
  someKey: {
    value: 'Hello World',
    writable: true,
  },
  anotherKey: {
    value: 'Foo bar',
    writable: false,
  },
});
console.log(newObject); // Outputs: Object {someKey: "Hello World"}

/**
 * Example of Inheritance
 */
// Create a race car driver that inherits from the person object
const driver = Object.create(person);
// Set some properties for the driver
defineProp(driver, 'topSpeed', '100mph');
// Get an inherited property (1981)
console.log(driver.dateOfBirth);
// Get the property we set (100mph)
console.log(driver.topSpeed);
// Get an inherited property (Delorean)
console.log(driver.car);
