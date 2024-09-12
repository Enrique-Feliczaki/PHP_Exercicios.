<?php
// Imagine a seguinte situação: “
// Um supermercado vende diferentes tipos de produtos. 
// Cada produto tem um preço e uma quantidade em estoque.
//  Um pedido de um cliente é composto de itens, onde cada item especifica 
//  o produto que o cliente deseja e a respectiva quantidade.
//   Esse pedido pode ser pago em dinheiro, cheque ou cartão.
//   ” Implemente um programa que satisfaça as condições descritas acima.

class Produto{
    private $nome;
    private $preco;
    private $quantidadeEstoque;

    public function __construct($nome,$preco,$quantidadeEstoque)
    {
        $this->nome = $nome;
        $this->preco = $preco;
        $this->quantidadeEstoque = $quantidadeEstoque;
    }

    public function getNome(){
        return $this->nome;
    }
    public function getPreco(){
        return $this->preco;
    }
    public function getQuantidadeEstoque(){
        return $this->quantidadeEstoque;
    }

    public function diminuirEstoque($quantidade){
        if($quantidade > $this->quantidadeEstoque){
            echo "Quantidade solicitada exede o estoque disponível\n";
            return false;
        }
        $this->quantidadeEstoque -=$quantidade;
        return true;
    }
}

    class ItemPedido{
        private $produto;
        private $quantidade;
        public function __construct($produto, $quantidade)
        {
            $this->produto = $produto;
            $this->quantidade = $quantidade;
        }
        public function getTotalItem(){
            return $this->produto->getPreco()*$this->quantidade;
        }
        public function processarItem(){
            return $this->produto->diminuirEstoque($this->quantidade);
        }
        public function getDescricaoItem(){
            return $this->quantidade . "x" . $this->produto->getNome() . "- Total: R$ " . $this->getTotalItem();
            
        }
    }

    class Pedido{
        private $items;
        private $formaPagamento;

        public function __construct($items, $formaPagamento)
        {
            $this->items = [];
            $this->formaPagamento = $formaPagamento;
        }
        public function adicionarItem(ItemPedido $item){
            if($item->processarItem()){
                $this->items[] = $item;
                echo "Item adicionado ao pedido: \n" . $item->getDescricaoItem() . "\n";
            } else{
                echo "Erro ao adicionar o item ao pedido. \n";
            }
        }
        public function calcularTotal(){
            $total = 0;
            foreach($this->items as $item){
                $total +=$item->getTotalItem();
            }
            return $total;
        }
        public function finalizarPedido(){
            echo "Pedido finalizado com pagamento em " . $this->formaPagamento . ". Total a pagar: R$" . $this->calcularTotal() . "\n";
        }
    }


    $produto1 = new Produto("Arroz", 10.00, 100);
    $produto2 = new Produto("Feijão", 8.50, 50);
    $produto3 = new Produto("Macarrão", 5.00, 30);

    $pedido = new Pedido("Arroz", "Cartao");
    $pedido->adicionarItem(new ItemPedido($produto1, 2));
    $pedido->adicionarItem(new ItemPedido($produto2,5));
    $pedido->adicionarItem(new ItemPedido($produto3,1));

    $pedido->finalizarPedido();