// JavaScript Document

if (jQuery.browser.msie) {	

    $('#bkgallery').css({'display' : 'none'});				   
   
    jQuery(window).load(function(){	

        $(document).ready(function(){

            $('#bkgallery').fadeIn('slow');	
            $('.mask img').fadeIn('slow');

            // MY BKGALLERY SCRIPT TO MANAGE BACKGROUND IMAGES

            var actualimg = 1;
            var totalimages = jQuery('#bkgallery img').length;
            var skip_transition = false;
            var imagewidth = jQuery('#bkgallery #im1').width();
            var imageheight = jQuery('#bkgallery #im1').height();
            var ratio = imageheight/imagewidth;
            
            var imagewidthMask = jQuery('.mask img').width();
            var imageheightMask = jQuery('.mask img').height();
            var ratioMask = imagewidthMask/imageheightMask;

            if(totalimages == 1){jQuery('#bkgallery a').hide();}


            supersizeImage(jQuery('#bkgallery #im1'), ratio);
            supersizeImage(jQuery('.mask img'), ratioMask);

            jQuery(window).resize(function() {

                imagewidth = jQuery('#im'+actualimg).width();
                imageheight = jQuery('#im'+actualimg).height();
                ratio = imageheight/imagewidth; 

                supersizeImage(jQuery('#im'+actualimg), ratio);
                
                imagewidthMask = jQuery('.mask img').width();
                imageheightMask = jQuery('.mask img').height();
                ratioMask = imagewidthMask/imageheightMask;

                supersizeImage(jQuery('.mask img'), ratioMask); 

            });

            function fadeImage(action){
                if(skip_transition == false){

                    jQuery('#bkgallery img').fadeOut(1500);
                    if(action == "prev"){
                        actualimg = actualimg-1;
                        if(actualimg < 1){actualimg = totalimages;}
                    }else if(action == "next"){
                        actualimg = actualimg+1;
                        if(actualimg > totalimages)
                        { 
                            actualimg = 1; 
                            
                            jQuery('#floatingLink').fadeIn(1500);
                        
                        }
                    } 
                    imagewidth = jQuery('#im'+actualimg).width();
                    imageheight = jQuery('#im'+actualimg).height();
                    ratio = imageheight/imagewidth; 

                    supersizeImage(jQuery('#im'+actualimg), ratio);
                    jQuery('#im'+actualimg).fadeIn(1500);

                }

                skip_transition = false; 

            }

            jQuery(function() {
                if(totalimages >1 &&skip_transition == false ){

                    setInterval(function() {   

                            fadeImage( 'next');

                    }, 2500);
                } 
            });

    /*
            jQuery('#bkgallery a').click(function(){
                    skip_transition = false; 
                    var action = (jQuery(this).attr('class'));

                    fadeImage(action);
                    skip_transition = true;
                    return false;
            });
    */

            // SUPERSIZE FUNCTION TO MANAGE SCREEN RATIO FIT FOR BACKGROUND IMAGE  
            function supersizeImage(image, ratios) {

                //alert(imagewidth + " - "+imageheight);
                var browserwidth = jQuery(window).width();
                var browserheight = jQuery(window).height();
                if(imageheight == 0){
                    imageheight = jQuery(image).attr('height');
                }

                if ((browserheight/browserwidth) >= ratios){//si la pantalla es mas alta que ancha (respecto al ratio
                        jQuery(image).height(browserheight);
                        jQuery(image).width(browserheight / ratios); 
                } else { 

                        jQuery(image).width(browserwidth);
                        jQuery(image).height(browserwidth * ratios);    
                }

                jQuery(image).css('left', (browserwidth - jQuery(image).width())/2);
                if(jQuery(image).height()>0){
                        jQuery(image).css('top', (browserheight - jQuery(image).height())/2);
                }
            }


        });  

    });

}else{

    $(document).ready(function(){


        $('#bkgallery').css({'display' : 'none'});				   

        jQuery(window).load(function(){	

            $('#bkgallery').fadeIn('slow');	
            $('.mask img').fadeIn('slow');

            // MY BKGALLERY SCRIPT TO MANAGE BACKGROUND IMAGES

            var actualimg = 1;
            var totalimages = jQuery('#bkgallery img').length;
            var skip_transition = false;
            var imagewidth = jQuery('#bkgallery #im1').width();
            var imageheight = jQuery('#bkgallery #im1').height();
            var ratio = imageheight/imagewidth;


            var imagewidthMask = jQuery('.mask img').width();
            var imageheightMask = jQuery('.mask img').height();
            var ratioMask = imagewidthMask/imageheightMask;
            
    /// Questi servono per le freccie next e prev
    ///        if(totalimages == 1){jQuery('#bkgallery a').hide();}

            supersizeImage(jQuery('#bkgallery #im1'), ratio);
            supersizeImage(jQuery('.mask img'), ratioMask);


            jQuery(window).resize(function() {
                imagewidth = jQuery('#im'+actualimg).width();
                imageheight = jQuery('#im'+actualimg).height();
                ratio = imageheight/imagewidth; 
                
                imagewidthMask = jQuery('.mask img').width();
                imageheightMask = jQuery('.mask img').height();
                ratioMask = imagewidthMask/imageheightMask;

                supersizeImage(jQuery('#im'+actualimg), ratio);
                supersizeImage(jQuery('.mask img'), ratioMask); 
            });

            function fadeImage(action){
                if(skip_transition == false){

                    jQuery('#bkgallery img').fadeOut(1500);
                    if(action == "prev"){
                            actualimg = actualimg-1;
                            if(actualimg < 1){actualimg = totalimages;}
                    }else if(action == "next"){
                            actualimg = actualimg+1;
                            if(actualimg > totalimages)
                        { 
                            actualimg = 1; 
                            
                            jQuery('#floatingLink').fadeIn(1500);
                        
                        }
                    } 
                    imagewidth = jQuery('#im'+actualimg).width();
                    imageheight = jQuery('#im'+actualimg).height();
                    ratio = imageheight/imagewidth; 

                    supersizeImage(jQuery('#im'+actualimg), ratio);
                    jQuery('#im'+actualimg).fadeIn(1500);
                }
                skip_transition = false; 
            }

            jQuery(function() {
                if(totalimages >1 &&skip_transition == false ){

                    setInterval(function() {   
                        fadeImage( 'next');
                    }, 2500);
                } 
            });

    /// Questi servono per le freccie next e prev
    ///     jQuery('#bkgallery a').click(function(){
    ///                skip_transition = false; 
    ///                var action = (jQuery(this).attr('class'));
    ///
    ///                fadeImage(action);
    ///                skip_transition = true;
    ///                return false;
    ///        });


            // SUPERSIZE FUNCTION TO MANAGE SCREEN RATIO FIT FOR BACKGROUND IMAGE  



        function supersizeImage(image, ratios) {



                //alert(imagewidth + " - "+imageheight);
            var browserwidth = jQuery(window).width();
            var browserheight = jQuery(window).height();
            if(imageheight == 0){imageheight = jQuery(image).attr('height');}


            if ((browserheight/browserwidth) >= ratios){//si la pantalla es mas alta que ancha (respecto al ratio
                jQuery(image).height(browserheight);
                jQuery(image).width(browserheight / ratios); 
            } else { 

                jQuery(image).width(browserwidth);
                jQuery(image).height(browserwidth * ratios);    
            }

            jQuery(image).css('left', (browserwidth - jQuery(image).width())/2);
                if(jQuery(image).height()>0){
                        jQuery(image).css('top', (browserheight - jQuery(image).height())/2);
                }
            }

        });	
    });  
	

}
