function toggleInput(e){
  e.preventDefault();
  var inputarea = this.parentNode.parentNode.childNodes[3];
  if(this.classList.contains("save")){
    this.classList.remove("save");
    this.innerHTML = "<i class='material-icons'>edit</i>";
    var text = inputarea.childNodes[0].value;
    inputarea.removeChild(inputarea.childNodes[0]);
    inputarea.append(text);
  }else{
    this.classList.add("save");
    this.innerHTML = "<i class='material-icons'>save</i>";
    var input = document.createElement("input");
    input.setAttribute('type','text');
    input.setAttribute('value',inputarea.textContent);
    inputarea.removeChild(inputarea.childNodes[0]);
    inputarea.append(input);
  }
}
window.addEventListener('load', ()=>{
  edit = document.getElementsByClassName('edit');
  for(let i=0; i<edit.length; i++){
    edit[i].addEventListener('click', toggleInput);
  }
})