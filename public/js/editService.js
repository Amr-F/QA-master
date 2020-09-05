$(function () 
{  
    var cashElem = $(" :input[name='cash']");
    var arElem = $(" :input[name='credit']");
    var saleElem = $(" :input[name='service_price']");

    cashElem.on('keyup',function () 
    {  
        change($(this),saleElem,arElem);   
    });
    arElem.on('keyup',function () 
    {  
        change($(this),saleElem,cashElem);   
    });
    saleElem.on('keyup',function () 
    {  
        change(cashElem,$(this),arElem);   
    });


})

function change(elem,cash,changedElem)
{
    var value = cash.val() - elem.val();
    changedElem.val(value);
}
