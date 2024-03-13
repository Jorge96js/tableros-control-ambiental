document.addEventListener('DOMContentLoaded', ()=>{
    formSubmit()
    menu()
    hidde_row()
})

const form = document.querySelector('form');
const tabla = document.querySelector('table');
let rows = document.querySelectorAll('tbody tr');

function buscarFila(){
    rows.forEach(row =>{

        console.log(row.cells[0].textContent)
        let rowContent = row.cells[0].textContent
        let reclamo = document.getElementById('reclamo').value.toString()
        
        if(rowContent === reclamo){

            row.classList.add('seleccionado')
        }else{
            console.log('No hay reclamos')
        }
    })
}

function formSubmit(){
    form.addEventListener('submit',function(e){
        rows.forEach(row => {
            row.classList.remove('seleccionado');
        });
        e.preventDefault()
        buscarFila()
    })
    
}

function menu(){
    document.getElementById('menu').addEventListener('click',()=>{
        document.querySelector('.navegacion').classList.toggle('show')
    })
}

function hidde_row() {
    let btn = document.getElementById('hidde_btn');

    btn.addEventListener('click', (e) => {
        e.target.closest('tr').classList.toggle('hidde_row');
        console.log(btn.children[0]);
        if(btn.children[0].classList.contains('fa-eye')){
            btn.innerHTML = `
            <i class="fa-solid fa-eye-slash"></i>
            `
        }else{
            btn.innerHTML = `
            <i class="fa-solid fa-eye"></i>
            ` 
        }
    });
}
