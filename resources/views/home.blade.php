@extends('tpl')
@section('styles')
<link href="{{ elixir('css/dashboard.css') }}" rel="stylesheet">
<link href="{{ asset('plugins/sliptree.bootstrap-tokenfield/css/bootstrap-tokenfield.min.css') }}" rel="stylesheet">
@endsection

@section('scripts')
<script src="{{ asset('js/bootbox.min.js') }}"></script>
<script src="{{ elixir('js/dashboard.js') }}"></script>
<script src="plugins/jquery.picture.cut/src/jquery.picture.cut.js"></script>
<script src="plugins/sliptree.bootstrap-tokenfield/bootstrap-tokenfield.min.js"></script>
<script src="plugins/multi-file/jQuery.MultiFile.min.js"></script>
@endsection
@section('content')
<div class="container">
    <div id="dashboard" class="row tabpanel">
        <div class="col-xs-3">
            <div id="dashboard-menu" class="list-group" role="tablist">
                <a class="list-group-item active" href="#dash" aria-controls="dash" role="tab" data-toggle="tab"><i class="fa fa-th fa-fw"></i>&nbsp;Dashboard</a>
                <a class="list-group-item" href="#developers" aria-controls="developers" role="tab" data-toggle="tab"><i class="fa fa-briefcase fa-fw"></i>&nbsp; Developers</a>
                <a class="list-group-item" href="#projects" aria-controls="projects" role="tab" data-toggle="tab"><i class="fa fa-book fa-fw"></i>&nbsp; Projects</a>
                <a class="list-group-item" href="#units" aria-controls="units" role="tab" data-toggle="tab"><i class="fa fa-home fa-fw"></i>&nbsp; Units</a>
                <a class="list-group-item" href="#settings" aria-controls="settings" role="tab" data-toggle="tab"><i class="fa fa-cog fa-fw"></i>&nbsp; Settings</a>
            </div>

        </div>
        <div class="col-xs-9 tab-content">
            <div role="tabpanel" class="tab-pane active" id="dash">
                <div class="panel panel-default">
                    <div class="panel-heading"><i class="fa fa-th fa-fw"></i>&nbsp;Dashboard</div>

                    <div class="panel-body">
                        You are logged in!
                    </div>
                </div>
            </div>
            <div role="tabpanel" class="tab-pane" id="developers">
                <div class="panel panel-default">
                    <div class="panel-heading"><i class="fa fa-fw fa-briefcase"></i>Manage Developers</div>
                    <table id="table-dev" class="table">
                        <thead>
                            <th>Logo</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <a href="#" class="thumbnail">
                                        <img src="{{ asset('images\affiliates\shang.png') }}" alt="..." width="70px" height="70px">
                                    </a>
                                </td>
                                <td>Shang Properties</td>
                                <td>For Sale</td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-default btn-xs"><i class="fa fa-folder-open"></i></button>
                                        <button class="btn btn-default btn-xs"><i class="fa fa-pencil"></i></button>
                                        <button class="btn btn-default btn-xs"><i class="fa fa-trash-o"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="8" class="text-center">
                                    <small><a href="#" data-toggle="modal" data-target="#modal-add-dev" ><i class="fa fa-fw fa-plus"></i>Add New Developer</a></small>
                                </td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td id="table-dev-pager" colspan="8">
                                    <button class="btn btn-default btn-xs disabled">Loading Table . Please wait...</button>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>

            </div>
            <div role="tabpanel" class="tab-pane" id="projects">
                <div class="panel panel-default">
                    <div class="panel-heading"><i class="fa fa-fw fa-building"></i>Manage Projects</div>
                    <table id="table-proj" class="table">
                        <thead>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Developer</th>
                            <th>Type</th>
                            <th>Category</th>
                            <th>Units</th>
                            <th>Area</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td># 1031</td>
                                <td>The Rise Makati</td>
                                <td>Shang Properties</td>
                                <td>For Sale</td>
                                <td>Residential</td>
                                <td>2,822</td>
                                <td>10,825 sqm</td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-default btn-xs"><i class="fa fa-folder-open"></i></button>
                                        <button class="btn btn-default btn-xs"><i class="fa fa-pencil"></i></button>
                                        <button class="btn btn-default btn-xs"><i class="fa fa-trash-o"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="8" class="text-center">
                                    <small><a href="#" data-toggle="modal" data-target="#modal-add-proj" class="text-success"><i class="fa fa-fw fa-plus"></i>Add New Project</a></small>
                                </td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td id="table-proj-pager" colspan="8">
                                    <button class="btn btn-default btn-xs disabled">Loading Table . Please wait...</button>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
            <div role="tabpanel" class="tab-pane" id="units">
                <div class="panel panel-default">
                    <div class="panel-heading"><i class="fa fa-fw fa-home"></i>Manage Units</div>
                    <table id="table-unit" class="table">
                        <thead>
                            <th>ID</th>
                            <th>Description</th>
                            <th>Project</th>
                            <th>Type</th>
                            <th>Bedrooms</th>
                            <th>Bathrooms</th>
                            <th>Area</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            
                        </tbody>
                        <tfoot>
                            <tr>
                                <td id="table-unit-pager" colspan="8">
                                    <button class="btn btn-default btn-xs disabled">Loading Table . Please wait...</button>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
            <div role="tabpanel" class="tab-pane" id="settings">...</div>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="modal-add-dev" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel"><i class="fa fa-fw fa-briefcase"></i>Add New Developer</h4>
            </div>
            <div class="modal-body">

            </div>
            <div role="tabpanel">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist" style="padding-left:20px;">
                    <li role="presentation" class="active"><a href="#add-dev-overview" aria-controls="add-dev-overview" role="tab" data-toggle="tab">Overview</a></li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="add-dev-overview">
                        <form id="add-dev-form" class="form-horizontal">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group">
                                <div id="container_image_dev" class="col-sm-10 col-sm-offset-2" style="height:auto;width:auto;float:left;"></div>
                            </div>
                            <div class="form-group">
                                <label for="dev-feature-name" class="col-sm-2 control-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="dev-feature-name" id="dev-feature-name" placeholder="e.g. The Rise Makati">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="dev-feature-profile" class="col-sm-2 control-label">Profile</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" rows="3" name="dev-feature-profile" id="dev-feature-profile" placeholder="e.g. 3 Basement Levels, 744 residents parking slots"></textarea>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button id="add-dev-submit" type="button" class="btn btn-success">Add Developer</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modal-add-proj" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel"><i class="fa fa-fw fa-building"></i>Add New Property</h4>
            </div>
            <div class="modal-body">

            </div>
            <div role="tabpanel">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist" style="padding-left:20px;">
                    <li role="presentation" class="active"><a href="#add-proj-overview" aria-controls="add-proj-overview" role="tab" data-toggle="tab">Overview</a></li>
                    <li role="presentation"><a href="#add-proj-feature" aria-controls="add-proj-feature" role="tab" data-toggle="tab">Features</a></li>
                    <li role="presentation"><a href="#add-proj-amenities" aria-controls="add-proj-amenities" role="tab" data-toggle="tab">Amenities</a></li>
                    <li role="presentation"><a href="#add-proj-images" aria-controls="add-proj-images" role="tab" data-toggle="tab">Images</a></li>
                    <li role="presentation"><a href="#add-proj-map" aria-controls="add-proj-map" role="tab" data-toggle="tab">Map</a></li>
                </ul>

                <!-- Tab panes -->
                <form id="add-proj-form" class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="add-proj-overview">
                        <div class="form-horizontal">
                            <div class="form-group">
                                <label for="prop-feature-name" class="col-sm-2 control-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="proj-feature-name" id="prop-feature-name" placeholder="e.g. The Rise Makati" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="prop-feature-location" class="col-sm-2 control-label">Location</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="proj-feature-location" id="prop-feature-location" placeholder="e.g. Malugay St., Makati City" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="prop-feature-developer" class="col-sm-2 control-label">Developer</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="proj-feature-developer" id="prop-feature-developer"></select>
                                    <small class="help-text pull-right text-muted">(Optional)</small>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="prop-feature-profile" class="col-sm-2 control-label">Profile</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" rows="3" name="proj-feature-profile" id="prop-feature-profile" placeholder="e.g. 3 Basement Levels, 744 residents parking slots" required></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="proj-feature-type" class="col-sm-2 control-label">Type</label>
                                <div class="col-sm-10">
                                    <select class="form-control" id="proj-feature-type" name="proj-feature-type">
                                        <option>For Sale</option>
                                        <option>For Lease</option>
                                        <option>Pre Selling</option>
                                        <option>Others</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="proj-feature-category" class="col-sm-2 control-label">Category</label>
                                <div class="col-sm-10">
                                    <select class="form-control" id="proj-feature-category" name="proj-feature-category">
                                        <option>Condominium</option>
                                        <option>Townhouse</option>
                                        <option>House &amp; Lot</option>
                                        <option>Others</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="proj-feature-area" class="col-sm-2 control-label">Area</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" id="proj-feature-area" name="proj-feature-area" placeholder="10,123 sqm.">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="proj-feature-units" class="col-sm-2 control-label">Units</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" id="proj-feature-units" name="proj-feature-units" placeholder="10,123 sqm.">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="add-proj-feature">
                        <input id="add-proj-features" name="proj-feature-lists" type="text" class="form-control" required>
                        <hr>
                        <ul id="add-proj-feature-list" class="list-unstyled columns-three toggle-tags">
                            <li><span>Elevator</span></li>
                            <li><span>Restaurant</span></li>
                            <li><span>Parking Lots</span></li>
                            <li><span>Library</span></li>
                            <li><span>Studio</span></li>
                            <li><span>Swimming Pool</span></li>
                            <li><span>24-Hour CCTV</span></li>
                            <li><span>Central Mailbox</span></li>
                            <li><span>Intercom</span></li>
                            <li><span>No Smoking Lounges</span></li>
                            <li><span>Smoking Area</span></li>
                        </ul>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="add-proj-amenities">
                        <div class="input-group">
                            <input id="add-proj-amenities-input" type="text" class="form-control" placeholder="Type here to Add Amenities">
                            <span class="input-group-btn">
                                <button id="add-proj-amenities-add" class="btn btn-default" type="button"><i class="fa fa-fw fa-plus"></i>Add</button>
                            </span>
                        </div><!-- /input-group -->
                        <hr>
                        <ul id="add-proj-amenities-list" class="list-unstyled">
                        </ul>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="add-proj-images">
                        <!-- Standar Form -->
                        <h4>Select files from your computer</h4>
                        <div class="form-inline">
                            <div class="form-group">
                                <input type="file" name="proj-images[]" id="add-proj-images-input" class="with-preview" multiple required>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="add-proj-map">
                        <h4>Insert embed code here from your Map Service Provider</h4>
                        <textarea class="form-control" rows="3" id="proj-feature-map" required></textarea>
                        <input type="hidden" id="proj-feature-map-source" name="proj-feature-map-source" value="">
                        <h4>Preview</h4>
                        <iframe id="proj-feature-map-preview" src="" width="100%" height="480"></iframe>
                    </div>
                </form>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button id="add-proj-submit" type="button" class="btn btn-success">Add Property</button>
            </div>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="modal-add-unit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel"><i class="fa fa-fw fa-briefcase"></i>Add New Unit</h4>
            </div>
            <div class="modal-body">

            </div>
            <div role="tabpanel">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist" style="padding-left:20px;">
                    <li role="presentation" class="active"><a href="#add-unit-overview" aria-controls="add-unit-overview" role="tab" data-toggle="tab">Overview</a></li>
                    <li role="presentation"><a href="#add-unit-images" aria-controls="add-unit-images" role="tab" data-toggle="tab">Images</a></li>
                </ul>
                <!-- Tab panes -->
                <form id="add-unit-form" class="tab-content">
                    <div role="tabpanel" class="tab-pane active form-horizontal" id="add-unit-overview">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group">
                            <label for="unit-feature-project" class="col-sm-2 control-label">Project</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="unit-feature-project" id="unit-feature-project"></select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="unit-feature-description" class="col-sm-2 control-label">Description</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="unit-feature-description" id="unit-feature-description" placeholder="e.g. The Rise Makati">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="unit-feature-type" class="col-sm-2 control-label">Type</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="unit-feature-type" id="unit-feature-type" >
                                    <option>For Sale</option>
                                    <option>For Lease</option>
                                    <option>Pre Selling</option>
                                    <option>Others</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="unit-feature-studio" class="col-sm-2 control-label">Studio</label>
                            <div class="col-sm-10">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="true" name="unit-feature-studio" id="unit-feature-studio" >
                                        Yes
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="unit-feature-bedrooms" class="col-sm-2 control-label">Bedrooms</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" name="unit-feature-bedrooms" id="unit-feature-bedrooms" placeholder="e.g. The Rise Makati">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="unit-feature-bathroom" class="col-sm-2 control-label">Bathroom</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" name="unit-feature-bathroom" id="unit-feature-bathroom" placeholder="e.g. The Rise Makati">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="unit-feature-price" class="col-sm-2 control-label">Price</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" name="unit-feature-price" id="unit-feature-price" placeholder="e.g. The Rise Makati">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="unit-feature-area" class="col-sm-2 control-label">Area</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" name="unit-feature-area" id="unit-feature-area" placeholder="e.g. The Rise Makati">
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="add-unit-images">
                        <!-- Standar Form -->
                        <h4>Select files from your computer</h4>
                        <div class="form-inline">
                            <div class="form-group">
                                <input type="file" name="unit-images[]" id="add-unit-images-input" class="with-preview" multiple required>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button id="add-unit-submit" type="button" class="btn btn-success">Add Unit</button>
            </div>
        </div>
    </div>
</div>


@endsection
