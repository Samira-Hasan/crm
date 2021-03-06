@extends('adminlte::page')
@section('title', 'Dashboard')


@section('content')
<div style="padding: 20px 30px; background-color: rgb(243, 156, 18); z-index: 999999; font-size: 16px; font-weight: 600; background-position: initial initial; background-repeat: initial initial;"><a class="pull-right" href="#" data-toggle="tooltip" data-placement="left" title="" style="color: rgb(255, 255, 255); font-size: 20px;" data-original-title="Never show me this again!">×</a><a href="https://themequarry.com" style="color: rgba(255, 255, 255, 0.901961); display: inline-block; margin-right: 10px; text-decoration: none;">Ready to sell your theme? Submit your theme to our new marketplace now and let over 200k visitors see it!</a><a class="btn btn-default btn-sm" href="https://themequarry.com" style="margin-top: -5px; border: 0px; box-shadow: none; color: rgb(243, 156, 18); font-weight: 600; background-color: rgb(255, 255, 255); background-position: initial initial; background-repeat: initial initial;">Let's Do It!</a></div>
 <div class='row'>
<div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="ion ion-ios-gear-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">CPU Traffic</span>
              <span class="info-box-number"><?php echo ($traffic);?><small>%</small></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-google-plus"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Likes</span>
              <span class="info-box-number"><?php echo ($likes);?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="ion ion-ios-cart-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Sales</span>
              <span class="info-box-number"><?php echo ($sales);?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">New Members</span>
              <span class="info-box-number"><?php echo ($members);?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        </div>
        <div class='row'>
        <div class="col-md-12">
          <div class="box">
        <div class="box-header with-border">
              <h3 class="box-title">Monthly Recap Report</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <div class="btn-group">
                  <button type="button" class="btn btn-box-tool dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-wrench"></i></button>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                  </ul>
                </div>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div class="row">
                <div class="col-md-8">
                  <p class="text-center">
                    <strong>Sales: 1 Jan, 2014 - 30 Jul, 2014</strong>
                  </p>

                  <div class="chart">
                    <!-- Sales Chart Canvas -->
                    <canvas id="myChart"></canvas>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
                    <script>
                        var ctx = document.getElementById('myChart').getContext('2d');
