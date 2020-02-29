/* Formatting function for row details - modify as you need */
function format ( d ) {
    return `<h2>${d.name}</h2>`+ getDetail(d.detail);
}
function getDetail(details) {
  let html = '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">'
  details.forEach((d, i) => {
    html += '<tr>'+
            '<td>Name:</td>'+
            '<td>'+d.name+'</td>'+
        '</tr>'+
        '<tr>'+
            '<td>Package id:</td>'+
            '<td>'+d.package_id+'</td>'+
        '</tr>'+
        '<tr>'+
          '<td>Price:</td>'+
          '<td>'+d.price+'</td>'+
        '</tr>'+
        '<tr>'+
          '<td>Qty:</td>'+
          '<td>'+d.qty+'</td>'+
        '</tr>'+
        '<tr>'+
          '<td>Weight:</td>'+
          '<td>'+d.weight+'</td>'+
        '</tr>'+
        '<tr>'+
          '<td>Created:</td>'+
          '<td>'+d.date_created+'</td>'+
        '</tr>'+
        '<tr>'+
          '<td>Updated:</td>'+
          '<td>'+d.date_updated+'</td>'+
        '</tr>'
  })
  html += '</table>'
  return html;
}

$(document).ready(function() {
    var table = $('#example').DataTable( {
        //"ajax": "../ajax.json",
        "ajax": "../api/v1/get-package",
        "columns": [
            {
                "className":      'details-control',
                "orderable":      false,
                "data":           null,
                "defaultContent": ''
            },
            { "data": "name" },
            { "data": "package_id" },
            { "data": "TrackingNumber" },
            { "data": "date_received" },
            { "data": "date_created" },
            { "data": "date_updated" },
        ],
        "order": [[1, 'asc']]
    } );
     
    // Add event listener for opening and closing details
    $('#example tbody').on('click', 'td.details-control', function () {
        var tr = $(this).closest('tr');
        var row = table.row( tr );
 
        if ( row.child.isShown() ) {
            // This row is already open - close it
            row.child.hide();
            tr.removeClass('shown');
        }
        else {
            // Open this row
            row.child( format(row.data()) ).show();
            tr.addClass('shown');
        }
    } );
} );
