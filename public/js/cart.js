var sp = new Array();
KEY = 'cart'
if (localStorage.getItem(KEY)) { // kiểm tra local có tồn tại chưa Nếu có thì thêm sp vào
    storage = JSON.parse(localStorage.getItem(KEY));
} else {
    storage = [];

}

function addtocart(x) {
    var boxsp = x.parentElement.children;
    var id = boxsp[0].value;
    var tensp = boxsp[1].value;
    var hinh = boxsp[2].value;
    var giasp = boxsp[3].value;
    var sl = boxsp[4].value;
    if (checksp(id) >= 0) {
        capnhatsl(checksp(id));
    } else {
        storage.push({ id: id, tensp: tensp, hinh: hinh, giasp: giasp, sl: sl });
        localStorage.setItem(KEY, JSON.stringify(storage));
    }
    loadAll();
}

function addtocartTrangChitiet(x) {
    var tensp = x.parentElement.parentElement.parentElement.parentElement.parentElement.children[1].children[0].innerText;
    var id = x.parentElement.parentElement.parentElement.parentElement.parentElement.children[1].children[1].children[1].innerText;
    var hinh = x.parentElement.children[0].value;
    var giasp = x.parentElement.parentElement.parentElement.parentElement.parentElement.children[2].children[1].value;
    var sl = x.parentElement.parentElement.children[0].children[1].value;
    console.log(giasp)
    console.log(id, tensp, hinh, giasp, sl)
    if (checksp(id) >= 0) {
        capnhatsl(checksp(id));
    } else {
        storage.push({ id: id, tensp: tensp, hinh: hinh, giasp: giasp, sl: sl });
        localStorage.setItem(KEY, JSON.stringify(storage));
    }
    loadAll();
}
//kiểm tra sp đã tồn tại chưa và cho biến x == idsp đã truyền vào
function checksp(id) {
    //vị trí trong mảng bắt đầu = 0, nên gán = -1 để không xảy ra lỗi
    var vitri = -1;
    for (let i = 0; i < storage.length; i++) {
        //nếu id trong localStorage == biến x thì cho biến vị trí == vị trí sp trong mảng
        if (storage[i].id == id) {
            vitri = i;
            break;
        }
    }
    return vitri;
}
//cập nhật sl 
//biến vị trí đã lấy từ hàm checksp()
function capnhatsl(vitri) {
    for (let i = 0; i < storage.length; i++) {
        //nếu i == vị trí đã có từ hàm checksp() thì truy cập vào mảng con đó cập nhật sl lên +1
        if (i == vitri) {
            storage[i].sl++;
            localStorage.setItem(KEY, JSON.stringify(storage));
            // break;
        }
    }

}

