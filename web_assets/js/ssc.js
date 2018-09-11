//////////option color change////////////////////


////////////Erase radio button/////////////////////
    function erase(num) {
 
        var ele = document.getElementsByName("optionsRadios"+num);
        for (var i = 0; i < ele.length; i++)
            ele[i].checked = false;
    }
///////////////////////Font size/////////////////////////

function changeFontSize(target) {
    
    var minmax = document.getElementById("minmax");
    
    var computedStyle = window.getComputedStyle
          ? getComputedStyle(minmax) // Standards
          : minmax.currentStyle;     // Old IE
         
    var fontSize;
  
    if (computedStyle) { // This will be true on nearly all browsers
        fontSize = parseFloat(computedStyle && computedStyle.fontSize);
       
        if (target == "sizePlus") {
          if(fontSize<20){
          fontSize += 5;
          }
         
        } else if (target == "sizeMinus") {
          if(fontSize>15){
          fontSize -= 5;
          }
        }
        minmax.style.fontSize = fontSize + "px";
    }
  }
// function setFontSize(size) {

//     $('.minmax').css({
//         'font-size': +size + 'px'
//     });

// }


// function incFont(size) {
//     // alert(size);
//     setFontSize(size + 10);
//     return
// }

// function decFont(size) {

//     if (size > 5)
//         setFontSize(size - 5);


// } 


///////////////////////////////////////////////////Previos and Next//////////
    $(document).ready(function () {
        var counter = 1;
        $('body').on('click', '.next', function () {
            if (counter < 5) {
                $('.content').hide();

                counter++;
                $('#content-' + counter + '').show();

                if (counter > 1) {
                    $('.back').show();
                };
                if (counter > 3) {
                    $('.content-holder').hide();
                    $('.end').show();
                };

            }
        });

        /////////////////////////////
        $('body').on('click', '.prev', function () {
            if (counter > 0) {
                counter--;
                if (counter > 0) {
                    $('.content').hide();
                    var id = counter;
                    $('#content-' + id).show();
                    if (counter < 2) {
                        $('.back').hide();
                    }
                }
            }
        });
    }); 


