document.addEventListener("DOMContentLoaded",function()
{
    var forms = document.getElementById("uploadForm");
    var radioButtons = document.querySelectorAll('input[type="radio"]');

    radioButtons.forEach(function(radiobutton)
    {
        radiobutton.addEventListener("change",function()
        {
            var values = document.querySelector('input[name="eg"]:checked').value;

            if(values === 'EG')
            {
                forms.action = 'eg_db_save.php';
            }else if(values === 'OTHERS')
            {
                forms.action = 'file_db_save.php';
            }
        });
    });
});