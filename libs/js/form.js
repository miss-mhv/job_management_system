$('.foldable').hide();

$('.foldable_toggle').each(function() {
    $(this).append('<span class="toggle">&nbsp;</span>');
    $(this).wrapInner('<a href="#"></a>');
});

$('.foldable_toggle a').click(function() {
    icon =$(this).children('i').text();
    // alert(icon);

    //$(this).parent().next('.foldable').toggle('slow');
    $(this).parent().next('.foldable').slideToggle('slow');
    $(this).toggleClass('unfolded');

    // jeu de changement de l'icon

    if(icon == "add")
        $(this).children('i').text('remove');
    else if(icon == "remove")
        $(this).children('i').text('add');

    return false;
});
