//Jumbotron paralax
var jumboHeight = $('.jumbotron').outerHeight();
//array of images

function parallax(){
    var scrolled = $(window).scrollTop();
    $('.bg').css('height', (jumboHeight-scrolled) + 'px');
}

$(window).scroll(function(e){
    parallax();
});

$(".carousel").carousel({});

function LoadAjaxContent(url){
	$('.preloader').show();
	$.ajax({
		mimeType: 'text/html; charset=utf-8', // ! Need set mimeType only when run from local file
		url: url,
		type: 'GET',
		success: function(data) {
			$('#ajax-content').html(data);
			$('.preloader').hide();
		},
		error: function (jqXHR, textStatus, errorThrown) {
			alert(errorThrown);
		},
		dataType: "html",
		async: false
	});
}

function LoadProduct(id){
    var urls= 'page/produk_detail.php?id='+id;
    window.location.hash = urls;
    LoadAjaxContent(urls);
}

function LoadProductList(listof,idlist){
    var urls= 'page/produk_list.php?listof='+listof+'&idlist='+idlist;
    window.location.hash = urls;
    LoadAjaxContent(urls);
}

function ModalJumlahBarang(id,id_item){
    $('#id_barang_mod').val(id_item);
    $('#jml_barang_mod').focus();
}

$(document).ready(function(){
    //back to top
    $('body').append('<div id="toTop" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-arrow-up"></span> Back to Top</div>');
        $(window).scroll(function () {
            if ($(this).scrollTop() != 0) {
                $('#toTop').fadeIn();
            } else {
                $('#toTop').fadeOut();
            }
        }); 
    $('#toTop').click(function(){
        $("html, body").animate({ scrollTop: 0 }, 600);
        return false;
    });
    
    //tooltip
    $(function () {
        $('[data-toggle="tooltip"]').tooltip();
    })
    
    //ajax content
    var ajax_url = location.hash.replace(/^#/, '');
    if (ajax_url.length < 1) {
        ajax_url = 'page/beranda.php';
    }
    LoadAjaxContent(ajax_url);
    
    $('.nav').on('click', 'a', function (e) {
    if ($(this).hasClass('ajax-link')) {
        e.preventDefault();
        if ($(this).hasClass('add-full')) {
            $('#content').addClass('full-content');
        }
        else {
            $('#content').removeClass('full-content');
        }
        var url = $(this).attr('href');
        window.location.hash = url;
        LoadAjaxContent(url);
    }
    });
    
    
});

//spinner
$(function() {
    var action;
    $(".number-spinner button").mousedown(function () {
        btn = $(this);
        input = btn.closest('.number-spinner').find('input');
        btn.closest('.number-spinner').find('button').prop("disabled", false);

    	if (btn.attr('data-dir') == 'up') {
            action = setInterval(function(){
                if ( input.attr('max') == undefined || parseInt(input.val()) < parseInt(input.attr('max')) ) {
                    input.val(parseInt(input.val())+1);
                }else{
                    btn.prop("disabled", true);
                    clearInterval(action);
                }
            }, 50);
    	} else {
            action = setInterval(function(){
                if ( input.attr('min') == undefined || parseInt(input.val()) > parseInt(input.attr('min')) ) {
                    input.val(parseInt(input.val())-1);
                }else{
                    btn.prop("disabled", true);
                    clearInterval(action);
                }
            }, 50);
    	}
    }).mouseup(function(){
        clearInterval(action);
    });
});