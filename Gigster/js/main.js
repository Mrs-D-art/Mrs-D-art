let navbar = document.querySelector('.header .flex .navbar');
document.querySelector('#menu-btn').onclick = () =>{
  navbar.classList.toggle('active');
}
window.onscroll = () =>{
  navbar.classList.remove('active');
}

document.querySelectorAll('input[type = "number"]').forEach(inputNumber => {
  inputNumber.oninput = () => {
    if(inputNumber.value.length > inputNumber.maxLength) inputNumber.value = inputNumber.value.slice(0, inputNumber.maxLength);
};
});

let dropdown_items = document.querySelectorAll('.job-filter form .dropdown-container .dropdown .lists .items');

dropdown_items.forEach(items => {
  items.onclick = () => {
    items_parent = items.parentElement.parentElement;
    let output = items_parent.querySelector('.output');
    output.value = items.innerText;
  }
});


let li = document.querySelectorAll(".faq-text li");
            for (var i = 0; i < li.length; i++) {
              li[i].addEventListener("click", (e)=>{
                let clickedLi;
                if(e.target.classList.contains("question-arrow")){
                  clickedLi = e.target.parentElement;
                }else{
                  clickedLi = e.target.parentElement.parentElement;
                }
               clickedLi.classList.toggle("showAnswer");
              });
            }




// Add the "active" class to the clicked icon
const progressIcons = document.querySelectorAll('.progress-icon');
progressIcons.forEach(icon => {
  icon.addEventListener('click', () => {
    progressIcons.forEach(icon => icon.classList.remove('active'));
    icon.classList.add('active');
  });
});
