function add_new_item() {



    var tr ='<tr>' +
       '<td>\n' +
       '<div class="form-group">\n' +
       '    <div class="col-xs-12">\n' +
       '    <input type="email" class="form-control" id="email" placeholder="Enter email">\n' +
       '    </div>\n' +
       '    </div>\n' +
       '    </td>\n' +
       '    <td>\n' +
       '    <div class="form-group">\n' +
       '    <div class="col-xs-12">\n' +
       '    <input type="email" class="form-control" id="email" placeholder="Enter email">\n' +
       '    </div>\n' +
       '    </div>\n' +
       '    </td>\n' +
       '    <td>\n' +
       '    <div class="form-group">\n' +
       '    <div class="col-xs-12">\n' +
       '    <input type="email" class="form-control" id="email" placeholder="Enter email">\n' +
       '    </div>\n' +
       '    </div>\n' +
       '    </td>\n' +
       '    <td>\n' +
       '    <div class="form-group">\n' +
       '    <div class="col-xs-12">\n' +
       '    <input type="email" class="form-control" id="email" placeholder="Enter email">\n' +
       '    </div>\n' +
       '    </div>\n' +
       '    </td>\n' +
       '    <td>\n' +
       '    <div class="form-group">\n' +
       '    <div class="col-xs-8">\n' +
       '    <button class="btn btn-danger   glyphicon glyphicon-remove " onclick="deleteRow(this)" ></button>\n' +
       '\n' +
       '    </div>\n' +
       '    </div>\n' +
       '    </td></tr>';


    $('#mytable tr:last').after(tr);
}



/* delete tr dynamic */
function deleteRow(row) {

    row.closest('tr').remove();
}