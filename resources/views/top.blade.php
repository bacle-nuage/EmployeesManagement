@extends('layouts.admin_master')

@section('title', 'トップページ')

@section('sidebar')
@endsection

@section('content')
    <h1>トップページ<h1>
<input class="btn btn-success btn-block" type="button" onclick="location.href='{{route('admin.get.home')}}'" value="管理">
<input class="btn btn-info btn-block" type="button" onclick="location.href='{{route('report.home.get')}}'" value="日報">
@endsection