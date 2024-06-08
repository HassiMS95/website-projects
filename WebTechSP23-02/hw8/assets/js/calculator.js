// JavaScript Document
const num1Input = document.getElementById('number1');
const num2Input = document.getElementById('number2');
const operationSelect = document.getElementById('operation');
const calculateButton = document.getElementById('calculate');
const resultInput = document.getElementById('result');

      // Add event listener to the calculate button
calculateButton.addEventListener('click', () => {
	const num1 = Number(num1Input.value);
	const num2 = Number(num2Input.value);
	const operation = operationSelect.value;
	let result;
	
	if (operation === 'add') {
		result = num1 + num2;
	}
	else if (operation === 'subtract') {
		result = num1 - num2;
	}
	else if (operation === 'multiply') {
		result = num1 * num2;
	}
	else if (operation === 'divide') {
		result = num1 / num2;
	}
	
	resultInput.value = result;
}
);