function showcart() {
    var str = ``;
    var text = localStorage.getItem(KEY);
    var cart = JSON.parse(text);
    var thanhtien = 0;
    var tongtien = 0;
    if (cart != null) {
        for (let i = 0; i < cart.length; i++) {
            sp = cart[i];
            thanhtien = parseFloat(sp.sl) * parseFloat(sp.giasp);
            tongtien += thanhtien;
            str += `
        <tr class="mini-cart__item">
            <td class="mini-cart__left">
                    <img src="http://localhost/testnoobi/public/uploads/sanpham/${sp.hinh}" alt="">
            </td>
            <td class="mini-cart__right">
                <p class="mini-cart__title">	
                    <input type="hidden" value="${sp.id}">
                    <a class="mnc-title mnc-link" href="#" title="">${sp.tensp}</a>
                    
                </p>
                <div class="mini-cart__quantity">
                    <span class="mnc-value">${sp.sl}</span>
                </div>
                <div class="mini-cart__price"><span class="mnc-price">${new Intl.NumberFormat({ style: 'currency', currency: 'JPY' }).format(sp.giasp)}₫</span> </div>
                <div class="mini-cart__remove"><a onclick="removeMiniCart(this)"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1000 1000" enable-background="new 0 0 1000 1000" xml:space="preserve"> <g><path d="M500,442.7L79.3,22.6C63.4,6.7,37.7,6.7,21.9,22.5C6.1,38.3,6.1,64,22,79.9L442.6,500L22,920.1C6,936,6.1,961.6,21.9,977.5c15.8,15.8,41.6,15.8,57.4-0.1L500,557.3l420.7,420.1c16,15.9,41.6,15.9,57.4,0.1c15.8-15.8,15.8-41.5-0.1-57.4L557.4,500L978,79.9c16-15.9,15.9-41.5,0.1-57.4c-15.8-15.8-41.6-15.8-57.4,0.1L500,442.7L500,442.7z"></path></g> </svg></a></div>	
            </td>
        </tr>`;
        }
    } else {
        str += `<div class="cart-view-scroll">
        <table id="clone-item-cart" class="table-clone-cart">
            <tbody><tr class="mini-cart__item hidden">
                <td class="mini-cart__left"><a class="mnc-link" href="" title=""><img src="" alt=""></a></td>
                <td class="mini-cart__right">
                    <p class="mini-cart__title">	
                        <a class="mnc-title mnc-link" href="" title=""></a>
                        <span class="mnc-variant">	</span>	
                    </p>
                    <div class="mini-cart__quantity">
                        <span class="mnc-value"></span>
                    </div>
                    <div class="mini-cart__price"><span class="mnc-price"></span> </div>
                    <div class="mini-cart__remove"></div>	
                </td>
            </tr>   
        </tbody></table>
        <table id="cart-view">
            
            <tbody><tr class="mini-cart__empty">
                <td>			
                    <div class="svgico-mini-cart">
                        <svg width="81" height="70" viewBox="0 0 81 70"><g transform="translate(0 2)" stroke-width="4" fill="none" fill-rule="evenodd"><circle stroke-linecap="square" cx="34" cy="60" r="6"></circle><circle stroke-linecap="square" cx="67" cy="60" r="6"></circle><path d="M22.9360352 15h54.8070373l-4.3391876 30H30.3387146L19.6676025 0H.99560547"></path></g></svg>
                    </div>					
                    Hiện chưa có sản phẩm					
                </td>								
            </tr>
            
        </tbody></table>
    </div>`;
    }
    document.getElementById("total-view-cart").innerHTML = new Intl.NumberFormat({ style: 'currency', currency: 'JPY' }).format(tongtien) + 'đ';
    document.getElementById("cart-view").innerHTML = str;
    document.getElementById("count").innerHTML = cart.length;

}

