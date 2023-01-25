peso = float(input("Introduce tu peso "))
altura = float(input("Introduce tu altura "))

imc = peso / altura**2
if imc < 18.5:
    print(f"Tu imc es: {imc:.2f}. Peso inferior al normal.")

elif imc < 18.5 or imc > 24.9:
    print(f"Tu imc es: {imc:.2f}. Peso normal.")
else:
    print(f"Tu imc es: {imc:.2f}. Peso superior al normal.")
