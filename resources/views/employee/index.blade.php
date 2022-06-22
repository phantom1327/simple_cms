@extends('layouts.layout')
@section('title', 'Companies')

@Section('content')
        <div class="col-12 d-flex justify-content-end my-3">
                <a href="{{route('employee.create')}}" class="btn btn-secondary">{{__('company.create_employee')}}</a>
        </div>
        <table id="company_table" class="display" style="width:100%">
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Company</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Action</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Company</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Action</th>
            </tr>
        </tfoot>
    </table>
@endSection

@Section('pageScripts')
<script>
$(document).ready(function () {
    $('#company_table').DataTable({
        processing: true,
        serverSide: true,
        ajax: {
            url: '{{route("employee.list")}}',
            type: 'GET',
        },
        columns: [
            { data: 'first_name' },
            { data: 'last_name' },
            { data: 'company.name' },
            { data: 'email' },
            { data: 'phone' },
            { data: 'actions' }
        ],
    });
});
</script>
@endSection