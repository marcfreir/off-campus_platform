/* 
	Subject       : OFF CAMPUS PLATFORM PROJECT
    Created on    : 08-Feb-2019, 08:00:32 AM
    Author        : Marc Freir
    License       : This work is licensed under a Creative Commons Attribution-NonCommercial-NoDerivatives 4.0 International License.
    Licence Source: https://creativecommons.org/licenses/by-nc-nd/4.0/
*/

$(document).ready(function(e)
{
    //Variables
    var html = '<div class="md-form mb-5"><label data-error="wrong" data-success="right" for="degreename">Graduação</label><input type="text" class="form-control validate" id="degreename" name="txtdegreename" value=" " maxlength="64" title="máximo 64 caracteres" placeholder="Ex.: Biologia, Tecnico em Administração, etc"></div>';
    var maxRows = 5;
    var x = 1;

    //Add rows to the form
    $("#addmore").click(function(e)
    {
        if(x <= maxRows)
        {
            $("#degree-card").append(html);
            x++;
        }
    });

    //Remove rows from the form
    $("#container").on('click', '#remove', function(e)
    {
        $(this).parent('div').remove();
        x--;
    });

    //Populate values from the first row
    $("#container").on('dbclick', '#childdegree', function(e)
    {
        $(this).val( $('#degree').val() );
    });

    $("#container").on('dbclick', '#childdegreestartdate', function(e)
    {
        $(this).val( $('#degreestartdate').val() );
    });

    $("#container").on('dbclick', '#childdegreefinishdate', function(e)
    {
        $(this).val( $('#degreefinishdate').val() );
    });

    $("#container").on('dbclick', '#childdegreeinstitutionname', function(e)
    {
        $(this).val( $('#degreeinstitutionname').val() );
    });

});