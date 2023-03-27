@extends('pages.master')
@section('content')
    <div class="content-page" style="justify-content: center;">
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card-box">
                            <h4 class="header-title">Applicant Profile</h4>


                            <div class="alert alert-warning d-none fade show">
                                <h4 class="text-warning mt-0">Oh snap!</h4>
                                <p class="mb-0">This form seems to be invalid :(</p>
                            </div>

                            <div class="alert alert-info d-none fade show">
                                <h4 class="text-info mt-0">Yay!</h4>
                                <p class="mb-0">Everything seems to be ok :)</p>
                            </div>

                            <form method="post" action="{{ route('applicant.store') }}" enctype='multipart/form-data'>
                                @csrf
                                <div class="col-6 form-group">
                                    <label for="fullname">Present Address * :</label>
                                    <input type="text" class="form-control" name="present_address" id="fullname">
                                </div>
                                <div class="col-6 form-group">
                                    <label for="fullname">Phone * :</label>
                                    <input type="number" class="form-control" name="phone" id="">
                                </div>

                                <div class="col-6 form-group">
                                    <label for="email">Parmanent Address * :</label>
                                    <input type="text"  class="form-control" name="permanent_address"
                                        data-parsley-trigger="change">
                                </div>
                                <div class="col-6 form-group">
                                    <label for="dob">DOB * :</label>
                                    <input type="date"  class="form-control" name="dob"
                                        data-parsley-trigger="change">
                                </div>
                                <div class="col-6 form-group">
                                    <label for="expected_salary">Expected Salary * :</label>
                                    <input type="text"  class="form-control" name="expected_salary"
                                        data-parsley-trigger="change">
                                </div>
                                <div class="col-6 form-group">
                                    <label for="present_salary">Present Salary * :</label>
                                    <input type="text"  class="form-control" name="present_salary"
                                        data-parsley-trigger="change">
                                </div>

                                <div class="col-6 form-group">
                                    <label for="heard">Gender *:</label>
                                    <select id="heard" class="form-control" name="gender">
                                        <option value="">Choose..</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>

                                    </select>
                                </div>
                                <div class="col-6 form-group">
                                    <label for="email">Age * :</label>
                                    <input type="text"  class="form-control" name="age"
                                        data-parsley-trigger="change">
                                </div>
                                <div class="col-6 form-group">
                                    <label for="email">Job Experience * :</label>
                                    <input type="text"  class="form-control" name="job_experience"
                                        data-parsley-trigger="change">
                                </div>
                                <div class="col-6 form-group">
                                    <label for="email">Resume * :</label>
                                    <input type="file"  class="form-control" name="resume"
                                        data-parsley-trigger="change">
                                </div>
                                <div class="col-6 form-group">
                                    <label for="email">Skill * :</label>
                                    <input type="skill"  class="form-control" name="skill"
                                        data-parsley-trigger="change">
                                </div>
                                <div class="responsive" style="responsive:auto">

                                    <div class="card-box">
                                        <div id="container">
                                            <h2>Accademic Qualifications</h2>
                                            <a class="btn btn-success" id="add-new-btn">Add New Row
                                            </a>
                                            <a class="btn btn-danger" id="delete-btn">Delete Row
                                            </a>
                                            <br>
                                            <br>
                                            <table id="employee-table" class="table table-bordered "
                                                style="overflow-x:auto;">
                                                <tr>
                                                    <th>Exam</th>
                                                    <th>Board </th>
                                                    <th>Result </th>
                                                    <th>Instituation</th>
                                                    <th>Action </th>
                                                </tr>
                                            </table>
                                        </div>
                                    </div> <!-- end card-box -->
                                </div> <!-- end col -->

                              <div class="d-none d-sm-block">
                                
                                <div class="card-box">
                                    <div id="container">
                                        <h2>Experience</h2>
                                        <a class="btn btn-success" id="add-experience">Add New Row
                                        </a>
                                        <a class="btn btn-danger" id="delete-experience">Delete Row
                                        </a>
                                        <br>
                                        <br>
                                        <table id="experience-table" class="table table-bordered "
                                            style="overflow-x:auto;">
                                            <tr>
                                                <th>Title</th>
                                                <th>Start Date </th>
                                                <th>End Date </th>
                                                <th>Company</th>
                                                <th>Action </th>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                    
                                <!-- end card-box -->
                                </div> <!-- end col -->


                                <div class="form-group mb-0">
                                    <input type="submit" class="btn btn-success" value="Apply">
                                </div>

                            </form>

                        </div> <!-- end card-box-->
                    </div> <!-- end col-->
                </div>
            </div> <!-- container -->
        </div> <!-- content -->
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript">
        /* This event will fire on 'Add New Row' button click */
        $("#add-new-btn").on("click", function() {
           // alert("this is call");
            //calling method to add new row
           addNewRow();
        });
        /* This event will fire on 'Delete Row' button click */
        $("#delete-btn").on("click", function() {
            //calling method to delete the last row
            deleteRow();
        });
        /* This method will add a new row */
        function addNewRow() {
            var rowHtml = '<tr><td><input type="text"name="exam[]" /></td>' +
                '<td><input type="text" name="instituations[]" /></td>' +
                '<td><input type="text" name="result[]" /></td>' +
                '<td><input type="text"name="board[]" /></td>'

                +
                '<td><input type="button" class="btn btn-danger" value="delete" onclick="deleteRow(this)" /></td></tr>';
            $("#employee-table").append(rowHtml);
        }
        /* This method will delete a row */
        function deleteRow(ele) {
            var table = $('#employee-table')[0];
            var rowCount = table.rows.length;
            if (rowCount <= 1) {
                alert("There is no row available to delete!");
                return;
            }
            if (ele) {
                //delete specific row
                $(ele).parent().parent().remove();
            } else {
                //delete last row
                table.deleteRow(rowCount - 1);
            }
        }


       
    </script>
    <script>

$("#add-experience").on("click", function() {
            //calling method to add new row
            addNewRowexp();
        });
        /* This event will fire on 'Delete Row' button click */
        $("#delete-experience").on("click", function() {
            //calling method to delete the last row
            deleteRowexp();
        });
        /* This method will add a new row */
        function addNewRowexp() {
            var rowHtml = '<tr><td><input type="text" name="title[]" /></td>' +
                '<td><input type="date" name="start_date[]" /></td>' +
                '<td><input type="date"name="end_date[]" /></td>' +
                '<td><input type="text"name="company[]" /></td>'

                +
                '<td><input type="button" class="btn btn-danger" value="delete" onclick="deleteRowexp(this)" /></td></tr>';
            $("#experience-table").append(rowHtml);
        }
        /* This method will delete a row */
        function deleteRowexp(ele) {
            var table = $('#experience-table')[0];
            var rowCount = table.rows.length;
            if (rowCount <= 1) {
                alert("There is no row available to delete!");
                return;
            }
            if (ele) {
                //delete specific row
                $(ele).parent().parent().remove();
            } else {
                //delete last row
                table.deleteRowexp(rowCount - 1);
            }
        }
    </script>
@endsection
