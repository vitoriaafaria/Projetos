class GeraLista{
	public static void main(String[] args){
		ListaSimples1 Slist = new ListaSimples1 ();
		Slist.insereNo (new IntNoSimples (1));
		Slist.insereNo (new IntNoSimples (3));
		Slist.insereNo (new IntNoSimples (5));
		Slist.insereNo (new IntNoSimples (7));
                Slist.exibeLista();
                Slist.contarNos();
                Slist.listaVazia();
                Slist.listaVazia2();
	}
}