<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.20/datatables.min.css"/>
        <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.20/datatables.min.js"></script>

        <!-- Styles -->
        <style type="text/css">
            td.details-control {
                background: url('../resources/details_open.png') no-repeat center center;
                cursor: pointer;
            }
            tr.shown td.details-control {
                background: url('../resources/details_close.png') no-repeat center center;
            }
        </style>
    </head>
    <body>
        <table id="example" class="display" style="width:100%">
            <thead>
                <tr>
                    <th></th>
                    <th>Name</th>
                    <th>Package ID</th>
                    <th>TrackingNumber</th>
                    <th>Date Received</th>
                    <th>Date Created</th>
                    <th>Date Updated</th>
                </tr>
            </thead>
        </table>
    </body>
    <script type="text/javascript" src="js/table.js"></script>
</html>
