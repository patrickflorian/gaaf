<?php
include_once "header.php"; include_once "form.php";
?>

<div class="col-md-12">
<fieldset>
    <legend>TABLE DES ENGAGEMENTS</legend>

        <div class="btn-toolbar col-md-4"  style="float:right;height:30px;">
            <div role="group" class="btn-group visible-md-inline visible-lg-inline">
                <input type="text" placeholder="rechercher" style="border:1px solid #dfd7ca;border-radius:3px;padding-left:3px;">  
            </div>
            <div role="group" class="btn-group">
                <button class="btn btn-success btn-xs" id="modal-btn-add" type="button">  
                    <i class="glyphicon glyphicon-plus"></i>
                </button>      
                <button class="btn btn-default disabled btn-xs" type="button">
                    <i class="glyphicon glyphicon-pencil"></i>
                </button>
            </div>
            <div role="group" class="btn-group">
                <button class="btn btn-default btn-xs" type="button">ALL</button>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead class="warning">
                        <tr class="warning">
                                <th rowspan="2">id </th>
                                <th rowspan="2">Date </th>
                                <th rowspan="2">Objet de l'engagement</th>
                                <th rowspan="2">Beneficiaire </th>
                                <th colspan="3">Situation de credit</th>
                                <th rowspan="2">Observations </th>
                                <th rowspan="2"> </th>
                        </tr>   
                    </thead>
                    <tbody>
                            <tr>
                                    <th> </th>
                                    <th> </th>
                                    <th></th>
                                    <th> </th>
                                    
                                    <th>Montant</th>
                                    <th>Total</th>
                                    <th>Engagement</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                <tr>
                                <td>2 </td>
                                <td>Cell 4</td>
                                <td>Cell 3</td>
                                <td>Cell 4</td>
                                <td>Cell 5</td>
                                <td>Cell 6</td>
                                <td>Cell 7</td>
                                <td>Cell 8</td>
                                <td>
                                    <a href="#" class="text-info">
                                    <i class="material-icons">edit</i> </a>
                                    <a href="#" class="text-warning">
                                    <i class="material-icons">delete</i> </a>
                                    <a href="#"  class="text-primary">
                                        <i class="material-icons">content_copy</i> </a>
                                </td>
                            </tr>
                        <tr>
                        <td>2 </td>
                        <td>Cell 4</td>
                        <td>Cell 3</td>
                        <td>Cell 4</td>
                        <td>Cell 5</td>
                        <td>Cell 6</td>
                        <td>Cell 7</td>
                        <td>Cell 8</td>
                        <td>
                            <a href="#" class="text-info">
                            <i class="material-icons">edit</i> </a>
                            <a href="#" class="text-warning">
                            <i class="material-icons">delete</i> </a>
                            <a href="#"  class="text-primary">
                                <i class="material-icons">content_copy</i> </a>
                        </td>
                    </tr>
                <tr>
                    <td>2 </td>
                    <td>Cell 4</td>
                    <td>Cell 3</td>
                    <td>Cell 4</td>
                    <td>Cell 5</td>
                    <td>Cell 6</td>
                    <td>Cell 7</td>
                    <td>Cell 8</td>
                    <td>
                        <a href="#" class="text-info">
                        <i class="material-icons">edit</i> </a>
                        <a href="#" class="text-warning">
                        <i class="material-icons">delete</i> </a>
                        <a href="#"  class="text-primary">
                            <i class="material-icons">content_copy</i> </a>
                    </td>
                </tr>

                <tr>
                <td>2 </td>
                <td>Cell 4</td>
                <td>Cell 3</td>
                <td>Cell 4</td>
                <td>Cell 5</td>
                <td>Cell 6</td>
                <td>Cell 7</td>
                <td>Cell 8</td>
                <td>
                    <a href="#" class="text-info">
                    <i class="material-icons">edit</i> </a>
                    <a href="#" class="text-warning">
                    <i class="material-icons">delete</i> </a>
                    <a href="#"  class="text-primary">
                        <i class="material-icons">content_copy</i> </a>
                </td>
            </tr>
                    </tbody>
                </table>
            </div>
     </div>
      </fieldset>  
    </div>
  
