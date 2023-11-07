<?php include('header.php'); ?>

    <div class="page-title">
        <div class="title_left">
            <h3>
                <small><a href="admin_home.php">Home</a> / <a href="employee.php">Employees</a> /</small> Add
            </h3>
        </div>
    </div>
    <div class="clearfix"></div>

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2><i class="fa fa-upload"></i> Import From CSV Files</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li>
                        </li>
                    </ul>
                    <div class="clearfix"></div>

                </div>
                <div class="x_content">
                    <a href="import_employees_fmt.csv" download="">Click here to download the CSV Format</a>
                    <!-- content starts here -->
                    <form class="form-horizontal well" action="import_employees_query.php" method="post"
                          name="upload_excel" enctype="multipart/form-data">
                        <fieldset>
                            <div class="control-group">

                                <label>CSV File:</label>

                                <div class="controls">
                                    <input type="file" multiple name="filename" id="filename" class="input-large">
                                </div>
                            </div>
                            <br/>
                            <div class="control-group">
                                <div class="controls">
                                    <button type="submit" id="submit" name="submit"
                                            class="btn btn-success button-loading" data-loading-text="Loading..."><i
                                                class="fa fa-upload"></i> Upload
                                    </button>
                                    <a href="employee.php">
                                        <button type="button" class="btn btn-danger button-loading"><i
                                                    class="fa fa-reply"></i> Back
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </fieldset>
                    </form>

                    <!-- content ends here -->
                </div>
            </div>
        </div>
    </div>

<?php include('footer.php'); ?>