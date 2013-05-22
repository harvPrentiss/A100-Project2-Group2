$(document).ready(function(){
    /* The following code is executed once the DOM is loaded */

    

    $(".profileFlip").hoverIntent(flipOver, flipBack);
});

    
function flipOver(){
    elem.flip({
                direction:'lr',
                speed: 350,
                onBefore: function(){
                    // Insert the contents of the .profileData div (hidden
                    // from view with display:none) into the clicked
                    // .profileFlip div before the flipping animation starts:

                    elem.html(elem.siblings('.profileData').html());
                }
            });

            // Setting the flag:
            elem.data('flipped',true);
}

function flipBack(){
    elem.revertFlip();

            // Unsetting the flag:
            elem.data('flipped',false)

}