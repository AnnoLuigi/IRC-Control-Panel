<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Brand</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
            <li><a href="#">Link</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li><a href="#">Separated link</a></li>
                <li class="divider"></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Link</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <script src="js/bootstrap.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs/jqc-1.12.3/dt-1.10.12/datatables.min.js"></script>
    <script type="text/javascript" language="javascript" class="init">

</script>

  </head>
  <body>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <form class="form-horizontal" id="form_members" role="form" action="send_formdata_newserver.php" method="POST">
 <div class="container">
    <form class="form-horizontal">
      <fieldset>
        <legend>Server</legend>
        <div class="form-group">
          <label class="col-lg-1 control-label">Name</label>
          <div class="col-lg-10">
            <input type="text" class="form-control" name="server_name" id="server_name" placeholder="irc.rizon.net" autocomplete="off" style="cursor: pointer; background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAASCAYAAABSO15qAAAAAXNSR0IArs4c6QAAAPhJREFUOBHlU70KgzAQPlMhEvoQTg6OPoOjT+JWOnRqkUKHgqWP4OQbOPokTk6OTkVULNSLVc62oJmbIdzd95NcuGjX2/3YVI/Ts+t0WLE2ut5xsQ0O+90F6UxFjAI8qNcEGONia08e6MNONYwCS7EQAizLmtGUDEzTBNd1fxsYhjEBnHPQNG3KKTYV34F8ec/zwHEciOMYyrIE3/ehKAqIoggo9inGXKmFXwbyBkmSQJqmUNe15IRhCG3byphitm1/eUzDM4qR0TTNjEixGdAnSi3keS5vSk2UDKqqgizLqB4YzvassiKhGtZ/jDMtLOnHz7TE+yf8BaDZXA509yeBAAAAAElFTkSuQmCC&quot;); background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; background-repeat: no-repeat;">
          </div>
        </div>
        <div class="form-group">
          <label class="col-lg-1 control-label">IP</label>
          <div class="col-lg-10">
            <input type="text" class="form-control" name="server_ip" id="server_ip" placeholder="irc.rizon.net" autocomplete="off" style="cursor: pointer; background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAASCAYAAABSO15qAAAAAXNSR0IArs4c6QAAAPhJREFUOBHlU70KgzAQPlMhEvoQTg6OPoOjT+JWOnRqkUKHgqWP4OQbOPokTk6OTkVULNSLVc62oJmbIdzd95NcuGjX2/3YVI/Ts+t0WLE2ut5xsQ0O+90F6UxFjAI8qNcEGONia08e6MNONYwCS7EQAizLmtGUDEzTBNd1fxsYhjEBnHPQNG3KKTYV34F8ec/zwHEciOMYyrIE3/ehKAqIoggo9inGXKmFXwbyBkmSQJqmUNe15IRhCG3byphitm1/eUzDM4qR0TTNjEixGdAnSi3keS5vSk2UDKqqgizLqB4YzvassiKhGtZ/jDMtLOnHz7TE+yf8BaDZXA509yeBAAAAAElFTkSuQmCC&quot;); background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; background-repeat: no-repeat;">
          </div>
        </div>
        <div class="form-group">
          <label class="col-lg-1 control-label">Port</label>
          <div class="col-lg-10">
            <input type="text" class="form-control" name="port" id="port" placeholder="6697" autocomplete="off" style="cursor: pointer; background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAASCAYAAABSO15qAAAAAXNSR0IArs4c6QAAAPhJREFUOBHlU70KgzAQPlMhEvoQTg6OPoOjT+JWOnRqkUKHgqWP4OQbOPokTk6OTkVULNSLVc62oJmbIdzd95NcuGjX2/3YVI/Ts+t0WLE2ut5xsQ0O+90F6UxFjAI8qNcEGONia08e6MNONYwCS7EQAizLmtGUDEzTBNd1fxsYhjEBnHPQNG3KKTYV34F8ec/zwHEciOMYyrIE3/ehKAqIoggo9inGXKmFXwbyBkmSQJqmUNe15IRhCG3byphitm1/eUzDM4qR0TTNjEixGdAnSi3keS5vSk2UDKqqgizLqB4YzvassiKhGtZ/jDMtLOnHz7TE+yf8BaDZXA509yeBAAAAAElFTkSuQmCC&quot;); background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; background-repeat: no-repeat;">
            <div class="checkbox">
              <label>
                <input type="checkbox" name ="use_ssl" id="use_ssl"> SSL
              </label>
            </div>
          </div>
        </div>
        <br/>
        <div>
          <div class="form-group">
            <label class="col-lg-1 control-label">Nick</label>
            <div class="col-lg-10">
              <input type="nick" class="form-control" id="nick" name="nick" placeholder="Nick" autocomplete="off" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAASCAYAAABSO15qAAAAAXNSR0IArs4c6QAAAPhJREFUOBHlU70KgzAQPlMhEvoQTg6OPoOjT+JWOnRqkUKHgqWP4OQbOPokTk6OTkVULNSLVc62oJmbIdzd95NcuGjX2/3YVI/Ts+t0WLE2ut5xsQ0O+90F6UxFjAI8qNcEGONia08e6MNONYwCS7EQAizLmtGUDEzTBNd1fxsYhjEBnHPQNG3KKTYV34F8ec/zwHEciOMYyrIE3/ehKAqIoggo9inGXKmFXwbyBkmSQJqmUNe15IRhCG3byphitm1/eUzDM4qR0TTNjEixGdAnSi3keS5vSk2UDKqqgizLqB4YzvassiKhGtZ/jDMtLOnHz7TE+yf8BaDZXA509yeBAAAAAElFTkSuQmCC&quot;); background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; background-repeat: no-repeat;">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-1 control-label">Secondary</label>
            <div class="col-lg-10">
              <input type="secondary" class="form-control" name= "secondary" id="secondary" placeholder="Secondary Username" autocomplete="off" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAASCAYAAABSO15qAAAAAXNSR0IArs4c6QAAAPhJREFUOBHlU70KgzAQPlMhEvoQTg6OPoOjT+JWOnRqkUKHgqWP4OQbOPokTk6OTkVULNSLVc62oJmbIdzd95NcuGjX2/3YVI/Ts+t0WLE2ut5xsQ0O+90F6UxFjAI8qNcEGONia08e6MNONYwCS7EQAizLmtGUDEzTBNd1fxsYhjEBnHPQNG3KKTYV34F8ec/zwHEciOMYyrIE3/ehKAqIoggo9inGXKmFXwbyBkmSQJqmUNe15IRhCG3byphitm1/eUzDM4qR0TTNjEixGdAnSi3keS5vSk2UDKqqgizLqB4YzvassiKhGtZ/jDMtLOnHz7TE+yf8BaDZXA509yeBAAAAAElFTkSuQmCC&quot;); background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; background-repeat: no-repeat;">
            </div>
          </div>
        <div class="form-group">
          <label class="col-lg-1 control-label">Password</label>
          <div class="col-lg-10">
            <input type="password" class="form-control" name="pass" id="pass" placeholder="Password" autocomplete="off" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAASCAYAAABSO15qAAAAAXNSR0IArs4c6QAAAPhJREFUOBHlU70KgzAQPlMhEvoQTg6OPoOjT+JWOnRqkUKHgqWP4OQbOPokTk6OTkVULNSLVc62oJmbIdzd95NcuGjX2/3YVI/Ts+t0WLE2ut5xsQ0O+90F6UxFjAI8qNcEGONia08e6MNONYwCS7EQAizLmtGUDEzTBNd1fxsYhjEBnHPQNG3KKTYV34F8ec/zwHEciOMYyrIE3/ehKAqIoggo9inGXKmFXwbyBkmSQJqmUNe15IRhCG3byphitm1/eUzDM4qR0TTNjEixGdAnSi3keS5vSk2UDKqqgizLqB4YzvassiKhGtZ/jDMtLOnHz7TE+yf8BaDZXA509yeBAAAAAElFTkSuQmCC&quot;); background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; background-repeat: no-repeat;">
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
            <button type="reset" class="btn btn-default">Cancel</button>
            <button type="submit" name="submit" id="submit" class="btn btn-primary">Save</button>
          </div>
        </div>
      </fieldset>
    </form>

<div class="panel panel-primary">
    <div class="panel-heading">
      <h3 class="panel-title">Saved Servers</h3>
    </div>
<div class="panel-body">
    <table  class="table table-striped table-hover">
      <thead>
        <tr>
          <td>Server</td>
          <td>Hostname</td>
          <td>Port</td>
          <td>User</td>
        </tr>
      </thead>
  <tbody>
<?php
    $connect = mysql_connect("localhost","irc", "q1w2e3r4");
    if (!$connect) {
        die(mysql_error());
    }
    mysql_select_db("irc_bot");
    $results = mysql_query("SELECT * FROM server_info");
    while($row = mysql_fetch_array($results)) {
    ?>
        <tr>
            <td><?php echo $row['server_name']?></td>
            <td><?php echo $row['server_ip']?></td>
            <td><?php echo $row['port']?></td>
            <td><?php echo $row['nick']?></td>
        </tr>

    <?php
    }
    ?>
    </tbody>
    </table>
  </div>
</div>

  </body>

<!-- <div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">Panel primary</h3>
  </div>
  <div class="panel-body">
    <table class="table table-striped table-hover ">
  <thead>
    <tr>
      <th>Server</th>
      <th>User</th>
      <th>IP</th>
      <th>Port</th>
      <th>SSL</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <tr class="success">
      <td class="server">Rizon</td>
      <td class="name">MaxB</td>
      <td class="ip">irc.rizon.net</td>
      <td>6697</td>
      <td>Yes</td>
      <td>
        <a href="#" class="btn edit">Edit</a>
      </td>
    </tr>
    <tr class="danger">
      <td>Freenode</td>
      <td>MaxB</td>
      <td>irc.freenode.net</td>
      <td>6697</td>
      <td>Yes</td>
    </tr>
    </tbody>
  </table>
    </div>
  </div>
</div> -->

</html>
