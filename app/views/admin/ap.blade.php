<?php $table="Populardestinations";
$cat = ['Popular Destinations', 'Popular Destinations for Honeymoon'];?>
<div id="wrapper">
    <div id="page-wrapper">

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Destinations</h1>
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
                                    <th>Place</th>
                                    <th>Price</th>
                                    <th>Category</th>
                                    <th>Image</th>
                                    <th>Edit</th>
                                </tr>
                                </thead>
                                <tbody>

                                <tr class="gradeA">
                                    <form action="admin/add" method="post" lpformnum="2" enctype="multipart/form-data">
                                        <input type="hidden" class="form-control" name="table" id="table" value="{{$table}}">
                                    <td><input type="text" class="form-control" name="name" id="name"></td>
                                    <td><input type="text" class="form-control" name="place" id="place"></td>
                                    <td><input type="text" class="form-control" name="price" id="price"></td>
                                        <td>{{Form::select('category', $cat, 0)}}</td>
                                    <td><label for="file">Max Size 2MB</label><input type="file" class="form-control"  name="file" id="file" accept="image/jpeg"></td>
                                    <td><input value="Add" type="submit" class="btn btn-success btn-lg"></td>
                                  </form>
                                </tr>
                                @foreach($data as $value)
                                <tr class="gradeA">
                                    <td>{{$value->name}}</td>
                                    <td>{{$value->place}}</td>
                                    <td>{{$value->price}}</td>
                                    <td>{{$cat[$value->category]}}</td>
                                    <td>{{ HTML::image($value->imgurl,$value->place) }}</td>
                                    <td>
                                        <button type="button" class="btn btn-primary btn-lg" data-id="{{$value->id}}" data-table="PopularDestinations" data-toggle="modal" data-target="#myModal">Edit</button>
                                        <form action="admin/delete" method="post">
                                            <input type="hidden" name="id" value="{{$value->id}}">
                                            <input type="hidden" name="table" value="{{$table}}">
                                            <button type="submit" class="btn btn-danger btn-lg" data-table="{{$table}}">Delete</button>
                                        </form>
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
                        {{Form::Label('place', 'Place:',['class'=>'form-control-label'])}}
                        {{Form::text('place', null,['id'=>'place','class'=>'form-control'])}}
                    </div>
                    <div class="form-group">
                        {{Form::Label('price', 'Price:',['class'=>'form-control-label'])}}
                        {{Form::text('price', null,['id'=>'price','class'=>'form-control'])}}
                    </div>
                     <div class="form-group">
                        {{Form::Label('description', 'Description:',['class'=>'form-control-label'])}}
                        {{Form::textarea('description', null,['id'=>'description','class'=>'form-control'])}}
                    </div>
                    <div class="form-group">
                        {{Form::Label('category', 'Category:',['class'=>'form-control-label'])}}
                        {{Form::select('category', $cat, 0)}}
                    </div>
                    <div class="form-group">
                        {{Form::Label('imgurl', 'Image:',['class'=>'form-control-label'])}}
                        {{Form::text('imgurl', null,['id'=>'imgurl','class'=>'form-control'])}}
                    </div>
                    {{Form::file('file',['id'=>'file','class'=>'form-control','accept'=>'image/jpeg'])}}
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
                type: 'GET',
                dataType: 'json',
                data: {id: $(this).data('id'),table:$(this).data('table')}
            })
                    .done(function(msg) {

                        var a = $('#myModal');
                        a.find('#id').val(msg.id);
                        a.find('.mce-panel').remove();
                        a.find('#name').val(msg.name);
                        a.find('#place').val(msg.place);
                        a.find('#price').val(msg.price);
                        a.find('#description').html(msg.description).show();
                        a.find('#imgurl').val(msg.imgurl);
                        console.log(msg);
    tinymce.init({
        selector: "textarea",
        statusbar: false,
        setup: function (editor) {
            editor.on('change', function () {
                tinymce.triggerSave();
            });
        }
    });


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