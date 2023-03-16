<html>
<head>
<style>
            body{
              font-family: poppins, arial;
            }
            .header{
                width: fit-content;
                margin: 40px auto;
                width:960px;

            }
            .wraper{
                width: fit-content;
                margin: 40px auto;
                border-top:1px solid #EEE;
                width:960px;

            }
            h1{
                font-size: 32px;
                color: #000;
            }            
            p{
                font-family: poppins, arial;
                font-size: 16px;
                font-weight:regular;
                color: #000;
            }
            a{
              text-decoration:none;
            }
            .set{
                display: block;
                width: 100%;
                padding-bottom: 8px;
                
            }
            .item{
              min-width:80px;
              display:inline-block;
              text-align:center;
              padding:8px;
              margin:16px 8px;
              cursor:pointer;
              transition: all 0.3s ease; 
            }
            .item span{
              display:block;
              opacity:0;
              text-align:center;
              color:#333;
              margin:4px auto;
              font-size:10px;
              max-width:80px;
              overflow: hidden;
              white-space:nowrap;
              text-overflow: ellipsis;
              height:12px;
            }
            .item:hover{
              background:#FFF;
              box-shadow: 0px 8px 24px rgba(20, 30, 43, 0.08);
              border-radius: 8px;
            }                
            .item:hover span{
              opacity:1;
              transition: all 0.3s ease; 
            }            
            .icon{
                display: inline-block;
                background: transparent;
            }
            .tumbnails div{
              margin:8px !important;
            }
            .tumbnails object{
              margin:0 auto !important;
            }
            .size8 img, .size8 object, .size8 svg{
                width: 8px !important;
                height: 8px !important;
            }
            .size16 img, .size16 object, .size16 svg{
                width: 16px !important;
                height: 16px !important;
            }
            .size24 img, .size24 object, .size24 svg{
                width: 24px !important;
                height: 24px !important;
            }
            .size32 img, .size32 object, .size32 svg{
                width: 32px !important;
                height: 32px !important;
            }
            .size40 img, .size40 object, .size40 svg{
                width: 40px !important;
                height:40px !important;
            }
            .size48 img, .size48 object, .size48 svg{
                width: 48px !important;
                height: 48px !important;
            }
            .size64 img, .size64 object, .size64 svg{
                width: 64px !important;
                height: 64px !important;
            }
            .size80 img, .size80 object, .size80 svg{
                width: 80px !important;
                height: 80px !important;
            }
            .size112 img, .size112 object, .size112 svg{
                width: 112px !important;
                height:112px !important;
            }
            .size144 img, .size144 object, .size144 svg{
                width: 144px !important;
                height: 144px !important;
            }


        ul#filterOptions {
          list-style:none;
          display:block;
          padding:0;
          margin:0;
        }
        ul#filterOptions li {
            margin-right: 2px;
            display:inline-block;
        }
        ul#filterOptions li a {
            padding: 0 20px;
            border: 2px solid transparent;
            color: #999;
            font-weight: normal;
            line-height: 50px;
            text-decoration: none;
            display: block;
        }
        ul#filterOptions li a:hover {
              background:#FFF;
              box-shadow: 0px 8px 24px rgba(20, 30, 43, 0.08);
              border-radius: 8px;
              border:2px solid #1F7AC4;
              color:#666;

        }
        ul#filterOptions li.active a {
              background:#FFF;
              box-shadow: 0px 8px 24px rgba(20, 30, 43, 0.08);
              border-radius: 8px;
              font-weight: bold;
              color:#111;
        }
        /*- -*/

        .wraper.product_icon, .wraper.illustration_icon{display:none}
        .modal {
          width:960px !important;
          max-width:960px !important;
        }
        .modalcontent{
          display:flex;
        }       
        .detailedview{
          /* display:grid; */
        }
        .imageset{
          display: inline-block;
          width: fit-content;
          text-align: center;
          min-width:300px;
          padding: 24px 32px;
        }
        .textset{
          display: inline-block;
          width: 420px;
          padding-top:16px;
          padding-bottom:16px;
          padding-left: 40px;
          border-left: 1px solid #eee;
        }
        .detailedview .tumbnails{
          display:flex;
          text-align:center;
          align-items: center;
          justify-content: center;
          padding-bottom:16px;
          /* border-bottom:1px solid #efefef; */
        }
        .detailedview .tumbnails div{
          display:grid;
          text-align:center;
        }
        .detailedview img.sizes{
          display:inline-block;
          margin:8px;
        }
        .detailedview .tumbnails span{
          font-size:12px;
          color:#666;
        }
        .detailedview img.preview{
          width:200px;
          height:200px;
          margin:20px auto;
          background-image:url("./assets/grid.png");
          background-repeat: no-repeat;
          background-position: center center;
          background-size: cover;

        }
        .detailedview p{
          font-size:14px;
          color:#000;
          padding:0;
          padding-bottom:4px;
          margin-bottom:4px;
          margin-top:8px;
        }
        .detailedview p span{
          display:block;
          font-size:12px;
          color:#6f6f6f;
        }
        
        .hidden{display:none}
        .close_icon{
          float:right;
          width:24px;
          margin:24px:
        }
        .downloadBtn{
          display:block;
          width:100%;
          text-align:left;
          height:32px;
          margin-top:8px;
          /* border-top:1px solid #efefef; */
        }
        .downloadBtn a{
          display:inline-block;
          font-size:16px;
          line-height:32px;
          padding-left:32px;
          background:url("icons/ui_outline/download.svg");
          background-repeat: no-repeat;
          background-position: center left;
          background-size:24px 24px;
          margin:0 auto;
          color:#3A98E4;
          text-decoration:none;
        }
        .snippet{
            background: #efefef;
            width:90%;
            max-height:100px;
            word-break: break-word;
            overflow-wrap: break-word;
            border: 1px solid #ccc;
            border-radius:8px;
            padding:4px 16px;
            overflow: scroll;
        }
        </style>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />



 

