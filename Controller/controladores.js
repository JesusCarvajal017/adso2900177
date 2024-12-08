

window.addEventListener('load', ()=>{
    let select_rol = document.querySelector('.select-rol'); 
    let select_proyecot = document.querySelector('.select-proyecto');

    select_rol.addEventListener('change', ()=>{
        // alert(select_rol.value);
        let value = parseInt(select_rol.value);
        if(value == 1){
            select_proyecot.style.display = 'none';
        }else{
            select_proyecot.style.display = 'block';
        }
    })
})