function showcart_page() {
    var str = `<div class="list-pageform-cart">
                    <div class="cart-row" >`;
    if (storage.length == 0) {
        str += ``;
    } else {
        str += ` <p class="title-number-cart">
                    Bạn đang có <strong class="count-cart" id="count-page-gh">0 sản phẩm</strong> trong giỏ hàng
                </p>`;
    }
    var text = localStorage.getItem(KEY);
    var cart = JSON.parse(text);
    var thanhtien = 0;
    var tongtien = 0;
    if (cart != null) {
        for (let i = 0; i < cart.length; i++) {
            sp = cart[i];
            thanhtien = parseFloat(sp.sl) * parseFloat(sp.giasp);
            tongtien += thanhtien;
            str += `<div class="table-cart">
                        <div class="media-line-item line-item" data-variant-id="1100732376">
                            <div class="media-left">
                                <div class="item-img">
                                    <a href="http://localhost/testnoobi/sanpham/chitietsanpham/${sp.id}">
                                        <img src="http://localhost/testnoobi/public/uploads/sanpham/${sp.hinh}" alt="NOOBITA - ${sp.tensp}">
                                    </a>
                                </div>
                            </div>
                            <div class="media-right">
                                <div class="item-info">
                                    <a href="http://localhost/testnoobi/sanpham/chitietsanpham/${sp.id}">
                                        <input type="hidden" value="${sp.id}">
                                        <input type="hidden" value="${i}">
                                        <h3 class="item--title">${sp.tensp}</h3>
                                        <div class="item--variant">
                                        </div>
                                    </a>
                                </div>
                                <div class="item-qty">
                                    <div class="qty quantity-partent qty-click clearfix">
                                        <button type="button" onclick="qtyminus(this)" class="qtyminus qty-btn" fdprocessedid="zfy267">-</button>
                                        <input type="text" min="1" value="${sp.sl}" class="tc line-item-qty item-quantity" fdprocessedid="2dkxbv">
                                        <button type="button" onclick="qtyplus(this)" class="qtyplus qty-btn" fdprocessedid="4srjhr">+</button>
                                    </div>
                                </div>
                                <div class="item-price">
                                    <p>
                                        <input type="hidden" class="price--product" value="${sp.giasp}">
                                        <input type="hidden" value="${sp.sl}">
                                        <span>${new Intl.NumberFormat({ style: 'currency', currency: 'JPY' }).format(sp.giasp)}₫</span>
                                    </p>
                                </div>
                            </div>
                            <div class="item-total-price">
                                <div class="price">
                                    <span class="text">Thành tiền:</span>
                                    
                                    <span class="line-item-total">${new Intl.NumberFormat({ style: 'currency', currency: 'JPY' }).format(thanhtien)}đ</span>
                                </div>
                                <div class="remove">
                                    <a onclick="removeCart(this)" class="cart">
                                        <img src="//theme.hstatic.net/1000296747/1000891809/14/delete-cart.png?v=19">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>`;

        }
        str += `<div class="cart-row">
                    <div class="order-noted-block">	
                        <div class="container-pd15">				
                            <div class="checkout-buttons clearfix">
                                <label for="note" class="note-label">Ghi chú đơn hàng</label>
                                <textarea class="form-control" id="note" name="note" rows="5"></textarea>
                            </div>	
                            <button type="submit" id="checkout" class="btn-checkout button hidden " name="checkout" value="">Thanh toán</button>
                        </div> 
                    </div>
                </div>
            </div>
    </div>`;
    } else {
        str += `<div class="expanded-message text-center">Giỏ hàng của bạn đang trống</div>`;
        document.getElementById("btnCart-checkout").classList.add('disabled');

    }

    document.getElementById("total-cart").innerHTML = new Intl.NumberFormat({ style: 'currency', currency: 'JPY' }).format(tongtien) + 'đ';
    document.getElementById("bodyCart").innerHTML = str;
    document.getElementById("count-page-gh").innerHTML = cart.length + ` sản phẩm`;
}

function qtyplus(x) {
    let vt = x.parentElement.parentElement.parentElement.children[0].children[0].children[1].value;
    for (let i = 0; i < storage.length; i++) {
        if (i == vt) {
            storage[i].sl++;
            localStorage.setItem(KEY, JSON.stringify(storage));
            break;
        }
    }
    showcart_page();
}

function qtyminus(x) {
    let vt = x.parentElement.parentElement.parentElement.children[0].children[0].children[1].value;
    for (let i = 0; i < storage.length; i++) {
        if (i == vt) {
            storage[i].sl--;
            localStorage.setItem(KEY, JSON.stringify(storage));
            if (storage[i].sl == 0) {
                storage.splice(i, 1);
                localStorage.setItem(KEY, JSON.stringify(storage));
            }
            break;
        }
    }
    showcart_page();
}

function removeCart(x) {
    //xóa <tr>
    var tr = x.parentElement.parentElement.parentElement;
    var id = tr.children[1].children[0].children[0].children[0].value;
    // console.log(idMiniCart)
    tr.remove();
    // //Xóa mảng
    for (let i = 0; i < storage.length; i++) {
        if (storage[i].id == id) {
            storage.splice(i, 1);
            localStorage.setItem(KEY, JSON.stringify(storage));
        }
    }
    loadAll();

}

function removeMiniCart(x) {
    //xóa <tr>
    var tr = x.parentElement.parentElement.parentElement;
    var idMiniCart = x.parentElement.parentElement.children[0].children[0].value;
    tr.remove();
    // //Xóa mảng
    for (let i = 0; i < storage.length; i++) {
        if (storage[i].id == idMiniCart) {
            storage.splice(i, 1);
            localStorage.setItem(KEY, JSON.stringify(storage));
        }
    }
    loadAll();
}

function showcountsp() {
    document.getElementById("count").innerHTML = storage.length;
    if (storage.length == 0) {
        localStorage.removeItem(KEY);
    }

}

function loadAll() {
    showcountsp();
    showcart_page();
}