<script>
$(document).ready(function() {

    $.getJSON('icons.json', function(data) {

          $.each(data.ui_icon_outline_sizing, function(j, k) {
            if(k.value==24){
            var container = "<div class='wraper ui_outline set" +k.value+ "'><p>" + k.description + "</p><div class='userdata ui_set_outline set size" +k.value+ "'></div></div>"
                $(container).appendTo("#container");
              }
          });
          $.each(data.ui_icon_filled_sizing, function(j, k) {
            if(k.value==24){
            var container = "<div style='display:none' class='wraper ui_filled set" +k.value+ "'><p>" + k.description + "</p><div class='userdata ui_set_filled set size" +k.value+ "'></div></div>"
                $(container).appendTo("#container");
              }
          });
          $.each(data.product_icon_sizing, function(j, k) {
            if(k.value==24){
            var container = "<div style='display:none' class='wraper product set" +k.value+ "'><p>" + k.description + "</p><div class='userdata product_set set size" +k.value+ "'></div></div>"
                $(container).appendTo("#container");
              }  
          });
          $.each(data.illustration_icon_sizing, function(j, k) {
            if(k.value==64){
            var container = "<div style='display:none'  class='wraper illustration set" +k.value+ "'><p>" + k.description + "</p><div class='userdata illustration_set set size" +k.value+ "'></div></div>"
                $(container).appendTo("#container");
              }
          });



          $.each(data.ui_icon_outline, function(i, f) {
                var token = "--viu-reference-icon-" + f.type + "-" + f.value;
                var content = "<div id='"+token+"' class='item " + f.type + "'><a href='#detail' rel='modal:open'><span src='" + f.src + "' id='s"+token+"' class='inline-svg'></span><span>"+f.value+"</span></a></div>"
                $(content).appendTo(".ui_set_outline");

                var detail = "<div class='detailedview hidden " + token + "'><div class='modalcontent'><div class='imageset'><img class='preview' src='" + f.src + "' />"
                
                detail = detail + "<div class='tumbnails'>"
                $.each(data.ui_icon_outline_sizing, function(j, k) {
                  detail = detail + "<div class='size"+k.value+"'><span src='" + f.src + "' id='s"+token+"' class='inline-svg'></span><span>"+k.value+"px</span></div>"
                  
                });
                detail = detail + "</div></div><div class='textset'>"
                detail = detail + "<p><span>Icon name:</span>"+f.value+"</p><p><span>Icon type:</span>"+f.type+"</p><p><span>url:</span>"+f.src+"</p><p><span>Token:</span>"+token+"</p><p><span>Description:</span>"+f.description+"</p>"
                detail = detail + "<p><span>SVG code:</span></p>"
                detail = detail + "<div class='snippet'><pre><xmp class='t-"+token+"'></xmp></pre></div>"

                var $img = $("#s" + token),
                imgURL = $img.attr('src'),
                imgID  = $img.attr('id');
                $.get(f.src, function(data) {
                    var $svg = $(data).find('svg');
                    $svg = $svg.removeAttr('xmlns:a');
                    var $ditem = ".t-" + token + " svg";  
                    $('.t-'+token).append( $svg );
                }, 'xml');

                detail = detail + "<div class='downloadBtn'><a target='_blank' href='"+f.src+"'>Download SVG file</a></div></div></div></div>"
                $(detail).appendTo("#detail");

          });

          $.each(data.ui_icon_filled, function(i, f) {
                var token = "--viu-reference-icon-" + f.type + "-" + f.value;
                var content = "<div id='"+token+"' class='item " + f.type + "'><a href='#detail' rel='modal:open'><span src='" + f.src + "' id='s"+token+"' class='inline-svg'></span><span>"+f.value+"</span></a></div>"
                $(content).appendTo(".ui_set_filled");

                var detail = "<div class='detailedview hidden " + token + "'><div class='modalcontent'><div class='imageset'><img class='preview' src='" + f.src + "' />"
                
                detail = detail + "<div class='tumbnails'>"
                $.each(data.ui_icon_filled_sizing, function(j, k) {
                  detail = detail + "<div class='size"+k.value+"'><span src='" + f.src + "' id='s"+token+"' class='inline-svg'></span><span>"+k.value+"px</span></div>"
                  
                });
                detail = detail + "</div></div><div class='textset'>"
                detail = detail + "<p><span>Icon name:</span>"+f.value+"</p><p><span>Icon type:</span>"+f.type+"</p><p><span>url:</span>"+f.src+"</p><p><span>Token:</span>"+token+"</p><p><span>Description:</span>"+f.description+"</p>"
                detail = detail + "<p><span>SVG code:</span></p>"
                detail = detail + "<div class='snippet'><pre><xmp class='t-"+token+"'></xmp></pre></div>"

                var $img = $("#s" + token),
                imgURL = $img.attr('src'),
                imgID  = $img.attr('id');
                $.get(f.src, function(data) {
                    var $svg = $(data).find('svg');
                    $svg = $svg.removeAttr('xmlns:a');
                    var $ditem = ".t-" + token + " svg";  
                    $('.t-'+token).append( $svg );
                }, 'xml');

                detail = detail + "<div class='downloadBtn'><a target='_blank' href='"+f.src+"'>Download SVG file</a></div></div></div></div>"
                $(detail).appendTo("#detail");

          });

          $.each(data.product_icon, function(i, f) {
                var token = "--viu-reference-icon-" + f.type + "-" + f.value;
                var content = "<div id='"+token+"' class='item " + f.type + "'><a href='#detail' rel='modal:open'><span src='" + f.src + "' id='s"+token+"' class='inline-svg'></span><span>"+f.value+"</span></a></div>"
                $(content).appendTo(".product_set");

                var detail = "<div class='detailedview hidden " + token + "'><div class='modalcontent'><div class='imageset'><img class='preview' src='" + f.src + "' />"
                
                detail = detail + "<div class='tumbnails'>"
                $.each(data.product_icon_sizing, function(j, k) {
                  detail = detail + "<div class='size"+k.value+"'><span src='" + f.src + "' id='s"+token+"' class='inline-svg'></span><span>"+k.value+"px</span></div>"
                  
                });
                detail = detail + "</div></div><div class='textset'>"
                detail = detail + "<p><span>Icon name:</span>"+f.value+"</p><p><span>Icon type:</span>"+f.type+"</p><p><span>url:</span>"+f.src+"</p><p><span>Token:</span>"+token+"</p><p><span>Description:</span>"+f.description+"</p>"
                detail = detail + "<p><span>SVG code:</span></p>"
                detail = detail + "<div class='snippet'><pre><xmp class='t-"+token+"'></xmp></pre></div>"

                var $img = $("#s" + token),
                imgURL = $img.attr('src'),
                imgID  = $img.attr('id');
                $.get(f.src, function(data) {
                    var $svg = $(data).find('svg');
                    $svg = $svg.removeAttr('xmlns:a');
                    var $ditem = ".t-" + token + " svg";  
                    $('.t-'+token).append( $svg );
                }, 'xml');

                detail = detail + "<div class='downloadBtn'><a target='_blank' href='"+f.src+"'>Download SVG file</a></div></div></div></div>"
                $(detail).appendTo("#detail");

          });

          $.each(data.illustration_icon, function(i, f) {
                var token = "--viu-reference-icon-" + f.type + "-" + f.value;
                var content = "<div id='"+token+"' class='item " + f.type + "'><a href='#detail' rel='modal:open'><span src='" + f.src + "' id='s"+token+"' class='inline-svg'></span><span>"+f.value+"</span></a></div>"
                $(content).appendTo(".illustration_set");

                var detail = "<div class='detailedview hidden " + token + "'><div class='modalcontent'><div class='imageset'><img class='preview' src='" + f.src + "' />"
                
                detail = detail + "<div class='tumbnails'>"
                $.each(data.illustration_icon_sizing, function(j, k) {
                  detail = detail + "<div class='size"+k.value+"'><span src='" + f.src + "' id='s"+token+"' class='inline-svg'></span><span>"+k.value+"px</span></div>"
                  
                });
                detail = detail + "</div></div><div class='textset'>"
                detail = detail + "<p><span>Icon name:</span>"+f.value+"</p><p><span>Icon type:</span>"+f.type+"</p><p><span>url:</span>"+f.src+"</p><p><span>Token:</span>"+token+"</p><p><span>Description:</span>"+f.description+"</p>"
                detail = detail + "<p><span>SVG code:</span></p>"
                detail = detail + "<div class='snippet'><pre><xmp class='t-"+token+"'></xmp></pre></div>"

                var $img = $("#s" + token),
                imgURL = $img.attr('src'),
                imgID  = $img.attr('id');
                $.get(f.src, function(data) {
                    var $svg = $(data).find('svg');
                    $svg = $svg.removeAttr('xmlns:a');
                    var $ditem = ".t-" + token + " svg";  
                    $('.t-'+token).append( $svg );
                }, 'xml');

                detail = detail + "<div class='downloadBtn'><a target='_blank' href='"+f.src+"'>Download SVG file</a></div></div></div></div>"
                $(detail).appendTo("#detail");

          });






    });

    $('#filterOptions li a').click(function() {
        var ourClass = $(this).attr('class');
        $('#filterOptions li').removeClass('active');
        $(this).parent().addClass('active');
            $('.userdata').children('div:not(.' + ourClass + ')').hide();
            $('.userdata').children('div.' + ourClass).show();
            $('#container').children('.wraper:not(.' + ourClass + ')').hide();
            $('#container').children('.wraper.' + ourClass).show();
        return false;
    });





    callbackFirst();

    function callbackFirst() {
      setTimeout(function() {callbackSecond()}, 1000);
      setTimeout(function() {callbackThird()}, 1600);
    }
    
    function callbackSecond() {
      $('.inline-svg').each(function() {
      var $img = $(this),
          imgURL = $img.attr('src'),
          imgID  = $img.attr('id');
      $.get(imgURL, function(data) {
          var $svg = $(data).find('svg');
          if(typeof imgID !== 'undefined') {
              $svg = $svg.attr('id', imgID);
          }
          $svg = $svg.removeAttr('xmlns:a');
          $img.replaceWith($svg);

      }, 'xml');
    });

    }
    function callbackThird() {
      $('svg').each(function() {
        $(this).find("path").attr( "vector-effect", "non-scaling-stroke" );
        $(this).find("path").attr( "stroke-width", "1px" );
      });
      $('.detailedview xmp').each(function(){
        $(this).html($(this).html().replace(/“/g, "'"));
      });

    }





    // https://gist.github.com/ilyaskhametov/a32dc027930b91cc4f7f1e78dc94b8fc



});






