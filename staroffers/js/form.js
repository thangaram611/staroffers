function configurerest(city,rest)
{
    var chennai=['velachery','2','3','4'];
    var pune=['5','6','7','8'];
    var mumbai=['0','1','2','0'];
    var kolkata=['8','3','1','4'];

    switch(city.value)
    {
        case 'chennai':
            rest.options.length=0;
            for(i=0;i<chennai.length;i++)
                createOption(rest,chennai[i],chennai[i]);
            break;
        case 'pune':
            rest.options.length=0;
            for(i=0;i<pune.length;i++)
                createOption(rest,pune[i],pune[i]);
            break;
        case 'mumbai':
            rest.options.length=0;
            for(i=0;i<mumbai.length;i++)
                createOption(rest,mumbai[i],mumbai[i]);
            break;
        case 'kolkata':
            rest.options.length=0;
            for(i=0;i<kolkata.length;i++)
                createOption(rest,kolkata[i],kolkata[i]);
            break;
    }

}
function createOption(ddl,text,value)
{
    var opt=document.createElement('option');
    opt.value=value;
    opt.text=text;
    ddl.options.add(opt);
}
