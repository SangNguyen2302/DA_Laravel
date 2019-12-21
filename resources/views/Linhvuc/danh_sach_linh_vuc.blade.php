@extends('Home/home')
@section('css')
<!-- third party css -->
        <link href= "{{asset('assets/libs/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
        <link href= "{{asset('assets/libs/datatables/responsive.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
        <link href= "{{asset('assets/libs/datatables/buttons.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
        <link href= "{{asset('assets/libs/datatables/select.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
        <!-- third party css end -->
@endsection
@section('js')
<!-- third party js -->
        <script src= "{{asset('assets/libs/datatables/jquery.dataTables.min.js') }}"></script>
        <script src= "{{asset('assets/libs/datatables/dataTables.bootstrap4.js') }}"></script>
        <script src= "{{asset('assets/libs/datatables/dataTables.responsive.min.js') }}"></script>
        <script src= "{{asset('assets/libs/datatables/responsive.bootstrap4.min.js') }}"></script>
        <script src= "{{asset('assets/libs/datatables/dataTables.buttons.min.js') }}"></script>
        <script src= "{{asset('assets/libs/datatables/buttons.bootstrap4.min.js') }}"></script>
        <script src= "{{asset('assets/libs/datatables/buttons.html5.min.js') }}"></script>
        <script src= "{{asset('assets/libs/datatables/buttons.flash.min.js') }}"></script>
        <script src= "{{asset('assets/libs/datatables/buttons.print.min.js') }}"></script>
        <script src= "{{asset('assets/libs/datatables/dataTables.keyTable.min.js') }}"></script>
        <script src= "{{asset('assets/libs/datatables/dataTables.select.min.js') }}"></script>
        <script src= "{{asset('assets/libs/pdfmake/pdfmake.min.js') }}"></script>
        <script src= "{{asset('assets/libs/pdfmake/vfs_fonts.js') }}"></script>
        <!-- third party js ends -->

        <!-- Datatables init -->
        <script type="text/javascript">
            $(document).ready(function() {
            $("#linhvuc-datatable").DataTable({
                language: {
                    paginate: {
                        previous: "<i class='mdi mdi-chevron-left'>",
                        next: "<i class='mdi mdi-chevron-right'>"
                    }
                },
                drawCallback: function() {
                    $(".dataTables_paginate > .pagination").addClass("pagination-rounded")
                }
            });
        });
        </script>



@endsection
@section('maincontent')
<div class="row">
<div class="col-12">
    <div class="card">
        <div class="card-body">
            <h3  class="header-title" style="font-family: Tahoma">DANH SÁCH LĨNH VỰC</h3>
            <a href="{{route('linhvuc.them-moi')}}" type="button" class="btn btn-info waves-effect waves-light">Thêm mới lĩnh vực <i class="mdi mdi-pen-plus"></i></a>
            <a href="{{route('linhvuc.page-khoi-phuc')}}" type="button" class="btn btn-success waves-effect waves-light">Lĩnh vực đã xóa <i class="mdi mdi-delete-sweep mr-1"></i></a>
            <table id="linhvuc-datatable" class="table dt-responsive nowrap">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Lĩnh vực</th>
                        <th></th>

                    </tr>
                </thead>
            
            
                <tbody>
                    @foreach( $danhsachlinhvuc as $danhsachlinhvuc)
                    <tr>
                        <td>{{$danhsachlinhvuc->id}}</td>
                        <td>{{$danhsachlinhvuc->ten_linh_vuc}}</td>
                        <td><a href="{{route('linhvuc.cap-nhat',$danhsachlinhvuc->id)}}"><button type="submit"  class="btn btn-primary waves-effect waves-light"><i class="fas fa-pencil-alt"></i></button></a>
                        <a href="{{route('linhvuc.xoa',$danhsachlinhvuc->id)}}"><button type="button" class="btn btn-danger waves-effect waves-light"><i class=" fas fa-trash-alt"></i></button></a>
                        </td>
                    </tr>
                    @endforeach
				<tbody>
            </table>

        </div> <!-- end card body-->
    </div> <!-- end card -->
</div><!-- end col-->
</div>
                <!-- end row-->
@endsection
