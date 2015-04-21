<div class="panel-heading">
    <h3 class="panel-title">' . $title . '</h3>
</div>
<div class="panel-body">
    <div class="bootstrap-table">
        <div class="fixed-table-toolbar">
            <div class="columns columns-right btn-group pull-right">
                <button class="btn btn-default chintantablesearchgo" type="button">Go!</button>
                <select class="maxrow form-control" style="float: left;  width: 76px;">
                    <option value="10">10</option>
                    <option value="20">20</option>
                    <option value="50">50</option>
                    <option value="100">100</option>
                </select>
            </div>
        </div>
        <div class="pull-right search">
            <input class="form-control chintantablesearch" type="text" placeholder="Search">
        </div>
    </div>
</div>
<div class="loader"></div>

<div class="row">
    <div class="col-md-9">
        <h4>' . $title . '</h4>
        <h6>' . $description . '</h6>
    </div>
    <div class="col-md-3">
        <select class="maxrow form-control" style="
    float: left;  width: 76px;
">
            <option value="10">10</option>
            <option value="20">20</option>
            <option value="50">50</option>
            <option value="100">100</option>
        </select>
        <div class="input-group">
            <input type="text" class="form-control chintantablesearch" placeholder="Search">
            <span class="input-group-btn">
        <button class="btn btn-default chintantablesearchgo" type="button">Go!</button>
      </span>
        </div>
    </div>
</div>

<div class="loader">Loading</div>