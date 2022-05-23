## Este exemplo pede ao usuário que informe o ano atual. Logo após, calcula e exibe a quantidade de dias que se passaram desde o dia 01/01/0001 (ano 1 dc) até o dia 01/01 do ano atual.

	programa 
	{
	funcao inicio()
	{
		inteiro ano_atual, qtd_anos_bi, dias

		escreva("Informe o ano atual: ")
		leia(ano_atual)

		/*
		 *  Calcula a quantidade de anos bissextos que ocorreram até 
		 *  o ano atual (divisão inteira)
		 */ 
		qtd_anos_bi = ano_atual / 4 

		/* Calcula quantos dias serão no total */
		dias = (ano_atual - 1) * 365 +  qtd_anos_bi 
		
		escreva("Já se passaram ", dias, " dias desde 01/01/0001\n")
	}
	}
