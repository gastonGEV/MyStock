//init
const loader = document.getElementById('loader');
const bodyTable = document.getElementById('bodyTable');
const tableBox = document.getElementById('tableBox');
const btnUp = document.querySelector('.btn-up');

const setRows = async (id) => {
  loader.hidden = false;
  await fetch(`/list/${id}`)
    .then(function (response) {
      response.json().then(function (products) {
      products.forEach( product => {
        row = document.createElement('tr');
        row.id = `${product.id}`;
        for (const key in product) {
          if (key == 'id') {
            th = document.createElement('th');
            th.scope = 'row';
            txt = document.createTextNode(`${product[key]}`);
            th.appendChild(txt);
            row.appendChild(th);
          }
          else {
            td = document.createElement('td');
            txt = document.createTextNode(`${product[key]}`);
            td.appendChild(txt);
            row.appendChild(td);
          }
        }
        bodyTable.appendChild(row);
    });
    })
    .catch(function (error) {
      console.log('no hay mas elementos en la BD');
    });
  });
  loader.hidden = true;
}

const scrolled = async() => {
  // console.log('scrollTop:', bodyTable.scrollTop);
  // console.log('bodyTable scrollHeight:', bodyTable.scrollHeight - bodyTable.offsetHeight);
  
  if (bodyTable.scrollTop == 0) {
    btnUp.style.display = 'none';
  } else {
    btnUp.style.display = 'inline-block';
  }

  if (bodyTable.scrollTop == bodyTable.scrollHeight - bodyTable.offsetHeight) {
    await setRows(bodyTable.lastChild.id);
  }
}



const upScroll = () => {
  bodyTable.scrollTo({ top: 1, behavior: 'smooth', } );
}

//init Table 10 rows
setRows(0);


