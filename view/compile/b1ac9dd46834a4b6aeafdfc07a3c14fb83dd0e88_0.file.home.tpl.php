<?php
/* Smarty version 3.1.33, created on 2019-06-18 18:35:01
  from 'C:\xampp\htdocs\hibacar\view\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d0959057a6703_58453683',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b1ac9dd46834a4b6aeafdfc07a3c14fb83dd0e88' => 
    array (
      0 => 'C:\\xampp\\htdocs\\hibacar\\view\\home.tpl',
      1 => 1560893699,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d0959057a6703_58453683 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="hero">
    <div class="container">
        <div class="hero-titulos">
        <h2 class="hero-titulo">Encontre aqui as melhores<br>
            <strong>Oficinas Mecânicas</strong> <br>
            da capital PAULISTA!</h2>
        <h3 class="hero-subtitulo">Acesse pelo celular, computador ou tablet, e encontre <br>
            oficinas de confiança onde estiver e quando quiser!</h3>
        </div>
    </div>
</section>
<section class="skew"></section>
<section class="comofunciona" id="comofunciona">
    <div class="container">
        <h2 class="titulos">COMO FUNCIONA</h2>
        <div class="cards">
            <div class="card-como-funciona">
                <h2>PASSO 1</h2>
                Escolha o Serviço abaixo.
            </div>
            <img src="media/imagens/arrow-right.svg" alt="Setas" class="seta">
            <div class="card-como-funciona">
                <h2>PASSO 2</h2>
                Será apresentado um mapa com as oficinas mais próximas.
            </div>
            <img src="media/imagens/arrow-right.svg" alt="Setas" class="seta">
            <div class="card-como-funciona">
                <h2>PASSO 3</h2>
                Agende o serviço e avalie a oficina.
            </div>
        </div>
    </div>
</section>
<section class="skew skew-cor"></section>
<section class="servicos" id="servicos">
    <div class="container">
        <h2 class="titulos">SERVIÇOS</h2>
        <div class="cards-serv">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SERVICOS']->value, 'S');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['S']->value) {
?>
                <div class="card-servicos">
                                        <form action="buscaroficina.php" method="get">
                        <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['S']->value['serv_id'];?>
" name="servico">
                        <button type="submit" class="card-titulo">
                            <h2 ><?php echo $_smarty_tpl->tpl_vars['S']->value['serv_nome'];?>
</h2>
                        </button>
                    </form>
                </div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    </div>
</section>

<?php }
}
