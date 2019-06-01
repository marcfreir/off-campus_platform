/* 
    Subject       : OFF CAMPUS PLATFORM PROJECT
    Created on    : 20-Feb-2019, 08:21:00 PM
    Author        : Marc Freir
    License       : This work is licensed under a Creative Commons Attribution-NonCommercial-NoDerivatives 4.0 International License.
    Licence Source: https://creativecommons.org/licenses/by-nc-nd/4.0/
*/

var maxLengthPost = 3000;
$('#textarea-profile').keyup(function()
{
    var length = $(this).val().length;
    var length = maxLengthPost-length;
    $('#chars-post').text(length);
});