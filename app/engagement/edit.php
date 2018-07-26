<?php

include_once "header.php";
?>
<div class="col-md-12">
    <form class="bootstrap-form-with-validation">
        <h2 class="text-center"><i class="material-icons">mode_edit</i>Modifier Dotation</h2>
        <div class="col-md-6 form-group has-feedback">
            <label for="text-input" class="control-label">Exercice </label>
            <select name="dot_exercice" required autofocus class="form-control input-lg">
                <option value="1" selected>Exercice | 2015</option>
                <option value="2">Exercice | 2016</option>
                <option value="3">Exercice | 2017</option>
            </select><i aria-hidden="true" class="glyphicon glyphicon-ok form-control-feedback"></i></div>
        <div class="col-md-6 form-group has-feedback">
            <label for="text-input" class="control-label">Beneficiaire </label>
            <select name="dot_exercice" required autofocus class="form-control input-lg">
                <option value="1" selected>Exercice | 2015</option>
                <option value="2">Exercice | 2016</option>
                <option value="3">Exercice | 2017</option>
            </select><i aria-hidden="true" class="glyphicon glyphicon-ok form-control-feedback"></i></div>
        <div class="col-md-6 form-group has-feedback">
            <label for="password-input" class="control-label">Date </label><i aria-hidden="true" class="glyphicon glyphicon-warning-sign form-control-feedback"></i>
            <input type="date" class="form-control" />
            <p class="help-block text-nowrap text-lowercase text-right text-muted bg-warning">ceci ne sera plus modifiable une fois enregistrée</p>
        </div>
        <div class="col-md-6 form-group has-feedback">
            <label for="password-input" class="control-label">Objet </label>
            <input type="text" class="form-control" /><i aria-hidden="true" class="glyphicon glyphicon-warning-sign form-control-feedback"></i>
            <p class="help-block text-nowrap text-lowercase text-right text-muted bg-warning">ceci ne sera plus modifiable une fois enregistrée</p>
        </div>
        <div class="col-md-6 form-group has-feedback">
            <label for="password-input" class="control-label">Montant </label>
            <input type="text" class="form-control" /><i aria-hidden="true" class="glyphicon glyphicon-warning-sign form-control-feedback"></i>
            <p class="help-block text-nowrap text-lowercase text-right text-muted bg-warning">ceci ne sera plus modifiable une fois enregistrée</p>
        </div>
        <div class="col-md-6 form-group has-feedback">
            <label for="password-input" class="control-label">Observations </label>
            <textarea class="form-control"></textarea><i aria-hidden="true" class="glyphicon glyphicon-warning-sign form-control-feedback"></i>
            <p class="help-block text-nowrap text-lowercase text-right text-muted bg-warning">ceci ne sera plus modifiable une fois enregistrée</p>
        </div>
        <div class="col-md-6 form-group has-warning">
            <button class="btn btn-primary" type="submit">modifier </button>
        </div>
    </form>
</div>
<?php

