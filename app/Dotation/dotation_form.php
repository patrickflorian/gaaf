<div class="col-md-6 col-sm-7">
    <form class="bootstrap-form-with-validation">
        <h2 class="text-center"><i class="glyphicon glyphicon-plus-sign"></i>Nouvelle Dotation</h2>
        <div class="form-group has-feedback">
            <label for="text-input" class="control-label">Exercice </label>
            <select name="Exercice" required autofocus class="form-control input-lg">
                <option value="1" selected>Exercice | 2015</option>
                <option value="2">Exercice | 2016</option>
                <option value="3">Exercice | 2017</option>
            </select><i aria-hidden="true" class="glyphicon glyphicon-ok form-control-feedback"></i></div>
        <div class="form-group has-feedback">
            <label for="password-input" class="control-label">Valeur de la dotation </label>
            <input type="text" class="form-control" /><i aria-hidden="true" class="glyphicon glyphicon-warning-sign form-control-feedback"></i>
            <p class="help-block text-nowrap text-lowercase text-right text-muted bg-warning">ceci ne sera plus modifiable une fois enregistrée</p>
        </div>
        <div class="form-group has-feedback">
            <label for="search-input" class="control-label">paragraphe </label>
            <div class="input-group">
                <div class="input-group-addon"><span> <i class="glyphicon glyphicon-th-list"></i></span></div>
                <input type="search" name="paragraphe" class="form-control" id="search-input" />
            </div><i aria-hidden="true" class="glyphicon glyphicon-remove form-control-feedback"></i></div>
        <div class="form-group has-warning">
            <label class="control-label">Description </label>
            <p class="form-static-control">This is an example template, showing the proper bootstrap components and classes needed for creating a validation form. Any actual input validation and the logic behind it is up to the developer. </p>
        </div>
        <div class="form-group has-warning">
            <button class="btn btn-primary" type="submit">Ajouter<i class="glyphicon glyphicon-plus"></i> </button>
        </div>
    </form>
</div>