console.log(document.querySelectorAll('[data-tab]'));
const tabHeaders = document.querySelectorAll('[data-tab]');

tabHeaders.forEach(function(item){
    item.addEventListener('click',function(){
        const contentBox = document.querySelector('#' + this.dataset.tab);
        contentBox.classList.toggle('hidden');
    })
})