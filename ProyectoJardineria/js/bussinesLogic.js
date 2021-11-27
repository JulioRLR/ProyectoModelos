var citaList = [];

//obtiene los datos del formulario
function addCitaToSystem(pType, pDate, pName, pEmail, pTel)
{
     var newcita = {
          Type : pType,
          date : pDate,
          Name : pName,
          Email : pEmail,
          Tel : pTel
     };
     citaList.push(newcita);
     localStoreCitaList(citaList);
}

function getCitaList()
{
     var storedList = localStorage.getItem('localCitaList');
     if(storedList == null)
     {
          citaList = [];
     }
     else
     {
          citaList = JSON.parse(storedList);
     }
     return citaList;  
}

function localStoreCitaList(plist)
{
     localStorage.setItem('localCitaList', JSON.stringify(plist));
}