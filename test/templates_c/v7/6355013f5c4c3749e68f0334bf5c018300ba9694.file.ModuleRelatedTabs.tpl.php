<?php /* Smarty version Smarty-3.1.7, created on 2020-11-22 12:59:20
         compiled from "/home/iranpartocms/public_html/v7.1.1/includes/runtime/../../layouts/v7/modules/Vtiger/ModuleRelatedTabs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13811184445fba60a850f677-37104532%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6355013f5c4c3749e68f0334bf5c018300ba9694' => 
    array (
      0 => '/home/iranpartocms/public_html/v7.1.1/includes/runtime/../../layouts/v7/modules/Vtiger/ModuleRelatedTabs.tpl',
      1 => 1524745196,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13811184445fba60a850f677-37104532',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'DETAILVIEW_LINKS' => 0,
    'RELATED_LINK' => 0,
    'MODULE_NAME' => 0,
    'RELATEDLINK_LABEL' => 0,
    'RELATED_TAB_LABEL' => 0,
    'SELECTED_TAB_LABEL' => 0,
    'RELATEDLINK_URL' => 0,
    'SELECTED_MENU_CATEGORY' => 0,
    'RELATEDTABS' => 0,
    'COUNT' => 0,
    'LIMIT' => 0,
    'COUNT1' => 0,
    'i' => 0,
    'RELATEDMODULENAME' => 0,
    'SELECTED_RELATION_ID' => 0,
    'DETAILVIEWRELATEDLINKLBL' => 0,
    'RELATEDFIELDNAME' => 0,
    'RELATED_MODULE_MODEL' => 0,
    'MORE_TAB_ACTIVE' => 0,
    'j' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5fba60a864b30',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fba60a864b30')) {function content_5fba60a864b30($_smarty_tpl) {?>

<div class='visible-lg related-tabs row "'><ul class="nav nav-tabs"><?php  $_smarty_tpl->tpl_vars['RELATED_LINK'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['RELATED_LINK']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['DETAILVIEW_LINKS']->value['DETAILVIEWTAB']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['RELATED_LINK']->key => $_smarty_tpl->tpl_vars['RELATED_LINK']->value){
$_smarty_tpl->tpl_vars['RELATED_LINK']->_loop = true;
?><?php $_smarty_tpl->tpl_vars['RELATEDLINK_URL'] = new Smarty_variable($_smarty_tpl->tpl_vars['RELATED_LINK']->value->getUrl(), null, 0);?><?php $_smarty_tpl->tpl_vars['RELATEDLINK_LABEL'] = new Smarty_variable($_smarty_tpl->tpl_vars['RELATED_LINK']->value->getLabel(), null, 0);?><?php ob_start();?><?php echo vtranslate(('SINGLE_').($_smarty_tpl->tpl_vars['MODULE_NAME']->value),$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['RELATED_TAB_LABEL'] = new Smarty_variable((($_tmp1).(" ")).($_smarty_tpl->tpl_vars['RELATEDLINK_LABEL']->value), null, 0);?><li class="tab-item <?php if ($_smarty_tpl->tpl_vars['RELATED_TAB_LABEL']->value==$_smarty_tpl->tpl_vars['SELECTED_TAB_LABEL']->value){?>active<?php }?>" data-url="<?php echo $_smarty_tpl->tpl_vars['RELATEDLINK_URL']->value;?>
&tab_label=<?php echo $_smarty_tpl->tpl_vars['RELATED_TAB_LABEL']->value;?>
&app=<?php echo $_smarty_tpl->tpl_vars['SELECTED_MENU_CATEGORY']->value;?>
" data-label-key="<?php echo $_smarty_tpl->tpl_vars['RELATEDLINK_LABEL']->value;?>
" data-link-key="<?php echo $_smarty_tpl->tpl_vars['RELATED_LINK']->value->get('linkKey');?>
" ><a href="<?php echo $_smarty_tpl->tpl_vars['RELATEDLINK_URL']->value;?>
&tab_label=<?php echo $_smarty_tpl->tpl_vars['RELATEDLINK_LABEL']->value;?>
&app=<?php echo $_smarty_tpl->tpl_vars['SELECTED_MENU_CATEGORY']->value;?>
" class="textOverflowEllipsis"><span class="tab-label"><strong><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
<?php $_tmp2=ob_get_clean();?><?php echo vtranslate($_smarty_tpl->tpl_vars['RELATEDLINK_LABEL']->value,$_tmp2);?>
</strong></span></a></li><?php } ?><?php $_smarty_tpl->tpl_vars['RELATEDTABS'] = new Smarty_variable($_smarty_tpl->tpl_vars['DETAILVIEW_LINKS']->value['DETAILVIEWRELATED'], null, 0);?><?php $_smarty_tpl->tpl_vars['COUNT'] = new Smarty_variable(count($_smarty_tpl->tpl_vars['RELATEDTABS']->value), null, 0);?><?php $_smarty_tpl->tpl_vars['LIMIT'] = new Smarty_variable(10, null, 0);?><?php if ($_smarty_tpl->tpl_vars['COUNT']->value>10){?><?php $_smarty_tpl->tpl_vars['COUNT1'] = new Smarty_variable($_smarty_tpl->tpl_vars['LIMIT']->value, null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars['COUNT1'] = new Smarty_variable($_smarty_tpl->tpl_vars['COUNT']->value, null, 0);?><?php }?><?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int)ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['COUNT1']->value-1+1 - (0) : 0-($_smarty_tpl->tpl_vars['COUNT1']->value-1)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0){
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++){
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?><?php $_smarty_tpl->tpl_vars['RELATED_LINK'] = new Smarty_variable($_smarty_tpl->tpl_vars['RELATEDTABS']->value[$_smarty_tpl->tpl_vars['i']->value], null, 0);?><?php $_smarty_tpl->tpl_vars['RELATEDMODULENAME'] = new Smarty_variable($_smarty_tpl->tpl_vars['RELATED_LINK']->value->getRelatedModuleName(), null, 0);?><?php $_smarty_tpl->tpl_vars['RELATEDFIELDNAME'] = new Smarty_variable($_smarty_tpl->tpl_vars['RELATED_LINK']->value->get('linkFieldName'), null, 0);?><?php $_smarty_tpl->tpl_vars["DETAILVIEWRELATEDLINKLBL"] = new Smarty_variable(vtranslate($_smarty_tpl->tpl_vars['RELATED_LINK']->value->getLabel(),$_smarty_tpl->tpl_vars['RELATEDMODULENAME']->value), null, 0);?><li class="tab-item <?php if ((trim($_smarty_tpl->tpl_vars['RELATED_LINK']->value->getLabel())==trim($_smarty_tpl->tpl_vars['SELECTED_TAB_LABEL']->value))&&($_smarty_tpl->tpl_vars['RELATED_LINK']->value->getId()==$_smarty_tpl->tpl_vars['SELECTED_RELATION_ID']->value)){?>active<?php }?>" data-url="<?php echo $_smarty_tpl->tpl_vars['RELATED_LINK']->value->getUrl();?>
&tab_label=<?php echo $_smarty_tpl->tpl_vars['RELATED_LINK']->value->getLabel();?>
&app=<?php echo $_smarty_tpl->tpl_vars['SELECTED_MENU_CATEGORY']->value;?>
" data-label-key="<?php echo $_smarty_tpl->tpl_vars['RELATED_LINK']->value->getLabel();?>
"data-module="<?php echo $_smarty_tpl->tpl_vars['RELATEDMODULENAME']->value;?>
" data-relation-id="<?php echo $_smarty_tpl->tpl_vars['RELATED_LINK']->value->getId();?>
" <?php if ($_smarty_tpl->tpl_vars['RELATEDMODULENAME']->value=="ModComments"){?> title <?php }else{ ?> title="<?php echo $_smarty_tpl->tpl_vars['DETAILVIEWRELATEDLINKLBL']->value;?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['RELATEDFIELDNAME']->value){?>data-relatedfield ="<?php echo $_smarty_tpl->tpl_vars['RELATEDFIELDNAME']->value;?>
"<?php }?>><a href="index.php?<?php echo $_smarty_tpl->tpl_vars['RELATED_LINK']->value->getUrl();?>
&tab_label=<?php echo $_smarty_tpl->tpl_vars['RELATED_LINK']->value->getLabel();?>
&app=<?php echo $_smarty_tpl->tpl_vars['SELECTED_MENU_CATEGORY']->value;?>
" class="textOverflowEllipsis" displaylabel="<?php echo $_smarty_tpl->tpl_vars['DETAILVIEWRELATEDLINKLBL']->value;?>
" recordsCount="" ><?php if ($_smarty_tpl->tpl_vars['RELATEDMODULENAME']->value=="ModComments"){?><i class="fa fa-comment"></i> &nbsp;<span class="tab-label"><strong><?php echo $_smarty_tpl->tpl_vars['DETAILVIEWRELATEDLINKLBL']->value;?>
</strong></span><?php }else{ ?><span class="tab-icon"><?php $_smarty_tpl->tpl_vars['RELATED_MODULE_MODEL'] = new Smarty_variable(Vtiger_Module_Model::getInstance($_smarty_tpl->tpl_vars['RELATEDMODULENAME']->value), null, 0);?><?php echo $_smarty_tpl->tpl_vars['RELATED_MODULE_MODEL']->value->getModuleIcon();?>
</span><?php }?>&nbsp;<span class="numberCircle hide">0</span></a></li><?php ob_start();?><?php echo $_REQUEST['relationId'];?>
<?php $_tmp3=ob_get_clean();?><?php if (($_smarty_tpl->tpl_vars['RELATED_LINK']->value->getId()==$_tmp3)){?><?php $_smarty_tpl->tpl_vars['MORE_TAB_ACTIVE'] = new Smarty_variable('true', null, 0);?><?php }?><?php }} ?><?php if ($_smarty_tpl->tpl_vars['MORE_TAB_ACTIVE']->value!='true'){?><?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int)ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['COUNT']->value-1+1 - (0) : 0-($_smarty_tpl->tpl_vars['COUNT']->value-1)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0){
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++){
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?><?php $_smarty_tpl->tpl_vars['RELATED_LINK'] = new Smarty_variable($_smarty_tpl->tpl_vars['RELATEDTABS']->value[$_smarty_tpl->tpl_vars['i']->value], null, 0);?><?php ob_start();?><?php echo $_REQUEST['relationId'];?>
<?php $_tmp4=ob_get_clean();?><?php if (($_smarty_tpl->tpl_vars['RELATED_LINK']->value->getId()==$_tmp4)){?><?php $_smarty_tpl->tpl_vars['RELATEDMODULENAME'] = new Smarty_variable($_smarty_tpl->tpl_vars['RELATED_LINK']->value->getRelatedModuleName(), null, 0);?><?php $_smarty_tpl->tpl_vars['RELATEDFIELDNAME'] = new Smarty_variable($_smarty_tpl->tpl_vars['RELATED_LINK']->value->get('linkFieldName'), null, 0);?><?php $_smarty_tpl->tpl_vars["DETAILVIEWRELATEDLINKLBL"] = new Smarty_variable(vtranslate($_smarty_tpl->tpl_vars['RELATED_LINK']->value->getLabel(),$_smarty_tpl->tpl_vars['RELATEDMODULENAME']->value), null, 0);?><li class="more-tab moreTabElement active"  data-url="<?php echo $_smarty_tpl->tpl_vars['RELATED_LINK']->value->getUrl();?>
&tab_label=<?php echo $_smarty_tpl->tpl_vars['RELATED_LINK']->value->getLabel();?>
&app=<?php echo $_smarty_tpl->tpl_vars['SELECTED_MENU_CATEGORY']->value;?>
" data-label-key="<?php echo $_smarty_tpl->tpl_vars['RELATED_LINK']->value->getLabel();?>
"data-module="<?php echo $_smarty_tpl->tpl_vars['RELATEDMODULENAME']->value;?>
" data-relation-id="<?php echo $_smarty_tpl->tpl_vars['RELATED_LINK']->value->getId();?>
" <?php if ($_smarty_tpl->tpl_vars['RELATEDMODULENAME']->value=="ModComments"){?> title <?php }else{ ?> title="<?php echo $_smarty_tpl->tpl_vars['DETAILVIEWRELATEDLINKLBL']->value;?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['RELATEDFIELDNAME']->value){?>data-relatedfield ="<?php echo $_smarty_tpl->tpl_vars['RELATEDFIELDNAME']->value;?>
"<?php }?>><a href="index.php?<?php echo $_smarty_tpl->tpl_vars['RELATED_LINK']->value->getUrl();?>
&tab_label=<?php echo $_smarty_tpl->tpl_vars['RELATED_LINK']->value->getLabel();?>
&app=<?php echo $_smarty_tpl->tpl_vars['SELECTED_MENU_CATEGORY']->value;?>
" class="textOverflowEllipsis" displaylabel="<?php echo $_smarty_tpl->tpl_vars['DETAILVIEWRELATEDLINKLBL']->value;?>
" recordsCount="" ><?php if ($_smarty_tpl->tpl_vars['RELATEDMODULENAME']->value=="ModComments"){?><i class="fa fa-comment"></i> &nbsp;<span class="tab-label"><strong><?php echo $_smarty_tpl->tpl_vars['DETAILVIEWRELATEDLINKLBL']->value;?>
</strong></span><?php }else{ ?><span class="tab-icon"><?php $_smarty_tpl->tpl_vars['RELATED_MODULE_MODEL'] = new Smarty_variable(Vtiger_Module_Model::getInstance($_smarty_tpl->tpl_vars['RELATEDMODULENAME']->value), null, 0);?><?php echo $_smarty_tpl->tpl_vars['RELATED_MODULE_MODEL']->value->getModuleIcon();?>
</span><?php }?>&nbsp;<span class="numberCircle hide">0</span></a></li><?php break 1?><?php }?><?php }} ?><?php }?><?php if ($_smarty_tpl->tpl_vars['COUNT']->value>$_smarty_tpl->tpl_vars['LIMIT']->value){?><li class="dropdown related-tab-more-element"><a href="javascript:void(0)" data-toggle="dropdown" class="dropdown-toggle"><span class="tab-label"><strong><?php echo vtranslate("LBL_MORE",$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</strong> &nbsp; <b class="fa fa-caret-down"></b></span></a><ul class="dropdown-menu pull-right" id="relatedmenuList"><?php $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['j']->step = 1;$_smarty_tpl->tpl_vars['j']->total = (int)ceil(($_smarty_tpl->tpl_vars['j']->step > 0 ? $_smarty_tpl->tpl_vars['COUNT']->value-1+1 - ($_smarty_tpl->tpl_vars['COUNT1']->value) : $_smarty_tpl->tpl_vars['COUNT1']->value-($_smarty_tpl->tpl_vars['COUNT']->value-1)+1)/abs($_smarty_tpl->tpl_vars['j']->step));
if ($_smarty_tpl->tpl_vars['j']->total > 0){
for ($_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['COUNT1']->value, $_smarty_tpl->tpl_vars['j']->iteration = 1;$_smarty_tpl->tpl_vars['j']->iteration <= $_smarty_tpl->tpl_vars['j']->total;$_smarty_tpl->tpl_vars['j']->value += $_smarty_tpl->tpl_vars['j']->step, $_smarty_tpl->tpl_vars['j']->iteration++){
$_smarty_tpl->tpl_vars['j']->first = $_smarty_tpl->tpl_vars['j']->iteration == 1;$_smarty_tpl->tpl_vars['j']->last = $_smarty_tpl->tpl_vars['j']->iteration == $_smarty_tpl->tpl_vars['j']->total;?><?php $_smarty_tpl->tpl_vars['RELATED_LINK'] = new Smarty_variable($_smarty_tpl->tpl_vars['RELATEDTABS']->value[$_smarty_tpl->tpl_vars['j']->value], null, 0);?><?php $_smarty_tpl->tpl_vars['RELATEDMODULENAME'] = new Smarty_variable($_smarty_tpl->tpl_vars['RELATED_LINK']->value->getRelatedModuleName(), null, 0);?><?php $_smarty_tpl->tpl_vars['RELATEDFIELDNAME'] = new Smarty_variable($_smarty_tpl->tpl_vars['RELATED_LINK']->value->get('linkFieldName'), null, 0);?><?php $_smarty_tpl->tpl_vars["DETAILVIEWRELATEDLINKLBL"] = new Smarty_variable(vtranslate($_smarty_tpl->tpl_vars['RELATED_LINK']->value->getLabel(),$_smarty_tpl->tpl_vars['RELATEDMODULENAME']->value), null, 0);?><li class="more-tab <?php if ((trim($_smarty_tpl->tpl_vars['RELATED_LINK']->value->getLabel())==trim($_smarty_tpl->tpl_vars['SELECTED_TAB_LABEL']->value))&&($_smarty_tpl->tpl_vars['RELATED_LINK']->value->getId()==$_smarty_tpl->tpl_vars['SELECTED_RELATION_ID']->value)){?>active<?php }?>" data-url="<?php echo $_smarty_tpl->tpl_vars['RELATED_LINK']->value->getUrl();?>
&tab_label=<?php echo $_smarty_tpl->tpl_vars['RELATED_LINK']->value->getLabel();?>
&app=<?php echo $_smarty_tpl->tpl_vars['SELECTED_MENU_CATEGORY']->value;?>
" data-label-key="<?php echo $_smarty_tpl->tpl_vars['RELATED_LINK']->value->getLabel();?>
"data-module="<?php echo $_smarty_tpl->tpl_vars['RELATEDMODULENAME']->value;?>
" title="" data-relation-id="<?php echo $_smarty_tpl->tpl_vars['RELATED_LINK']->value->getId();?>
" <?php if ($_smarty_tpl->tpl_vars['RELATEDFIELDNAME']->value){?>data-relatedfield ="<?php echo $_smarty_tpl->tpl_vars['RELATEDFIELDNAME']->value;?>
"<?php }?>><a href="index.php?<?php echo $_smarty_tpl->tpl_vars['RELATED_LINK']->value->getUrl();?>
&tab_label=<?php echo $_smarty_tpl->tpl_vars['RELATED_LINK']->value->getLabel();?>
&app=<?php echo $_smarty_tpl->tpl_vars['SELECTED_MENU_CATEGORY']->value;?>
" displaylabel="<?php echo $_smarty_tpl->tpl_vars['DETAILVIEWRELATEDLINKLBL']->value;?>
" recordsCount=""><?php if ($_smarty_tpl->tpl_vars['RELATEDMODULENAME']->value=="ModComments"){?><i class="fa fa-comment"></i> &nbsp;<span class="tab-label"><?php echo $_smarty_tpl->tpl_vars['DETAILVIEWRELATEDLINKLBL']->value;?>
</span><?php }else{ ?><?php $_smarty_tpl->tpl_vars['RELATED_MODULE_MODEL'] = new Smarty_variable(Vtiger_Module_Model::getInstance($_smarty_tpl->tpl_vars['RELATEDMODULENAME']->value), null, 0);?><span class="tab-icon textOverflowEllipsis"><?php echo $_smarty_tpl->tpl_vars['RELATED_MODULE_MODEL']->value->getModuleIcon();?>
<span class="content"> &nbsp;<?php echo $_smarty_tpl->tpl_vars['DETAILVIEWRELATEDLINKLBL']->value;?>
</span></span><?php }?>&nbsp;<span class="numberCircle hide">0</span></a></li><?php }} ?></ul></li><?php }?></ul></div><div class="related-tabs-mobile visible-xs visible-md visible-sm row"><div class="col-md-12 col-sm-12 col-xs-12 text-center"><div class="btn-group"><button type="button" class="btn btn-se7en dropdown-toggle" style="width:200px!important;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-paperclip"></i> بخش های مرتبط <i class="fa fa-caret-down"></i></button><ul class="dropdown-menu related"><?php  $_smarty_tpl->tpl_vars['RELATED_LINK'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['RELATED_LINK']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['DETAILVIEW_LINKS']->value['DETAILVIEWTAB']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['RELATED_LINK']->key => $_smarty_tpl->tpl_vars['RELATED_LINK']->value){
$_smarty_tpl->tpl_vars['RELATED_LINK']->_loop = true;
?><?php $_smarty_tpl->tpl_vars['RELATEDLINK_URL'] = new Smarty_variable($_smarty_tpl->tpl_vars['RELATED_LINK']->value->getUrl(), null, 0);?><?php $_smarty_tpl->tpl_vars['RELATEDLINK_LABEL'] = new Smarty_variable($_smarty_tpl->tpl_vars['RELATED_LINK']->value->getLabel(), null, 0);?><?php ob_start();?><?php echo vtranslate(('SINGLE_').($_smarty_tpl->tpl_vars['MODULE_NAME']->value),$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
<?php $_tmp5=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['RELATED_TAB_LABEL'] = new Smarty_variable((($_tmp5).(" ")).($_smarty_tpl->tpl_vars['RELATEDLINK_LABEL']->value), null, 0);?><li class="tab-item <?php if ($_smarty_tpl->tpl_vars['RELATED_TAB_LABEL']->value==$_smarty_tpl->tpl_vars['SELECTED_TAB_LABEL']->value){?>active<?php }?>" data-url="<?php echo $_smarty_tpl->tpl_vars['RELATEDLINK_URL']->value;?>
&tab_label=<?php echo $_smarty_tpl->tpl_vars['RELATED_TAB_LABEL']->value;?>
&app=<?php echo $_smarty_tpl->tpl_vars['SELECTED_MENU_CATEGORY']->value;?>
" data-label-key="<?php echo $_smarty_tpl->tpl_vars['RELATEDLINK_LABEL']->value;?>
" data-link-key="<?php echo $_smarty_tpl->tpl_vars['RELATED_LINK']->value->get('linkKey');?>
" ><a href="<?php echo $_smarty_tpl->tpl_vars['RELATEDLINK_URL']->value;?>
&tab_label=<?php echo $_smarty_tpl->tpl_vars['RELATEDLINK_LABEL']->value;?>
&app=<?php echo $_smarty_tpl->tpl_vars['SELECTED_MENU_CATEGORY']->value;?>
" class="textOverflowEllipsis"><span class="tab-label"><strong><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
<?php $_tmp6=ob_get_clean();?><?php echo vtranslate($_smarty_tpl->tpl_vars['RELATEDLINK_LABEL']->value,$_tmp6);?>
</strong></span></a></li><?php } ?><li class="divider"></li><?php $_smarty_tpl->tpl_vars['RELATEDTABS'] = new Smarty_variable($_smarty_tpl->tpl_vars['DETAILVIEW_LINKS']->value['DETAILVIEWRELATED'], null, 0);?><?php $_smarty_tpl->tpl_vars['COUNT'] = new Smarty_variable(count($_smarty_tpl->tpl_vars['RELATEDTABS']->value), null, 0);?><?php $_smarty_tpl->tpl_vars['LIMIT'] = new Smarty_variable(10, null, 0);?><?php if ($_smarty_tpl->tpl_vars['COUNT']->value>10){?><?php $_smarty_tpl->tpl_vars['COUNT1'] = new Smarty_variable($_smarty_tpl->tpl_vars['LIMIT']->value, null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars['COUNT1'] = new Smarty_variable($_smarty_tpl->tpl_vars['COUNT']->value, null, 0);?><?php }?><?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int)ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['COUNT1']->value-1+1 - (0) : 0-($_smarty_tpl->tpl_vars['COUNT1']->value-1)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0){
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++){
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?><?php $_smarty_tpl->tpl_vars['RELATED_LINK'] = new Smarty_variable($_smarty_tpl->tpl_vars['RELATEDTABS']->value[$_smarty_tpl->tpl_vars['i']->value], null, 0);?><?php $_smarty_tpl->tpl_vars['RELATEDMODULENAME'] = new Smarty_variable($_smarty_tpl->tpl_vars['RELATED_LINK']->value->getRelatedModuleName(), null, 0);?><?php $_smarty_tpl->tpl_vars['RELATEDFIELDNAME'] = new Smarty_variable($_smarty_tpl->tpl_vars['RELATED_LINK']->value->get('linkFieldName'), null, 0);?><?php $_smarty_tpl->tpl_vars["DETAILVIEWRELATEDLINKLBL"] = new Smarty_variable(vtranslate($_smarty_tpl->tpl_vars['RELATED_LINK']->value->getLabel(),$_smarty_tpl->tpl_vars['RELATEDMODULENAME']->value), null, 0);?><li class="tab-item <?php if ((trim($_smarty_tpl->tpl_vars['RELATED_LINK']->value->getLabel())==trim($_smarty_tpl->tpl_vars['SELECTED_TAB_LABEL']->value))&&($_smarty_tpl->tpl_vars['RELATED_LINK']->value->getId()==$_smarty_tpl->tpl_vars['SELECTED_RELATION_ID']->value)){?>active<?php }?>" data-url="<?php echo $_smarty_tpl->tpl_vars['RELATED_LINK']->value->getUrl();?>
&tab_label=<?php echo $_smarty_tpl->tpl_vars['RELATED_LINK']->value->getLabel();?>
&app=<?php echo $_smarty_tpl->tpl_vars['SELECTED_MENU_CATEGORY']->value;?>
" data-label-key="<?php echo $_smarty_tpl->tpl_vars['RELATED_LINK']->value->getLabel();?>
"data-module="<?php echo $_smarty_tpl->tpl_vars['RELATEDMODULENAME']->value;?>
" data-relation-id="<?php echo $_smarty_tpl->tpl_vars['RELATED_LINK']->value->getId();?>
" <?php if ($_smarty_tpl->tpl_vars['RELATEDMODULENAME']->value=="ModComments"){?> title <?php }else{ ?> title="<?php echo $_smarty_tpl->tpl_vars['DETAILVIEWRELATEDLINKLBL']->value;?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['RELATEDFIELDNAME']->value){?>data-relatedfield ="<?php echo $_smarty_tpl->tpl_vars['RELATEDFIELDNAME']->value;?>
"<?php }?>><a href="index.php?<?php echo $_smarty_tpl->tpl_vars['RELATED_LINK']->value->getUrl();?>
&tab_label=<?php echo $_smarty_tpl->tpl_vars['RELATED_LINK']->value->getLabel();?>
&app=<?php echo $_smarty_tpl->tpl_vars['SELECTED_MENU_CATEGORY']->value;?>
" class="textOverflowEllipsis" displaylabel="<?php echo $_smarty_tpl->tpl_vars['DETAILVIEWRELATEDLINKLBL']->value;?>
" recordsCount="" ><?php if ($_smarty_tpl->tpl_vars['RELATEDMODULENAME']->value=="ModComments"){?><i class="fa fa-comment"></i> &nbsp;<span class="tab-label"><strong><?php echo $_smarty_tpl->tpl_vars['DETAILVIEWRELATEDLINKLBL']->value;?>
</strong></span><?php }else{ ?><span class="tab-icon"><?php $_smarty_tpl->tpl_vars['RELATED_MODULE_MODEL'] = new Smarty_variable(Vtiger_Module_Model::getInstance($_smarty_tpl->tpl_vars['RELATEDMODULENAME']->value), null, 0);?><?php echo $_smarty_tpl->tpl_vars['RELATED_MODULE_MODEL']->value->getModuleIcon();?>
<span class="content"> &nbsp;<?php echo $_smarty_tpl->tpl_vars['DETAILVIEWRELATEDLINKLBL']->value;?>
</span></span><?php }?>&nbsp;<span class="numberCircle hide">0</span></a></li><?php ob_start();?><?php echo $_REQUEST['relationId'];?>
<?php $_tmp7=ob_get_clean();?><?php if (($_smarty_tpl->tpl_vars['RELATED_LINK']->value->getId()==$_tmp7)){?><?php $_smarty_tpl->tpl_vars['MORE_TAB_ACTIVE'] = new Smarty_variable('true', null, 0);?><?php }?><?php }} ?><?php if ($_smarty_tpl->tpl_vars['MORE_TAB_ACTIVE']->value!='true'){?><?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int)ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['COUNT']->value-1+1 - (0) : 0-($_smarty_tpl->tpl_vars['COUNT']->value-1)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0){
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++){
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?><?php $_smarty_tpl->tpl_vars['RELATED_LINK'] = new Smarty_variable($_smarty_tpl->tpl_vars['RELATEDTABS']->value[$_smarty_tpl->tpl_vars['i']->value], null, 0);?><?php ob_start();?><?php echo $_REQUEST['relationId'];?>
<?php $_tmp8=ob_get_clean();?><?php if (($_smarty_tpl->tpl_vars['RELATED_LINK']->value->getId()==$_tmp8)){?><?php $_smarty_tpl->tpl_vars['RELATEDMODULENAME'] = new Smarty_variable($_smarty_tpl->tpl_vars['RELATED_LINK']->value->getRelatedModuleName(), null, 0);?><?php $_smarty_tpl->tpl_vars['RELATEDFIELDNAME'] = new Smarty_variable($_smarty_tpl->tpl_vars['RELATED_LINK']->value->get('linkFieldName'), null, 0);?><?php $_smarty_tpl->tpl_vars["DETAILVIEWRELATEDLINKLBL"] = new Smarty_variable(vtranslate($_smarty_tpl->tpl_vars['RELATED_LINK']->value->getLabel(),$_smarty_tpl->tpl_vars['RELATEDMODULENAME']->value), null, 0);?><li class="more-tab moreTabElement active"  data-url="<?php echo $_smarty_tpl->tpl_vars['RELATED_LINK']->value->getUrl();?>
&tab_label=<?php echo $_smarty_tpl->tpl_vars['RELATED_LINK']->value->getLabel();?>
&app=<?php echo $_smarty_tpl->tpl_vars['SELECTED_MENU_CATEGORY']->value;?>
" data-label-key="<?php echo $_smarty_tpl->tpl_vars['RELATED_LINK']->value->getLabel();?>
"data-module="<?php echo $_smarty_tpl->tpl_vars['RELATEDMODULENAME']->value;?>
" data-relation-id="<?php echo $_smarty_tpl->tpl_vars['RELATED_LINK']->value->getId();?>
" <?php if ($_smarty_tpl->tpl_vars['RELATEDMODULENAME']->value=="ModComments"){?> title <?php }else{ ?> title="<?php echo $_smarty_tpl->tpl_vars['DETAILVIEWRELATEDLINKLBL']->value;?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['RELATEDFIELDNAME']->value){?>data-relatedfield ="<?php echo $_smarty_tpl->tpl_vars['RELATEDFIELDNAME']->value;?>
"<?php }?>><a href="index.php?<?php echo $_smarty_tpl->tpl_vars['RELATED_LINK']->value->getUrl();?>
&tab_label=<?php echo $_smarty_tpl->tpl_vars['RELATED_LINK']->value->getLabel();?>
&app=<?php echo $_smarty_tpl->tpl_vars['SELECTED_MENU_CATEGORY']->value;?>
" class="textOverflowEllipsis" displaylabel="<?php echo $_smarty_tpl->tpl_vars['DETAILVIEWRELATEDLINKLBL']->value;?>
" recordsCount="" ><?php if ($_smarty_tpl->tpl_vars['RELATEDMODULENAME']->value=="ModComments"){?><i class="fa fa-comment"></i> &nbsp;<span class="tab-label"><strong><?php echo $_smarty_tpl->tpl_vars['DETAILVIEWRELATEDLINKLBL']->value;?>
</strong></span><?php }else{ ?><span class="tab-icon"><?php $_smarty_tpl->tpl_vars['RELATED_MODULE_MODEL'] = new Smarty_variable(Vtiger_Module_Model::getInstance($_smarty_tpl->tpl_vars['RELATEDMODULENAME']->value), null, 0);?><?php echo $_smarty_tpl->tpl_vars['RELATED_MODULE_MODEL']->value->getModuleIcon();?>
<span class="content"> &nbsp;<?php echo $_smarty_tpl->tpl_vars['DETAILVIEWRELATEDLINKLBL']->value;?>
</span></span><?php }?>&nbsp;<span class="numberCircle hide">0</span></a></li><?php break 1?><?php }?><?php }} ?><?php }?><?php if ($_smarty_tpl->tpl_vars['COUNT']->value>$_smarty_tpl->tpl_vars['LIMIT']->value){?><?php $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['j']->step = 1;$_smarty_tpl->tpl_vars['j']->total = (int)ceil(($_smarty_tpl->tpl_vars['j']->step > 0 ? $_smarty_tpl->tpl_vars['COUNT']->value-1+1 - ($_smarty_tpl->tpl_vars['COUNT1']->value) : $_smarty_tpl->tpl_vars['COUNT1']->value-($_smarty_tpl->tpl_vars['COUNT']->value-1)+1)/abs($_smarty_tpl->tpl_vars['j']->step));
if ($_smarty_tpl->tpl_vars['j']->total > 0){
for ($_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['COUNT1']->value, $_smarty_tpl->tpl_vars['j']->iteration = 1;$_smarty_tpl->tpl_vars['j']->iteration <= $_smarty_tpl->tpl_vars['j']->total;$_smarty_tpl->tpl_vars['j']->value += $_smarty_tpl->tpl_vars['j']->step, $_smarty_tpl->tpl_vars['j']->iteration++){
$_smarty_tpl->tpl_vars['j']->first = $_smarty_tpl->tpl_vars['j']->iteration == 1;$_smarty_tpl->tpl_vars['j']->last = $_smarty_tpl->tpl_vars['j']->iteration == $_smarty_tpl->tpl_vars['j']->total;?><?php $_smarty_tpl->tpl_vars['RELATED_LINK'] = new Smarty_variable($_smarty_tpl->tpl_vars['RELATEDTABS']->value[$_smarty_tpl->tpl_vars['j']->value], null, 0);?><?php $_smarty_tpl->tpl_vars['RELATEDMODULENAME'] = new Smarty_variable($_smarty_tpl->tpl_vars['RELATED_LINK']->value->getRelatedModuleName(), null, 0);?><?php $_smarty_tpl->tpl_vars['RELATEDFIELDNAME'] = new Smarty_variable($_smarty_tpl->tpl_vars['RELATED_LINK']->value->get('linkFieldName'), null, 0);?><?php $_smarty_tpl->tpl_vars["DETAILVIEWRELATEDLINKLBL"] = new Smarty_variable(vtranslate($_smarty_tpl->tpl_vars['RELATED_LINK']->value->getLabel(),$_smarty_tpl->tpl_vars['RELATEDMODULENAME']->value), null, 0);?><li class="more-tab <?php if ((trim($_smarty_tpl->tpl_vars['RELATED_LINK']->value->getLabel())==trim($_smarty_tpl->tpl_vars['SELECTED_TAB_LABEL']->value))&&($_smarty_tpl->tpl_vars['RELATED_LINK']->value->getId()==$_smarty_tpl->tpl_vars['SELECTED_RELATION_ID']->value)){?>active<?php }?>" data-url="<?php echo $_smarty_tpl->tpl_vars['RELATED_LINK']->value->getUrl();?>
&tab_label=<?php echo $_smarty_tpl->tpl_vars['RELATED_LINK']->value->getLabel();?>
&app=<?php echo $_smarty_tpl->tpl_vars['SELECTED_MENU_CATEGORY']->value;?>
" data-label-key="<?php echo $_smarty_tpl->tpl_vars['RELATED_LINK']->value->getLabel();?>
"data-module="<?php echo $_smarty_tpl->tpl_vars['RELATEDMODULENAME']->value;?>
" title="" data-relation-id="<?php echo $_smarty_tpl->tpl_vars['RELATED_LINK']->value->getId();?>
" <?php if ($_smarty_tpl->tpl_vars['RELATEDFIELDNAME']->value){?>data-relatedfield ="<?php echo $_smarty_tpl->tpl_vars['RELATEDFIELDNAME']->value;?>
"<?php }?>><a href="index.php?<?php echo $_smarty_tpl->tpl_vars['RELATED_LINK']->value->getUrl();?>
&tab_label=<?php echo $_smarty_tpl->tpl_vars['RELATED_LINK']->value->getLabel();?>
&app=<?php echo $_smarty_tpl->tpl_vars['SELECTED_MENU_CATEGORY']->value;?>
" displaylabel="<?php echo $_smarty_tpl->tpl_vars['DETAILVIEWRELATEDLINKLBL']->value;?>
" recordsCount=""><?php if ($_smarty_tpl->tpl_vars['RELATEDMODULENAME']->value=="ModComments"){?><i class="fa fa-comment"></i> &nbsp;<span class="tab-label"><?php echo $_smarty_tpl->tpl_vars['DETAILVIEWRELATEDLINKLBL']->value;?>
</span><?php }else{ ?><?php $_smarty_tpl->tpl_vars['RELATED_MODULE_MODEL'] = new Smarty_variable(Vtiger_Module_Model::getInstance($_smarty_tpl->tpl_vars['RELATEDMODULENAME']->value), null, 0);?><span class="tab-icon textOverflowEllipsis"><?php echo $_smarty_tpl->tpl_vars['RELATED_MODULE_MODEL']->value->getModuleIcon();?>
<span class="content"> &nbsp;<?php echo $_smarty_tpl->tpl_vars['DETAILVIEWRELATEDLINKLBL']->value;?>
</span></span><?php }?>&nbsp;<span class="numberCircle hide">0</span></a></li><?php }} ?><?php }?></ul></div></div></div><?php }} ?>