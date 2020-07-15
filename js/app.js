//const result = Number(prompt('?'));

// if (isNaN(result))
// {
//   alert('pls számot írj be');
// }
// else
// {
//   alert(result + 50);
// }

//alert(isNaN(result) ? 'pls számot írj be' : result + 50);
const random = Math.floor((Math.random() * 100) +1);
const numbers = [ random, 5, 6, 7, 123];

let count = 0;

for (let i = 0; i < numbers.length; i++)
{
  count += numbers[i];
}

document.body.append(count);

count = 0;
numbers.forEach(function(number)
{
  count += number;
});

document.getElementById('count-id').innerHTML
= '<b>' + count + '</b>'
