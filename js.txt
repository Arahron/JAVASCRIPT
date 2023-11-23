//Задание 1
console.log('Hello world')
//Задание 2
let name = "Anton";
let age = 19;
console.log("Имя: " + name + ", Возраст: " + age);
//Задание 3
let a = 10;
let b = 5;
let sum = a+b;
console.log('Сумма = ' + sum);
//Задание 4
function squareNumber(number) {
    return number * number;
}
alert(squareNumber(5));
//Задание 5-6
let number = prompt("Введите число:");
if (number % 2 === 0) {
  console.log(number + " четное");
} else {
  console.log(number + " нечетное");
}
//Задание 7
let numbers = [1, 2, 3, 4, 5];

for (let i = 0; i < numbers.length; i++) {
  console.log(numbers[i]);
}
//Задание 8
function findMaxNumber(arr) {
  let max = arr[0];
  for (let i = 1; i < arr.length; i++) {
    if (arr[i] > max) {
      max = arr[i];
    }
  }
  return max;
}

let numbers = [3, 5, 1, 9, 7];
console.log(findMaxNumber(numbers)); 
//Задание 9
let student = {
  name: "John",
  age: 20,
  averageGrade: 85
};

// Вывод свойств объекта
console.log("Имя студента:", student.name);
console.log("Возраст студента:", student.age);
console.log("Средний балл студента:", student.averageGrade);
//Задание 10
function combineStrings(str1, str2) {
  return str1 + " " + str2;
}
let result = combineStrings("Hello", "World");
console.log(result); 
//Задание 11
for (let i = 1; i <= 10; i++) {
  console.log(i);
}
//Задание 12
function isPalindrome(str) {
  // Удаляем все символы, не являющиеся буквами
  let cleanStr = str.toLowerCase().replace(/[^a-zA-Zа-яА-Я]/g, "");
  
  // Сравниваем очищенную строку с ее обратной версией 
  return cleanStr === cleanStr.split('').reverse().join('');
}

// Пример использования
let word = prompt("Введите текст:");
if (isPalindrome(word)) {
  console.log(word + " - палиндром");
} else {
  console.log(word + " - не палиндром");
}
//Задание 13
let students = [
  { name: "Антон", age: 20, averageGrade: 4.5 },
  { name: "Гриша", age: 21, averageGrade: 4.2 },
  { name: "Петр", age: 19, averageGrade: 4.8 }
];

for (let i = 0; i < students.length; i++) {
  console.log("Имя: " + students[i].name + ", Возраст: " + students[i].age + ", Средний балл: " + students[i].averageGrade);
}
