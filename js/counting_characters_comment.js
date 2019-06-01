/* 
    Subject       : OFF CAMPUS PLATFORM PROJECT
    Created on    : 21-Feb-2019, 05:59:34 PM
    Author        : Marc Freir
    License       : This work is licensed under a Creative Commons Attribution-NonCommercial-NoDerivatives 4.0 International License.
    Licence Source: https://creativecommons.org/licenses/by-nc-nd/4.0/
*/

var maxLength = 1500;
$('textarea').keyup(function()
{
    var length = $(this).val().length;
    var length = maxLength-length;
    $('#chars_comment').text(length);
});