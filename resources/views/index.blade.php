@extends('layouts.master')
@section('content')
<div class="container">
  <div  class="mainbar">
        

    <div class="navbar-header">

      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".mainbar-collapse">
        <i class="fa fa-bars"></i>
      </button>

      <a class="navbar-brand navbar-brand-image" href="index-2.html">
        <img src="{{asset('scripts')}}/img/logo.png" alt="Site Logo">
      </a>

    </div> <!-- /.navbar-header -->


    <div class="mainbar-collapse collapse">

      <ul class="nav navbar-nav mainbar-nav">

        <li class="dropdown"><a href="index-2.html">Home</a></li>
        <li class="dropdown"><a href="index-2.html">About</a></li>
        <li class="dropdown"><a href="index-2.html">Promotion</a></li>
        <li class="dropdown"><a href="index-2.html">Q&A</a></li>
        <li class="dropdown">
          <a style="position: relative;" href="page-notifications.html" class="dropdown-toggle" data-toggle="dropdown">
            <i style="font-size: 24px;" class="fa fa-bell"></i>
            <span class="navbar-visible-collapsed">&nbsp;Notifications&nbsp;</span>
            <span class="badge">3</span>
          </a>

          <ul class="dropdown-menu noticebar-menu" role="menu">
            <li class="nav-header">
              <div class="pull-left">
                Notifications
              </div>

              <div class="pull-right">
                <a href="javascript:;">Mark as Read</a>
              </div>
            </li>

            <li>
              <a href="page-notifications.html" class="noticebar-item">
                <span class="noticebar-item-image">
                  <i class="fa fa-cloud-upload text-success"></i>
                </span>
                <span class="noticebar-item-body">
                  <strong class="noticebar-item-title">Templates Synced</strong>
                  <span class="noticebar-item-text">20 Templates have been synced to the Mashon Demo instance.</span>
                  <span class="noticebar-item-time"><i class="fa fa-clock-o"></i> 12 minutes ago</span>
                </span>
              </a>
            </li>

            <li>
              <a href="page-notifications.html" class="noticebar-item">
                <span class="noticebar-item-image">
                  <i class="fa fa-ban text-danger"></i>
                </span>
                <span class="noticebar-item-body">
                  <strong class="noticebar-item-title">Sync Error</strong>
                  <span class="noticebar-item-text">5 Designs have been failed to be synced to the Mashon Demo instance.</span>
                  <span class="noticebar-item-time"><i class="fa fa-clock-o"></i> 20 minutes ago</span>
                </span>
              </a>
            </li>

            <li class="noticebar-menu-view-all">
              <a href="page-notifications.html">View All Notifications</a>
            </li>
          </ul>
        </li>

        <li class="dropdown navbar-profile" style="margin-top: 0px;">
          <a class="dropdown-toggle" data-toggle="dropdown" href="javascript:;">
            <img src="{{asset('scripts')}}/img/avatars/avatar-1-xs.jpg" class="navbar-profile-avatar" alt="">
          <div style="float: right;margin-top: 7px;">
            <span style="font-size: 15px;">Neyamul</span><br/>
            <i style="font-size: 18px;margin-left: 15px;" class="fa fa-caret-down"></i>
           </div>
          </a>

          <ul class="dropdown-menu" role="menu">

            <li>
              <a href="page-profile.html">
                <i class="fa fa-user"></i> 
                &nbsp;&nbsp;My Profile
              </a>
            </li>

            <li>
              <a href="page-pricing.html">
                <i class="fa fa-dollar"></i> 
                &nbsp;&nbsp;Plans &amp; Billing
              </a>
            </li>

            <li>
              <a href="page-settings.html">
                <i class="fa fa-cogs"></i> 
                &nbsp;&nbsp;Settings
              </a>
            </li>

            <li class="divider"></li>

            <li>
              <a href="account-login.html">
                <i class="fa fa-sign-out"></i> 
                &nbsp;&nbsp;Logout
              </a>
            </li>

          </ul>

        </li>
       
        
       

      </ul>

    </div> <!-- /.navbar-collapse -->   


  </div>

</div> <!-- /.mainbar -->


