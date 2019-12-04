class ListaSimples1{
	IntNoSimples primeiro, ultimo;
	int numero_nos;

	ListaSimples1 (){
		primeiro = ultimo = null;
		numero_nos = 0;
	}

	void insereNo (IntNoSimples novoNo){
		novoNo.prox = null;
		if (primeiro == null)
			primeiro = novoNo;

		if (ultimo != null)
			ultimo.prox = novoNo;
		ultimo = novoNo;
		numero_nos++;
	}
        
        void exibeLista(){
            IntNoSimples p;
            p = primeiro;
            
            while (p.prox != null){
                System.out.println("Conteudo: "+p.valor);
                p = p.prox;
            }
            System.out.println("Conteudo: "+p.valor);
        }
        
        void contarNos(){
            if (primeiro != null){
            IntNoSimples p;
            p = primeiro;
            int cont = 1;
            
            while (p.prox != null){
                cont ++;
                p = p.prox;
            }
            System.out.println("A lista possui "+cont+" nós.");
        }
            else{
                System.out.println("A lista está vazia.");
            }
        }
        
        void listaVazia (){
                 if(primeiro == null){
                System.out.println("A lista está vazia.");
            }
            else{
                System.out.println("A lista não está vazia.");
            }
        }
        
        void listaVazia2(){
            primeiro = null;
            numero_nos = 0;
        }
        }  
