<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/jquery.treetable.theme.default.css">
    <link rel="stylesheet" href="css/jquery.treetable.css">

  </head>
  <body>

   
<div class="container" style="width: 980px;margin: 0 auto;">
  <table class="table table-striped table-sm" id="algo">
    <thead>
      <tr>
        <th>Name</th>
        <th>Date</th>
      </tr>
    </thead>
    <tbody>
      <tr data-tt-id='1'>
        <td >Aplicaion</td>
        <td>9/17</td>
      </tr>
      <tr data-tt-id='1.1'  data-tt-parent-id='1'>
        <td>Config</td>
        <td>9/17</td>
      </tr>
      <tr data-tt-id='1.2'  data-tt-parent-id='1'>
        <td>Config</td>
        <td>9/17</td>
      </tr>
      <tr data-tt-id='1.1.1'  data-tt-parent-id='1.2'>
        <td>Config</td>
        <td>9/17</td>
      </tr>
      <tr data-tt-id='2'>
        <td>Controller</td>
        <td>9/17</td>
      </tr>
      <tr data-tt-id='2.1' data-tt-parent-id='2'>
        <td>Model</td>
        <td>9/17</td>
      </tr>
      <tr>
        <td>Assets</td>
        <td>8/17</td>
      </tr>
      
    </tbody>
  </table>
</div>


    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    <script src="js/jquery.treetable.js"></script>
    <script>
      $('#algo').treetable({expandable:true});
    </script>
  </body>
</html>
