<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  </head>
  <body>
    <div class="container-fluid">
      <div class="row">
        <form class="col-sm-6 col-sm-offset-3">
          <div id="insertHere">
            <h1>Hello, world!</h1>

            <div class="tpl" data-type="email">
              <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
              </div>
            </div>

            <div class="tpl" data-type="input">
              <div class="form-group">
                <label for="exampleInputPassword1">{{name}}</label>
                <input type="{{type}}" class="form-control" id="{{name}}" name="{{name}}" value="" placeholder="{{name}}">
              </div>
            </div>

            <div class="tpl" data-type="file">
              <div class="form-group">
                <label for="exampleInputFile">File input</label>
                <input type="file" id="exampleInputFile">
                <p class="help-block">Example block-level help text here.</p>
              </div>
            </div>
            <div class="tpl" data-type="checkbox">
              <div class="checkbox">
                <label>
                  <input type="checkbox"> Check me out
                </label>
              </div>
            </div>

            <div class="tpl" data-type="radio-inline">
              <div class="form-group">
                <label class="col-lg-4 control-label">{{name}}</label>
                <div class="col-lg-5">
                  {{#options}}
                  <label class="radio-inline"><input type="radio" name="{{name}}" value="{{.}}"/> <?php echo set_radio("{{name}}", {{.}}, ${{name}} == {{.}});?> {{name}} </label>
                  {{/options}}
                </div>
              </div>
            </div>

            <div class="tpl" data-type="submit">
              <button type="submit" class="btn btn-default">Submit</button>
            </div>
          </div>
        </form>
      </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>
