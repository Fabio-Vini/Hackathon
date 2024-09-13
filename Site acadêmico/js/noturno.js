const modal = document.querySelector('.modal-container')
const tbody = document.querySelector('tbody')
const sNome2 = document.querySelector('#m-nome2')
const sTurma = document.querySelector('#m-turma2')
const sSala2 = document.querySelector('#m-sala2')
const btnSalvar = document.querySelector('#btnSalvar')

let itens
let id

function openModal(edit = false, index = 0) {
  modal.classList.add('active')

  modal.onclick = e => {
    if (e.target.className.indexOf('modal-container') !== -1) {
      modal.classList.remove('active')
    }
  }

  if (edit) {
    sNome2.value = itens[index].nome
    sTurma.value = itens[index].funcao
    sSala2.value = itens[index].salario
    id = index
  } else {
    sNome2.value = ''
    sTurma.value = ''
    sSala2.value = ''
  }
  
}

function editItem(index) {

  openModal(true, index)
}

function deleteItem(index) {
  itens.splice(index, 1)
  setItensBD()
  loadItens()
}

function insertItem(item, index) {
  let tr = document.createElement('tr')

  tr.innerHTML = `
    <td>${item.nome}</td>
    <td>${item.funcao}</td>
    <td> ${item.salario}</td>
    <td class="acao">
      <button onclick="editItem(${index})"><i class='bx bx-edit' ></i></button>
    </td>
    <td class="acao">
      <button onclick="deleteItem(${index})"><i class='bx bx-trash'></i></button>
    </td>
  `
  tbody.appendChild(tr)
}

btnSalvar.onclick = e => {
  
  if (sNome2.value == '' || sTurma.value == '' || sSala2.value == '') {
    return
  }

  e.preventDefault();

  if (id !== undefined) {
    itens[id].nome = sNome2.value
    itens[id].funcao = sTurma.value
    itens[id].salario = sSala2.value
  } else {
    itens.push({'nome': sNome2.value, 'funcao': sTurma.value, 'salario': sSala2.value})
  }

  setItensBD()

  modal.classList.remove('active')
  loadItens()
  id = undefined
}

function loadItens() {
  itens = getItensBD()
  tbody.innerHTML = ''
  itens.forEach((item, index) => {
    insertItem(item, index)
  })

}

const getItensBD = () => JSON.parse(localStorage.getItem('dbfunc')) ?? []
const setItensBD = () => localStorage.setItem('dbfunc', JSON.stringify(itens))

loadItens()
