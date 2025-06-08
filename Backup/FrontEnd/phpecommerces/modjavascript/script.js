let listProduct = document.querySelector(".productList");

// store data
// console.log(listProduct);
let productList = [];

const addDataToHTML = () => {
  listProduct.innerHTML = "";
  if (productList.length > 0) {
    productList.forEach((product) => {
      let newProduct = document.createElement("div");
      newProduct.dataset.id = product.id;
      newProduct.innerHTML = `
             <div class="product__item">
               <div
                class="product__item__pic set-bg"
                data-setbg="${product.image}"
              >
                <span class="label">New</span>
                <ul class="product__hover">
                  <li>
                    <a href="#"><img src="img/icon/heart.png" alt="" /></a>
                  </li>
                  <li>
                    <a href="#"
                      ><img src="img/icon/compare.png" alt="" />
                      <span>Compare</span></a
                    >
                  </li>
                  <li>
                    <a href="#"><img src="img/icon/search.png" alt="" /></a>
                  </li>
                </ul>
              </div>
              <div class="product__item__text">
                <h6>${product.name}</h6>
                <a href="#" class="add-cart">+ Add To Cart</a>
                <div class="rating">
                  <i class="fa fa-star-o"></i>
                  <i class="fa fa-star-o"></i>
                  <i class="fa fa-star-o"></i>
                  <i class="fa fa-star-o"></i>
                  <i class="fa fa-star-o"></i>
                </div>
                <h5>$${product.price}</h5>
                <div class="product__color__select">
                  <label for="pc-1">
                    <input type="radio" id="pc-1" />
                  </label>
                  <label class="active black" for="pc-2">
                    <input type="radio" id="pc-2" />
                  </label>
                  <label class="grey" for="pc-3">
                    <input type="radio" id="pc-3" />
                  </label>
                </div>
              </div> 
            </div>
        `;
      listProduct.appendChild(newProduct);
    });
  }
};

listProduct.addEventListener("click", (event) => {
  let clickPose = event.target;
  if (clickPose.classList.contains("add-cart")) {
    let productID = clickPose.classList.contains(".product_item");
    alert(productID);
    // alert(ID);
  }
});

const initApp = () => {
  fetch("modjavascript/data.json")
    .then((response) => response.json())
    .then((data) => {
      productList = data;
      addDataToHTML();
    });
};
initApp();
