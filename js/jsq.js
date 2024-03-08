document.querySelector('form').addEventListener('submit', function(event) {
  event.preventDefault();
  var num1 = parseFloat(document.getElementById('num1').value);
  var op = document.getElementById('op').value;
  var num2 = parseFloat(document.getElementById('num2').value);
  var result;

  switch (op) {
    case '+':
      result = num1 + num2;
      break;
    case '-':
      result = num1 - num2;
      break;
    case '*':
      result = num1 * num2;
      break;
    case '/':
      if (num2!== 0) {
        result = num1 / num2;
      } else {
        alert('除数不能为 0');
        return;
      }
      break;
    default:
      alert('无效的运算符');
      return;
  }

  document.getElementById('result').innerHTML = num1 + ' ' + op + ' ' + num2 + ' = ' + result;
});
