@component('admin.layout.elements.body')
    @slot('title')   Produtos   @endslot
    @slot('Controller')<div ng-controller="ProductCtrl">@endslot
    @slot('edit')@include('admin.layout.elements.modals.editproduct')@endslot
    @slot('delete')@include('admin.layout.elements.modals.deleteproduct')@endslot
    @slot('description') Administração de produtos @endslot
    @slot('EndController')</div>@endslot


    <div style="margin-top: 10px; margin-bottom: 40px;">
        <iframe src="" name="testFile" id="iframetest" class="pull-right" style="display: none; margin-bottom: 10px;">
            
        </iframe>
        <a href=""><button class="btn btn-success"> Download Excel xlsx </button></a>
        <a href=""><button class="btn btn-success"> Download Excel xls</button></a>
        <a href=""><button class="btn btn-success"> Download csv </button></a>
        
        <form method="post" id="form-test" enctype="multipart/form-data" style="margin-top: 20px;" target="testFile" action="{{ route('import') }}">
            {{ csrf_field() }}
            <input type="file" name="fileImport" style="margin-right: 180px;margin-bottom: 10px;">
            <input type="submit" id="test" class="btn btn-primary" style="padding: 5px 15px;" value="Enviar">
        </form>

    </div>
    
    <table id="product-table"  cellspacing="0" width="100%">
        <thead>
        <tr>
            <th>Lm</th>
            <th>name</th>
            <th>Free_shipping</th>
            <th>Description</th>
            <th>Price</th>
            <th>Created</th>
            <th class="text-right" style="width: -100px !important;">ações</th>
        </tr>

        </thead>
        <tbody>
        @foreach($pages as $page)
        <tr>
            <td>{{ $page->lm ?? '' }}</td>
            <td>{{ $page->name ?? '' }}</td>
            <td>{{ $page->free_shipping ?? '' }}</td>
            <td>{{ $page->description ?? '' }}</td>
            <td>{{ $page->price ?? '' }}</td>
            <td>{{ $page->created ?? '' }}</td>
            <td class="">
                <a href="#" ng-click="editProduct( {{ $page->id  ?? '' }} )" class="btn btn-default btn-xs">
                    <span class="glyphicon glyphicon-pencil"></span>
                </a>
                <a ng-click="preparedeleteProduct( {{ $page->id ?? '' }} )" class="btn btn-danger">X</a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
@endcomponent
