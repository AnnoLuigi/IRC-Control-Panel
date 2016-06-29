<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  include 'html/header.php';
  ?>
</head>

  <body>
    <div class="container">
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <a data-target="#newserver" data-toggle="modal">
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
                <a data-target="#editserver" data-toggle="modal">
                  <span class="glyphicon glyphicon-pencil">
                  </span>
                </a>
              </td>
              <td>
                <a href="php/delete.php?id= echo $row['id'];">
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
  </div>

  <?php
  include 'html/modals.php';
  ?>
      </body>
    </html>
