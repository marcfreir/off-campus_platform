/* 
    Subject       : OFF CAMPUS PLATFORM PROJECT
    Created on    : 12-Mar-2019, 07:15:35 AM
    Author        : Marc Freir
    License       : This work is licensed under a Creative Commons Attribution-NonCommercial-NoDerivatives 4.0 International License.
    Licence Source: https://creativecommons.org/licenses/by-nc-nd/4.0/
*/

var maxLengthContent = 3000;
$(document.getElementById('textarea-content')).keyup(function()
{
    var length = $(this).val().length;
    var length = maxLengthContent-length;
    $('#chars-content').text(length);
});