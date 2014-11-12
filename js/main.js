$(function() {
    var searchOpen = false;
    var searchbar = $('#searchbar');
    var search = $('#search');
  
    function expandSearchbar() {
        if (searchOpen) {
            console.log('do search...');
        }
        else {
            searchbar.addClass('expanded');
            // searchbar.css('border-color', '#FFE7C5');
            // searchbar.css('width', '250px');
            // searchbar.css('box-shadow', '0 0 5px $bright');
            searchbar.focus();
            searchOpen = true;
        }
        return false;
    }
  
    function collapseSearchbar() {
        // searchbar.css('border-color', 'white');
        // searchbar.css('width', '0');
        // searchbar.css('box-shadow', '0 0 5px white');
        searchbar.removeClass('expanded');
        searchOpen = false;
    }
    searchbar.blur(collapseSearchbar);
    search.click(expandSearchbar);

    searchbar.keypress(function(e) {
        if (e.which == 13) {
            $('#searchform').submit();
            e.preventDefault();
        }
    });
});