/**
 * 1.1 Is Unique: Implement an algorithm to determine if a string has all unique characters.
 * What if you cannot use additional data structures?
 * @param {string} string
 * @returns {boolean}
 */
function isUniqueChars(string) {
  if (string.length > 128) {
    return false;
  }
  let charSet = new Array();
  for (let i = 0; i < string.length; i++) {
    const element = string[i];
    if (charSet[element]) {
      return false;
    }
    charSet[element] = true;
  }
  return true;
}
console.log(isUniqueChars("abc")); // true
console.log(isUniqueChars("abca")); // False

/**
 * 1.2 Check Permutation: Given two strings, write a method to decide if one is a permutation of the other
 * @param {string} stringOne 
 * @param {string} stringTwo 
 * @returns {boolean}
 */
function checkPermutation(stringOne, stringTwo) {
  if (stringOne.length !== stringTwo.length) {
    return false;
  }
  for (let i = 0; i < stringOne.length; i++) {
    const element = stringOne[i];
    if (!stringTwo.includes(element)) {
      return false;
    }
  }
  return true;
}
function permSort(s) {
  let content = s.split('').sort();
  return content.join('');
}
function permutationExample(s, t) {
  if (s.length !== t.length) {
    return false;
  }
  return permSort(s) === permSort(t)
}
console.log(checkPermutation("dog", "god")); // True
console.log(checkPermutation("dog", "there")); // False
console.log(checkPermutation("dog", "goo")); // False
console.log(permutationExample("dog", "god")); // True
console.log(permutationExample("dog", "there")); // False
console.log(permutationExample("dog", "goo")); // False

/**
 * 1.3 URLify: Write a method to replace all spaces in a string with '%20'.
 */
function urlify(string) {
  return string.trim().split(" ").join('%20');
}
const urlifyString = 'Mr John Smith   ';
console.log(urlify(urlifyString)); // Mr%20John%20Smith
