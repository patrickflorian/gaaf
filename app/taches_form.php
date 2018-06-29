<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GAAF</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="assets/fonts/material-icons.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Pretty-Header.css">
</head>

<body>
    <div class="col-lg-4 col-md-4 col-sm-5">
        <form class="bootstrap-form-with-validation">
            <h2 class="text-center">Nouvel Chapitre</h2>
            <div class="form-group has-success has-feedback">
                <label class="control-label" for="text-input">Text Input</label>
                <input class="form-control" type="text" name="text-input" id="text-input"><i class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></i></div>
            <div class="form-group has-warning has-feedback">
                <label class="control-label" for="password-input">Password Input</label>
                <input class="form-control" type="password" name="password-input" id="password-input"><i class="glyphicon glyphicon-warning-sign form-control-feedback" aria-hidden="true"></i></div>
            <div class="form-group has-error has-feedback">
                <label class="control-label" for="email-input">Email Input</label>
                <input class="form-control" type="email" name="email-input" id="email-input"><i class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></i></div>
            <div class="form-group has-success has-feedback">
                <label class="control-label" for="textarea-input">Textarea </label>
                <textarea class="form-control" name="textarea" id="textarea-input"></textarea><i class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></i></div>
            <div class="form-group has-error has-feedback">
                <label class="control-label" for="search-input">Search Input Group</label>
                <div class="input-group">
                    <div class="input-group-addon"><span> <i class="glyphicon glyphicon-search"></i></span></div>
                    <input class="form-control" type="search" name="search" id="search-input">
                </div><i class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></i></div>
            <div class="form-group has-warning">
                <label class="control-label" for="file-input">File Input</label>
                <input type="file" name="file-input" id="file-input">
            </div>
            <div class="form-group has-success">
                <div class="checkbox">
                    <label class="control-label">
                        <input type="checkbox" name="checkbox-input">Checkbox</label>
                </div>
            </div>
            <div class="form-group has-success">
                <div class="radio">
                    <label class="control-label">
                        <input type="radio" name="radio-group">Radio</label>
                </div>
                <div class="radio">
                    <label class="control-label">
                        <input type="radio" name="radio-group" checked="">Radio</label>
                </div>
                <div class="radio">
                    <label class="control-label">
                        <input type="radio" name="radio-group">Radio</label>
                </div>
            </div>
            <div class="form-group has-warning">
                <label class="control-label">Static Control</label>
                <p class="form-static-control">This is an example template, showing the proper bootstrap components and classes needed for creating a validation form. Any actual input validation and the logic behind it is up to the developer.&nbsp;</p>
            </div>
            <div class="form-group has-warning">
                <button class="btn btn-primary" type="submit">Button</button>
            </div>
        </form>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>