/* 
    Subject       : OFF CAMPUS PLATFORM PROJECT
    Created on    : 07-Mar-2019, 12:19:53 AM
    Author        : Marc Freir
    License       : This work is licensed under a Creative Commons Attribution-NonCommercial-NoDerivatives 4.0 International License.
    Licence Source: https://creativecommons.org/licenses/by-nc-nd/4.0/
*/

window.onscroll = function()
{
    myFunction()
};

var card = document.getElementById("carduserinformation");
var sticky = card.offsetTop;

function myFunction()
{
    if (window.pageYOffset > sticky)
    {
        card.classList.add("sticky");
    }
    else
    {
        card.classList.remove("sticky");
    }
}