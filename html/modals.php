<!-- Modal for new servers -->
<div class="container">
<div class="modal fade" id="newserver" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
    <div class="container">
    <div class="modal-content">
      <form class="form-horizontal" data-toggle="validator" id="form_members" role="form" action="php/new_server.php" method="POST" >
          <form class="form-horizontal">
            <fieldset>
              <legend>Server
              </legend>
              <div class="form-group">
                <label class="col-lg-1 control-label">Name
                </label>
                <div class="col-lg-10">
                  <input type="text" class="form-control" name="server_name" id="server_name" placeholder="Rizon" autocomplete="off" required>
                </div>
              </div>
              <div class="form-group">
                <label class="col-lg-1 control-label">IP
                </label>
                <div class="col-lg-10">
                  <input type="text" class="form-control" name="server_ip" id="server_ip" placeholder="irc.rizon.net" autocomplete="off" required>
                </div>
              </div>
              <div class="form-group">
                <label class="col-lg-1 control-label">Port
                </label>
                <div class="col-lg-10">
                  <input type="text" class="form-control" name="port" id="port" placeholder="6667" autocomplete="off" required>
                  <div class="checkbox">
                    <label>
                      <input type='hidden' value='0' name='use_ssl'>
                      <input type="checkbox" name ="use_ssl" value="1" id="use_ssl">SSL
                    </label>
                  </div>
                </div>
              </div>
              <br/>
              <div>
                <div class="form-group">
                  <label class="col-lg-1 control-label">Nick
                  </label>
                  <div class="col-lg-10">
                    <input type="nick" class="form-control" id="nick" name="nick" placeholder="Nick" autocomplete="off" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-lg-1 control-label">Secondary
                  </label>
                  <div class="col-lg-10">
                    <input type="secondary" class="form-control" name= "secondary" id="secondary" placeholder="Secondary Username" autocomplete="off" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-lg-1 control-label">Password
                  </label>
                  <div class="col-lg-10">
                    <input type="password" class="form-control" name="pass" id="pass" placeholder="Password"  data-minlength="6" autocomplete="off" required>
                    <div class="help-block">Minimum of 6 characters</div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox"> Default
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="col-lg-10 col-lg-offset-9" style="padding-left:34px;">
                  <button type="reset" data-dismiss="modal" class="btn btn-default">Cancel
                  </button>
                  <button href="php/new_server.php" target="save" type="submit" name="submit" id="submit" class="btn btn-primary">Save
                  </button>
                </div>
              </div>
            </fieldset>
          </form>
        </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal for editing servers -->
<div class="container">
<div class="modal fade" id="editserver" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
    <div class="container">
    <div class="modal-content">
      <form class="form-horizontal" data-toggle="validator" id="form_members" role="form" action="php/update.php" method="POST" >
          <form class="form-horizontal">
            <fieldset>
              <legend>Server
              </legend>
              <div class="form-group">
                <label class="col-lg-1 control-label">Name
                </label>
                <div class="col-lg-10">
                  <input type="text" class="form-control" name="server_name" id="server_name" placeholder="<?php echo $row['server_name']?>" autocomplete="off" required>
                </div>
              </div>
              <div class="form-group">
                <label class="col-lg-1 control-label">IP
                </label>
                <div class="col-lg-10">
                  <input type="text" class="form-control" name="server_ip" id="server_ip" placeholder="irc.rizon.net" autocomplete="off" required>
                </div>
              </div>
              <div class="form-group">
                <label class="col-lg-1 control-label">Port
                </label>
                <div class="col-lg-10">
                  <input type="text" class="form-control" name="port" id="port" placeholder="6667" autocomplete="off" required>
                  <div class="checkbox">
                    <label>
                      <input type='hidden' value='0' name='use_ssl'>
                      <input type="checkbox" name ="use_ssl" value="1" id="use_ssl">SSL
                    </label>
                  </div>
                </div>
              </div>
              <br/>
              <div>
                <div class="form-group">
                  <label class="col-lg-1 control-label">Nick
                  </label>
                  <div class="col-lg-10">
                    <input type="nick" class="form-control" id="nick" name="nick" placeholder="Nick" autocomplete="off" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-lg-1 control-label">Secondary
                  </label>
                  <div class="col-lg-10">
                    <input type="secondary" class="form-control" name= "secondary" id="secondary" placeholder="Secondary Username" autocomplete="off" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-lg-1 control-label">Password
                  </label>
                  <div class="col-lg-10">
                    <input type="password" class="form-control" name="pass" id="pass" placeholder="Password"  data-minlength="6" autocomplete="off" required>
                    <div class="help-block">Minimum of 6 characters</div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox"> Default
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="col-lg-10 col-lg-offset-9" style="padding-left:34px;">
                  <button type="reset" data-dismiss="modal" class="btn btn-default">Cancel
                  </button>
                  <button href="php/update.php" target="save" type="submit" name="submit" id="submit" class="btn btn-primary">Save
                  </button>
                </div>
              </div>
            </fieldset>
          </form>
        </div>
        </div>
      </div>
    </div>
  </div>
</div>
