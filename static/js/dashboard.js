
// THE CODE HERE IS FOR THE REGISTRATION PROCESS 
// THIS TOGGLES THE PROCESS BAR=====================

const site = document.querySelector('.site');
const reg_toggle_btn = document.querySelector('.reg-details-trigger');

reg_toggle_btn.addEventListener('click', () =>{
    site.classList.toggle('show-reg-details');
});

// /////////////////

// FAQ CODE ==================
// THIS CODE HERE IS RESPONSIBLE FOR THE FAQ OPEN AND CLOSING 
const toggles = document.getElementsByClassName('toggle');
const contentDiv = document.getElementsByClassName('steps-details');
const icons = document.getElementsByClassName('icon');

for(let i=0; i<toggles.length; i++){
      toggles[i].addEventListener('click', ()=>{
            // console.log(contentDiv[i]);
            if(parseInt(contentDiv[i].style.height) != contentDiv[i].scrollHeight){
                  contentDiv[i].style.height = contentDiv[i].scrollHeight + 'px';
                  toggles[i].style.color = '#5584ff';
                  icons[i].classList.remove('ri-arrow-down-s-fill');
                  icons[i].classList.add('ri-arrow-up-s-fill');
            } else {
                  contentDiv[i].style.height = '0px';
                  toggles[i].style.color = '#212121';
                  icons[i].classList.remove('ri-arrow-up-s-fill');
                  icons[i].classList.add('ri-arrow-down-s-fill');
            }
            for(let j=0; j<contentDiv.length; j++){
                  if(j!==i){
                        contentDiv[j].style.height = '0px';
                        toggles[j].style.color = '#212121';
                        icons[j].classList.remove('ri-arrow-up-s-fill');
                        icons[j].classList.add('ri-arrow-down-s-fill');

                  }
            }
      });
}