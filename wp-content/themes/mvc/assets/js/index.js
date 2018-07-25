   
   $(document).ready(function()
   {
      $("#SlideShow1").slideshow(
      {
         interval: 3000,
         type: 'sequence',
         effect: 'none',
         direction: '',
         pagination: true,
         pagination_img_default: 'images/slide_default.png',
         pagination_img_active: 'images/slide_active.png',
         fullscreen: 4,
         maxWidth: 1920,
         effectlength: 2000
      });
      $("#SlideShow1_back a").click(function()
      {
         $('#SlideShow1').slideshow('previmage');
      });
      $("#SlideShow1_next a").click(function()
      {
         $('#SlideShow1').slideshow('nextimage');
      });
      $("#modalka").modal('show');
   });