<div class="container">

  <div class="content">

  <div class="content-container">
      <div class="row">

        <div class="col-md-8">

          <div class="portlet">

            <div class="portlet-header">

              <h3>
                <i class="fa fa-bar-chart-o"></i>
                Area Chart
              </h3>

            </div> <!-- /.portlet-header -->

            <div class="portlet-content">


              <div class="pull-left">
                <div class="btn-group" data-toggle="buttons">
                  <label class="btn btn-sm btn-default">
                    <input type="radio" name="options" id="option1"> Day
                  </label>
                  <label class="btn btn-sm btn-default">
                    <input type="radio" name="options" id="option2"> Week
                  </label>
                  <label class="btn btn-sm btn-default active">
                    <input type="radio" name="options" id="option3"> Month
                  </label>
                </div>

                &nbsp;

                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown">
                    Custom Date
                    <span class="caret"></span>
                  </button>
                  <ul class="dropdown-menu">
                    <li><a href="javascript:;">Dropdown link</a></li>
                    <li><a href="javascript:;">Dropdown link</a></li>
                  </ul>
                </div>                
              </div> <!-- /.pull-left -->

              <div class="pull-right">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-cog"></i> &nbsp;&nbsp;<span class="caret"></span>
                  </button>
                  <ul class="dropdown-menu pull-right" role="menu">
                    <li><a href="javascript:;">Action</a></li>
                    <li><a href="javascript:;">Another action</a></li>
                    <li><a href="javascript:;">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="javascript:;">Separated link</a></li>
                  </ul>
                </div>
              </div> <!-- /.pull-right -->

              <div class="clear"></div>

              <hr />


              <div class="">
                 @include('calender')
                 
                
                

              </div> <!-- /#area-chart -->




              <div class="table-responsive hide">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>Purchased On</th>
                      <th class="text-right" style="width: 100px">Items</th>
                      <th class="text-right" style="width: 100px">Amount</th>
                      <th style="width: 130px"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>09/21/2013</td>
                      <td class="text-right">3</td>
                      <td class="text-right">$108.35</td>
                      <td class="text-center">
                        <a href="javascript:;" class="btn btn-xs btn-secondary">View</a>
                        <a href="javascript:;" class="btn btn-xs btn-default">Edit</a>
                      </td>
                    </tr>
                    <tr>
                      <td>09/21/2013</td>
                      <td class="text-right">1</td>
                      <td class="text-right">$30.89</td>
                      <td class="text-center">
                        <a href="javascript:;" class="btn btn-xs btn-secondary">View</a>
                        <a href="javascript:;" class="btn btn-xs btn-default">Edit</a>
                      </td>
                    </tr>
                    <tr>
                      <td>09/20/2013</td>
                      <td class="text-right">2</td>
                      <td class="text-right">$52.06</td>
                      <td class="text-center">
                        <a href="javascript:;" class="btn btn-xs btn-secondary">View</a>
                        <a href="javascript:;" class="btn btn-xs btn-default">Edit</a>
                      </td>
                    </tr>
                    <tr>
                      <td>09/19/2013</td>
                      <td class="text-right">4</td>
                      <td class="text-right">$73.54</td>
                      <td class="text-center">
                        <a href="javascript:;" class="btn btn-xs btn-secondary">View</a>
                        <a href="javascript:;" class="btn btn-xs btn-default">Edit</a>
                      </td>
                    </tr>
                    <tr>
                      <td>09/19/2013</td>
                      <td class="text-right">4</td>
                      <td class="text-right">$73.54</td>
                      <td class="text-center">
                        <a href="javascript:;" class="btn btn-xs btn-secondary">View</a>
                        <a href="javascript:;" class="btn btn-xs btn-default">Edit</a>
                      </td>
                    </tr>
                    <tr>
                      <td>09/19/2013</td>
                      <td class="text-right">4</td>
                      <td class="text-right">$73.54</td>
                      <td class="text-center">
                        <a href="javascript:;" class="btn btn-xs btn-secondary">View</a>
                        <a href="javascript:;" class="btn btn-xs btn-default">Edit</a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div> <!-- /.table-responsive -->

            </div> <!-- /.portlet-content -->

          </div> <!-- /.portlet -->



          <div class="portlet portlet-table">

            <div class="portlet-header">

              <h3>
                <i class="fa fa-group"></i>
                Recent Signups
              </h3>

              <ul class="portlet-tools pull-right">
                <li>
                  <button class="btn btn-sm btn-default">
                    Add User
                  </button>
                </li>
              </ul>

            </div> <!-- /.portlet-header -->

            <div class="portlet-content">


              <div class="table-responsive">

                <table id="user-signups" class="table table-striped table-bordered table-checkable"> 
                  <thead> 
                    <tr> 
                      <th class="checkbox-column"> 
                        <input type="checkbox" id="check-all" class="icheck-input" />
                      </th> 
                      <th class="hidden-xs">First Name</th> 
                      <th>Last Name</th> 
                      <th>Status</th>
                      <th class="text-center" style="width: 90px">Approve</th>
                    </tr> 
                  </thead> 

                  <tbody> 
                    <tr> 
                      <td class="checkbox-column"> 
                        <input type="checkbox" name="actiony" value="joey" class="icheck-input"> 
                      </td> 

                      <td class="hidden-xs">Joey</td> 
                      <td>Greyson</td> 
                      <td><span class="label label-success">Approved</span></td> 
                      <td class="text-center">
                        <a href="javascript:void(0);" class="btn btn-xs btn-primary" data-original-title="Approve">
                          <i class="fa fa-check"></i>
                        </a> 
                      </td> 
                    </tr> 

                    <tr> 
                      <td class="checkbox-column"> 
                        <input type="checkbox" name="actiony" value="wolf" class="icheck-input">
                      </td> 
                      <td class="hidden-xs">Wolf</td> 
                      <td>Bud</td> <td><span class="label label-default">Pending</span>
                      </td>  
                      <td class="text-center">
                        <a href="javascript:void(0);" class="btn btn-xs btn-primary" data-original-title="Approve">
                          <i class="fa fa-check"></i>
                        </a> 
                      </td> 
                    </tr> 

                    <tr> 
                      <td class="checkbox-column"> 
                        <input type="checkbox" name="actiony" value="sam" class="icheck-input"> 
                      </td> 

                      <td class="hidden-xs">Sam</td> 
                      <td>Mitchell</td> 
                      <td><span class="label label-success">Approved</span></td>  
                      <td class="text-center">
                        <a href="javascript:void(0);" class="btn btn-xs btn-primary" data-original-title="Approve">
                          <i class="fa fa-check"></i>
                        </a> 
                      </td> 
                    </tr> 

                    <tr> 
                      <td class="checkbox-column"> 
                        <input type="checkbox" value="carlos" name="actiony" class="icheck-input"> 
                      </td> 
                      <td class="hidden-xs">Carlos</td> 
                      <td>Lopez</td> 
                      <td><span class="label label-success">Approved</span></td> 
                      <td class="text-center">
                        <a href="javascript:void(0);" class="btn btn-xs btn-primary" data-original-title="Approve">
                          <i class="fa fa-check"></i>
                        </a> 
                      </td>  
                    </tr>  

                    <tr> 
                      <td class="checkbox-column"> 
                        <input type="checkbox" name="actiony" value="rob" class="icheck-input"> 
                      </td> 
                      <td class="hidden-xs">Rob</td> 
                      <td>Johnson</td> 
                      <td><span class="label label-default">Pending</span></td> 
                      <td class="text-center">
                        <a href="javascript:void(0);" class="btn btn-xs btn-primary" data-original-title="Approve">
                          <i class="fa fa-check"></i>
                        </a> 
                      </td> 
                    </tr> 

                    <tr> 
                      <td class="checkbox-column"> 
                        <input type="checkbox" value="mike" name="actiony" class="icheck-input"> 
                      </td> 
                      <td class="hidden-xs">Mike</td> 
                      <td>Jones</td> 
                      <td><span class="label label-default">Pending</span></td>  
                      <td class="text-center">
                        <a href="javascript:void(0);" class="btn btn-xs btn-primary" data-original-title="Approve">
                          <i class="fa fa-check"></i>
                        </a> 
                      </td> 
                    </tr>            

                  </tbody> 

                </table>
                  

              </div> <!-- /.table-responsive -->
                  
            </div> <!-- /.portlet-content -->

            <div class="portlet-footer">
              <div class="text-right">                  
                Apply to Selected: &nbsp;&nbsp;
                <select id="apply-selected" name="table-select" class="ui-select2" style="width: 125px">
                  <option value="">Select Action</option>
                  <option value="approve">Approve</option>
                  <option value="edit">Edit</option>
                  <option value="delete">Delete</option>
                  
                </select>
              </div>
            </div> <!-- /.portlet-footer -->

          </div> <!-- /.portlet -->




          <div class="portlet">

            <div class="portlet-header">
              <h3>
              <i class="fa fa-calendar"></i>
              Full Calendar
              </h3>
            </div> <!-- /.portlet-header -->

            <div class="portlet-content">

              <div id="full-calendar"></div>

            </div> <!-- /.portlet-content -->

          </div> <!-- /.portlet -->





          



          <div class="portlet">

            <div class="portlet-header">

              <h3>
                <i class="fa fa-file-text-o"></i>
                Scrollable Panel
              </h3>

            </div> <!-- /.portlet-header -->

            <div class="portlet-content panel-thread scrollable-panel">

              <ul class="panel-lists">

                <li>
                  <img src="{{asset('scripts')}}/img/avatars/avatar-1-md.jpg" alt="Avatar" class="panel-list-avatar">
                  <div class="panel-list-content">
                      <span class="panel-list-time">20 mins</span>
                      <a href="#" class="panel-list-title">Proin malesuada consectetur lectus. Ut vel lorem sed metus vulputate bibendum.</a>
                      <span class="panel-list-meta">asked by <a href="#">John Doe</a> in <a href="#">Admin Themes</a></span>
                  </div>
                </li>

                <li>
                  <img src="{{asset('scripts')}}/img/avatars/avatar-2-md.jpg" alt="Avatar" class="panel-list-avatar">
                  <div class="panel-list-content">
                      <span class="panel-list-time">20 mins</span>
                      <a href="#" class="panel-list-title">Nunc egestas, sapien vel feugiat varius, ligula urna mattis odio, ut mollis urna nunc id risus. Mauris congue bibendum turpis</a>
                      <span class="panel-list-meta">asked by <a href="#">Jane Doe</a> in <a href="#">Site Templates</a></span>
                  </div>
                </li>

                <li>
                  <img src="{{asset('scripts')}}/img/avatars/avatar-1-md.jpg" alt="Avatar" class="panel-list-avatar">
                  <div class="panel-list-content">
                      <span class="panel-list-time">20 mins</span>
                      <a href="#" class="panel-list-title">Proin malesuada consectetur lectus. Ut vel lorem sed metus vulputate bibendum.</a>
                      <span class="panel-list-meta">asked by <a href="#">John Doe</a> in <a href="#">Admin Themes</a></span>
                  </div>
                </li>

                <li>
                  <img src="{{asset('scripts')}}/img/avatars/avatar-2-md.jpg" alt="Avatar" class="panel-list-avatar">
                  <div class="panel-list-content">
                      <span class="panel-list-time">20 mins</span>
                      <a href="#" class="panel-list-title">Nunc egestas, sapien vel feugiat varius, ligula urna mattis odio, ut mollis urna nunc id risus. Mauris congue bibendum turpis</a>
                      <span class="panel-list-meta">asked by <a href="#">Jane Doe</a> in <a href="#">Site Templates</a></span>
                  </div>
                </li>

                <li>
                  <img src="{{asset('scripts')}}/img/avatars/avatar-1-md.jpg" alt="Avatar" class="panel-list-avatar">
                  <div class="panel-list-content">
                      <span class="panel-list-time">20 mins</span>
                      <a href="#" class="panel-list-title">Proin malesuada consectetur lectus. Ut vel lorem sed metus vulputate bibendum.</a>
                      <span class="panel-list-meta">asked by <a href="#">John Doe</a> in <a href="#">Admin Themes</a></span>
                  </div>
                </li>

                <li>
                  <img src="{{asset('scripts')}}/img/avatars/avatar-2-md.jpg" alt="Avatar" class="panel-list-avatar">
                  <div class="panel-list-content">
                      <span class="panel-list-time">20 mins</span>
                      <a href="#" class="panel-list-title">Nunc egestas, sapien vel feugiat varius, ligula urna mattis odio, ut mollis urna nunc id risus. Mauris congue bibendum turpis</a>
                      <span class="panel-list-meta">asked by <a href="#">Jane Doe</a> in <a href="#">Site Templates</a></span>
                  </div>
                </li>

                <li>
                  <img src="{{asset('scripts')}}/img/avatars/avatar-1-md.jpg" alt="Avatar" class="panel-list-avatar">
                  <div class="panel-list-content">
                      <span class="panel-list-time">20 mins</span>
                      <a href="#" class="panel-list-title">Proin malesuada consectetur lectus. Ut vel lorem sed metus vulputate bibendum.</a>
                      <span class="panel-list-meta">asked by <a href="#">John Doe</a> in <a href="#">Admin Themes</a></span>
                  </div>
                </li>

                <li>
                  <img src="{{asset('scripts')}}/img/avatars/avatar-2-md.jpg" alt="Avatar" class="panel-list-avatar">
                  <div class="panel-list-content">
                      <span class="panel-list-time">20 mins</span>
                      <a href="#" class="panel-list-title">Nunc egestas, sapien vel feugiat varius, ligula urna mattis odio, ut mollis urna nunc id risus. Mauris congue bibendum turpis</a>
                      <span class="panel-list-meta">asked by <a href="#">Jane Doe</a> in <a href="#">Site Templates</a></span>
                  </div>
                </li>
                                        
              </ul>


            </div> <!-- /.portlet-content -->

          </div> <!-- /.portlet -->


        </div> <!-- /.col -->



        <div class="col-md-4">

          <div class="portlet">

            <div class="portlet-header">

              <h3>
                <i class="fa fa-bar-chart-o"></i>
                Donut Chart
              </h3>

            </div> <!-- /.portlet-header -->

            <div class="portlet-content">

              <div >
                 @include('calender-sitebar')

              </div>
                  

            </div> <!-- /.portlet-content -->

          </div> <!-- /.portlet -->

              

          <div class="portlet">

            <div class="portlet-header">

              <h3>
                <i class="fa fa-compass"></i>
                Traffic Overview
              </h3>

            </div> <!-- /.portlet-header -->

            <div class="portlet-content">

              <div class="progress-stat">
                  
                <div class="progress-stat-label">
                  % New Visits
                </div> <!-- /.stat-label -->
                
                <div class="progress-stat-value">
                  77.7%
                </div> <!-- /.stat-value -->
                
                <div class="progress progress-striped active">
                  <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width: 77%">
                    <span class="sr-only">77.74% Visit Rate</span>
                  </div>
                </div> <!-- /.progress -->
                
              </div> <!-- /.progress-stat -->


              <div class="progress-stat">
                  
                <div class="progress-stat-label">
                  % Mobile Visitors
                </div> <!-- /.stat-label -->
                
                <div class="progress-stat-value">
                  33.2%
                </div> <!-- /.stat-value -->
                
                <div class="progress progress-striped active">
                  <div class="progress-bar progress-bar-tertiary" role="progressbar" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100" style="width: 33%">
                    <span class="sr-only">33% Mobile Visitors</span>
                  </div>
                </div> <!-- /.progress -->
                
              </div> <!-- /.progress-stat -->


              <div class="progress-stat">
                
                <div class="progress-stat-label">
                  Bounce Rate
                </div> <!-- /.stat-label -->
                
                <div class="progress-stat-value">
                  42.7%
                </div> <!-- /.stat-value -->
                
                <div class="progress progress-striped active">
                  <div class="progress-bar progress-bar-secondary" role="progressbar" aria-valuenow="42" aria-valuemin="0" aria-valuemax="100" style="width: 42%">
                    <span class="sr-only">42.7% Bounce Rate</span>
                  </div>
                </div> <!-- /.progress -->
                
              </div> <!-- /.progress-stat -->

            </div> <!-- /.portlet-content -->

          </div> <!-- /.portlet -->




          <div class="portlet">

            <div class="portlet-header">
              <h3>
                <i class="fa fa-bar-chart-o"></i>
                Sparkline
              </h3>
            </div> <!-- /.portlet-header -->

            <div class="portlet-content">

              <div class="row row-marginless">

                <div class="spark-stat col-md-6 col-sm-6 col-xs-6">

                  <div id="total-visits">32, 38, 46, 49, 53, 48, 47, 56</div>
                  <span class="spark-stat-value">1,564</span>
                  <h5 class="spark-stat-label">Total Visits</h5>

                </div> <!-- /.col -->

                <div class="spark-stat col-md-6 col-sm-6 col-xs-6">

                  <div id="new-visits">32, 38, 46, 49, 53, 48, 47, 56</div>
                  <span class="spark-stat-value">872</span>
                  <h5 class="spark-stat-label">New Visits</h5>

                </div> <!-- /.col -->

              </div> <!-- /.row -->


              <div class="row row-marginless">

                <div class="spark-stat col-md-6 col-sm-6 col-xs-6">

                  <div id="unique-visits">32, 38, 46, 49, 53, 48, 47, 56</div>
                  <span class="spark-stat-value">845</span>
                  <h5 class="spark-stat-label">Unique Visits</h5>

                </div> <!-- /.col -->

                <div class="spark-stat col-md-6 col-sm-6 col-xs-6">

                  <div id="revenue-visits" data-bar-color="#c00">32, 38, 46, 49, 53, 48, 47, 56</div>
                  <span class="spark-stat-value">$13,492</span>
                  <h5 class="spark-stat-label">Revenue Visits</h5>

                </div> <!-- /.col -->

              </div> <!-- /.row -->

            </div> <!-- /.portlet-content -->

          </div> <!-- /.portlet -->

        </div> <!-- /.col -->

      </div> <!-- /.row -->

    </div> <!-- /.content-container -->
      
  </div> <!-- /.content -->

</div> <!-- /.container -->

@endsection
