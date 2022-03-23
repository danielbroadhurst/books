// O(1) - Order 1 - constant time, as it scales it takes the same time
// O(n) - Order n - linear scaling, has to loop over every element.
// O(n ^ 2) - Order n squared - not efficient, nested loop is an example
// O(log n) - Order Logarithmic - Iterating and searching

const nums = [1, 2, 3, 4, 5];
const numsDuplicate = [1, 2, 3, 4, 4, 5];

// Get The First Number Notation: O(1)
const firstNumber = nums[0];
console.log(firstNumber); // 1

// Sum the numbers: O(n)
let sum = 0;
for (const num of nums) {
  sum += num;
}
console.log(sum); // 15

// Sum Contiguous Array (An array that is in sequence) O(1)
const sumContinguousArray = function (ary) {
  const getLastItem = ary[ary.length - 1];
  return (getLastItem * (getLastItem + 1)) / 2;
};
console.log(sumContinguousArray(nums)); // 15

// Check for duplicated items in array: O(n ^ 2)
const hasDuplicatesSquared = function (ary) {
  //loop the list, our O(n) op
  for(let i = 0; i < ary.length; i++){
    const thisNum = ary[i];
    //loop the list again, the O(n^2) op
    for(let j = 0; j < ary.length; j++){
      //make sure we're not checking same number
      if(j !== i){
        const otherNum = ary[j];
        //if there's an equal value, return
        if(otherNum === thisNum) return true;
      }
    }
  }
  //if we're here, no dups
  return false;
};
console.log(hasDuplicatesSquared(nums)); // false
console.log(hasDuplicatesSquared(numsDuplicate)); // true

// Use Binary Search to achieve a logarithmic algorithm - DOESN'T WORK
const searchForBinary = function (
  items,
  num,
  start = 0,
  end = items.length - 1
) {
  let mid = Math.floor((start + end) / 2);
  if (items[mid] === num) return true;
  if (items[mid] > num) return searchForBinary(items, num, start, mid - 1);
  else return searchForBinary(items, num, mid + 1, end);
};
const hasDuplicatesBinary = function (ary) {
  for (const num of ary) {
    if (searchForBinary(ary, num)) {
      return true;
    }
  }
  return false;
};
console.log(hasDuplicatesBinary(nums)); // false
console.log(hasDuplicatesBinary(numsDuplicate)); // true

// If there was only one duplicate then it becomes O(n)
const findDuplicate = function(ary){
  //sum what we're given
  let actualSum = 0;
  //our O(n) scan
  ary.forEach(x => actualSum += x);
  //get the last item
  const lastItem = ary[ary.length - 1];
  //create a new array
  const shouldBe = lastItem * (lastItem + 1) / 2;
  return actualSum - shouldBe;
}
console.log(findDuplicate(nums)); // false
console.log(findDuplicate(numsDuplicate)); // true