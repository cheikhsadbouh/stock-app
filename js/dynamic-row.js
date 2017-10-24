
var i=1;
function add_new_item() {

    '+i+'

    var tr ='  <tr>\n' +
        '                                                       <td>\n' +
        '                                                           <div class="form-group">\n' +
        '                                                               <div class="col-xs-12">\n' +
        '                                                                   <input type="email" class="form-control" id="product-numbers'+i+'"  name="product-numbers'+i+'"  placeholder=" أدخل أعداد">\n' +
        '                                                               </div>\n' +
        '                                                           </div>\n' +
        '                                                       </td>\n' +
        '                                                       <td>\n' +
        '                                                           <div class="form-group">\n' +
        '                                                               <div class="col-xs-12">\n' +
        '                                                                   <input type="email" class="form-control" id="product-buying-price'+i+'" name="product-buying-price'+i+'" placeholder=" أدخل سعر البيع">\n' +
        '                                                               </div>\n' +
        '                                                           </div>\n' +
        '                                                       </td>\n' +
        '                                                       <td>\n' +
        '                                                           <div class="form-group">\n' +
        '                                                               <div class="col-xs-12">\n' +
        '                                                                   <input type="email" class="form-control" id="product-unite-price'+i+'" name="product-unite-price'+i+'" placeholder=" أدخل سعر الوحدة ">\n' +
        '                                                               </div>\n' +
        '                                                           </div>\n' +
        '                                                       </td>\n' +
        '                                                       <td>\n' +
        '                                                           <div class="form-group">\n' +
        '                                                               <div class="col-xs-12">\n' +
        '                                                                   <input type="email" class="form-control" id="product-name'+i+'"  name="product-name'+i+'" placeholder="أدخل إسم المنتج">\n' +
        '                                                               </div>\n' +
        '                                                           </div>\n' +
        '                                                       </td>\n' +
        '                                                       <td>\n' +
        '                                                           <div class="form-group">\n' +
        '                                                               <div class="col-xs-8">\n' +
        '                                                                   <button class="btn btn-danger   glyphicon glyphicon-remove " onclick="deleteRow($(this))" ></button>\n' +
        '\n' +
        '                                                               </div>\n' +
        '                                                           </div>\n' +
        '                                                       </td>\n' +
        '                                                   </tr> ';



    $('#mytable tr:last').after(tr);
    i++;
}



/* delete tr dynamic */
function deleteRow(row) {

    row.closest('tr').remove();
}