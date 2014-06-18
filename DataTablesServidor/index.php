<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 1 - Inicialización tabla mediante datatables</title>
        <style type="text/css" title="currentStyle">
            @import "datatables/media/css/demo_table.css";
            @import "datatables/media/css/demo_page.css";
        </style>
        <script type="text/javascript" language="javascript" src="datatables/media/js/jquery.js"></script>
        <script type="text/javascript" language="javascript" src="datatables/media/js/jquery.dataTables.js"></script>
        <script>
            $(document).ready(function() {
                $('#example').dataTable( {
                    "bProcessing": true,
                    "bServerSide": true,
                    "sAjaxSource": "php/clinicas.php"
                });
            });
        </script>
    </head>
    <body id="dt_example">
        <div id="container">
            <div id="demo">
                <table id="example" class="display">
                    <thead>
                        <tr>
                            <th>id_clinica</th>
                            <th>Nombre</th>
                            <th>Razon social</th>
                            <th>cif</th>
                            <th>localidad</th>
                            <th>provincia</th>
                            <th>direccion</th>
                            <th>cp</th>
                            <th>numclinica</th>
                            <th>id_tarifa</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                    <tfoot>
                        <tr>
                            <th>id_clinica</th>
                            <th>Nombre</th>
                            <th>Razon social</th>
                            <th>cif</th>
                            <th>localidad</th>
                            <th>provincia</th>
                            <th>direccion</th>
                            <th>cp</th>
                            <th>numclinica</th>
                            <th>id_tarifa</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </body>
</html>