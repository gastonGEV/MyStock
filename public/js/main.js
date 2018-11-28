//init
const loader = document.getElementById('loader');
const bodyTable = document.getElementById('bodyTable');
const tableBox = document.getElementById('tableBox');

const setRows = (id) => {
  fetch(`/list/${id}`)
    .then(function (response) {
      loader.hidden = false;
      return response.json();
    })
    .then(function (products) {
      //console.log(products);
      products.forEach(product => {

        row = document.createElement('tr');
        row.id = `${product.id}`;

        th = document.createElement('th');
        th.scope = 'row';
        txt = document.createTextNode(`${product.id}`);
        th.appendChild(txt);
        row.appendChild(th);
  
        td = document.createElement('td');
        txt = document.createTextNode(`${product.barCode}`);
        td.appendChild(txt);
        row.appendChild(td);
  
        td = document.createElement('td');
        txt = document.createTextNode(`${product.type_id}`);
        td.appendChild(txt);
        row.appendChild(td);
  
        td = document.createElement('td');
        txt = document.createTextNode(`${product.name}`);
        td.appendChild(txt);
        row.appendChild(td);
  
        td = document.createElement('td');
        txt = document.createTextNode(`${product.cantMin}`);
        td.appendChild(txt);
        row.appendChild(td);
  
        td = document.createElement('td');
        txt = document.createTextNode(`${product.cost}`);
        td.appendChild(txt);
        row.appendChild(td);
  
        td = document.createElement('td');
        txt = document.createTextNode(`${product.cost}`);
        td.appendChild(txt);
        row.appendChild(td);
        
        bodyTable.appendChild(row);
        loader.hidden = true;
      });
    });
}

const scrolled = () => {
  //console.log('scrollTop:', bodyTable.scrollTop);
  //console.log('bodyTable scrollHeight:', bodyTable.scrollHeight - bodyTable.offsetHeight);
  if (bodyTable.scrollTop == bodyTable.scrollHeight - bodyTable.offsetHeight) {
    loader.hidden = false;
    setTimeout(function () { setRows(bodyTable.lastChild.id); }, 1000);
    //bodyTable.scrollTo({ top: 1, behavior: 'smooth', } );
  }
}

//init Table 10 rows
setRows(0);


