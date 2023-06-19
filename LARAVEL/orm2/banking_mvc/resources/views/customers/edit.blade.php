@extends('layout.layout')

@section('frmCreate')
<h3>Create Customer</h3>
<form id="frmEditCustomer" method="post" action="{{ route('customers.update', $id) }}">
    @csrf
    <div class="row mb-3">
        <div class="form-group col-6" >
            <label>Full name</label>
            <input class="form-control" value="{{$customer->full_name}}" type="text" id="fullNameEdit" name="txtFullNameEdit" placeholder="Enter fullname">
        </div>
        <div class="form-group col-6" >
            <label>Email address</label>
            <input class="form-control" value="{{$customer->email}}" type="text" id="emailEdit" name="txtEmailEdit" placeholder="Enter email">
        </div>
    </div>
    <div class="row mb-3">
        <div class="form-group col-6" >
            <label>Phone</label>
            <input class="form-control" value="{{$customer->phone}}" type="text" id="phoneEdit" name="txtPhoneEdit" placeholder="Enter phone">
        </div>
        <div class="form-group col-6" >
            <label>Address</label>
            <input class="form-control" value="{{$customer->address}}" type="text" id="addressEdit" name="txtAddressEdit" placeholder="Enter address">
        </div>
    </div>
    <button class="btn btn-success">Update</button>
</form>
@endsection
@section('content')
<div class="content">
    <table id="tbCustomer" class="table table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>Full name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Balance</th>
                <th colspan="5">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($customers as $c)
            <tr>
                <td>{{$c->id}}</td>
                <td>{{$c->full_name}}</td>
                <td>{{$c->email}}</td>
                <td>{{$c->phone}}</td>
                <td>{{$c->address}}</td>
                <td>{{$c->balance}}</td>
                <td>
                    <a href="{{ route('customers.edit', $c->id)}}">
                        <button class="btn btn-outline-secondary btnEdit">Edit</button>
                    </a>
                </td>
                <td>
                    <button class="btn btn-outline-success">
                        Deposit
                    </button>
                </td>
                <td>
                    <button class="btn btn-outline-warning">
                        Withdraw
                    </button>
                </td>
            </tr>
            @endforeach
            <!-- <tr>
                <td>1</td>
                <td>NVA</td>
                <td>nva@co.cc</td>
                <td>2345</td>
                <td>28 Nguyễn Tri Phương</td>
                <td>0</td>
                <td>
                    <button class="btn btn-outline-secondary">
                        Edit
                    </button>
                </td>
                <td>
                    <button class="btn btn-outline-success">
                        Deposit
                    </button>
                </td>
                <td>
                    <button class="btn btn-outline-warning">
                        Withdraw
                    </button>
                </td>
            </tr> -->
        </tbody>
    </table>
</div>
@endsection



