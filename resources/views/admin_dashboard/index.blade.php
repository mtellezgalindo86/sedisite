@extends("admin_dashboard.layouts.app")
@section("style")
    <link href="{{asset('../admin_dashboard/plugins/vectormap/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet"/>
@endsection

@section("wrapper")
   
@endsection

@section("script")
    <script src="{{asset('admin_dashboard/plugins/vectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
    <script src="{{asset('admin_dashboard/plugins/vectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
    <script src="{{asset('admin_dashboard/plugins/chartjs/js/Chart.min.js')}}"></script>
    <script src="{{asset('admin_dashboard/plugins/chartjs/js/Chart.extension.js')}}"></script>
    <script src="{{asset('admin_dashboard/plugins/jquery.easy-pie-chart/jquery.easypiechart.min.js')}}"></script>
    <script src="{{asset('admin_dashboard/js/index.js')}}"></script>
@endsection
