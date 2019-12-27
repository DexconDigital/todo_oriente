$.ajax({
    url: 'js/noticesJSON.php',
    dataType: "json",
    success: function(data) {
        var result = "";
        var result_f = "";
        var j = 0;
        for (var indice in data) {
            result += '<div class="col-sm-4 blog">' +
                '<div class="row m0 inner">' +
                '<div class="row m0 imageRow">' +
                '<img src="todo-oriente-noticias/admin/' + data[j].imagen + '" alt=""  style="height: 250px;">' +
                '<div class="meta_row row m0">' +
                '<a href="#" class="date"><i class="fa fa-calendar"></i>' + data[j].fecha + '</a>' +
                '</div>' +
                '</div>' +
                '<div class="row m0 desc" style="height: 170px;">' +
                '<a href="single-post.php?codigo=' + data[j].id + '">' +
                '<h4 class="blogtitle">' + data[j].titulo + '</h4>' +
                '<p>' + data[j].descripcion + '</p>' +
                '</a>' +
                '<a href="single-post.php?codigo=' + data[j].id + '">Leer más</a>' +
                '</div>' +
                '</div>' +
                '</div>';
            j++;
            if (j > 3) {
                break;
            }
        }
        $("#ulti-noticias").append(result);


    },
    error: function(data) {
        console.log(data);
    }
});

$.ajax({
    url: 'js/noticesJSON.php',
    dataType: "json",
    success: function(data) {
        var result = "";
        for (var indice in data) {
            result += '<div class="col-sm-4 blog">' +
                '<div class="row m0 inner">' +
                '<div class="row m0 imageRow">' +
                '<img src="todo-oriente-noticias/admin/' + data[indice].imagen + '" alt=""  style="height: 250px;">' +
                '<div class="meta_row row m0">' +
                '<a href="#" class="date"><i class="fa fa-calendar"></i>' + data[indice].fecha + '</a>' +
                '</div>' +
                '</div>' +
                '<div class="row m0 desc" style="height: 170px;">' +
                '<a href="single-post.php?codigo=' + data[indice].id + '">' +
                '<h4 class="blogtitle">' + data[indice].titulo + '</h4>' +
                '<p>' + data[indice].descripcion + '</p>' +
                '</a>' +
                '<a href="single-post.php?codigo=' + data[indice].id + '">Leer más</a>' +
                '</div>' +
                '</div>' +
                '</div>';
        }
        $("#ulti-noticias1").append(result);

    },
    error: function(data) {
        console.log(data);
    }
});

$.ajax({
    url: 'js/noticesJSON.php',
    dataType: "json",
    success: function(data) {
        var result = "";
        var j = 0;
        for (var indice in data) {
            result += '<li><a href="single-post.php?codigo=' + data[indice].id + '">' + data[indice].descripcion + '</a></li>';
            j++;
            if (j > 3) {
                break;
            }
        }
        $("#ulti-noticias2").html(result);

    },
    error: function(data) {
        console.log(data);
    }
});


