    $(document).ready(function() {
      $(window).on('resize', function (){
        $wHeight = $(window).height();
        $item.height($wHeight);
      });

      $('.carousel').carousel({
        interval: 6000,
        pause: "false"
      });

      $("#menu-toggle").click(function(e) {
          e.preventDefault();
          $("#wrapper").toggleClass("toggled");
      });

      $(window).on('resize', function (){
          $wHeight = $(window).width();
          if ($wHeight < 768 ){
            $(".dropdown").removeClass("dropdown-pc").addClass("main");
            $(".dropdown-menu").removeClass("dropdown-menu-pc").addClass("dropdown-menu-mobile");
          }
          else {
            $(".dropdown").removeClass("main").addClass("dropdown-pc");
            $(".dropdown-menu").removeClass("dropdown-menu-mobile").addClass("dropdown-menu-pc");

          }
        }).resize();

      function preview_image(){
         var total_file=document.getElementById("filesToUpload").files.length;
         for(var i=0;i<total_file;i++){
          $('#image_preview').append("<img src='"+URL.createObjectURL(event.target.files[i])+"' class='img-upload'><br>");
         }
      }

      function preview_image_logo(){
         $('#image_preview > img').replaceWith("<img src='"+URL.createObjectURL(event.target.files[0])+"' class='img-upload'><br>");
      }

      $('#myTable').DataTable();
      $('input[aria-controls="myTable"]').addClass("search-table");
      $('select[aria-controls="myTable"]').addClass("search-table");
});


  