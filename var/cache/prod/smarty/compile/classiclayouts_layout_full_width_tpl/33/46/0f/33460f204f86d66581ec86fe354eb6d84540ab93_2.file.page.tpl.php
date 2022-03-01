<?php
/* Smarty version 3.1.39, created on 2022-03-01 04:30:54
  from 'C:\OpenServer\domains\localhost\themes\classic\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_621de7cec02536_49058818',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '33460f204f86d66581ec86fe354eb6d84540ab93' => 
    array (
      0 => 'C:\\OpenServer\\domains\\localhost\\themes\\classic\\templates\\page.tpl',
      1 => 1643096356,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_621de7cec02536_49058818 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_355163312621de7cebdebd4_39294156', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_338608105621de7cebe31c2_74535776 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_366775537621de7cebe06e4_97581244 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_338608105621de7cebe31c2_74535776', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_1746534702621de7cebf6f20_56402945 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_1985027802621de7cebf9fe3_16851229 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_582739187621de7cebf4ee3_60207506 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1746534702621de7cebf6f20_56402945', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1985027802621de7cebf9fe3_16851229', 'page_content', $this->tplIndex);
?>

      </div>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_1240583780621de7cebff273_36312657 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_918068177621de7cebfe4c8_95661757 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1240583780621de7cebff273_36312657', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_355163312621de7cebdebd4_39294156 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_355163312621de7cebdebd4_39294156',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_366775537621de7cebe06e4_97581244',
  ),
  'page_title' => 
  array (
    0 => 'Block_338608105621de7cebe31c2_74535776',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_582739187621de7cebf4ee3_60207506',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_1746534702621de7cebf6f20_56402945',
  ),
  'page_content' => 
  array (
    0 => 'Block_1985027802621de7cebf9fe3_16851229',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_918068177621de7cebfe4c8_95661757',
  ),
  'page_footer' => 
  array (
    0 => 'Block_1240583780621de7cebff273_36312657',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_366775537621de7cebe06e4_97581244', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_582739187621de7cebf4ee3_60207506', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_918068177621de7cebfe4c8_95661757', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
