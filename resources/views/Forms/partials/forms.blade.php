<section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Quick Example</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->

             <form id="myform" role="form" method="post" action="{{url('/Form') }}" enctype="multipart/form-data">
               @if ($errors->any())
                 <div class="alert alert-danger">
                   <ul>
                     @foreach ($errors->all() as $error)
                       <li>{{ $error }}</li>
                     @endforeach
                   </ul>
                 </div>
               @endif
              <div class="box-body">
              <div class="form-group">
                <label for="exampleInputFirstName">First Name</label>
                <input type="text" class="form-control" id="exampleInputFirstName" name="exampleInputFirstName" placeholder="First Name">
              </div>
              <div class="form-group">
                <label for="exampleInputLastName">Last Name</label>
                <input type="text" class="form-control" id="exampleInputLastName" name="exampleInputLastName" placeholder="Last Name">
              </div>
                <div class="form-group">
                  <label for="exampleInputPhone">Phone</label>
                  <input type="text" class="form-control" id="exampleInputPhone" name="exampleInputPhone" placeholder="Phone">
                </div>
                <div class="form-group">

                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" name="exampleInputEmail1" placeholder="Enter email">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" name="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">File input</label>
                  <input type="file" id="exampleInputFile" name="exampleInputFile">

                  <p class="help-block">Example block-level help text here.</p>
                </div>
                <div class="checkbox">
                  <label>
                    <input type="checkbox" name="Check_me_out"> Check me out
                  </label>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
                              
          <!-- Form Element sizes -->
          <form id="target"role="form" method="post" action="{{url('/Form') }}" enctype="multipart/form-data">
          @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Different Height</h3>
            </div>
            <div class="box-body">
              <input id="select" class="form-control input-lg" type="text" placeholder=".input-lg" name="singleValues">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <br>
              <input id="select2" class="form-control" type="text" placeholder="Default input" name="singleValues2">
              <br>
              <input id="select3" class="form-control input-sm" type="text" placeholder=".input-sm" name="singleValues3">
            </div>
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            <!-- /.box-body -->
          </div>
          </form>
          <!-- /.box -->

          <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Different Width</h3>
            </div>
            <div class="box-body">
              <div class="row">
                <div class="col-xs-3">
                  <input type="text" class="form-control" placeholder=".col-xs-3">
                </div>
                <div class="col-xs-4">
                  <input type="text" class="form-control" placeholder=".col-xs-4">
                </div>
                <div class="col-xs-5">
                  <input type="text" class="form-control" placeholder=".col-xs-5">
                </div>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- Input addon -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Input Addon</h3>
            </div>
            <div class="box-body">
              <div class="input-group">
                <span class="input-group-addon">@</span>
                <input type="text" class="form-control" placeholder="Username">
              </div>
              <br>

              <div class="input-group">
                <input type="text" class="form-control">
                <span class="input-group-addon">.00</span>
              </div>
              <br>

              <div class="input-group">
                <span class="input-group-addon">$</span>
                <input type="text" class="form-control">
                <span class="input-group-addon">.00</span>
              </div>

              <h4>With icons</h4>

              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                <input type="email" class="form-control" placeholder="Email">
              </div>
              <br>

              <div class="input-group">
                <input type="text" class="form-control">
                <span class="input-group-addon"><i class="fa fa-check"></i></span>
              </div>
              <br>

              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                <input type="text" class="form-control">
                <span class="input-group-addon"><i class="fa fa-ambulance"></i></span>
              </div>

              <h4>With checkbox and radio inputs</h4>

              <div class="row">
                <div class="col-lg-6">
                  <div class="input-group">
                        <span class="input-group-addon">
                          <input type="checkbox">
                        </span>
                    <input type="text" class="form-control">
                  </div>
                  <!-- /input-group -->
                </div>
                <!-- /.col-lg-6 -->
                <div class="col-lg-6">
                  <div class="input-group">
                        <span class="input-group-addon">
                          <input type="radio">
                        </span>
                    <input type="text" class="form-control">
                  </div>
                  <!-- /input-group -->
                </div>
                <!-- /.col-lg-6 -->
              </div>
              <!-- /.row -->

              <h4>With buttons</h4>

              <p class="margin">Large: <code>.input-group.input-group-lg</code></p>

              <div class="input-group input-group-lg">
                <div class="input-group-btn">
                  <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">Action
                    <span class="fa fa-caret-down"></span></button>
                  <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                  </ul>
                </div>
                <!-- /btn-group -->
                <input type="text" class="form-control">
              </div>
              <!-- /input-group -->
              <p class="margin">Normal</p>

              <div class="input-group">
                <div class="input-group-btn">
                  <button type="button" class="btn btn-danger">Action</button>
                </div>
                <!-- /btn-group -->
                <input type="text" class="form-control">
              </div>
              <!-- /input-group -->
              <p class="margin">Small <code>.input-group.input-group-sm</code></p>

              <div class="input-group input-group-sm">
                <input type="text" class="form-control">
                    <span class="input-group-btn">
                      <button type="button" class="btn btn-info btn-flat">Go!</button>
                    </span>
              </div>
              <!-- /input-group -->
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>
        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-6">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Horizontal Form</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form id="myform1" class="form-horizontal" role="form" method="post" action="{{url('/Form') }}" enctype="multipart/form-data">
              @if ($errors->any())
                <div class="alert alert-danger">
                  <ul>
                    @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                    @endforeach
                  </ul>
                </div>
              @endif
              <div class="box-body">

                <div class="form-group">
                  <label for="inputFirstName" class="col-sm-2 control-label">First Name</label>

                  <div class="col-sm-10">

                    <input type="text" class="form-control" id="inputFirstName" name="inputFirstName" placeholder="First Name">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputLastName" class="col-sm-2 control-label">Last Name</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputLastName" name="inputLastName" placeholder="Last Name">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPhone" class="col-sm-2 control-label">Phone</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputPhone" name="inputPhone" placeholder="Phone">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Email</label>

                  <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputEmail3" name="inputEmail3" placeholder="Email">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Password</label>

                  <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPassword3" name="inputPassword3" placeholder="Password">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox"> Remember me
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-default">Cancel</button>
                <button type="submit" class="btn btn-info pull-right">Sign in</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
          <!-- /.box -->
          <!-- general form elements disabled -->
          <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">General Elements</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form role="form" id="myform1" method="post">
                <!-- text input -->
                <div class="form-group">
                  <label>Text</label>
                  <input type="text" class="form-control" placeholder="Enter ..." name="inputelements1" id="inputelements1">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                </div>
                <div class="form-group">
                  <label>Text Disabled</label>
                  <input type="text" class="form-control" placeholder="Enter ..." disabled="">
                </div>

                <!-- textarea -->
                <div class="form-group">
                  <label>Textarea</label>
                  <textarea class="form-control" rows="3" placeholder="Enter ..." name="inputelements2" id="inputelements2"></textarea>
                </div>
                <div class="form-group">
                  <label>Textarea Disabled</label>
                  <textarea class="form-control" rows="3" placeholder="Enter ..." disabled=""></textarea>
                </div>
                <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                </form>

                <form>
                <!-- input states -->
                <div class="form-group has-success">
                  <label class="control-label" for="inputSuccess"><i class="fa fa-check"></i> Input with success</label>
                  <input type="text" class="form-control" id="inputSuccess" placeholder="Enter ...">
                  <span class="help-block">Help block with success</span>
                </div>
                <div class="form-group has-warning">
                  <label class="control-label" for="inputWarning"><i class="fa fa-bell-o"></i> Input with
                    warning</label>
                  <input type="text" class="form-control" id="inputWarning" placeholder="Enter ...">
                  <span class="help-block">Help block with warning</span>
                </div>
                <div class="form-group has-error">
                  <label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> Input with
                    error</label>
                  <input type="text" class="form-control" id="inputError" placeholder="Enter ...">
                  <span class="help-block">Help block with error</span>
                </div>

                <!-- checkbox -->
                <div class="form-group">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox">
                      Checkbox 1
                    </label>
                  </div>

                  <div class="checkbox">
                    <label>
                      <input type="checkbox">
                      Checkbox 2
                    </label>
                  </div>

                  <div class="checkbox">
                    <label>
                      <input type="checkbox" disabled="">
                      Checkbox disabled
                    </label>
                  </div>
                </div>

                <!-- radio -->
                <div class="form-group">
                  <div class="radio">
                    <label>
                      <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
                      Option one is this and that—be sure to include why it's great
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                      Option two can be something else and selecting it will deselect option one
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3" disabled="">
                      Option three is disabled
                    </label>
                  </div>
                </div>

                <!-- select -->
                <div class="form-group">
                  <label>Select</label>
                  <select class="form-control">
                    <option>option 1</option>
                    <option>option 2</option>
                    <option>option 3</option>
                    <option>option 4</option>
                    <option>option 5</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Select Disabled</label>
                  <select class="form-control" disabled="">
                    <option>option 1</option>
                    <option>option 2</option>
                    <option>option 3</option>
                    <option>option 4</option>
                    <option>option 5</option>
                  </select>
                </div>

                <!-- Select multiple-->
                <div class="form-group">
                  <label>Select Multiple</label>
                  <select multiple="" class="form-control">
                    <option>option 1</option>
                    <option>option 2</option>
                    <option>option 3</option>
                    <option>option 4</option>
                    <option>option 5</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Select Multiple Disabled</label>
                  <select multiple="" class="form-control" disabled="">
                    <option>option 1</option>
                    <option>option 2</option>
                    <option>option 3</option>
                    <option>option 4</option>
                    <option>option 5</option>
                  </select>
                </div>

              </form>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    <div><div class="row docs-premium-template">
                    <div class="col-sm-12 col-md-6">
                <div class="box box-solid">
                    <div class="box-body">
                        <h4 style="background-color:#f7f7f7; font-size: 18px; text-align: center; padding: 7px 10px; margin-top: 0;">
                            PREMIUM TEMPLATE
                        </h4>
                        <div class="media">
                            <div class="media-left">
                                <a href="https://themequarry.com/theme/materialpro-material-bootstrap-4-admin-template-ASC6FWYG" class="ad-click-event">
                                    <img src="/uploads/images/themequarry/material-pro.png" alt="MaterialPro" class="media-object" style="width: 150px;height: auto;border-radius: 4px;box-shadow: 0 1px 3px rgba(0,0,0,.15);">
                                </a>
                            </div>
                            <div class="media-body">
                                <div class="clearfix">
                                    <p class="pull-right">
                                        <a href="https://themequarry.com/theme/materialpro-material-bootstrap-4-admin-template-ASC6FWYG" class="btn btn-success btn-sm ad-click-event">
                                            LEARN MORE
                                        </a>
                                    </p>

                                    <h4 style="margin-top: 0">MaterialPro ─ $35</h4>

                                    <p>Material Bootstrap 4 Admin Template</p>
                                    <p style="margin-bottom: 0">
                                        <i class="fa fa-shopping-cart margin-r5"></i> 12+ purchases
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
                                <a href="https://themequarry.com/theme/ample-admin-the-ultimate-dashboard-template-ASFEDA95" class="ad-click-event">
                                    <img src="https://themequarry.com/storage/images/approved/ASFEDA95_v2.1_5a0eaa448e2d5.png" alt="Ample Admin" class="media-object" style="width: 150px;height: auto;border-radius: 4px;box-shadow: 0 1px 3px rgba(0,0,0,.15);">
                                </a>
                            </div>
                            <div class="media-body">
                                <div class="clearfix">
                                    <p class="pull-right">
                                        <a href="https://themequarry.com/theme/ample-admin-the-ultimate-dashboard-template-ASFEDA95" class="btn btn-success btn-sm ad-click-event">
                                            LEARN MORE
                                        </a>
                                    </p>

                                    <h4 style="margin-top: 0">Ample Admin ─ $35</h4>

                                    <p>Admin + Frontend Template</p>
                                    <p style="margin-bottom: 0">
                                        <i class="fa fa-shopping-cart margin-r5"></i> 100+ purchases
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
</div></section>