var fail = document.querySelectorAll('.fail');
var rank = document.querySelectorAll('.rank');

fail.forEach(function(result)
{
    var fail_content = parseInt(result.textContent);

    if(fail_content != 0)
    {
        result.style.backgroundColor = 'red';
        result.style.color = 'white';
    }
});

rank.forEach(function(rank_contents)
{
    var rank_value = parseInt(rank_contents.textContent);

    if(rank_value === 1 || rank_value === 2 || rank_value === 3){
        rank_contents.style.backgroundColor = ' #6fff00fc';
        rank_contents.style.color = 'white';
    }
});