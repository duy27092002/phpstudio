var count=0;
var listItems=document.getElementsByClassName("list-group-item");
var productsUser=document.getElementById("productsUser");
productsUser.addEventListener("keyup",addList);
function addList(e){
    var task=document.getElementById("tasks");
    var checkKey=e.which||e.codeKey;
    if(checkKey==13){
        var list=document.getElementById("listDisplayed");
        var getProducts=document.getElementById("productsUser");
        if(getProducts.value.length==0){
            alert("Không được để trống");
            getProducts.className="border-danger form-control";
            getProducts.focus();
        }
        else{
            getProducts.className="border-light form-control";
            list.innerHTML+="<li class=\'list-group-item d-flex justify-content-between align-item-center\'"+
                "id=\'listItems"+count+"\'>"+getProducts.value+
                "<i class=\'fa fa-trash\' style=\'cursor=:pointer\'" +
                "id=\'listItems"+count+"\' onclick=\'deleted(this)\'></i>"+"</li>";
            getProducts.value="";
            ++count;
            if(count>1){
                task.innerHTML="<b>"+count+" "+"tasks"+"</b>";
            }
            else{
                task.innerHTML=count+" "+"task";
            }
        }
    }
}
function deleted(e){
    for(var i=0;i<listItems.length;i++){
        if(listItems[i].id==e.id){
            listItems[i].remove();
            count--;
        }
    }
    if(count<0){
        count=0;
    }
    var task=document.getElementById("tasks");
    task.innerHTML=count+" "+"task";
}
document.getElementById("btnClear").addEventListener("click",function(){
    var list=document.getElementById("listDisplayed");
    list.innerHTML="";
    count=0;
    var task=document.getElementById("tasks");
    task.innerHTML=count+" "+"task";
})