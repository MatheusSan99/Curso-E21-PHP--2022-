   programa {
    inclua biblioteca Matematica --> mat
	  funcao inicio() {
    inteiro a,b
	  escreva("digite o primeiro número: \n")
		leia(a)
		escreva("digite o segundo número: \n")
		leia(b)
	
		inteiro soma = a+b
		inteiro subtracao = a-b
		inteiro divisao = a/b
		inteiro multiplicacao = a*b
		real raizquadrada = mat.raiz(a,2.0)
		real potencia = mat.potencia(a,b)
		real restodadivisao = a % b
		
		escreva("voce digitou ",a," e ",b, "\n", 
		"a soma é igual a: ", soma, 
		"\na subtração é igual a: ", subtracao, 
		"\na divisão é igual a: ", divisao, 
		"\na multiplicação é igual a: ", multiplicacao,
		"\na raiz² é igual a: ", raizquadrada,
		"\na potência é igual a: ", potencia,
		"\no resto da divisão é: ", restodadivisao)
	}}