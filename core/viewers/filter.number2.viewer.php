<?php
class FilterNumber2ViewerFabrica{
    public function getViewer($params, $model){
        return new FilterNumber2Viewer($params, $model);
    }
}
class FilterNumber2Viewer{
    public $model;
    public $items;
    public function __construct($params, $model){
        $this->model = $model;
    }
    public function show($cell, $params){
        $showName = $cell->items[50139][0];
        $result[0]=$showName.'<p><input type="number" class="form-control filter-input" placeholder="до" style="width: 45%; float: right"/><input type="number" class="form-control filter-input" placeholder="от"  style="width: 45%;"/></p>';
        // $cell->value
        //if ($params[5099]!="") $params[5099]=' active';
        //$result[1]='<a href="#" class="list-group-item'.$params[5099].'"><img src="icons/kuper.png" height="15" style="float: left; margin-right: 3px;"></img><h5 class="list-group-item-heading">'.$cell->items[50139].'</h5></a>';
        return $result;
    }
}