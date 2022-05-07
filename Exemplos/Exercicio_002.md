programa {
	funcao inicio() {
		inteiro maioridade = 18
		inteiro nascimento
		inteiro ano_atual
		
		escreva("Digite sua data de nascimento: \n")
		leia(nascimento)
		
		escreva("Digite o ano em que estamos: ")
		leia(ano_atual)
		
		se (nascimento - ano_atual < maioridade) {
		    escreva("Você atingiu a maioridade! ")
		}
		senao {
		    escreva("Você ainda não atingiu a maioridade")
		}
	}
}