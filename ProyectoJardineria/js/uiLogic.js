//guarda los datos del formulario
document.querySelector('#btnShowCita').addEventListener('click',showCita);
drawCitaTable();

function showCita()
{
    var sType = document.querySelector('#txtType').value,
        sDate = document.querySelector('#txtDate').value,
        sName = document.querySelector('#txtName').value,
        sEmail = document.querySelector('#txtEmail').value,
        sTel = document.querySelector('#txtTel').value
    
    addCitaToSystem(sType,sDate,sName,sEmail,sTel),
    drawCitaTable();
}

function drawCitaTable()
{
    var list = getCitaList(),
        tbody = document.querySelector('#CitaTable tbody');

    tbody.innerHTML='';

    for(var i=0; i<list.length; i++)
    {
        var row= tbody.insertRow(i),
            TypeCell = row.insertCell(0),
            NameCell = row.insertCell(1),
            EmailCell = row.insertCell(2),
            TelCell = row.insertCell(3),
            Btn = row.insertCell(4);

            TypeCell.innerHTML = list[i].Type;
            NameCell.innerHTML = list[i].Name;
            EmailCell.innerHTML = list[i].Email;
            TelCell.innerHTML = list[i].Tel;

            // crear boton de eliminar
            var botonBorrar = document.createElement('a');
            botonBorrar.classList = 'btn btn-danger';
            botonBorrar.innerText = 'Delete';
            botonBorrar.value = list[i].Type;
             // añade el botón de borrar al tweet
            Btn.appendChild(botonBorrar);

            tbody.appendChild(row)
    }
}

