const documentBtn = document.getElementById('docu-btn');
const otherDocu = document.getElementById('other-docu');
const dropIcon = document.getElementById('drop-down');

const link = document.querySelectorAll('.navigation a');

function Click(){
   console.log(link.onclick);
}



documentBtn.addEventListener('click', (e)=>{
   
   var height = '';

   if(otherDocu.style.height == height){
      documentBtn.style.color = '#e47c06';
      height = otherDocu.style.height = 'max-content';
      dropIcon.style.transform = ' rotate(180deg)';
   }
   else{
      documentBtn.style.color = 'black';
      height = otherDocu.style.height = '';
      dropIcon.style.transform = ' rotate(0deg)';
   }
});