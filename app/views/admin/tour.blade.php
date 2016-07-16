
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
                                    <th>Price</th>
                                    <th>Image</th>
                                    <th>Edit</th>
                                </tr>
                                </thead>
                                <tbody>

                                <tr class="gradeA">
                                    <form action="admin/add" method="post" lpformnum="2" enctype="multipart/form-data">
                                        <input type="hidden" class="form-control" name="table" id="table" value="Mostpopulartours">
                                        <td><input type="text" class="form-control" name="name" id="name"></td>
                                        <td><input type="text" class="form-control" name="price" id="price"></td>
                                        <td><input type="file" class="form-control"  name="file" id="file" accept="image/jpeg"></td>
                                        <td><input value="Add" type="submit" class="btn btn-success btn-lg"></td>
                                    </form>
                                </tr>
                                @foreach($tours as $value)
                                    <tr class="gradeA">
                                        <td>{{$value->name}}</td>
                                        <td>{{$value->price}}</td>
                                        <td>{{ HTML::image($value->imgurl,$value->place) }}</td>
                                        <td>
                                            <button type="button" class="btn btn-primary btn-lg" data-id="{{$value->id}}" data-table="mostpopulartours" data-toggle="modal" data-target="#myModal">Edit</button>
                                            <form action="admin/delete" method="post">
                                                <input type="hidden" name="id" value="{{$value->id}}">
                                                <input type="hidden" name="table" value="Mostpopulartours">
                                                <button type="submit" class="btn btn-danger btn-lg" data-table="mostpopulartours">Delete</button>
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
                    <form action="admin/update" method="post" lpformnum="2" enctype="multipart/form-data">
                        <input type="hidden" class="form-control" name="id" id="id">
                        <input type="hidden" class="form-control" name="table" value="Mostpopulartours">
                        <div class="form-group">
                            <label for="recipient-name" class="form-control-label">Name:</label>
                            <input type="text" class="form-control" name="name" id="name"></div>
                        <div class="form-group">
                            <label for="recipient-name" class="form-control-label">Price:</label>
                            <input type="text" class="form-control" name="price" id="price"></div>
                        <div class="form-group">
                            <label for="recipient-name" class="form-control-label">Image:</label>
                            <input type="text" class="form-control"  name="imgurl" id="imgurl"></div>
                        <input type="file" class="form-control"  name="file" id="file" accept="image/jpeg">
                        <button type="submit" class="btn btn-primary" style="">Send message</button>
                    </form>
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
                        var a = $('#myModal');
                        a.find('#id').val(msg.id);
                        a.find('#name').val(msg.name);
                        a.find('#price').val(msg.price);
                        a.find('#imgurl').val(msg.imgurl);
                        console.log(msg);

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