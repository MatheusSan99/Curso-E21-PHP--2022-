	    escreva("Digite a quantidade de fatias de presunto que você irá querer no pedido \n")
	    leia(quantidade_presunto)
	    
	    escreva("Digite a quantidade de copos de suco que você irá querer no pedido \n")
	    leia(copo_suco)
	    
	    total_hamburguer = hamburguer * quantidade_hamburguer
	    total_queijo = queijo * quantidade_queijo
	    total_presunto = presunto * quantidade_presunto
	    total_suco = suco * copo_suco
	    
	    total_pagar = total_hamburguer + total_queijo + total_presunto + total_suco
	    limpa()
	    
	    escreva("Cliente: ", nome, "\n")
		escreva("===============================\n")
		escreva("Hamburguer: ", quantidade_hamburguer, "\n")
		escreva("Queijo: " , quantidade_queijo, "\n")
		escreva("Presunto: ", quantidade_presunto, "\n")
		escreva("Suco: ", copo_suco, "\n")
		escreva("===============================\n")
		escreva("Total a pagar:  R$ ", total_pagar, "\n")
	  
		}
	}
