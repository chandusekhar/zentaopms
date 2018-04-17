<?php
/**
 * The edit view of product module of ZenTaoPMS.
 *
 * @copyright   Copyright 2009-2015 青岛易软天创网络科技有限公司(QingDao Nature Easy Soft Network Technology Co,LTD, www.cnezsoft.com)
 * @license     ZPL (http://zpl.pub/page/zplv12.html)
 * @author      Chunsheng Wang <chunsheng@cnezsoft.com>
 * @package     product
 * @version     $Id: edit.html.php 4129 2013-01-18 01:58:14Z wwccss $
 * @link        http://www.zentao.net
 */
?>
<?php include '../../common/view/header.html.php';?>
<?php include '../../common/view/kindeditor.html.php';?>
<?php js::set('noProject', ($config->global->flow == 'onlyStory' or $config->global->flow == 'onlyTest') ? true : false);?>
<div id="mainContent" class="main-content">
  <div class="center-block">
    <div class="main-header">
      <h2><?php echo $lang->product->edit;?></h2>
    </div>
    <form class="load-indicator main-form form-ajax" id="createForm" method="post" target='hiddenwin'>
      <table class="table table-form">
        <tbody>
          <tr>
            <th class='w-120px'><?php echo $lang->product->name;?></th>
            <td class='w-p25-f'><?php echo html::input('name', $product->name, "class='form-control' autocomplete='off'");?></td><td></td>
          </tr>  
          <tr>
            <th><?php echo $lang->product->code;?></th>
            <td><?php echo html::input('code', $product->code, "class='form-control' autocomplete='off'");?></td><td></td>
          </tr>  
          <tr>
            <th><?php echo $lang->product->line;?></th>
            <td><?php echo html::select('line', $lines, $product->line, "class='form-control chosen'");?></td>
            <td><?php if(!$lines) common::printLink('tree', 'browse', 'rootID=&view=line', $lang->tree->manageLine);?></td>
          </tr>
          <tr>
            <th><?php echo $lang->product->PO;?></th>
            <td><?php echo html::select('PO', $poUsers, $product->PO, "class='form-control chosen'");?></td><td></td>
          </tr>
          <tr>
            <th><?php echo $lang->product->QD;?></th>
            <td><?php echo html::select('QD', $qdUsers, $product->QD, "class='form-control chosen'");?></td><td></td>
          </tr>  
          <tr>
            <th><?php echo $lang->product->RD;?></th>
            <td><?php echo html::select('RD', $rdUsers, $product->RD, "class='form-control chosen'");?></td><td></td>
          </tr>  
          <tr>
            <th><?php echo $lang->product->type;?></th>
            <td><?php echo html::select('type', $lang->product->typeList, $product->type, "class='form-control'");?></td><td></td>
          </tr>  
          <tr>
            <th><?php echo $lang->product->status;?></th>
            <td><?php echo html::select('status', $lang->product->statusList, $product->status, "class='form-control'");?></td><td></td>
          </tr>  
          <tr>
            <th><?php echo $lang->product->desc;?></th>
            <td colspan='2'><?php echo html::textarea('desc', htmlspecialchars($product->desc), "rows='8' class='form-control'");?></td>
          </tr>  
          <tr>
            <th><?php echo $lang->product->acl;?></th>
            <td colspan='2'><?php echo nl2br(html::radio('acl', $lang->product->aclList, $product->acl, "onclick='setWhite(this.value);'", 'block'));?></td>
          </tr>  
          <tr id='whitelistBox' <?php if($product->acl != 'custom') echo "class='hidden'";?>>
            <th><?php echo $lang->product->whitelist;?></th>
            <td colspan='2'><?php echo html::checkbox('whitelist', $groups, $product->whitelist);?></td>
          </tr>  
          <tr>
            <td colspan='3' class='text-center'>
              <?php echo html::submitButton('', '', 'btn btn-wide btn-primary');?>
              <?php echo html::backButton('', '', 'btn btn-wide btn-gray');?>
            </td>
          </tr>
        </tbody>
      </table>
    </form>
  </div>
</div>
<?php include '../../common/view/footer.html.php';?>
