{*<!--
/*********************************************************************************
** The contents of this file are subject to the vtiger CRM Public License Version 1.0
* ("License"); You may not use this file except in compliance with the License
* The Original Code is: vtiger CRM Open Source
* The Initial Developer of the Original Code is vtiger.
* Portions created by vtiger are Copyright (C) vtiger.
* All Rights Reserved.
*
********************************************************************************/
-->*}
{strip}
    {if !empty($PICKIST_DEPENDENCY_DATASOURCE)}
        <input type="hidden" name="picklistDependency" value='{Vtiger_Util_Helper::toSafeHTML($PICKIST_DEPENDENCY_DATASOURCE)}' />
    {/if}
    <div name='editContent'>
        {foreach key=BLOCK_LABEL item=BLOCK_FIELDS from=$RECORD_STRUCTURE name=blockIterator}
            {if $BLOCK_FIELDS|@count gt 0}
                <div class='fieldBlockContainer'>
                    <h4 class='fieldBlockHeader' >{vtranslate($BLOCK_LABEL, $MODULE)}</h4>
                    <hr>
                    <div class="table table-borderless">
                        <div class="row">
                            {assign var=COUNTER value=0}
                            {foreach key=FIELD_NAME item=FIELD_MODEL from=$BLOCK_FIELDS name=blockfields}
                                {assign var="isReferenceField" value=$FIELD_MODEL->getFieldDataType()}
                                {assign var="refrenceList" value=$FIELD_MODEL->getReferenceList()}
                                {assign var="refrenceListCount" value=count($refrenceList)}
                                {if $FIELD_MODEL->isEditable() eq true}
                                    {if $FIELD_MODEL->get('uitype') eq "19"}
                                        {if $COUNTER eq '1'}
                                            <div></div><div></div></div><div class="row">
                                            {assign var=COUNTER value=0}
                                        {/if}
                                    {/if}
                                    {if $COUNTER eq 2}
                                    </div><div class="row">
                                        {assign var=COUNTER value=1}
                                    {else}
                                        {assign var=COUNTER value=$COUNTER+1}
                                    {/if}
                                    <div class="fieldLabel alignMiddle col-md-3 col-sm-12 col-xs-12">
                                        {if $isReferenceField eq "reference"}
                                            {if $refrenceListCount > 1}
                                                <select style="width: 140px;" class="select2 referenceModulesList">
                                                    {foreach key=index item=value from=$refrenceList}
                                                        <option value="{$value}">{vtranslate($value, $value)}</option>
                                                    {/foreach}
                                                </select>
                                            {else}
                                                {vtranslate($FIELD_MODEL->get('label'), $MODULE)}
                                            {/if}
                                        {else}
                                            {vtranslate($FIELD_MODEL->get('label'), $MODULE)}
                                        {/if}
                                        &nbsp;{if $FIELD_MODEL->isMandatory() eq true} <span class="redColor">*</span> {/if}
                                    </div>
                                    <div class="fieldValue col-md-3 col-sm-12 col-xs-12" {if $FIELD_MODEL->getFieldDataType() eq 'boolean'} style="width:25%" {/if} {if $FIELD_MODEL->get('uitype') eq '19'} colspan="3" {assign var=COUNTER value=$COUNTER+1} {/if}>
                                        {if $FIELD_MODEL->getFieldDataType() eq 'image' || $FIELD_MODEL->getFieldDataType() eq 'file'}
                                            <div class='col-lg-4 col-md-4 redColor'>
                                                {vtranslate('LBL_NOTE_EXISTING_ATTACHMENTS_WILL_BE_REPLACED', $MODULE)}
                                            </div>
                                        {/if}
                                        {include file=vtemplate_path($FIELD_MODEL->getUITypeModel()->getTemplateName(),$MODULE)}
                                    </div>
                                {/if}
                            {/foreach}
                            {*If their are odd number of fields in edit then border top is missing so adding the check*}
                            {if $COUNTER is odd}
                                <div></div>
                                <div></div>
                            {/if}
                        </div>
                    </div>
                </div>
                <br>
            {/if}
        {/foreach}
    </div>
