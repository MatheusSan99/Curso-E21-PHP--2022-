programa {
    	inclua biblioteca Matematica --> mat
	funcao inicio() {
	    
	  real altura, altura2, altura3, media_altura
	    
	    escreva("Digite a altura da primeira pessoa! ")
	    leia(altura)
	    
	    escreva("Digite a altura da segunda pessoa")
	    leia(altura2)
	    
	    escreva("Digite a altura da terceira pessoa")
	    leia(altura3)
	    
	    media_altura = (altura + altura2 + altura3) /3
	    
	    escreva("A média de altura do grupo é: \n", mat.arredondar(media_altura, 2 ), "metros\n")
	   
		}
	}
