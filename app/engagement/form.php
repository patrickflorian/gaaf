<div role="dialog" id="addModal" class="modal fade " style="display: block;">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h3 class="text-center modal-title"><i class="glyphicon glyphicon-plus-sign"></i>Nouvel Engagement</h3></div>
            <div class="modal-body">
            <form class="bootstrap-form-with-validation">
    <div class="form-group has-feedback">
        <label class="control-label" for="text-input">Beneficiaire </label>
        <select class="form-control input-lg" name="eng_ben" required autofocus>
            <option value="1" selected>TALLA</option>
            <option value="2">FOKA</option>
            <option value="3">TEDJE</option>
        </select><i class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></i></div>
    <div class="form-group has-feedback">
        <label class="control-label" for="password-input">Montant </label>
        <input class="form-control" type="text" /><i class="glyphicon glyphicon-warning-sign form-control-feedback" aria-hidden="true"></i>
        <p class="help-block text-nowrap text-lowercase text-right text-muted bg-warning">ceci ne sera plus modifiable une fois enregistrée</p>
    </div>
    <div class="form-group has-feedback">
        <label class="control-label" for="search-input">Objet </label>
        <div class="input-group">
            <div class="input-group-addon"><span> <i class="glyphicon glyphicon-th-list"></i></span></div>
            <input class="form-control" type="search" name="search" id="search-input" />
        </div><i class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></i></div>
    <div class="form-group has-warning">
        <label class="control-label">Static Control</label>
        <p class="form-static-control">This is an example template, showing the proper bootstrap components and classes needed for creating a validation form. Any actual input validation and the logic behind it is up to the developer. </p>
    </div>
    <div class="form-group has-warning">
        <button class="btn btn-primary" type="button" data-toggle="tooltip" title="ajouter un engagement">Ajouter<i class="glyphicon glyphicon-plus"></i> </button>
    </div>
</form>
            </div>
        </div>
    </div>
</div>

