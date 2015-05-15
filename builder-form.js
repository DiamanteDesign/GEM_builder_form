// function to take action based on value of radio button input
function doThings(inputval) {
    if ( inputval == 'yes' )
        alert('do things for YES!');
    if ( inputval == 'no' )
        alert('Do things for No!');   
}

// call function doThings whenever the value of the radio button input is changed
$('document').ready(
    function(){
        $('input[name="gem_preferred"]:radio').click(
            function(){
                doThings($('input[name="gem_preferred"]:checked').val());
            }
        );  
    }
);
