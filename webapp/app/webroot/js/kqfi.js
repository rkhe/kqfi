/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function () {
    $(window).scroll(function () {
        $('.stickyTab').css({top: getTabTop() + 'px'});
    });
    $('.stickyTab').css({top: getTabTop() + 'px'});
});

function getTabTop() {
    var winScroll = this.scrollY;
    var winHeight = $(window).height();
    var tabHeight = $('.stickyTab').height();
    var top = winScroll + ((winHeight / 2) - (tabHeight / 2));
    return top;
}