$(document).on('click', '.citem', function() {
    $("#detail div.detailedview").addClass('hidden');
});

$(document).on('click', '.item', function() {

  $("#detail").modal({
    fadeDuration: 100,
    clickClose: false,
    showClose: false
  });
  //var children = $(this).find('.job-desc');
  var detail = $(this).attr('id');
  var children = $("#detail").find('.' + detail);
  children.toggleClass('hidden');
        $("object").contents().find("path").attr({ "stroke": "green" });
        $("object").contents().find("path").attr( "stroke-width", "2px" );
        $("object").contents().find("path").attr( "vector-effect", "non-scaling-stroke" );

});



</script>





 



</head>

<body>
<div id="container">
<div class="header"><h1>VIU design system icons</h2>
<ul id="filterOptions">
    <li class="active"><a href="#" class="ui_outline">UI Icons Outline</a></li>
    <li><a href="#" class="ui_filled">UI Icons Filled</a></li>
    <li><a href="#" class="product">Product icons</a></li>
    <li><a href="#" class="illustration">Illustration icons</a></li>
</ul>
</div></div>

<div id="detail" class="modal">
  <a class="citem" href="#" rel="modal:close"><img class="close_icon" src="icons/ui_outline/close.svg" /></a>
</div>

</body>



</html>