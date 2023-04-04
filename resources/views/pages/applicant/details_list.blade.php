@extends('layouts.master')
@section('content')
    <div class="content-page" style="justify-content: center;">
        <div class="content">
            <div class="container-fluid">

                <body>
                    <h3 style="color: green">Name :{{ $applicant->user_id ? $user->name : '' }}</h3>
                       <table border="1" style="width:100%" class="table align-middle mb-0 bg-red">
                        <tr>
                            <th>Present Address:</th>
                            <td> {{ $applicant->present_address }}</td>
                        </tr>

                        <tr>
                            <th>permanent_address:</th>
                            <td>{{ $applicant->permanent_address }}</td>
                        </tr>
                        <tr>
                            <th>Phone:</th>
                            <td>{{ $applicant->phone }}</td>
                        </tr>
                        <tr>
                            <th>Dob :</th>
                            <td>{{ $applicant->dob }}</td>
                        </tr>
                        <tr>
                            <th>Expected Salary:</th>
                            <td>{{ $applicant->expected_salary }}</td>
                        </tr>
                        <tr>
                            <th>Present Salary:</th>
                            <td>{{ $applicant->present_salary }}</td>
                        </tr>
                        <tr>
                            <th> Gender :</th>
                            <td>{{ $applicant->gender }}</td>
                        </tr>
                        <tr>
                            <th> Job Experience :</th>
                            <td>{{ $applicant->job_experience }}</td>
                        </tr>
                    </table>
                    <h3 style="color: rgb(95, 160, 95)">Educations</h3>

                    <table border="1" width="100%" class="table align-middle mb-0 bg-green">
                        <thead style="font-weight: bold;">
                            <tr>
                                <td>Exam</td>
                                <td>Result</td>
                                <td>Instituations </td>
                                <td>Passing year </td>
                            </tr>
                        </thead>

                        <tfoot>
                            <tr>
                                <td colspan="4">All of my educations</td>
                            </tr>
                        </tfoot>

                        <tbody>
                            @foreach ($education as $item)
                                <tr>
                                    <td>{{ $item->exam }}</td>
                                    <td>{{ $item->result }}</td>
                                    <td>{{ $item->instituations }}</td>
                                    <td>{{ $item->passing_year }}</td>

                                </tr>
                            @endforeach
                        </tbody>

                    </table>

                    <h3 style="color: rgb(95, 160, 95)">Experiences</h3>

                    <table border="1" width="100%" class="table align-middle mb-0 bg-green">
                        <thead style="font-weight: bold;">
                            <tr>
                                <td>Designation</td>
                                <td>Start Date</td>
                                <td>End Date </td>
                                <td>Company </td>
                            </tr>
                        </thead>

                        <tfoot>
                            <tr>
                                <td colspan="4">All of my experience</td>
                            </tr>
                        </tfoot>

                        <tbody>
                            @foreach ($experience as $item)
                            <tr>
                                <td>{{ $item->title }}</td>
                                <td>{{ $item->start_date }}</td>
                                <td>{{ $item->end_date }}</td>
                                <td>{{ $item->company }}</td>

                            </tr>
                        @endforeach
                        </tbody>

                    </table>
                </body>
            @endsection
