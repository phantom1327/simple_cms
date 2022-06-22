@extends('layouts.layout')
@section('title', 'Companies')

@Section('content')
        <div class="col-12 d-flex justify-content-end my-3">
                <a href="{{route('company.create')}}" class="btn btn-secondary">{{__('company.create_company')}}</a>
        </div>
        <table id="company_table" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Website</th>
                <th>Action</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Website</th>
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
            url: '{{route("company.list")}}',
            type: 'GET',
        },
        columns: [
            { data: 'name' },
            { data: 'email' },
            { data: 'website' },
            { data: 'actions' },
        ],
    });
});
</script>
@endSection