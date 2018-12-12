clinicaApp.controller('ProductCtrl', ['$scope', '$http',  function($scope, $http) {
    $scope.Product;

    $scope.editProduct = function(id) {
        $http.get('/get-product/'+ id).
        success(function(data, status, headers, config) {
            $scope.Product = data;            
        });
        $('#ProductEdit').modal('show');
    };

    $scope.preparedeleteProduct = function(event){
        $('#ProductDelete').modal('show');
        $('#confirmclose').click(function () {
            $scope.deleteProduct(event);
        });
    };

    $scope.deleteProduct = function(id) {
        $http.post('/delete-product/'+id).
        success(function(data, status, headers, config) {
            window.location.reload();
        }).error(function(data, status, headers, config) {
            alert('tente novamente mais tarde')
        });
    };

    angular.element(document).ready(function () {
        var options = {
            "searching": true,
            "pagingType": "full_numbers",
            "pageLength": 10,
            "lengthChange": false,
            "language": {
                "sEmptyTable": "Nenhum registro encontrado",
                "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
                "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
                "sInfoFiltered": "(Filtrados de _MAX_ registros)",
                "sInfoPostFix": "",
                "sInfoThousands": ".",
                "sLengthMenu": "_MENU_ resultados por página",
                "sLoadingRecords": "Carregando...",
                "sProcessing": "Processando...",
                "sZeroRecords": "Nenhum registro encontrado",
                "sSearch": "Pesquisar",
                "oPaginate": {
                    "sNext": "Próximo",
                    "sPrevious": "Anterior",
                    "sFirst": "Primeiro",
                    "sLast": "Último"
                },
                "oAria": {
                    "sSortAscending": ": Ordenar colunas de forma ascendente",
                    "sSortDescending": ": Ordenar colunas de forma descendente"
                }
            },
            "ordering": true
        };

        // console.log($('#iframetest'));
        $('#form-test').submit(function (e){
            $('#iframetest').css('display', '');
            setTimeout(function(){ 
                location.reload() 
            }, 3000);
        });

        $('#editClient').submit(function (e){
            $('#iframetest').css('display', '');
            $('#ProductEdit').modal('hide');
            setTimeout(function(){ 
                location.reload() 
            }, 3000);
        });

	    $('#product-table').DataTable(options);
    });
}])