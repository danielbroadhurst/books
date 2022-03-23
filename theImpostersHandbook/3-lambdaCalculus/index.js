// I Combinator function - returns whatever is passed into the function.
let _ = "test";
var fn = ((x) => x)(_);
console.log(fn); // test

// Substitution - 3 is returned as a is return and not x
let a = 3;
var fnSub = ((x) => a)(1);
console.log(fnSub); // 3

// Identity function (Reduction) - 1 is returned as the argument passed in is returned not b
let b = 3;
var fnRed = ((x) => x)(1);
console.log(fnRed); // 1

// Currying Reduction - the first function call is set to x, the second to y which is then reduced
var fnCurry = (x) => (y) => x + y;
console.log(fnCurry(3)(5)); // 8

let first = (y) => y;
let second = (x) => first(x);
console.log(second(first)); // [Function: first]
console.log(second(first)(12)); // 12

// Church Encoding

// Booleans and Conditional Statements
let True = (x) => (y) => x;
let False = (x) => (y) => y;
let If = (x) => (y) => (z) => x(y)(z);

console.log(If(True)("TRUE")("oops...")); // TRUE
console.log(If(False)("oops...")("FALSE")); // FALSE

// Numbers
let calculate = (f) => f((x) => x + 1)(0);

let zero = (f) => (x) => x;
let one = (f) => (x) => f(x);
let two = (f) => (x) => f(f(x));
let three = (f) => (x) => f(f(f(x)));

console.log(calculate(zero)); // 0
console.log(calculate(one)); // 1
console.log(calculate(two)); // 2
console.log(calculate(three)); // 3

// Combinators
let Omega = (x) => x(x); // Omega(Omega) result in a maximum call stack error

// Y Combinator - for each loop of functions
let Y = (f) => ((x) => x(x))((x) => f((y) => x(x)(y)));
let fib = (f) => (n) => n <= 1 ? n : f(n - 1) + f(n - 2);
let yFib = Y(fib);
console.log(yFib(10)); // 55
