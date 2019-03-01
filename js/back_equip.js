window.addEventListener('load',init);


function init(){
    let addItem = document.getElementById('addItem');
    addItem.addEventListener('click',eqmShowEdit);

    let btnEqm =document.querySelectorAll('.btn_eqm');
    let btnEqmL = btnEqm.length;
    for(let i =0 ; i<btnEqmL;i++){
        btnEqm[i].addEventListener('click',eqmDelete);
    }
    
    let btnEqmList =document.querySelectorAll('.btn_eqmList');
    let btnEqmListL = btnEqmList.length;
    for(let i =0 ; i<btnEqmListL;i++){
        btnEqmList[i].addEventListener('click',eqmLdelete);
    }
  
}

function eqmShowEdit(){
    let addItem = document.getElementById('addItem');
    let eqmTab = document.getElementById('eqmTab');
    let eqmLTab = document.getElementById('eqmLTab');
    if(eqmTab.classList.contains('active')){
        addItem.href = "back_equipEdit.php?eqmName=";
    }else 
    if(eqmLTab.classList.contains('active')){
        addItem.href = "back_equipListEdit.php?";
        // addItem.href = "back_equipListEdit.php?pdkNo=&pdkName=";
        
    }
}

//刪除裝備
function eqmDelete(e){
    if(confirm("確認刪除裝備？")){
        let eqmD= e.currentTarget.childNodes[3];
        let eqmDV = eqmD.value;
        location.replace(eqmDV);
    }
}

//刪除裝備清單
function eqmLdelete(e2){
    if(confirm("確認刪除裝備清單？")){
        // let eqmLD= document.getElementById('eqmLD').value;
        let eqmLD= e2.currentTarget.childNodes[3];
        let eqmLDV = eqmLD.value;
        location.replace(eqmLDV);
    }
}