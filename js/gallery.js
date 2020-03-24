    $(document).ready(function() {
        $('#gallery').flexPhotoGallery({
            imageArray: imageArray,
            isViewImageOnClick: true
        });
    });

    
    var imageArray = 
    [
        {
            "url": "img/img1.jpg",
            "width": 1280,
            "height": 720 
        },
        {
           "url": "img/img2.jpg",
            "width": 1152,
            "height": 560 
        },
        {
             "url": "img/img3.jpg",
            "width": 560,
            "height": 886 
        },
        {
            "url": "img/img4.jpg",
            "width": 960,
            "height": 540 
        },
        {
            "url": "img/img5.jpg",
            "width": 1152,
            "height": 560 
        },
        {
            "url": "img/img6.jpg",
            "width": 1152,
            "height": 560 
        },
        {
           "url": "img/img7.jpg",
            "width": 540,
            "height": 960 
        },
        {
            "url": "img/img8.jpg",
            "width": 1152,
            "height": 560 
        },
        {

           "url": "img/img9.jpg",
            "width": 1280,
            "height": 720 
        },
        {
            "url": "img/img10.jpg",
            "width": 1152,
            "height": 560 
        },
        {
           "url": "img/img11.jpg",
            "width": 1152,
            "height": 560 
        },
        {
           "url": "img/img12.jpg",
            "width": 1152,
            "height": 560 
        },
        {
           "url": "img/img13.jpg",
            "width": 1280,
            "height": 720 
        },
        {
           "url": "img/img14.jpg",
            "width": 1152,
            "height": 864 
        },
        {
           "url": "img/img15.jpg",
            "width": 1152,
            "height": 560 
        },
        {
           "url": "img/img16.jpg",
           "width": 1280,
            "height": 720 
        },
        {
           "url": "img/img17.jpg",
			 "width": 1280,
            "height": 720 
        },
        {
           "url": "img/img18.jpg",
          	"width": 1280,
            "height": 720 
        },
        {
           "url": "img/img19.jpg",
            "width": 1280,
            "height": 720 
        },
        {
           "url": "img/img20.jpg",
            "width": 1280,
            "height": 720 
        },
         {
           "url": "img/img21.jpg",
            "width": 1280,
            "height": 720 
        },
         {
           "url": "img/img22.jpg",
            "width": 1152,
            "height": 560 
        },
        {
           "url": "img/img23.jpg",
            "width": 1280,
            "height": 720 
        },
         {
           "url": "img/img24.jpg",
            "width": 1152,
            "height": 560 
        },
         {
           "url": "img/img25.jpg",
            "width": 1152,
            "height": 560 
        },
    ];




( function($){
    $.fn.flexPhotoGallery = function( options ){
        // Default Options
        var settings = $.extend({
            imageArray: [],
            isViewImageOnClick: true
        }, options);

        // Render the component
        return this.each( function() {
            $(this).css({ 'overflow' : 'hidden' });
            $(this).html(getRenderedImageDOM(settings.imageArray));
            $('body').append(getRenderedModalBody());

            if(settings.isViewImageOnClick){
                $('.gallery-item').addClass('hover-pointer');
                
                $('.gallery-item').click(function(){
                    renderImageOnModal(this);
                });
    
                $('.modal-close-button ').click(function(){
                    $('#modal-container').addClass('out');
                    $('body').removeClass('modal-active');
                    $('.modal-img').removeAttr('src');
                });
                
                $('.modal-prev-button').click(function(){
                    renderImageOnModal($('.active-image-on-modal').parent().prev().children());
                });
                
                $('.modal-next-button').click(function(){
                    renderImageOnModal($('.active-image-on-modal').parent().next().children());
                });
            }
        });

        function renderImageOnModal(elelemt){
            if($('.gallery-item').index(elelemt) <= 0)
                $('.modal-prev-button').hide();
            else
                $('.modal-prev-button').show();

            if($('.gallery-item').index(elelemt) >= $('.gallery-item').length - 1)
                $('.modal-next-button').hide();
            else
                $('.modal-next-button').show();

            $('.active-image-on-modal').removeClass('active-image-on-modal');
            $(elelemt).addClass('active-image-on-modal');
            $('#modal-container').removeAttr('class').addClass('blowup');
            $('body').addClass('modal-active');
            $('.modal-img').removeAttr('src');
            $('.modal-img').attr('src', $(elelemt).attr('src'));
            currentModalImageElelement = elelemt;
        }

        function getRenderedImageDOM(imageArray){
            var i = 0;
            var renderedHTML = '';
            var renderdColumnGrid = '';
            imageArray.forEach( function(item){
                renderedHTML = '';
                renderedHTML = renderedHTML.concat('', "<div class='img-wrapper img-wrapper-ind-" + i + "' style='width: " + item.width*200/item.height + "px; flex-grow: " + item.width*200/item.height + "'>" + 
                                                            "<img class='gallery-item' src='" + item.url + "' alt=' '/>" + 
                                                            "<i class='gallery-item-i' style='padding-bottom: " + item.height/item.width*100 + "%'></i>" +
                                                        "</div>");
                renderdColumnGrid = renderdColumnGrid.concat('', renderedHTML);
                i++;
            });
            return getSectionTemplate(renderdColumnGrid);
        }

        function getSectionTemplate(item){
            return "<section id='images-section'>" + item + "</section>";
        }

        function getRenderedModalBody(){
            return '<div id="modal-container">' +
                        '<div class="modal-background">' +
                            '<div class="modal-close-button">' +
                                '<span>+</span>' +
                            '</div>' +
                            '<div class="modal-prev-button"><span>&#8249;</span></div>' +
                            '<div class="modal-next-button"><span>&#8250;</span></div>' +
                            '<div class="modal">' +
                                '<div class="modal-img-wrapper"><img class="modal-img"/></div>' +
                                '<svg class="modal-svg" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" preserveAspectRatio="none">' +
                                    '<rect x="0" y="0" fill="none" width="226" height="162" rx="3" ry="3"></rect>' +
                                '</svg>' +
                            '</div>' +
                        '</div>' +
                    '</div>'
        }
    }
}(jQuery));