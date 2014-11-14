<?php
use yii\helpers\FormatConverter;
/* @var $this yii\web\View */

$this->title = '栏目管理';
?>
<h3>Category</h3>
<div class="row">
 <div class="col-lg-12">
    <!-- START panel-->
    <div class="panel panel-default">
       <div class="panel-heading">Pending tasks
          <a href="javascript:void(0);" data-perform="panel-dismiss" data-toggle="tooltip" title="" class="pull-right" data-original-title="Close Panel">
             <em class="fa fa-times"></em>
          </a>
          <a href="javascript:void(0);" data-perform="panel-collapse" data-toggle="tooltip" title="" class="pull-right" data-original-title="Collapse Panel">
             <em class="fa fa-minus"></em>
          </a>
       </div>
       <!-- START table-responsive-->
       <div class="panel-wrapper collapse in" style=""><div class="table-responsive">
          <table class="table table-striped table-bordered table-hover">
             <thead>
                <tr>
                   <th>标题</th>
                   <th>修改时间</th>
                   <th>创建时间</th>
                   <th>操作</th>
                </tr>
             </thead>
             <tbody>
                <?php foreach($categories as $v):?>
                <tr>
                    <td><?=$v['title']?></td>
                    <td>
                      <em class="fa fa-calendar fa-fw text-muted"></em><?=$v['updated_at']?>
                    </td>
                    <td>
                      <em class="fa fa-calendar fa-fw text-muted"></em><?=$v['created_at']?>
                    </td>
                   <td class="text-center">
                      <div class="btn-group"><a href="javascript:void(0);" data-toggle="dropdown" class="dropdown-toggle"><i class="fa fa-cog"></i></a>
                         <ul class="dropdown-menu pull-right text-left">
                            <li><a href="javascript:void(0);">修改</a></li>
                            <li><a href="javascript:void(0);">删除</a></li>
                         </ul>
                      </div>
                   </td>
                </tr>
                <?php endforeach?>
             </tbody>
          </table>
       </div><div class="panel-footer text-right">
          <a href="javascript:void(0);">
             <small>View all</small>
          </a>
       </div></div>
       <!-- END table-responsive-->
       
    </div>
    <!-- END panel-->
 </div>
</div>

