<?php /* Smarty version Smarty-3.1.7, created on 2020-11-22 12:58:11
         compiled from "/home/iranpartocms/public_html/v7.1.1/includes/runtime/../../layouts/v7/modules/Vtiger/dashboards/DashBoardWidgetContents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11858081735fba60633bd526-45224359%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5ce9e31a570fd8c77b117dde50d19ff7bc173fb7' => 
    array (
      0 => '/home/iranpartocms/public_html/v7.1.1/includes/runtime/../../layouts/v7/modules/Vtiger/dashboards/DashBoardWidgetContents.tpl',
      1 => 1524831816,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11858081735fba60633bd526-45224359',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'DATA' => 0,
    'YAXIS_FIELD_TYPE' => 0,
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5fba60633c875',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fba60633c875')) {function content_5fba60633c875($_smarty_tpl) {?>
<?php if (count($_smarty_tpl->tpl_vars['DATA']->value)>0){?><input class="widgetData" type=hidden value='<?php echo Vtiger_Util_Helper::toSafeHTML(ZEND_JSON::encode($_smarty_tpl->tpl_vars['DATA']->value));?>
' /><input class="yAxisFieldType" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['YAXIS_FIELD_TYPE']->value;?>
" /><div class="row" style="margin:0px 10px;"><div class="col-lg-11"><div class="widgetChartContainer" name='chartcontent' style="height:220px;min-width:300px; margin: 0 auto"></div><br></div><div class="col-lg-1"></div></div><?php }else{ ?><span class="noDataMsg"><?php echo vtranslate('LBL_NOTHING_THIS_CRITERIA');?>
 <?php echo vtranslate($_smarty_tpl->tpl_vars['MODULE_NAME']->value,$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
 <?php echo vtranslate('LBL_NOT_FOUND');?>
</span><?php }?>
<?php }} ?>