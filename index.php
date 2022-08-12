<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="robots" content="noindex, nofollow">
    <title>PHP Text to Speech</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="img/fav.png" type="image/png">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <script>
        function load_ajax(){
            $.ajax({
                url : "speechIt.php",
                type : "post",
                data : {
                    texttospeech : $('#texttospeech').val()
                },
            });
        }
    </script>
</head>
<body>
<div class="topmost">
    <div class="col-md-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <strong class="panelinputtitle">PHP Text to Speech Converter Using Microsoft Speech API created by Group 3</strong>
            </div>
            <div class="panel-body">
                <form method="post">
                    <div class="form-group">
                        <textarea class="form-control input-sm" rows="16" id="texttospeech" name="texttospeech"
                                  placeholder="Type your Text Here..."></textarea>
                    </div>
                    <div class="form-group">
                        <input type="button" id="button" class="btn btn-primary btn-block" name="process" value="Speak" onclick="load_ajax()">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-2.0.0.min.js"></script>
</body>
</html>