var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'line',

    // The data for our dataset
    data: {
        labels: ["January", "February", "March", "April", "May", "June", "July"],
        datasets: [{
            label: "My First dataset",
            backgroundColor: 'rgb(255, 99, 132)',
            borderColor: 'rgb(255, 99, 132)',
            data: <?php echo json_encode($name); ?>,
        }]
    },

    // Configuration options go here
    options: {}
});

                    </script>
                  </div>
                  <!-- /.chart-responsive -->
                </div>
                <!-- /.col -->
                <div class="col-md-4">
                  <p class="text-center">
                    <strong>Goal Completion</strong>
                  </p>

                  <div class="progress-group">
                    <span class="progress-text">Add Products to Cart</span>
                    <span class="progress-number"><b>160</b>/200</span>

                    <div class="progress sm">
                      <div class="progress-bar progress-bar-aqua" style="width: 80%"></div>
                    </div>
                  </div>
                  <!-- /.progress-group -->
                  <div class="progress-group">
                    <span class="progress-text">Complete Purchase</span>
                    <span class="progress-number"><b>310</b>/400</span>

                    <div class="progress sm">
                      <div class="progress-bar progress-bar-red" style="width: 80%"></div>
                    </div>
                  </div>
                  <!-- /.progress-group -->
                  <div class="progress-group">
                    <span class="progress-text">Visit Premium Page</span>
                    <span class="progress-number"><b>480</b>/800</span>

                    <div class="progress sm">
                      <div class="progress-bar progress-bar-green" style="width: 80%"></div>
                    </div>
                  </div>
                  <!-- /.progress-group -->
                  <div class="progress-group">
                    <span class="progress-text">Send Inquiries</span>
                    <span class="progress-number"><b>250</b>/500</span>

                    <div class="progress sm">
                      <div class="progress-bar progress-bar-yellow" style="width: 80%"></div>
                    </div>
                  </div>
                  <!-- /.progress-group -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
            <div class="box-footer">
              <div class="row">
                <div class="col-sm-3 col-xs-6">
                  <div class="description-block border-right">
                    <span class="description-percentage text-green"><i class="fa fa-caret-up"></i> 17%</span>
                    <h5 class="description-header">$<?php echo ($revenue);?></h5>
                    <span class="description-text">Total Revenue</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-3 col-xs-6">
                  <div class="description-block border-right">
                    <span class="description-percentage text-yellow"><i class="fa fa-caret-left"></i> 0%</span>
                    <h5 class="description-header">$<?php echo ($cost); ?></h5>
                    <span class="description-text">Total Cost</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-3 col-xs-6">
                  <div class="description-block border-right">
                    <span class="description-percentage text-green"><i class="fa fa-caret-up"></i> 20%</span>
                    <h5 class="description-header">$<?php echo ($profit); ?></h5>
                    <span class="description-text">Total Profit</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-3 col-xs-6">
                  <div class="description-block">
                    <span class="description-percentage text-red"><i class="fa fa-caret-down"></i> 18%</span>
                    <h5 class="description-header">$<?php echo ($goal); ?></h5>
                    <span class="description-text">Goal</span>
                  </div>
                  <!-- /.description-block -->
                </div>
              </div>
              <!-- /.row -->
            </div>
            </div>
            </div>

            <div class='row'>
            <div class='col-md-4'>
            <div class="box box-warning direct-chat direct-chat-warning">
                <div class="box-header with-border">
                  <h3 class="box-title">Direct Chat</h3>

                  <div class="box-tools pull-right">
                    <span data-toggle="tooltip" title="" class="badge bg-yellow" data-original-title="3 New Messages">3</span>
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-box-tool" data-toggle="tooltip" title="" data-widget="chat-pane-toggle" data-original-title="Contacts">
                      <i class="fa fa-comments"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
                    </button>
                  </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">

                  <!-- Conversations are loaded here -->
                  <div class="direct-chat-messages">
                    <!-- Message. Default to the left -->
                    <?php foreach ($chat as $key => $value) { ?>

                         <div class="direct-chat-msg">
                      <div class="direct-chat-info clearfix">
                        <span class="direct-chat-name pull-left"><?php echo $value->First_Name; ?></span>
                        <span class="direct-chat-timestamp pull-right">23 Jan 2:00 pm</span>
                      </div>
                      <!-- /.direct-chat-info -->
                      <img class="direct-chat-img" src="Image/download.png" alt="message user image">
                      <!-- /.direct-chat-img -->
                      <div class="direct-chat-text">
                        <?php echo $value->messege; ?>
                      </div>
                      <!-- /.direct-chat-text -->
                    </div>
                        <?php } ?>
                    </div>
                  <!--/.direct-chat-messages-->

                  <!-- Contacts are loaded here -->
                  <div class="direct-chat-contacts">
                    <ul class="contacts-list">
                      <li>
                        <a href="#">
                          <img class="contacts-list-img" src="dist/img/user1-128x128.jpg" alt="User Image">

                          <div class="contacts-list-info">
                                <span class="contacts-list-name">
                                  Count Dracula
                                  <small class="contacts-list-date pull-right">2/28/2015</small>
                                </span>
                            <span class="contacts-list-msg">How have you been? I was...</span>
                          </div>
                          <!-- /.contacts-list-info -->
                        </a>
                      </li>
                      <!-- End Contact Item -->
                      <li>
                        <a href="#">
                          <img class="contacts-list-img" src="dist/img/user7-128x128.jpg" alt="User Image">

                          <div class="contacts-list-info">
                                <span class="contacts-list-name">
                                  Sarah Doe
                                  <small class="contacts-list-date pull-right">2/23/2015</small>
                                </span>
                            <span class="contacts-list-msg">I will be waiting for...</span>
                          </div>
                          <!-- /.contacts-list-info -->
                        </a>
                      </li>
                      <!-- End Contact Item -->
                      <li>
                        <a href="#">
                          <img class="contacts-list-img" src="dist/img/user3-128x128.jpg" alt="User Image">

                          <div class="contacts-list-info">
                                <span class="contacts-list-name">
                                  Nadia Jolie
                                  <small class="contacts-list-date pull-right">2/20/2015</small>
                                </span>
                            <span class="contacts-list-msg">I'll call you back at...</span>
                          </div>
                          <!-- /.contacts-list-info -->
                        </a>
                      </li>
                      <!-- End Contact Item -->
                      <li>
                        <a href="#">
                          <img class="contacts-list-img" src="dist/img/user5-128x128.jpg" alt="User Image">

                          <div class="contacts-list-info">
                                <span class="contacts-list-name">
                                  Nora S. Vans
                                  <small class="contacts-list-date pull-right">2/10/2015</small>
                                </span>
                            <span class="contacts-list-msg">Where is your new...</span>
                          </div>
                          <!-- /.contacts-list-info -->
                        </a>
                      </li>
                      <!-- End Contact Item -->
                      <li>
                        <a href="#">
                          <img class="contacts-list-img" src="dist/img/user6-128x128.jpg" alt="User Image">

                          <div class="contacts-list-info">
                                <span class="contacts-list-name">
                                  John K.
                                  <small class="contacts-list-date pull-right">1/27/2015</small>
                                </span>
                            <span class="contacts-list-msg">Can I take a look at...</span>
                          </div>
                          <!-- /.contacts-list-info -->
                        </a>
                      </li>
                      <!-- End Contact Item -->
                      <li>
                        <a href="#">
                          <img class="contacts-list-img" src="dist/img/user8-128x128.jpg" alt="User Image">

                          <div class="contacts-list-info">
                                <span class="contacts-list-name">
                                  Kenneth M.
                                  <small class="contacts-list-date pull-right">1/4/2015</small>
                                </span>
                            <span class="contacts-list-msg">Never mind I found...</span>
                          </div>
                          <!-- /.contacts-list-info -->
                        </a>
                      </li>
                      <!-- End Contact Item -->
                    </ul>
                    <!-- /.contatcts-list -->
                  </div>
                  <!-- /.direct-chat-pane -->
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                  <form method="post" id="target">
                    <div class="input-group">
                      <input type="text" id="message" name="message" placeholder="Type Message ..." class="form-control">
                      <span class="input-group-btn">
                            <input type="submit" class="btn btn-warning btn-flat">Send</button>
                          </span>
                    </div>
                  </form>
                </div>

                <!-- /.box-footer-->
              </div>
              </div>
              <div class='col-md-4'>
              <div class="box box-danger">
                <div class="box-header with-border">
                  <h3 class="box-title">Latest Members</h3>

                  <div class="box-tools pull-right">
                    <span class="label label-danger">8 New Members</span>
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
                    </button>
                  </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body no-padding">
                  <ul class="users-list clearfix">
                    <li>
                      <img src="Image/download.png" alt="User Image">
                      <a class="users-list-name" href="#">Alexander Pierce</a>
                      <span class="users-list-date"><?php echo ($today); ?></span>
                    </li>
                    <li>
                      <img src="Image/download.png" alt="User Image">
                      <a class="users-list-name" href="#">Norman</a>
                      <span class="users-list-date"><?php echo ($yesterday); ?></span>
                    </li>
                    <li>
                      <img src="Image/download.png" alt="User Image">
                      <a class="users-list-name" href="#">Jane</a>
                      <span class="users-list-date"><?php echo ($date); ?></span>
                    </li>
                    <li>
                      <img src="Image/download.png" alt="User Image">
                      <a class="users-list-name" href="#">John</a>
                      <span class="users-list-date"><?php echo ($date); ?></span>
                    </li>
                    <li>
                      <img src="Image/download.png" alt="User Image">
                      <a class="users-list-name" href="#">Alexander</a>
                      <span class="users-list-date"><?php echo ($date); ?></span>
                    </li>
                    <li>
                      <img src="Image/download.png" alt="User Image">
                      <a class="users-list-name" href="#">Sarah</a>
                      <span class="users-list-date"><?php echo ($date); ?></span>
                    </li>
                    <li>
                      <img src="Image/download.png" alt="User Image">
                      <a class="users-list-name" href="#">Nora</a>
                      <span class="users-list-date"><?php echo ($date); ?></span>
                    </li>
                    <li>
                      <img src="Image/download.png" alt="User Image">
                      <a class="users-list-name" href="#">Nadia</a>
                      <span class="users-list-date"><?php echo ($date); ?></span>
                    </li>
                  </ul>
                  <!-- /.users-list -->
                </div>
                <!-- /.box-body -->
                <div class="box-footer text-center">
                  <a href="javascript:void(0)" class="uppercase">View All Users</a>
                </div>
                <!-- /.box-footer -->
              </div>
               </div>
               <div class='col-md-4'>
               <div class="box box-default">
            <div class="box-header with-border">
              <h3 class="box-title">Browser Usage</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="row">
                <div class="col-md-8">
                  <div class="chart-responsive">
                  <canvas id="pieChart" width="400" height="400"></canvas>
                     <script>
                         var ctx = document.getElementById("pieChart");
                         var myChart = new Chart(ctx, {
                         type: 'doughnut',
                         data: {
                            datasets: [{
                                data: [<?php echo $cdata;?>],
                                backgroundColor: [
                                   '#ff6384',
                                    '#36a2eb',
                                   '#cc65fe',
                                   '#ffff66',
                                   '#00ff40',
                                   '#66d9ff'
                                 ]
                            }],

                            // These labels appear in the legend and in the tooltips when hovering different arcs
                            labels:
                                [ <?php echo $label; ?>]

                        },
                         options: {
                             scales: {
                                yAxes: [{
                                  ticks: {
                                   beginAtZero:true
                                         }
                                       }]
                                     }
                                 }
                            });
                      </script>
                  </div>
                  <!-- ./chart-responsive -->
                </div>
                <!-- /.col -->
                <div class="col-md-4">
                  <ul class="chart-legend clearfix">
                    <li><i class="fa fa-circle-o text-red"></i> Chrome</li>
                    <li><i class="fa fa-circle-o text-green"></i> IE</li>
                    <li><i class="fa fa-circle-o text-yellow"></i> FireFox</li>
                    <li><i class="fa fa-circle-o text-aqua"></i> Safari</li>
                    <li><i class="fa fa-circle-o text-light-blue"></i> Opera</li>
                    <li><i class="fa fa-circle-o text-gray"></i> Navigator</li>
                  </ul>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer no-padding">
              <ul class="nav nav-pills nav-stacked">
                <li><a href="#">United States of America
                  <span class="pull-right text-red"><i class="fa fa-angle-down"></i> 12%</span></a></li>
                <li><a href="#">India <span class="pull-right text-green"><i class="fa fa-angle-up"></i> 4%</span></a>
                </li>
                <li><a href="#">China
                  <span class="pull-right text-yellow"><i class="fa fa-angle-left"></i> 0%</span></a></li>
              </ul>
            </div>
            <!-- /.footer -->
          </div>
               </div>
              </div>
              @include('partials.map')
              @include('partials.orders')
              <div class='row'>
              <div><div class="row docs-premium-template">
                    <div class="col-sm-12 col-md-6">
                <div class="box box-solid">
                    <div class="box-body">
                        <h4 style="background-color:#f7f7f7; font-size: 18px; text-align: center; padding: 7px 10px; margin-top: 0;">
                            PREMIUM TEMPLATE
                        </h4>
                        <div class="media">
                            <div class="media-left">
                                <a href="https://www.creative-tim.com/product/material-dashboard-pro-angular2?affiliate_id=97705" class="ad-click-event">
                                    <img src="/uploads/images/free_templates/creative-tim-material-angular.png" alt="Material Dashboard Pro" class="media-object" style="width: 150px;height: auto;border-radius: 4px;box-shadow: 0 1px 3px rgba(0,0,0,.15);">
                                </a>
                            </div>
                            <div class="media-body">
                                <div class="clearfix">
                                    <p class="pull-right">
                                        <a href="https://www.creative-tim.com/product/material-dashboard-pro-angular2?affiliate_id=97705" class="btn btn-success btn-sm ad-click-event">
                                            LEARN MORE
                                        </a>
                                    </p>

                                    <h4 style="margin-top: 0">Material Dashboard Pro ─ $59</h4>

                                    <p>Angular 2 Premium Material Bootstrap Admin with a fresh, new design inspired by Google's Material Design</p>
                                    <p style="margin-bottom: 0">
                                        <i class="fa fa-shopping-cart margin-r5"></i> 853+ purchases
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                    <div class="col-sm-12 col-md-6">
                <div class="box box-solid">
                    <div class="box-body">
                        <h4 style="background-color:#f7f7f7; font-size: 18px; text-align: center; padding: 7px 10px; margin-top: 0;">
                            PREMIUM TEMPLATE
                        </h4>
                        <div class="media">
                            <div class="media-left">
                                <a href="https://www.creative-tim.com/product/now-ui-kit-pro?affiliate_id=97705" class="ad-click-event">
                                    <img src="/uploads/images/free_templates/now_ui_kit.jpg" alt="Now UI Kit" class="media-object" style="width: 150px;height: auto;border-radius: 4px;box-shadow: 0 1px 3px rgba(0,0,0,.15);">
                                </a>
                            </div>
                            <div class="media-body">
                                <div class="clearfix">
                                    <p class="pull-right">
                                        <a href="https://www.creative-tim.com/product/now-ui-kit-pro?affiliate_id=97705" class="btn btn-success btn-sm ad-click-event">
                                            LEARN MORE
                                        </a>
                                    </p>

                                    <h4 style="margin-top: 0">Now UI Kit ─ $69</h4>

                                    <p>A beautiful Bootstrap 4 UI kit featuring over 1000 components, 34 sections and 11 example pages</p>
                                    <p style="margin-bottom: 0">
                                        <i class="fa fa-shopping-cart margin-r5"></i> 297+ purchases
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
</div>
              </div>

<footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright © 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="/css/jquery-jvectormap-2.0.3.css" type="text/css" media="screen"/>
@stop

@section('js')
    <script src="/js/jquery-jvectormap-2.0.3.min.js"></script>
    <script src="/js/jquery-jvectormap-world-mill.js"></script>
    <script>
                         $(document).ready(function(){
                             $( "#target" ).submit(function( event ) {
                                $.ajax({
                                     url: '{{url("/message")}}',
                                     cache: false,
                                     data: {
                                            "_token": "{{ csrf_token() }}",
                                            'message':  $("#message").val(),
                                           },
                                     error: function() {
                                           $('#info').html('<p>An error has occurred</p>');
                                                      },
                                     dataType: 'json',
                                     success: function(html){
                                      if(html.success){
                                        $.ajax({
                                                  url: '{{url("/chatbox")}}',
                                                  cache: false,
                                                  error: function() {
                                                          $('#info').html('<p>An error has occurred</p>');
                                                        },
                                                  dataType: 'json',
                                                  success: function(html){
                                                    $(".direct-chat-messages").html('');
                                                       for(var i = 0; i < html.chat.length; i++) {
                                                                 var obj = html.chat[i];

                                                                 var obj1 = '<div class="direct-chat-msg">' +
                                                                     '<div class="direct-chat-info clearfix">' +
                                                                         '<span class="direct-chat-name pull-left"><?php echo $value->First_Name; ?></span>' +
                                                                         '<span class="direct-chat-timestamp pull-right">'+obj.created_at+'</span>' +
                                                                     '</div>' +
                                                                        '<img class="direct-chat-img" src="Image/download.png" alt="message user image">' +
                                                                      '<div class="direct-chat-text">' +
                                                                          obj.messege +
                                                                      '</div>' +
                                                                 '</div>';

                                                                 $(".direct-chat-messages").append(obj1);
                                                                   }
                                                              },
                                                  type: 'GET'
                                                });
                                            }

                                       $("#results").append(html);
                                       },
                                       type: 'POST'
                                    });

                                   event.preventDefault();
                                });
                                var plants = <?php echo $map; ?>;

                                      $('#world-map').vectorMap({
                                        map: 'world_mill',
                                        markers: plants.map(function(h){ return {name: h.name, latLng: h.coords, style: {fill: 'rgba(255, 0, 0)', r:5}} }),

                                      });

                              });
                </script>
@stop
@push('css')

@push('js')