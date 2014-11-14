<?php
/* @var $this yii\web\View */

$this->title = 'Welcome to Hackend';
?>
<h3>Dashboard
    <br>
    <small>Welcome user</small>
</h3>
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
                   <th>Task name</th>
                   <th>Progress</th>
                   <th>Deadline</th>
                   <th>Action</th>
                </tr>
             </thead>
             <tbody>
                <tr>
                   <td>Nunc luctus, quam non condimentum ornare</td>
                   <td>
                      <div class="progress progress-striped progress-xs">
                         <div role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;" class="progress-bar progress-bar-success">
                            <span class="sr-only">80% Complete</span>
                         </div>
                      </div>
                   </td>
                   <td>
                      <em class="fa fa-calendar fa-fw text-muted"></em>05/05/2014</td>
                   <td class="text-center">
                      <div class="btn-group"><a href="javascript:void(0);" data-toggle="dropdown" class="dropdown-toggle"><i class="fa fa-cog"></i></a>
                         <ul class="dropdown-menu pull-right text-left">
                            <li><a href="javascript:void(0);">Action</a>
                            </li>
                            <li><a href="javascript:void(0);">Another action</a>
                            </li>
                            <li><a href="javascript:void(0);">Something else here</a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="javascript:void(0);">Separated link</a>
                            </li>
                         </ul>
                      </div>
                   </td>
                </tr>
                <tr>
                   <td>Integer in convallis felis.</td>
                   <td>
                      <div class="progress progress-striped progress-xs">
                         <div role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%;" class="progress-bar progress-bar-danger">
                            <span class="sr-only">20% Complete</span>
                         </div>
                      </div>
                   </td>
                   <td>
                      <em class="fa fa-calendar fa-fw text-muted"></em>15/05/2014</td>
                   <td class="text-center">
                      <div class="btn-group"><a href="javascript:void(0);" data-toggle="dropdown" class="dropdown-toggle"><i class="fa fa-cog"></i></a>
                         <ul class="dropdown-menu pull-right text-left">
                            <li><a href="javascript:void(0);">Action</a>
                            </li>
                            <li><a href="javascript:void(0);">Another action</a>
                            </li>
                            <li><a href="javascript:void(0);">Something else here</a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="javascript:void(0);">Separated link</a>
                            </li>
                         </ul>
                      </div>
                   </td>
                </tr>
                <tr>
                   <td>Nullam sit amet magna vestibulum libero dapibus iaculis.</td>
                   <td>
                      <div class="progress progress-striped progress-xs">
                         <div role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;" class="progress-bar progress-bar-info">
                            <span class="sr-only">50% Complete</span>
                         </div>
                      </div>
                   </td>
                   <td>
                      <em class="fa fa-calendar fa-fw text-muted"></em>05/10/2014</td>
                   <td class="text-center">
                      <div class="btn-group"><a href="javascript:void(0);" data-toggle="dropdown" class="dropdown-toggle"><i class="fa fa-cog"></i></a>
                         <ul class="dropdown-menu pull-right text-left">
                            <li><a href="javascript:void(0);">Action</a>
                            </li>
                            <li><a href="javascript:void(0);">Another action</a>
                            </li>
                            <li><a href="javascript:void(0);">Something else here</a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="javascript:void(0);">Separated link</a>
                            </li>
                         </ul>
                      </div>
                   </td>
                </tr>
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

