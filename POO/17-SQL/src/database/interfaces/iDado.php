<?php  
namespace Jhonata\CadastroProduto\Database\Interfaces;


interface Idado{
    public function salvar($script_sql);
    public function todos($query);
}


?>