<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  include 'header.php';
  ?>
</head>

  <body>
    <div class="container">
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <a data-target="#newServer" data-toggle="modal">
      <span class="glyphicon glyphicon-plus" id="new-server-icon">
      </span>
    </a>
    <div class="panel panel-primary">
      <div class="panel-heading">
        <h3 class="panel-title">Saved Servers
        </h3>
      </div>
      <div class="panel-body">
        <table id="serverdisplay" class="table table-striped table-hover">
          <thead>
            <tr>
              <td>Server
              </td>
              <td>Hostname
              </td>
              <td>Port
              </td>
              <td>User
              </td>
              <td>
                SSL
              </td>
            </tr>
          </thead>
          <tbody>
            <?php
while($row = mysql_fetch_array($data)) {
?>
            <tr class="<?php
if ($row['connected'] == 1) {
    echo "success";
} else {
    echo "danger";
}
?>" >
              <td class="server_name">
                <?php echo $row['server_name']?>
              </td>
              <td class="server_ip">
                <?php echo $row['server_ip']?>
              </td>
              <td class="port">
                <?php echo $row['port']?>
              </td>
              <td class="nick">
                <?php echo $row['nick']?>
              </td>
              <td>
                 <?php
    if ($row['use_ssl'] == 1) {
        echo "true";
    } else {
        echo "false";
    }
    ?>
              </td>
              <td>
                <a data-toggle="modal" class="edit">
                  <span class="glyphicon glyphicon-pencil" />
                </a>
              </td>
              <td>
                <a href="php/delete.php?id=<?php echo $row['id']; ?>">
                  <span class="glyphicon glyphicon-remove" />
                </a>
              </td>
            </tr>
            <?php
}
?>
          </tbody>
        </table>
      </div>
    </div>
    <div class="container">
    <div class="modal fade" id="newServer" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="container">
        <div class="modal-content">

          <form class="form-horizontal" data-toggle="validator" id="form_members" role="form" action="php/send_formdata_newserver.php" method="POST" >
              <form class="form-horizontal">
                <fieldset>
                  <legend>Server
                  </legend>
                  <div class="form-group">
                    <label class="col-lg-1 control-label">Name
                    </label>
                    <div class="col-lg-10">
                      <input type="text" class="form-control" name="server_name" id="server_name" placeholder="irc.rizon.net" autocomplete="off" required>
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
                      <button href="php/send_formdata_newserver.php" target="save" type="submit" name="submit" id="submit" class="btn btn-primary">Save
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
      </body>
    </html>
