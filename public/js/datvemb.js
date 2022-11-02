
let addTr = document.querySelector(".btn_add-input");
let delTr = document.querySelector(".btn_delete-input");
let tblPlaneTicket = document.querySelector(".tbl_plane-ticket");
let amountCustomer = Number(document.querySelector(".amount_cus").innerHTML);

function countTag() {
    let priceAdult = document.querySelector(".price_adult");
let priceChild = document.querySelector(".price_child");
let priceTotal = document.querySelector(".price_total");
let countAdult = document.querySelector(".count_adult").innerHTML;
let countChild = document.querySelector(".count_child").innerHTML;

    let a = [];
    let b = [];
    (document.querySelectorAll(".opt_age")).forEach(count => {
       let value = count.value;
        if(value == "nguoilon" ) {
            a.push(value);
        }
        if(value == "treem") {
            b.push(value);
        }
    });
    countAdult = a.length;
    countChild = b.length;
    document.querySelector(".count_adult").innerHTML = countAdult;
    document.querySelector(".count_child").innerHTML = countChild;
    priceAdult.innerHTML = 400000 * countAdult; // ? number
    priceChild.innerHTML = 320000 * countChild;
    priceTotal.innerHTML = Number(priceAdult.innerHTML) + Number(priceChild.innerHTML); 

}
addTr.addEventListener("click", () =>{
    let index = tblPlaneTicket.rows.length;
    amountCustomer++;
    document.querySelector(".amount_cus").innerHTML = amountCustomer;
    let row = tblPlaneTicket.insertRow(index); //Them row mới
    let td1 = document.createElement("div"); //tạo div mới 
        td1.innerHTML = `<div class="wrap_cus-amount">
                                <input type="text" placeholder="Ví dụ:Nguyễn Văn A" class="input plane_name-customer">
                        </div>`;
        let cell1 = row.insertCell(0);
        
        cell1.appendChild(td1);
    let td2 = document.createElement("div");
        td2.innerHTML = ` <select name="" id="" class="input opt_age" onchange="countTag()">
                                <option value="nguoilon">Người lớn</option>
                                <option value="treem">Trẻ em</option>
                        </select>`;
        let cell2 = row.insertCell(1);
        
        cell2.appendChild(td2);
    let td3 = document.createElement("div");
        td3.innerHTML = ` <select name="" id="" class="input opt_sex">
                            <option value="">Nam</option>
                            <option value="">Nữ</option>
                        </select>`;
        let cell3 = row.insertCell(2);
        
        cell3.appendChild(td3);
    let td4 = document.createElement("div");
        td4.innerHTML = `<button type="button" class="btn_delete-input" onclick="deleteInput(this)"><i class="fa-solid fa-circle-minus"></i></button>`;
        let cell4 = row.insertCell(3);
        
        cell4.appendChild(td4);
        countTag();
    });
    

function deleteInput(r){
    amountCustomer--;
    let i = r.parentNode.parentNode.parentNode.rowIndex;
    document.querySelector(".amount_cus").innerHTML = amountCustomer;
    tblPlaneTicket.deleteRow(i);
    countTag();
}


