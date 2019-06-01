/* 
    Subject       : OFF CAMPUS PLATFORM PROJECT
    Created on    : 08-Mar-2019, 10:24:40 AM
    Author        : Marc Freir
    License       : This work is licensed under a Creative Commons Attribution-NonCommercial-NoDerivatives 4.0 International License.
    Licence Source: https://creativecommons.org/licenses/by-nc-nd/4.0/
*/

var maxLength = 500;
$('textarea').keyup(function()
{
    var length = $(this).val().length;
    var length = maxLength-length;
    $('#chars').text(length);
});