/* 
    Subject       : OFF CAMPUS PLATFORM PROJECT
    Created on    : 10-Mar-2019, 12:41:24 PM
    Author        : Marc Freir
    License       : This work is licensed under a Creative Commons Attribution-NonCommercial-NoDerivatives 4.0 International License.
    Licence Source: https://creativecommons.org/licenses/by-nc-nd/4.0/
*/

var maxLength = 500;
$(document.getElementById('articlesbody_p1')).keyup(function()
{
    var length = $(this).val().length;
    var length = maxLength-length;
    $('#chars_articlesbody_p1').text(length);
});

$(document.getElementById('articlesbody_p2')).keyup(function()
{
    var length = $(this).val().length;
    var length = maxLength-length;
    $('#chars_articlesbody_p2').text(length);
});

$(document.getElementById('articlesbody_p3')).keyup(function()
{
    var length = $(this).val().length;
    var length = maxLength-length;
    $('#chars_articlesbody_p3').text(length);
});