<?php $table="slider"; ?>
<div id="wrapper">
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Tours</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                {{--<div class="panel-heading">--}}
                {{--DataTables Advanced Tables--}}
                {{--</div>--}}
                <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="dataTable_wrapper">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Text 1</th>
                                    <th>Text 2</th>
                                    <th>Text 3</th>
                                    <th>Text 4</th>
                                    <th>Edit</th>
                                </tr>
                                </thead>
                                <tbody>

                                {{--<tr class="gradeA">--}}
                                    {{--<form action="admin/add" method="post" lpformnum="2" enctype="multipart/form-data">--}}
                                        {{--<input type="hidden" class="form-control" name="table" id="table" value="Mostpopulartours">--}}
                                        {{--<td><input type="text" class="form-control" name="name" id="name"></td>--}}
                                        {{--<td><input type="text" class="form-control" name="price" id="price"></td>--}}
                                        {{--<td>{{Form::select('category', $cat, 0)}}</td>--}}
                                        {{--<td><label for="file">Max Size 2MB</label><input type="file" class="form-control"  name="file" id="file" accept="image/jpeg"></td>--}}
                                        {{--<td><input value="Add" type="submit" class="btn btn-success btn-lg"></td>--}}
                                    {{--</form>--}}
                                {{--</tr>--}}
                                @foreach($data as $value)
                                    <tr class="gradeA">
                                        <td>{{$value->name}}</td>
                                        <td>{{$value->text1}}</td>
                                        <td>{{$value->text2}}</td>
                                        <td>{{$value->text3}}</td>
                                        <td>{{$value->text4}}</td>
                                        <td>
                                            <button type="button" class="btn btn-primary btn-lg" data-id="{{$value->id}}" data-table="{{$table}}" data-toggle="modal" data-target="#myModal">Edit</button>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.table-responsive -->
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
    </div>
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document"><div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="exampleModalLabel">New message</h4>
                </div><div class="modal-body">
                    {{ Form::open(array('url' => 'admin/update','method'=>'post','enctype'=>'multipart/form-data')) }}
                    {{Form::hidden('id', null,['id'=>'id','class'=>'form-control'])}}
                    {{Form::hidden('table', $table,['class'=>'form-control'])}}
                    <div class="form-group">
                        {{Form::Label('name', 'Name:',['class'=>'form-control-label'])}}
                        {{Form::text('name', null,['id'=>'name','class'=>'form-control'])}}
                    </div>
                    <div class="form-group">
                        {{Form::Label('text1', 'Text 1:',['class'=>'form-control-label'])}}
                        {{Form::text('text1', null,['id'=>'text1','class'=>'form-control'])}}
                    </div>
                   <div class="form-group">
                        {{Form::Label('text2', 'Text 2:',['class'=>'form-control-label'])}}
                        {{Form::text('text2', null,['id'=>'text2','class'=>'form-control'])}}
                    </div>
                   <div class="form-group">
                        {{Form::Label('text3', 'Text 3:',['class'=>'form-control-label'])}}
                        {{Form::text('text3', null,['id'=>'text3','class'=>'form-control'])}}
                    </div>
                   <div class="form-group">
                        {{Form::Label('text4', 'Text 4:',['class'=>'form-control-label'])}}
                        {{Form::text('text4', null,['id'=>'text4','class'=>'form-control'])}}
                    </div>

                    {{Form::submit('Update!',['class'=>'btn btn-primary'])}}
                    {{ Form::close() }}

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- /#page-wrapper -->

</div>
<script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });

        $('.gradeA button').click(function(){
            $.ajax({
                url: 'admin/info',
                type: 'POST',
                dataType: 'json',
                data: {id: $(this).data('id'),table:$(this).data('table')}
            })
                    .done(function(msg) {
                        console.log(msg);

                        var a = $('#myModal');
                        a.find('#id').val(msg.id);
                        a.find('#name').val(msg.name);
                        a.find('#text1').val(msg.text1);
                        a.find('#text2').val(msg.text2);
                        a.find('#text3').val(msg.text3);
                        a.find('#text4').val(msg.text4);


                    })
                    .fail(function() {
                        console.log("error");
                    })
                    .always(function() {
                        console.log("complete");
                    });
        });
        $("#popup").modal();

        function Delete() {

        }
    });

</script>
@include('admin.footer')