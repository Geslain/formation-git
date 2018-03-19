import mult.py
import addition.py
import division.py
import soustraction.py

print("Choisissez le premier nombre")
a = input()

print("Choisissez le premier nombre")
b = input()

print("Choisissez l'opération voulue")
operation = input()


if operation == 'multiplication':
    multiplication(a, b)
elif operation == 'addition':
    addition(a, b)
elif operation == 'soustraction':
	soustraction(a, b)
elif operation == 'division':
    division(a, b)