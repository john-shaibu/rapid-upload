const menuTrigger = document.querySelector('.menu-trigger');
const closeTrigger = document.querySelector('.close');
const giveClass = document.querySelector('.site');


menuTrigger.addEventListener('click', function(){
      giveClass.classList.toggle('showMenu');
});

closeTrigger.addEventListener('click',function(){
      giveClass.classList.remove('showMenu');
});


// FAQ CODE ==================
// THIS CODE HERE IS RESPONSIBLE FOR THE FAQ OPEN AND CLOSING 
const toggles = document.getElementsByClassName('toggle');
const contentDiv = document.getElementsByClassName('faq-answer');
const icons = document.getElementsByClassName('icon');

for(let i=0; i<toggles.length; i++){
      toggles[i].addEventListener('click', ()=>{
            // console.log(contentDiv[i]);
            if(parseInt(contentDiv[i].style.height) != contentDiv[i].scrollHeight){
                  contentDiv[i].style.height = contentDiv[i].scrollHeight + 'px';
                  toggles[i].style.color = '#5584ff';
                  icons[i].classList.remove('ri-add-fill');
                  icons[i].classList.add('ri-close-fill');
            } else {
                  contentDiv[i].style.height = '0px';
                  toggles[i].style.color = '#212121';
                  icons[i].classList.remove('ri-close-fill');
                  icons[i].classList.add('ri-add-fill');
            }
            for(let j=0; j<contentDiv.length; j++){
                  if(j!==i){
                        contentDiv[j].style.height = '0px';
                        toggles[j].style.color = '#212121';
                        icons[j].classList.remove('ri-close-fill');
                        icons[j].classList.add('ri-add-fill');

                  }
            }
      });
}




