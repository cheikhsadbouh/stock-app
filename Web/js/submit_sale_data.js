$('#sale_btn').on( 'click', function () {
var incr=1;
    saleTB.rows().every(function (rowIdx, tableLoop, rowLoop) {
        var data = this.data();
        console.log("incr  : "+incr);
        console.log("name_p  : "+data[0]);
        console.log("price_p : "+data[1]);
        console.log("bying_p   : "+data[2]);
        console.log("selected item:   "+$('#select'+incr+' option:selected').val());
        console.log("prodect_number"+$('#select'+incr).find('option').last().text());
        console.log( "new price  : "+$('#'+(incr+200)).val());
incr++;
        console.log("-------------END----------------");
/*

*
* radicale
* nombre reel
* calcul literale
* valeur absole
*
*
* reflextion & refraction
* entile converjante diverjante
*
* */






    });

incr=1;
} );