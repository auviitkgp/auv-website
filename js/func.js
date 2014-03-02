function changeActive(number)
{
    var container = document.getElementById("navbarlist");
    var list = container.getElementsByTagName('li')
   // var temp = container.hasClass('active');
    for(var i=0;i<7;i++)
    {
        if(i!=number)
        list[i].className-= "active";
    }
    list[number].className+= "active";
   // alert("The class which is active is ");
/*	if ( ! $(this).hasClass('active')) {
            $('li.active').removeClass('active');
            $(this).addClass('active');
        }*/
}
