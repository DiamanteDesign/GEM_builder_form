// function to take action based on value of radio button input
function showSection(inputval) {
    if ( inputval == 'yes' )
        $(".company-references").toggle();
        //alert(inputval);   
    if ( inputval == 'no' )
        $(".company-references").hide();   
        //alert(inputval);   
}

// call function showSection whenever the value of the radio button input is changed
$('document').ready(
    function(){
        $('input[name$="gem_preferred"]:radio').click(
            function(){
                showSection($('input[name="gem_preferred"]:checked').val());

            }
        );  
    }
);
