
//Buttons
const personalBtn = document.getElementById('personal-btn');
const contactBtn = document.getElementById('contact-btn');
const emergencyBtn = document.getElementById('emergency-btn');

// Containers
const personalContainer = document.getElementById('personal-container');
const contactContainer = document.getElementById('contact-container');
const emergencyContainer = document.getElementById('emergency-container');


// CLICK EVENTS

personalBtn.addEventListener('click', (e)=>{
   personalContainer.style.display = 'flex';
   contactContainer.style.display = 'none'
   emergencyContainer.style.display = 'none'

   personalBtn.style.color = '#002347';
   personalBtn.style.fontWeight = '600';
   personalBtn.style.textDecoration = 'underline';

   contactBtn.style.color = 'rgb(167, 167, 167)';
   contactBtn.style.fontWeight = '500';
   contactBtn.style.textDecoration = 'none';

   emergencyBtn.style.color = 'rgb(167, 167, 167)';
   emergencyBtn.style.fontWeight = '500';
   emergencyBtn.style.textDecoration = 'none';
});

contactBtn.addEventListener('click', (e)=>{
   personalContainer.style.display = 'none';
   contactContainer.style.display = 'flex'
   emergencyContainer.style.display = 'none'

   personalBtn.style.color = 'rgb(167, 167, 167)';
   personalBtn.style.fontWeight = '500';
   personalBtn.style.textDecoration = 'none';

   contactBtn.style.color = '#002347';
   contactBtn.style.fontWeight = '600';
   contactBtn.style.textDecoration = 'underline';

   emergencyBtn.style.color = 'rgb(167, 167, 167)';
   emergencyBtn.style.fontWeight = '500';
   emergencyBtn.style.textDecoration = 'none';

});


emergencyBtn.addEventListener('click', (e)=>{
   personalContainer.style.display = 'none';
   contactContainer.style.display = 'none'
   emergencyContainer.style.display = 'flex'

   personalBtn.style.color = 'rgb(167, 167, 167)';
   personalBtn.style.fontWeight = '500';
   personalBtn.style.textDecoration = 'none';

   contactBtn.style.color = 'rgb(167, 167, 167)';
   contactBtn.style.fontWeight = '500';
   contactBtn.style.textDecoration = 'none';

   emergencyBtn.style.color = '#002347';
   emergencyBtn.style.fontWeight = '600';
   emergencyBtn.style.textDecoration = 'underline';

});

