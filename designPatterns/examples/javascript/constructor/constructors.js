/**
 * Basic Constructor with a Function
 */
function CarFn(model, year, miles) {
  this.model = model;
  this.year = year;
  this.miles = miles;

  this.toString = function () {
    return this.model + ' has done ' + this.miles + ' miles';
  };
}

/**
 * Constructor with Prototypes
 *
 * Multiple versions of the object will get access to the prototype.
 */
function CarProto(model, year, miles) {
  this.model = model;
  this.year = year;
  this.miles = miles;
}
CarProto.prototype.toString = function () {
  return this.model + ' has done ' + this.miles + ' miles';
};

/**
 * Constructor using JavaScript Classes
 *
 * [ES2015+] Below we used new class declaration, using keyword class
 * [ES2015+] We used new constructor method and method declaration
 * [ES2015+] Classes are syntactic sugar over JavaScript's prototype-based inheritance
 * [ES2015+] We used new template literals for string interpolation
 */
class Car {
  constructor(model, year, miles) {
    this.model = model;
    this.year = year;
    this.miles = miles;
  }

  toString() {
    return `${this.model} has done ${this.miles} miles`;
  }
}
// Usage:

// We can create new instances of the car using either the CarFn or Car Class
const civicFn = new CarFn('Honda Civic', 2009, 20000);
const mondeoFn = new CarFn('Ford Mondeo', 2010, 5000);
const civicProto = new CarProto('Honda Civic', 2009, 20000);
const mondeoProto = new CarProto('Ford Mondeo', 2010, 5000);
const civic = new Car('Honda Civic', 2009, 20000);
const mondeo = new Car('Ford Mondeo', 2010, 5000);

// Each way of creating a constructor provides the same result in the console.log
console.log(civicFn.toString());
console.log(mondeoFn.toString());
console.log(civicProto.toString());
console.log(mondeoProto.toString());
console.log(civic.toString());
console.log(mondeo.toString());
