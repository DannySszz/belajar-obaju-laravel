@extends('layouts.layoutadmin')

@section('title')
    Update Product
@endsection

@section('content')
    <script type="text/javascript">
        /*
        Please consider that the JS part isn't production ready at all, I just code it to show the concept of merging filters and titles together !
        */
        $(document).ready(function(){
            $('.filterable .btn-filter').click(function(){
                var $panel = $(this).parents('.filterable'),
                $filters = $panel.find('.filters input'),
                $tbody = $panel.find('.table tbody');
                if ($filters.prop('disabled') == true) {
                    $filters.prop('disabled', false);
                    $filters.first().focus();
                } else {
                    $filters.val('').prop('disabled', true);
                    $tbody.find('.no-result').remove();
                    $tbody.find('tr').show();
                }
            });

            $('.filterable .filters input').keyup(function(e){
                /* Ignore tab key */
                var code = e.keyCode || e.which;
                if (code == '9') return;
                /* Useful DOM data and selectors */
                var $input = $(this),
                inputContent = $input.val().toLowerCase(),
                $panel = $input.parents('.filterable'),
                column = $panel.find('.filters th').index($input.parents('th')),
                $table = $panel.find('.table'),
                $rows = $table.find('tbody tr');
                /* Dirtiest filter function ever ;) */
                var $filteredRows = $rows.filter(function(){
                    var value = $(this).find('td').eq(column).text().toLowerCase();
                    return value.indexOf(inputContent) === -1;
                });
                /* Clean previous no-result if exist */
                $table.find('tbody .no-result').remove();
                /* Show all rows, hide filtered ones (never do that outside of a demo ! xD) */
                $rows.show();
                $filteredRows.hide();
                /* Prepend no-result row if all rows are filtered */
                if ($filteredRows.length === $rows.length) {
                    $table.find('tbody').prepend($('<tr class="no-result text-center"><td colspan="'+ $table.find('.filters th').length +'">No result found</td></tr>'));
                }
            });
        });
    </script>

    <div class="container">
        {{-- <h3>The columns titles are merged with the filters inputs thanks to the placeholders attributes</h3> --}}
        <hr>
        <p>Inspired by this <a href="http://bootsnipp.com/snippets/featured/panel-tables-with-filter">snippet</a></p>
        @if($result!='') <h2>{{$result}}</h2> @endif 
        <div class="row">
            <div class="panel panel-primary filterable">
                <div class="panel-heading">
                    <h3 class="panel-title">Users</h3>
                    <div class="pull-right">
                        <button class="btn btn-default btn-xs btn-filter"><span class="glyphicon glyphicon-filter"></span> Filter</button>
                    </div>
                </div>
                <table class="table">
                    <thead>
                        <tr class="filters">
                            <th><input type="text" class="form-control" placeholder="id" disabled></th>
                            <th><input type="text" class="form-control" placeholder="judul" disabled></th>
                            <th><input type="text" class="form-control" placeholder="model" disabled></th>
                            <th><input type="text" class="form-control" placeholder="kategori" disabled></th>
                            <th><input type="text" class="form-control" placeholder="harga" disabled></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($allproduk as $data)
                        <tr>
                            <td>{{$data->id}}</td>
                            <td>{{$data->judul}}</td>
                            <td>{{$data->model}}</td>
                            <td>{{$data->kategori}}</td>
                            <td>{{$data->harga}}</td>
                            <td><button type="button" onclick="window.location='{{ url("viewupdateproduct/".$data->id) }}'">update</button></td>
                            <td><button type="button" onclick="window.location='{{ url("viewdeleteproduct/".$data->id) }}'">delete</button></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection