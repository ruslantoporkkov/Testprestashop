<?php
/* Smarty version 3.1.39, created on 2022-03-01 04:30:54
  from 'C:\OpenServer\domains\localhost\themes\classic\templates\_partials\helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_621de7ced31bd3_70244549',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '50ccc9bdd6f6113aea8a9f362e474f3ed606abaf' => 
    array (
      0 => 'C:\\OpenServer\\domains\\localhost\\themes\\classic\\templates\\_partials\\helpers.tpl',
      1 => 1643096356,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_621de7ced31bd3_70244549 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => 'C:\\OpenServer\\domains\\localhost\\var\\cache\\prod\\smarty\\compile\\classiclayouts_layout_full_width_tpl\\50\\cc\\c9\\50ccc9bdd6f6113aea8a9f362e474f3ed606abaf_2.file.helpers.tpl.php',
    'uid' => '50ccc9bdd6f6113aea8a9f362e474f3ed606abaf',
    'call_name' => 'smarty_template_function_renderLogo_1324791182621de7ced11a65_40289919',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_1324791182621de7ced11a65_40289919 */
if (!function_exists('smarty_template_function_renderLogo_1324791182621de7ced11a65_40289919')) {
function smarty_template_function_renderLogo_1324791182621de7ced11a65_40289919(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
    <img
      class="logo img-fluid"
      src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['src'], ENT_QUOTES, 'UTF-8');?>
"
      alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
      width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['width'], ENT_QUOTES, 'UTF-8');?>
"
      height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['height'], ENT_QUOTES, 'UTF-8');?>
">
  </a>
<?php
}}
/*/ smarty_template_function_renderLogo_1324791182621de7ced11a65_40289919 */
}
